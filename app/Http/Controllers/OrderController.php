<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Services\ImageService;
use App\Services\ImagineArtService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
use ZipArchive;

class OrderController extends Controller
{
    public function download(string $uuid, Request $request, ImageService $imageService)
    {
        $request->validate([
            'format' => [
                'required',
                function ($attribute, $value, $fail) use ($imageService) {
                    if (!$imageService->isValidFormat($value)) {
                        $fail('Invalid format provided. Available formats: '.implode(', ',
                                $imageService::AVAILABLE_FORMATS));
                    }
                }
            ],
            'size' => [
                'required',
                function ($attribute, $value, $fail) use ($imageService) {
                    if (!$imageService->isValidSize($value)) {
                        $fail('Invalid size provided. Available sizes: '.implode(', ',
                                array_keys($imageService::AVAILABLE_SIZES)));
                    }
                }
            ]
        ]);

        $order = Order::findOrFail($uuid);

        if ($order->user->id != auth()->id()) {
            abort(401);
        }

        // Get image path and prompt from the product
//        $imagePath = storage_path('app/public/'.$order->product->image_path);  // Full path to the image
        $prompt = $order->product->prompt;

// Get the requested format and size from the request
        $format = $request->input('format', 'webp');  // Default to webp if not provided
        $size = $request->input('size', '1024x1024'); // Default size if not provided
        [$width, $height] = explode('x', $size);

        $timestamp = now()->timestamp;
        $orderDirectory = 'orders/'.$order->id.'/';
        $zipFileName = $orderDirectory.$order->id.'-'.$timestamp.'.zip';
        $zipPath = storage_path('app/'.$order->id.'-'.$timestamp.'.zip'); // Temporary ZIP file

// Fetch the image from S3 and resize it
        $image = Image::make(Storage::disk('s3')->get($order->product->image_path));
        $image->resize($width, $height);
        $resizedImageContent = (string) $image->encode($format);

// Create ZIP file in memory
        $zip = new ZipArchive;
        if ($zip->open($zipPath, ZipArchive::CREATE) === true) {
            // Add the prompt text file to ZIP
            $zip->addFromString('prompt.txt', $prompt);

            // Add the resized image to ZIP
            $zip->addFromString('image.'.$format, $resizedImageContent);

            // Close ZIP archive
            $zip->close();
        }

// Upload ZIP file to S3
        Storage::disk('s3')->put($zipFileName, file_get_contents($zipPath));

// Generate public URL for the ZIP file
        $zipFileUrl = Storage::disk('s3')->url($zipFileName);

// Delete temporary ZIP file from local storage
        unlink($zipPath);

// Return the S3 ZIP file link
        return response()->json(['download_url' => $zipFileUrl]);
    }

    public function textToVideo(ImagineArtService $imagineService)
    {
//        $id = $imagineService->generateVideoFromText('walking dead');
//        $id = '574d006b-8c00-4a08-9cb5-6a0f8d2174bc';
//        $file = Storage::get('/IMG_0645.jpeg');
//        dd($file);
//        $id = $imagineService->generateVideoFromImage('walking dead');
//        $video = $imagineService->getVideoStatus($id);
//        dd($video);

        return view('themes.plurk.pages.services.text-to-video', [
            'user' => auth()->user()
        ]);
    }

    public function imageToVideo()
    {
        return view('themes.plurk.pages.services.image-to-video', [
            'user' => auth()->user()
        ]);
    }

    public function imageUpscale()
    {
        return view('themes.plurk.pages.services.image-upscale', [
            'user' => auth()->user()
        ]);
    }

    public function createEmail()
    {
        return view('services.generate-email');
    }

    public function createAgreement()
    {
        return view('services.generate-agreement');
    }
}
