<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTranslation extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];

    /**
     * Extend the query to find similar slugs.
     */
    public function scopeFindSimilarSlugs(Builder $query, string $attribute, array $config, string $slug): Builder
    {
        // Add locale constraint
        $query->where('locale', $this->locale);

        // Continue with the original query logic
        $separator = $config['separator'];
        $query->where($attribute, 'LIKE', $slug.'%')
            ->where($attribute, '!=', $this->getAttribute($attribute));

        return $query;
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
                'unique' => true,
            ],
        ];
    }
}
