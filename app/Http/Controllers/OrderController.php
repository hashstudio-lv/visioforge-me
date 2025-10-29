<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Services\ImageService;
use App\Services\ImagineArtService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Drivers\Gd\Encoders\JpegEncoder;
use Intervention\Image\Drivers\Gd\Encoders\PngEncoder;
use Intervention\Image\Drivers\Gd\Encoders\WebpEncoder;
use Intervention\Image\ImageManager;
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
                    if (! $imageService->isValidFormat($value)) {
                        $fail('Invalid format provided. Available formats: '.implode(', ',
                            $imageService::AVAILABLE_FORMATS));
                    }
                },
            ],
            'size' => [
                'required',
                function ($attribute, $value, $fail) use ($imageService) {
                    if (! $imageService->isValidSize($value)) {
                        $fail('Invalid size provided. Available sizes: '.implode(', ',
                            array_keys($imageService::AVAILABLE_SIZES)));
                    }
                },
            ],
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

        $manager = new ImageManager(new Driver);
        $image = $manager->read(Storage::get($order->product->path));

        $image->resize($width, $height);
        $encoder = match (strtolower($format)) {
            'jpg', 'jpeg' => new JpegEncoder,
            'png' => new PngEncoder,
            'webp' => new WebpEncoder,
            default => throw new \Exception("Unsupported image format: $format"),
        };

        $resizedImageContent = (string) $image->encode($encoder);

        $zip = new ZipArchive;
        if ($zip->open($zipPath, ZipArchive::CREATE) === true) {
            // Add the prompt text file to ZIP
            $zip->addFromString('prompt.txt', $prompt);

            // Add the resized image to ZIP
            $zip->addFromString('image.'.$format, $resizedImageContent);

            // Close ZIP archive
            $zip->close();
        }

        Storage::disk('public')->put($zipFileName, file_get_contents($zipPath));

        return response()->download($zipPath)->deleteFileAfterSend();
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
            'user' => auth()->user(),
        ]);
    }

    public function imageToVideo()
    {
        return view('themes.plurk.pages.services.image-to-video', [
            'user' => auth()->user(),
        ]);
    }

    public function imageUpscale()
    {
        return view('themes.plurk.pages.services.image-upscale', [
            'user' => auth()->user(),
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
