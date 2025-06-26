<?php

namespace App\Enums;

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
            self::TEXT_TO_IMAGE => __('Text to Image'),
            self::TEXT_TO_PNG => __('Text to PNG'),
            self::BACKGROUND_REMOVER => __('Background Remover'),
            self::IMAGE_UPSCALE => __('Image Upscale'),
            self::GENERATIVE_FILL => __('Generative Fill'),
            self::AI_RESIZE => __('AI Resize'),
            self::RETOUCH => __('Retouch'),
            self::AI_BACKGROUND => __('Retouch'),
            self::GENERATE_EMAIL => __('Email Generation'),
            self::GENERATE_AGREEMENT => __('Agreement Generation'),
        };
    }

    public function description(): string
    {
        return match ($this) {
            self::TEXT_TO_IMAGE => __('Text to Image'),
            self::TEXT_TO_PNG => __('Text to PNG'),
            self::BACKGROUND_REMOVER => __('Background Remover'),
            self::IMAGE_UPSCALE => __('Image Upscale'),
            self::GENERATIVE_FILL => __('Generative Fill'),
            self::AI_RESIZE => __('AI Resize'),
            self::RETOUCH => __('Retouch'),
        };
    }
}
