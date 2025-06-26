<?php

namespace App\Services;


use App\Enums\ProductCategory;
use App\Enums\ProductStyle;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use OpenAI;

class ImagineArtService
{
    protected string $apiKey;
    protected string $baseUrl;

    public function __construct()
    {
        $this->apiKey = config('services.imagine.api_key');
        $this->baseUrl = 'https://api.vyro.ai/v2';
    }


    public function generateImageFromText(string $prompt, ?string $style = null): array
    {
        if (!$style) {
            $style = 'flux-dev';
        }

        $url = $this->baseUrl . '/image/generations';

        $response = Http::withToken($this->apiKey)
            ->asMultipart()
            ->post($url, [
                ['name' => 'prompt', 'contents' => $prompt],
                ['name' => 'style', 'contents' => $style],
            ]);

        if ($response->failed()) {
            Log::error('ImagineArt video-to-video generation failed', ['response' => $response->json()]);
            throw new \Exception('Failed to generate video from video.');
        }

        return [
            'name' => 'test',
            'extension' => 'jpeg',
            'body' => $response->body()
        ];
    }

    public function generateImageFromPng(string $prompt, ?string $style = null): array
    {
        if (!$style) {
            $style = 'flux-dev';
        }

        $url = $this->baseUrl . '/image/generations/transparent';

        $response = Http::withToken($this->apiKey)
            ->asMultipart()
            ->post($url, [
                ['name' => 'prompt', 'contents' => $prompt],
                ['name' => 'style', 'contents' => $style],
            ]);

        if ($response->failed()) {
            Log::error('ImagineArt video-to-video generation failed', ['response' => $response->json()]);
            throw new \Exception('Failed to generate video from video.');
        }

        return [
            'extension' => 'png',
            'body' => $response->body()
        ];
    }

    public function generateVideoFromText(string $prompt, ?string $style = null): string
    {
        if (!$style) {
            $style = 'imagine-v2';
        }

        $url = $this->baseUrl . '/video/text-to-video';

        $response = Http::withToken($this->apiKey)
            ->asMultipart()
            ->post($url, [
                ['name' => 'prompt', 'contents' => $prompt],
                ['name' => 'style', 'contents' => $style],
            ]);

        if ($response->failed()) {
            throw new \Exception('Failed to generate video from text.');
        }

        return $response->json('id');
    }

    public function generateVideoFromImage(string $prompt, UploadedFile $file, ?string $style = null): string
    {
        if (!$style) {
            $style = 'imagine-v1';
        }

        $url = $this->baseUrl . '/video/image-to-video';

        $response = Http::withToken($this->apiKey)
            ->asMultipart()
            ->post($url, [
                ['name' => 'prompt', 'contents' => $prompt],
                ['name' => 'style', 'contents' => $style],
                [
                    'name' => 'file',
                    'contents' => fopen($file->getRealPath(), 'r'),
                    'filename' => $file->getClientOriginalName(),
                ],
            ]);

        if ($response->failed()) {
            Log::error('ImagineArt video-to-video generation failed', ['response' => $response->json()]);
            throw new \Exception('Failed to generate video from video.');
        }

        return $response->json('id');
    }

    public function removeBackgroundFromImage(UploadedFile $file): array
    {
        $url = $this->baseUrl . '/image/background/remover';

        $response = Http::withToken($this->apiKey)
            ->asMultipart()
            ->post($url, [
                [
                    'name' => 'image',
                    'contents' => fopen($file->getRealPath(), 'r'),
                    'filename' => $file->getClientOriginalName(),
                ],
            ]);

        if ($response->failed()) {
            Log::error('ImagineArt video-to-video generation failed', ['response' => $response->json()]);
            throw new \Exception('Failed to generate video from video.');
        }

        return [
            'name' => $file->getClientOriginalName(),
            'extension' => $file->getClientOriginalExtension(),
            'body' => $response->body()
        ];
    }

    public function imageUpscale(UploadedFile $file): array
    {
        set_time_limit(300);

        $url = $this->baseUrl . '/image/enhance';

        $response = Http::withToken($this->apiKey)
            ->timeout(300)
            ->asMultipart()
            ->post($url, [
                [
                    'name' => 'image',
                    'contents' => fopen($file->getRealPath(), 'r'),
                    'filename' => $file->getClientOriginalName(),
                ],
            ]);

        if ($response->failed()) {
            Log::error('ImagineArt upscale generation failed', ['response' => $response->json()]);
            throw new \Exception('Failed to upscale video from video.');
        }

        return [
            'name' => $file->getClientOriginalName(),
            'extension' => $file->getClientOriginalExtension(),
            'body' => $response->body()
        ];
    }

    public function addAiBackground(string $prompt, UploadedFile $file): array
    {
        set_time_limit(0);
        ini_set('max_execution_time', 0);

        $url = $this->baseUrl . '/image/generations/ai-background';

        $response = Http::withToken($this->apiKey)
            ->timeout(300)
            ->asMultipart()
            ->post($url, [
                ['name' => 'prompt', 'contents' => $prompt],
                [
                    'name' => 'image',
                    'contents' => fopen($file->getRealPath(), 'r'),
                    'filename' => $file->getClientOriginalName(),
                ],
            ]);

        if ($response->failed()) {
            Log::error('ImagineArt upscale generation failed', ['response' => $response->json()]);
            throw new \Exception('Failed to upscale video from video.');
        }

        return [
            'name' => $file->getClientOriginalName(),
            'extension' => $file->getClientOriginalExtension(),
            'body' => $response->body()
        ];
    }

    public function getVideoStatus(string $id): array
    {
        $url = $this->baseUrl . '/video/' . $id . '/status';

        $response = Http::withToken($this->apiKey)->get($url);

        if ($response->failed()) {
            Log::error('ImagineArt get status failed', ['id' => $id, 'response' => $response->json()]);
            throw new \Exception('Failed to fetch video status.');
        }

        return $response->json();
    }
}
