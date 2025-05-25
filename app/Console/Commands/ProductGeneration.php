<?php

namespace App\Console\Commands;

use App\Enums\ProductCategory;
use App\Enums\ProductStyle;
use App\Jobs\GenerateProduct;
use App\Models\Product;
use Illuminate\Console\Command;
use App\Services\ImageGenerationService;
use Illuminate\Support\Facades\Storage;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ProductGeneration extends Command
{
    protected $signature = 'generate:product';
    protected $description = 'Generate a product with random image using OpenAI';

    protected ImageGenerationService $imageGenerationService;

    public function __construct(ImageGenerationService $imageGenerationService)
    {
        parent::__construct();

        $this->imageGenerationService = $imageGenerationService;
    }

    public function handle()
    {
        // Step 1: Get the ProductCategory
        $categories = $this->choice(
            'Select a product category',
            array_map(fn($category) => $category->value, ProductCategory::cases()), // Get all possible category options
            null, // Default choice (optional)
            null, // Maximum number of attempts
            true, // Do not display multiple options per line
        );

        // Step 2: Get the ProductStyle
        $styles = $this->choice(
            'Select a product style',
            array_map(fn($category) => $category->value, ProductStyle::cases()), // Get all possible style options
            null,
            null,
            true,
        );

        $numberOfProducts = $this->ask('How many products would you like to create for each category and style?');

        foreach ($categories as $category) {
            foreach($styles as $style) {
                for ($i = 0; $i < $numberOfProducts; $i++) {
                    GenerateProduct::dispatch(ProductCategory::from($category), ProductStyle::from($style));
                }
            }
        }

        return 0;
    }
}
