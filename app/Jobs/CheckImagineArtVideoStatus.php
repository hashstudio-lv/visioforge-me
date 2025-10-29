<?php

namespace App\Jobs;

use App\Events\VideoReady;
use App\Models\Product;
use App\Services\ImagineArtService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CheckImagineArtVideoStatus implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public Product $product;

    public int $tries = 20; // Optional: max attempts before giving up

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function handle(ImagineArtService $imagineArtService): void
    {
        $status = $imagineArtService->getVideoStatus($this->product->external_id);

        if (isset($status['status']) && $status['status'] === 'success' && ($status['video']['code'] ?? null) === 2) {
            // Save the video URL or data
            $this->product->update([
                'meta->video_url' => $status['video']['url']['generation'][0] ?? null,
                'meta->thumbnail_url' => $status['video']['url']['thumbnail'][0] ?? null,
            ]);

            event(new VideoReady($this->product));
        } else {
            // Not ready yet: retry after delay
            self::dispatch($this->product)->delay(now()->addSeconds(10));
        }
    }
}
