<?php

namespace App\Livewire;

use App\Enums\ProductType;
use App\Models\Order;
use App\Models\Product;
use App\Services\ImagineArtService;
use Livewire\Component;
use Livewire\WithFileUploads;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class VideoFromImageGenerate extends Component
{
    use WithFileUploads;

    public $prompt;

    public $file;

    public $balance;

    public ?string $externalId = null;

    public ?array $videoStatus = null;

    public bool $isVideoReady = false;

    protected $rules = [
        'prompt' => 'required|string|min:5',
        'file' => 'required|file|mimes:jpg,jpeg,png|max:10240', // max 10MB
    ];

    public function mount()
    {
        $this->balance = auth()->user()->balance;
    }

    public function submit(ImagineArtService $imagineArtService)
    {
        $this->validate();

        $this->balance -= 1;

        $data = [
            'price' => 1.00,
            'prompt' => $this->prompt,
            'type' => ProductType::VIDEO_FROM_IMAGE,
        ];

        foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties) {
            $data[$localeCode] = ['title' => 'Image to Video generation'];
        }

        $product = Product::create($data);

        Order::create([
            'product_id' => $product->id,
            'user_id' => auth()->id(),
            'price' => $product->price,
        ]);

        $this->externalId = $imagineArtService->generateVideoFromImage($this->prompt, $this->file);

        $product->update(['external_id' => $this->externalId]);
    }

    public function checkVideoStatus(ImagineArtService $imagineArtService)
    {
        if (! $this->externalId || $this->isVideoReady) {
            return;
        }

        $response = $imagineArtService->getVideoStatus($this->externalId);

        $this->videoStatus = $response;

        if (
            isset($response['status']) &&
            $response['status'] === 'success' &&
            ($response['video']['code'] ?? null) === 2
        ) {
            $this->isVideoReady = true;

            Product::where('external_id', $this->externalId)->update([
                'external_url' => $response['video']['url']['generation'][0] ?? null,
                'external_status' => 2,
            ]);
        }
    }

    public function render()
    {
        return view('livewire.video-from-image-generate');
    }
}
