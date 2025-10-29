<?php

namespace App\Jobs;

use App\Enums\ProductCategory;
use App\Enums\ProductStyle;
use App\Enums\ProductType;
use App\Models\Product;
use App\Services\ImageGenerationService;
use App\Services\ImageService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class GenerateProduct implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(
        private ProductCategory $category,
        private ProductStyle $style
    ) {}

    /**
     * Execute the job.
     */
    public function handle(ImageGenerationService $imageGenerationService, ImageService $imageService): void
    {
        $prompt = $imageGenerationService->generateRandomPromptUsingOpenAI($this->category, $this->style);
        $prompt = json_decode($prompt, true);
        $result = $imageGenerationService->generateImageFromPrompt($prompt['prompt']);

        $data = [
            'price' => mt_rand(1.5, 10),
            'prompt' => $prompt['prompt'],
            'category' => $this->category,
            'style' => $this->style,
            'type' => ProductType::IMAGE,
        ];

        foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties) {
            $data[$localeCode] = [
                'title' => $prompt['title'],
                'description' => $prompt['description'],
            ];
        }

        $product = Product::create($data);

        // Download image and use image service's name generation
        $imagePath = $imageService->downloadImage($result['url']);

        // Generate thumbnail (without saving thumbnail path to database)
        $imageService->generateThumbnail($imagePath);

        // Update product with the image path only
        $product->path = $imagePath;
        $product->save();
    }
}
