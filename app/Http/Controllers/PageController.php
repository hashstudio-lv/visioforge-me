<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Repositories\ProductRepository;

class PageController extends Controller
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function home()
    {
        return view('pages.home');
    }

    public function show($slug)
    {
        $page = Page::whereHas('translations', function ($query) use ($slug) {
            return $query->where('slug', $slug);
        })->firstOrFail();

        return view($page->view ?? 'pages.static', [
            'page' => $page,
        ]);
    }

    public function agreements()
    {
        return view('pages.landings.agreements');
    }

    public function emails()
    {
        return view('pages.landings.emails');
    }
}
