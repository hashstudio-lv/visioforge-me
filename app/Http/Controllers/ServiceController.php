<?php

namespace App\Http\Controllers;

use App\Enums\Service;
use App\Models\Page;
use App\Models\Product;
use App\Repositories\ProductRepository;
use App\Services\EmailGenerationService;
use App\Services\ImageGenerationService;
use App\Services\ImageService;
use App\Services\ImagineArtService;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function show($slug, ImagineArtService $imagineArtService)
    {
//        $response = $imagineArtService->generateImageFromText('judo fight in japan');
//
//        Storage::disk('public')->put('test/test.jpeg', $response['body']);
//
//        dd();
        $service = Service::tryFrom($slug);

        if (!$service) {
            abort(404);
        }

        return view('themes.new.pages.services.show', [
            'service' => Service::tryFrom($slug)
        ]);
    }
}
