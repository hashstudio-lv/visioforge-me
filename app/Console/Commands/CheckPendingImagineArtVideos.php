<?php

namespace App\Console\Commands;

use App\Enums\ProductType;
use App\Models\Product;
use Illuminate\Console\Command;

class CheckPendingImagineArtVideos extends Command
{
    protected $signature = 'imagine:check-pending-videos';
    protected $description = 'Check all products without video URL and update their status via ImagineArt API';

    public function handle()
    {
        $pendingProducts = Product::where('type', ProductType::VIDEO_BY_USER)
            ->whereNull('external_url')
            ->whereNotNull('external_id')
            ->get();

        if ($pendingProducts->isEmpty()) {
            $this->info('No pending videos found.');
            return;
        }

        foreach ($pendingProducts as $product) {
            CheckImagineArtVideoStatus::dispatch($product);
            $this->info("Dispatched status check for product ID {$product->id}");
        }

        $this->info('All pending products dispatched for status check.');
    }
}
