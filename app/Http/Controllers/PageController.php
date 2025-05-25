<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Product;
use App\Repositories\ProductRepository;
use App\Services\EmailGenerationService;
use App\Services\ImageGenerationService;
use App\Services\ImageService;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function home()
    {
        return view('themes.new.pages.home');
    }

    public function show($slug)
    {
        $page = Page::whereHas('translations', function ($query) use ($slug) {
            return $query->where('slug', $slug);
        })->firstOrFail();

        return view($page->view ?? 'themes.new.pages.content', [
            'page' => $page,
        ]);
    }

    public function imageEditing()
    {
        return view('themes.new.pages.landings.image-editing');
    }

    public function imageGeneration()
    {
        return view('themes.new.pages.landings.image-generation');
    }
}
