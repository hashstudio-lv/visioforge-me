<?php

namespace App\Livewire;

use App\Enums\ProductCategory;
use App\Enums\ProductStyle;
use App\Enums\ProductType;
use App\Enums\Service;
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
    public $order;
    public $template;

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

        $this->validate();

        $prompt = $agreementGenerationService->generateAgreementPromptUsingOpenAI($this->template . ' ' . $this->prompt);
        $this->agreement = $agreementGenerationService->generateAgreementFromPrompt($prompt);

        $data = [
            'price' => 10.00,
            'prompt' => $prompt,
            'type' => ProductType::AGREEMENT
        ];

        foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties) {
            $data[$localeCode] = [
                'title' => $this->prompt,
                'description' => $this->agreement
            ];
        }

        $product = Product::create($data);

        $this->order = Order::create([
            'product_id' => $product->id,
            'user_id' => auth()->id(),
            'price' => $product->price,
        ]);

        $timestamp = now()->timestamp;
        $orderDirectory = 'orders/' . $this->order->id . '/';
        $zipFileName = $orderDirectory . $timestamp . '.zip';
        $zipPath = storage_path('app/' . $timestamp . '.zip'); // Temporary local path

        $product->update(['path' => $timestamp . '.zip']);

        $zip = new ZipArchive;

        if ($zip->open($zipPath, ZipArchive::CREATE) === TRUE) {
            // Add the prompt file
            $zip->addFromString($timestamp . '-prompt.txt', $prompt);

            // Add the agreement file
            $zip->addFromString($timestamp . '-agreement.txt', $this->agreement);

            // Close the ZIP file
            $zip->close();
        }

        Storage::disk('public')->put($zipFileName, file_get_contents($zipPath));

        $zipFileUrl = Storage::disk('public')->url($zipFileName);

        unlink($zipPath);

        $this->dispatch('fileDownload', $zipFileUrl);
    }

    public function render()
    {
        return view('livewire.agreement-generate');
    }
}
