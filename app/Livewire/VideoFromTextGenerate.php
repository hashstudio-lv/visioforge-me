<?php

namespace App\Livewire;

use App\Enums\ProductType;
use App\Models\Order;
use App\Models\Product;
use App\Services\ImagineArtService;
use Livewire\Component;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class VideoFromTextGenerate extends Component
{
    public $prompt;

    public $balance;

    public ?string $externalId = null;

    public ?array $videoStatus = null;

    public bool $isVideoReady = false;

    public bool $isVideoInProgress = false;

    //    protected $rules = [];

    public function mount()
    {
        $this->balance = auth()->user()->balance;
    }

    public function submit(ImagineArtService $imagineArtService)
    {
        $this->balance -= 1;

        $data = [
            'price' => 1.00,
            'prompt' => $this->prompt,
            'type' => ProductType::VIDEO_FROM_TEXT,
        ];

        foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties) {
            $data[$localeCode] = [
                'title' => 'Text to Video generation',
            ];
        }

        $product = Product::create($data);

        $order = Order::create([
            'product_id' => $product->id,
            'user_id' => auth()->id(),
            'price' => $product->price,
        ]);

        $id = $imagineArtService->generateVideoFromText($this->prompt);

        $product->update(['external_id' => $id]);

        $this->externalId = $imagineArtService->generateVideoFromText($this->prompt);

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
        return view('livewire.video-from-text-generate');
    }
}
