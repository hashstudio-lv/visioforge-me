<?php

namespace App\Http\Controllers;

use App\Enums\ProductCategory;
use App\Enums\ProductStyle;
use App\Jobs\GenerateProduct;
use App\Models\Product;
use App\Repositories\ProductRepository;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
//        GenerateProduct::dispatch(ProductCategory::PEOPLE_PORTRAITS, ProductStyle::PHOTO_REALISM);

        return view('themes.new.pages.products.index', [
            'products' => $this->productRepository->get(request()->all()),
        ]);
    }

    public function show($slug)
    {
        $product = $this->productRepository->find($slug);

        return view('themes.new.pages.products.show', [
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
