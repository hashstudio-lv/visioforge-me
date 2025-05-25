<?php

namespace App\Livewire;

use App\Enums\ProductCategory;
use App\Enums\ProductStyle;
use App\Models\Order;
use App\Models\Product;
use App\Services\ImageGenerationService;
use App\Services\ImageService;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
use Livewire\Component;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use ZipArchive;


class ImageGenerate extends Component
{
    public $title;
    public $description;
    public $format;
    public $size;
    public $prompt;
    public $category;
    public $style;
    public $balance;

    protected $rules = [
        'format' => 'required',
        'size' => 'required'
    ];

    public function mount()
    {
        $this->format = 'webp';
        $this->size = '1024x1024';
        $this->category = ProductCategory::PEOPLE_PORTRAITS;
        $this->style = ProductStyle::PHOTO_REALISM;
        $this->balance = auth()->user()->balance;
    }

    public function download(ImageService $imageService, ImageGenerationService $imageGenerationService)
    {
        $this->balance -= 1;

        // Validate the input (this will apply the rules set in the $rules property)
        $this->validate();

        // Validate format and size from ImageService
        if (!$imageService->isValidFormat($this->format)) {
            $this->addError('format', 'Invalid format provided. Available formats: '.implode(', ', $imageService::AVAILABLE_FORMATS));
            return;
        }

        if (!$imageService->isValidSize($this->size)) {
            $this->addError('size', 'Invalid size provided. Available sizes: '.implode(', ', array_keys($imageService::AVAILABLE_SIZES)));
            return;
        }

        $data = [
            'price' => 1.00,
            'prompt' => $this->prompt,
            'category' => $this->category,
            'style' => $this->style
        ];

        foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties) {
            $data[$localeCode] = [
                'title' => $this->title,
                'description' => $this->description,
            ];
        }

        $product = Product::create($data);

        $order = Order::create([
            'product_id' => $product->id,
            'user_id' => auth()->id(),
            'price' => $product->price,
        ]);

        // Step 1: Generate a new image using the prompt
        $result = $imageGenerationService->generateImageFromPrompt($this->prompt);

        $imagePath = $imageService->downloadImage($result['url']);
        $imageService->generateThumbnail($imagePath);
        $product->image_path = $imagePath;
        $product->save();

        $timestamp = now()->timestamp;
        $orderDirectory = 'orders/' . $order->id . '/';
        $zipFileName = $orderDirectory . $timestamp . '.zip';
        $zipPath = storage_path('app/' . $timestamp . '.zip'); // Temporary local ZIP file

// Create prompt content in memory
        $promptContent = $this->prompt;

// Retrieve image content from S3
        $imageContents = Storage::disk('s3')->get($order->product->image_path);

// Create ZIP archive
        $zip = new ZipArchive;
        if ($zip->open($zipPath, ZipArchive::CREATE) === true) {
            // Add the prompt text file to ZIP
            $zip->addFromString('prompt.txt', $promptContent);

            // Add the image file from S3 to ZIP
            $zip->addFromString('image.' . $this->format, $imageContents);

            // Close ZIP archive
            $zip->close();
        }

// Upload ZIP file to S3
        Storage::disk('s3')->put($zipFileName, file_get_contents($zipPath));

// Generate public URL for the ZIP file
        $zipFileUrl = Storage::disk('s3')->url($zipFileName);

// Delete temporary ZIP file from local storage
        unlink($zipPath);

// Dispatch event with download link
        $this->dispatch('fileDownload', $zipFileUrl);
    }

    public function render()
    {
        return view('livewire.image-generate');
    }
}


