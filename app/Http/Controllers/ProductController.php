<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use App\Services\ProductService;

class ProductController extends Controller
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        return view('pages.products.index', [
            'products' => $this->productRepository->get(request()->all()),
        ]);
    }

    public function show($slug)
    {
        $product = $this->productRepository->find($slug);

        return view('pages.products.show', [
            'product' => $product,
        ]);
    }

    public function purchase($slug, ProductService $productService)
    {

        if (request()->method() == 'POST') {
            $user = auth()->user();
            $product = $this->productRepository->find($slug);

            if ($productService->userAbleToPurchaseProduct($user, $product)) {
                $productService->purchase($user, $product);
            }
        }

        return redirect()->route('dashboard');
    }

    public function generate()
    {
        return view('themes.new.pages.products.generate');
    }
}
