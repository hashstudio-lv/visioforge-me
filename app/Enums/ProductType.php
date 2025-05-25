<?php

namespace App\Enums;

use Illuminate\Support\Arr;

enum ProductType: string
{
    case VIDEO_FROM_IMAGE = 'video-from-image';
    case VIDEO_FROM_TEXT = 'video-from-text';
    case IMAGE_UPSCALE = 'image-upscale';
    case IMAGE_BG_REMOVED = 'image-bg-removed';
    case IMAGE = 'image';

    case TEXT_TO_IMAGE = 'text-to-image';

    case TEXT_TO_PNG = 'text-to-png';

    case AI_BACKGROUND = 'ai-background';

    public function name(): string
    {
        return match ($this) {
            self::VIDEO_FROM_IMAGE => 'Video from Image',
            self::VIDEO_FROM_TEXT => 'Video from Text',
            self::IMAGE_UPSCALE => 'Image Upscale',
            self::IMAGE_BG_REMOVED => 'Background Removal',
            self::IMAGE => 'Image',
            self::TEXT_TO_IMAGE => 'Text to Image',
            self::TEXT_TO_PNG => 'Text to PNG',
        };
    }

    public static function getPublicTypes()
    {
        return [
            ProductType::IMAGE
        ];
    }
}
