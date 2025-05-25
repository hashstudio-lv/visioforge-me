<?php

namespace App\Repositories;

use App\Enums\ProductCategory;
use App\Enums\ProductStyle;
use App\Models\Page;
use App\Models\Product;

class ProductRepository
{
    public function find($slug)
    {
        return Product::public()->whereHas('translations', function ($query) use ($slug) {
            return $query->where('slug', $slug);
        })->firstOrFail();
    }

    public function get(array $filter = [])
    {
        $products = Product::query()->public();

        if (!empty($filter['category'])) {
            $categories = [];

            foreach($filter['category'] as $category) {
                $categories[] = ProductCategory::from($category);
            }

            $products = $products->whereIn('category', $categories);
        }

        if (!empty($filter['style'])) {
            $styles = [];

            foreach($filter['style'] as $style) {
                $styles[] = ProductStyle::from($style);
            }

            $products = $products->whereIn('style', $styles);
        }

        if (!empty($filter['search'])) {
            $products = $products->whereHas('translations', function ($query) use ($filter) {
                return $query->where('slug', 'LIKE', '%' . $filter['search'] . '%');
            });
        }

        return $products->orderBy('created_at', 'desc')->simplePaginate(24);
    }

    public function getFeaturedProducts()
    {
        return Product::public()->take(8)->inRandomOrder()->get();
    }
}
