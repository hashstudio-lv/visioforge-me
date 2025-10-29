<?php

namespace App\Livewire;

use App\Enums\ProductType;
use App\Models\Order;
use App\Models\Product;
use App\Services\ImagineArtService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ImagineTextToPng extends Component
{
    use WithFileUploads;

    public $prompt;

    public $balance;

    public $result;

    protected $rules = [
        'prompt' => 'required|string|min:5',
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
            'type' => ProductType::TEXT_TO_IMAGE,
        ];

        foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties) {
            $data[$localeCode] = ['title' => __('Creative')];
        }

        $product = Product::create($data);

        $order = Order::create([
            'product_id' => $product->id,
            'user_id' => auth()->id(),
            'price' => $product->price,
        ]);

        $response = $imagineArtService->generateImageFromPng($this->prompt);

        $filename = Str::orderedUuid().'.'.$response['extension'];

        Storage::disk('public')->put('orders/'.$order->id.'/'.$filename, $response['body']);

        $product->update([
            'path' => $filename,
        ]);

        $this->result = $order->url;
    }

    public function render()
    {
        return view('livewire.imagine-text-to-png');
    }
}
