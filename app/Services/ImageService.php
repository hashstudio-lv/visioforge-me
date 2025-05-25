<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Encoders\JpegEncoder;
use Intervention\Image\Laravel\Facades\Image;

class ImageService
{
    CONST AVAILABLE_FORMATS = ['webp', 'jpg', 'jpeg', 'png'];

    const AVAILABLE_SIZES = [
        '1024x1024' => ['width' => '1024', 'height' => '1024'],
        '1024x1792'   => ['width' => '1024', 'height' => '1792'],
        '1792x1024'   => ['width' => '1792', 'height' => '1024']
    ];

    /**
     * Check if the format is valid.
     *
     * @param string $format
     * @return bool
     */
    public function isValidFormat(string $format): bool
    {
        return in_array($format, self::AVAILABLE_FORMATS);
    }

    /**
     * Check if the size is valid.
     *
     * @param string $size
     * @return bool
     */
    public function isValidSize(string $size): bool
    {
        return array_key_exists($size, self::AVAILABLE_SIZES);
    }


    /**
     * Generate a unique image name.
     *
     * @param string $prefix The prefix for the image name.
     * @param string $extension The file extension (e.g., jpg, png).
     * @return string The generated unique name.
     */
    public function generateImageName(string $prefix = 'product_', string $extension = 'jpg'): string
    {
        return $prefix . time() . '.' . $extension;
    }

    /**
     * Download an image from a URL and store it.
     *
     * @param string $url The URL of the image to download.
     * @return string The path of the stored image.
     */
    public function downloadImage(string $url, $path = 'products'): string
    {
        // Generate image name dynamically
        $imageName = $this->generateImageName();
        $imagePath = $path . '/' . $imageName;

        $imageContents = file_get_contents($url);
        Storage::put($imagePath, $imageContents);

        return $imagePath;
    }

    /**
     * Generate a thumbnail for a given image.
     *
     * @param string $imagePath The path of the original image.
     * @param int $width The desired width of the thumbnail.
     */
    public function generateThumbnail(string $imagePath, int $width = 1024, int $height = 1024): void
    {
        $image = Image::read(Storage::get($imagePath));

        // Get the original file extension
        $extension = pathinfo($imagePath, PATHINFO_EXTENSION);

        // Generate thumbnail path with `_thumb` postfix and the same extension
        $thumbnailPath = str_replace(".{$extension}", "_thumb.{$extension}", $imagePath);

        // Resize the image to the given width and height
        $image->resize($width, $height);

        // Encode the image using the appropriate encoder (Jpeg for jpg files)
        $encoder = new JpegEncoder(); // You can change this to other encoders like PngEncoder if needed
        $encodedImage = $image->encode($encoder, 70); // 70 is the quality (for JPEG)

        Storage::disk('public')->put($thumbnailPath, (string) $encodedImage);
    }
}
