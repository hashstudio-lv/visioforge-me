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

class ImageUpscale extends Component
{
    use WithFileUploads;

    public $file;

    public $balance;

    public $result;

    protected $rules = [
        'file' => 'required|file|mimes:jpg,jpeg,png|max:10240',
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
            'prompt' => '',
            'type' => ProductType::IMAGE_UPSCALE,
        ];

        foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties) {
            $data[$localeCode] = ['title' => 'Image to Video generation'];
        }

        $product = Product::create($data);

        $order = Order::create([
            'product_id' => $product->id,
            'user_id' => auth()->id(),
            'price' => $product->price,
        ]);

        $response = $imagineArtService->imageUpscale($this->file);

        $filename = Str::orderedUuid().'.'.$response['extension'];
        $path = 'orders/'.$order->id.'/'.$filename;

        Storage::disk('public')->put('orders/'.$order->id.'/'.$filename, $response['body']);

        $product->update([
            'path' => $filename,
        ]);

        $this->result = $order->url;
    }

    public function render()
    {
        return view('livewire.image-upscale');
    }
}
