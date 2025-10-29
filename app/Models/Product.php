<?php

namespace App\Models;

use App\Enums\ProductCategory;
use App\Enums\ProductStyle;
use App\Enums\ProductType;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory, Translatable;

    protected $guarded = ['id'];

    public array $translatedAttributes = ['slug', 'title', 'description'];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'category' => ProductCategory::class,
            'style' => ProductStyle::class,
            'type' => ProductType::class,
        ];
    }

    public function scopePublic(Builder $query)
    {
        return $query->whereIn('type', ProductType::getPublicTypes());
    }

    public function getPriceInArtAttribute()
    {
        return round($this->price / 100, 1);
    }

    public function isAbleToBuy()
    {
        return auth()->check() && (auth()->user()->deposits->sum('amount') >= $this->price);
    }

    /**
     * Get the path of the thumbnail for this product's image.
     *
     * @return string|null The thumbnail path or null if no image is set.
     */
    public function getThumbnailPath(): ?string
    {
        if (! $this->path) {
            return null;  // Return null if no image path is set
        }

        // Get the original file extension
        $extension = pathinfo($this->path, PATHINFO_EXTENSION);

        // Return the thumbnail path by appending '_thumb' before the file extension
        return str_replace(".{$extension}", "_thumb.{$extension}", $this->path);
    }

    public function getThumbnailUrl()
    {
        if ($path = $this->getThumbnailPath()) {
            return Storage::disk('public')->url($path);
        }

        return null;
    }
}
