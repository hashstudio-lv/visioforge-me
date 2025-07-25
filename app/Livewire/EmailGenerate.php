<?php

namespace App\Livewire;

use App\Models\Order;
use App\Models\Product;
use App\Services\EmailGenerationService;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use ZipArchive;

class EmailGenerate extends Component
{
    public $balance;
    public $prompt;
    public $email;
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

    public function download(EmailGenerationService $emailGenerationService)
    {
        $this->balance -= 1;

        // Validate the input (this will apply the rules set in the $rules property)
        $this->validate();

        $prompt = $emailGenerationService->generatePromptUsingOpenAI($this->template . ' ' . $this->prompt);
        $this->email = $emailGenerationService->generateEmailFromPrompt($prompt);

        $data = [
            'price' => 10.00,
            'prompt' => $prompt,
            'type' => 'email'
        ];

        foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties) {
            $data[$localeCode] = [
                'title' => $this->prompt,
                'description' => $this->email
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
        $zipPath = storage_path('app/' . $timestamp . '.zip');

        $product->update(['path' => $timestamp . '.zip']);

        $zip = new ZipArchive;

        if ($zip->open($zipPath, ZipArchive::CREATE) === true) {
            // Add the prompt text as a file inside the ZIP
            $zip->addFromString('prompt.txt', $prompt);

            // Add the email text as a file inside the ZIP
            $zip->addFromString('email.txt', $this->email);

            // Close the ZIP archive
            $zip->close();
        }

        // Upload ZIP file to S3
        Storage::disk('public')->put($zipFileName, file_get_contents($zipPath));

        // Generate public URL for the ZIP file
        $zipFileUrl = Storage::disk('public')->url($zipFileName);

        // Delete temporary ZIP file from local storage
        unlink($zipPath);

        // Dispatch event for download link
        $this->dispatch('fileDownload', $zipFileUrl);
    }

    public function render()
    {
        return view('livewire.email-generate');
    }
}
