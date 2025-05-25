<?php

namespace App\Enums;

use Illuminate\Support\Arr;

enum ProductStyle: string
{
    case PHOTO_REALISM = 'Photo-realism';
    case IMPRESSIONIST = 'Impressionist';
    case SURREALISM = 'Surrealism';
    case MINIMALIST = 'Minimalist';

    case ABSTRACT = 'Abstract';
    case COMICS = 'Comics';
    case POP_ART = 'Pop Art';
    case VINTAGE_RETRO = 'Vintage/Retro';
    case THREE_D_RENDERING = '3D Rendering';

    public function image()
    {
        return match($this) {
            self::PHOTO_REALISM => asset('assets/images/photo_realism.jpg'),
            self::IMPRESSIONIST => asset('assets/images/impressionist.jpg'),
            self::SURREALISM => asset('assets/images/surrealism.jpg'),
            self::MINIMALIST => asset('assets/images/minimalist.jpg'),
            self::ABSTRACT => asset('assets/images/abstract.jpg'),
            self::COMICS => asset('assets/images/comics.jpg'),
        };
    }

    public function details(): string
    {
        return match($this) {
            self::PHOTO_REALISM => Arr::random([
                'Ultra-detailed textures', 'Fine-tuned lighting', 'Shadows with depth', 'Reflective surfaces',
                'Accurate color gradients', 'Close-up details', 'Realistic depth of field', 'Hyper-accurate rendering',
                'Sharp details on objects', 'Lifelike facial expressions', 'True-to-life environments', 'Dynamic lighting shifts'
            ]),
            self::IMPRESSIONIST => Arr::random([
                'Soft brush strokes', 'Dreamlike lighting', 'Vibrant colors', 'Blurred details',
                'Subtle blending of light and shadow', 'Loose, flowing forms', 'Sunlight breaking through clouds',
                'Figures in motion', 'Dappled light effects', 'Pastel hues', 'Layered textures', 'Swirling color blends'
            ]),
            self::SURREALISM => Arr::random([
                'Dreamlike scenes', 'Floating objects', 'Distorted reality', 'Bizarre, otherworldly creatures',
                'Impossible landscapes', 'Unnatural juxtapositions', 'Melting forms', 'Gravity-defying shapes',
                'Time-distorted scenes', 'Hybrid creatures', 'Shifting forms and dimensions', 'Soft, foggy light'
            ]),
            self::MINIMALIST => Arr::random([
                'Clean lines', 'Simple geometric shapes', 'Monochromatic color schemes', 'Sparse compositions',
                'Large negative space', 'Smooth surfaces', 'Sharp edges', 'Contrasting light and dark',
                'Singular subjects', 'Basic, stripped-down designs', 'Perfectly balanced compositions', 'Soft lighting with shadows'
            ]),
            self::ABSTRACT => Arr::random([
                'Geometric forms', 'Blurred boundaries', 'Overlapping shapes', 'Colorful swirls',
                'Sharp lines', 'Textured layers', 'Distorted shapes', 'Fragmented forms', 'Color blocking',
                'Gradients blending into each other', 'Sharp contrasts in tone', 'Circular patterns', 'Chaotic lines'
            ]),
            self::COMICS => Arr::random([
                'Bright, bold colors', 'Exaggerated expressions', 'Sharp, defined lines', 'Speech bubbles with text',
                'Dynamic poses', 'Action-packed scenes', 'Onomatopoeic words', 'Strong, thick outlines',
                'Simplified facial features', 'Comic panels dividing scenes', 'Dramatic angles', 'Blocky lettering'
            ]),
            self::POP_ART => Arr::random([
                'Bold, vibrant colors', 'Repeated images', 'Comic strip elements', 'Oversized objects',
                'Strong, graphic lines', 'Halftone dot patterns', 'Neon hues', 'Famous brand logos',
                'Silhouettes of celebrities', 'Bold text overlays', 'High-contrast color schemes', 'Iconic cultural imagery'
            ]),
            self::VINTAGE_RETRO => Arr::random([
                'Sepia tones', 'Old film grain effects', 'Faded colors', 'Retro typography', 'Classic car models',
                'Record players', 'Vintage posters', 'Pin-up styles', 'Retro comic book aesthetics',
                'Neon signs', 'Mid-century modern furniture', 'Classic advertising posters', 'Faded signage'
            ]),
            self::THREE_D_RENDERING => Arr::random([
                'Realistic depth', 'Smooth, reflective surfaces', 'Detailed texturing', 'Perfect lighting simulation',
                'Glossy metallic finishes', 'High-resolution details', 'Realistic fabric textures', 'Transparent materials',
                'Photorealistic lighting effects', 'Complex geometric shapes', 'Perfect symmetry', 'Dynamic particle simulations'
            ])
        };
    }

    public function translatedValue(): string
    {
        $locale = app()->getLocale();

        return match($locale) {
            'lv' => match($this) {
                self::PHOTO_REALISM => 'Foto-reālisms',
                self::IMPRESSIONIST => 'Impresionisms',
                self::SURREALISM => 'Sirreālisms',
                self::MINIMALIST => 'Minimālisms',
                self::ABSTRACT => 'Abstrakts',
                self::COMICS => 'Komiksi',
                self::POP_ART => 'Pop Art',
                self::VINTAGE_RETRO => 'Vintage/Retro',
                self::THREE_D_RENDERING => '3D Attēlošana'
            },
            'es' => match($this) {
                self::PHOTO_REALISM => 'Foto-realismo',
                self::IMPRESSIONIST => 'Impresionismo',
                self::SURREALISM => 'Surrealismo',
                self::MINIMALIST => 'Minimalismo',
                self::ABSTRACT => 'Abstracto',
                self::COMICS => 'Cómics',
                self::POP_ART => 'Arte Pop',
                self::VINTAGE_RETRO => 'Vintage/Retro',
                self::THREE_D_RENDERING => 'Renderizado 3D'
            },
            'de' => match($this) {
                self::PHOTO_REALISM => 'Fotorealismus',
                self::IMPRESSIONIST => 'Impressionismus',
                self::SURREALISM => 'Surrealismus',
                self::MINIMALIST => 'Minimalismus',
                self::ABSTRACT => 'Abstrakt',
                self::COMICS => 'Comics',
                self::POP_ART => 'Pop-Art',
                self::VINTAGE_RETRO => 'Vintage/Retro',
                self::THREE_D_RENDERING => '3D-Rendering'
            },
            'fr' => match($this) {
                self::PHOTO_REALISM => 'Photo-réalisme',
                self::IMPRESSIONIST => 'Impressionnisme',
                self::SURREALISM => 'Surréalisme',
                self::MINIMALIST => 'Minimalisme',
                self::ABSTRACT => 'Abstrait',
                self::COMICS => 'Bandes dessinées',
                self::POP_ART => 'Pop Art',
                self::VINTAGE_RETRO => 'Vintage/Rétro',
                self::THREE_D_RENDERING => 'Rendu 3D'
            },
            'ar' => match($this) {
                self::PHOTO_REALISM => 'الواقعية التصويرية',
                self::IMPRESSIONIST => 'الانطباعية',
                self::SURREALISM => 'السريالية',
                self::MINIMALIST => 'التبسيطية',
                self::ABSTRACT => 'التجريدية',
                self::COMICS => 'القصص المصورة',
                self::POP_ART => 'فن البوب',
                self::VINTAGE_RETRO => 'الطراز العتيق/الرجعي',
                self::THREE_D_RENDERING => 'التصيير ثلاثي الأبعاد'
            },
            default => $this->value
        };
    }
}
