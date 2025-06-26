<?php

namespace App\Livewire;

use App\Enums\ProductCategory;
use App\Enums\ProductStyle;
use App\Models\Order;
use App\Models\Product;
use App\Services\AgreementGenerationService;
use App\Services\EmailGenerationService;
use App\Services\ImageGenerationService;
use App\Services\ImageService;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
use Livewire\Component;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use ZipArchive;


class AgreementGenerate extends Component
{
    public $balance;
    public $prompt;
    public $agreement;

    protected $rules = [
        'prompt' => 'required',
    ];

    public function mount()
    {
        $this->prompt = request()->get('prompt');
        $this->balance = auth()->user()->balance;
    }

    public function download(AgreementGenerationService $agreementGenerationService)
    {
        $this->balance -= 1;

        // Validate the input (this will apply the rules set in the $rules property)
        $this->validate();

        $prompt = $agreementGenerationService->generateAgreementPromptUsingOpenAI($this->prompt);
        $this->agreement = $agreementGenerationService->generateAgreementFromPrompt($prompt);

        $data = [
            'price' => 1.00,
            'prompt' => $prompt,
            'type' => 'agreement'
        ];

        foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties) {
            $data[$localeCode] = [
                'title' => $this->prompt,
                'description' => $this->agreement
            ];
        }

        $product = Product::create($data);

        $order = Order::create([
            'product_id' => $product->id,
            'user_id' => auth()->id(),
            'price' => $product->price,
        ]);

        $timestamp = now()->timestamp;
        $orderDirectory = 'orders/' . $order->id . '/';
        $zipFileName = $orderDirectory . $timestamp . '-files.zip';
        $zipPath = storage_path('app/' . $timestamp . '-files.zip'); // Temporary local path

// Create a new ZIP archive
        $zip = new ZipArchive;
        if ($zip->open($zipPath, ZipArchive::CREATE) === TRUE) {
            // Add the prompt file
            $zip->addFromString($timestamp . '-prompt.txt', $prompt);

            // Add the agreement file
            $zip->addFromString($timestamp . '-agreement.txt', $this->agreement);

            // Close the ZIP file
            $zip->close();
        }

// Upload ZIP file to S3
        Storage::disk('s3')->put($zipFileName, file_get_contents($zipPath));

// Generate public URL for the ZIP file
        $zipFileUrl = Storage::disk('s3')->url($zipFileName);

// Delete the temporary ZIP file from local storage
        unlink($zipPath);

// Dispatch event for download link
        $this->dispatch('fileDownload', $zipFileUrl);

    }

    public function render()
    {
        return view('livewire.agreement-generate');
    }
}
