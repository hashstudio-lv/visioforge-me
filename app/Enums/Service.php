<?php

namespace App\Enums;

use Illuminate\Support\Arr;

enum Service: string
{
    case TEXT_TO_IMAGE = 'text-to-image';
    case TEXT_TO_PNG = 'text-to-png';
    case BACKGROUND_REMOVER = 'background-remover';
    case IMAGE_UPSCALE = 'image-upscale';
    case GENERATIVE_FILL = 'generative-fill';
    case AI_RESIZE = 'ai-resize';
    case RETOUCH = 'retouch';
    case AI_BACKGROUND = 'ai-background';
    case GENERATE_EMAIL = 'generate-email';

    case GENERATE_AGREEMENT = 'generate-agreement';

    public function name(): string
    {
        return match ($this) {
            Service::TEXT_TO_IMAGE => 'Text to Image',
            Service::TEXT_TO_PNG => 'Text to PNG',
            Service::BACKGROUND_REMOVER => 'Background Remover',
            Service::IMAGE_UPSCALE => 'Image Upscale',
            Service::GENERATIVE_FILL => 'Generative Fill',
            Service::AI_RESIZE => 'AI Resize',
            Service::RETOUCH => 'Retouch',
            Service::AI_BACKGROUND => 'AI Background',
            Service::GENERATE_EMAIL => 'Email Generation',
            Service::GENERATE_AGREEMENT => 'Agreement Generation',
        };
    }

    public function description(): string
    {
        return match ($this) {
            Service::TEXT_TO_IMAGE => 'Text to Image',
            Service::TEXT_TO_PNG => 'Text to PNG',
            Service::BACKGROUND_REMOVER => 'Background Remover',
            Service::IMAGE_UPSCALE => 'Image Upscale',
            Service::GENERATIVE_FILL => 'Generative Fill',
            Service::AI_RESIZE => 'AI Resize',
            Service::RETOUCH => 'Retouch',
        };
    }
}
