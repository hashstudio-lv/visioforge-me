<?php

namespace App\Livewire;

use App\Models\Order;
use App\Services\ImageGenerationService;
use App\Services\ImageService;
use Intervention\Image\Laravel\Facades\Image;
use Livewire\Component;
use ZipArchive;

class OrderDownload extends Component
{
    public $order;
    public $format;
    public $size;
    public $prompt;

    protected $rules = [
        'format' => 'required',
        'size' => 'required'
    ];

    public function mount($order)
    {
        $this->order = $order;

        $this->format = 'webp';
        $this->size = '1024x1024';
        $this->prompt = $order->product->prompt;
    }

    public function download(ImageService $imageService, ImageGenerationService $imageGenerationService)
    {
        // Validate the input (this will apply the rules set in the $rules property)
        $this->validate();

        // Check if the authenticated user is authorized to download the order's product
        if ($this->order->user->id != auth()->id()) {
            abort(401);
        }

        // Validate format and size from ImageService
        if (!$imageService->isValidFormat($this->format)) {
            $this->addError('format', 'Invalid format provided. Available formats: '.implode(', ', $imageService::AVAILABLE_FORMATS));
            return;
        }

        if (!$imageService->isValidSize($this->size)) {
            $this->addError('size', 'Invalid size provided. Available sizes: '.implode(', ', array_keys($imageService::AVAILABLE_SIZES)));
            return;
        }

        $this->order->count -= 1;
        $this->order->save();

        // Step 1: Generate a new image using the prompt
        $result = $imageGenerationService->generateImageFromPrompt($this->prompt);

        // Step 2: Download the generated image using the provided URL
        $imagePath = $imageService->downloadImage($result['url'], 'orders/' . $this->order->id);

        // Step 3: Resize and reformat the image
        $image = Image::read(storage_path('app/public/'.$imagePath));
        $resizedImagePath = storage_path('app/public/orders/' . $this->order->id . '/image_'.$this->order->id.'.'.$this->format);
        $image->save($resizedImagePath, $this->format);

        // Step 4: Generate the prompt.txt file
        $txtFilePath = storage_path('app/public/prompt_'.$this->order->id.'.txt');
        file_put_contents($txtFilePath, $this->prompt);

        // Step 5: Create a ZIP file containing both the resized image and the prompt.txt file
        $zipFilePath = storage_path('app/public/orders/' . $this->order->id . '/' . now()->timestamp . '.zip');
        $zip = new ZipArchive;

        if ($zip->open($zipFilePath, ZipArchive::CREATE) === true) {
            $zip->addFile($txtFilePath, 'prompt.txt');
            $zip->addFile($resizedImagePath, 'image.'.$this->format);
            $zip->close();
        }

        // Clean up temporary files after zipping
        unlink($txtFilePath);
        unlink($resizedImagePath);

        // Step 6: Dispatch an event for the download link
        $this->dispatch('fileDownload', asset('storage/orders/' . $this->order->id . '/' . now()->timestamp . '.zip'));
    }

    public function render()
    {
        return view('livewire.order-download');
    }
}
