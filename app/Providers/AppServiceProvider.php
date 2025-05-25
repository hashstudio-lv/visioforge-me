<?php

namespace App\Providers;

use App\Repositories\ProductRepository;
use App\Services\ImageGenerationService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(ImageGenerationService::class, function ($app) {
            return new ImageGenerationService();
        });

        $this->app->singleton(ProductRepository::class, function ($app) {
            return new ProductRepository();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
