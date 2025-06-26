@extends('themes.itsol.layouts.app')

@section('content')
<div class="section bg-light">
    <div class="container">
        <div class="mb-10 grid grid-cols-12 gap-6 lg:mb-14">
            <div class="col-span-12 md:col-span-8 xxl:col-span-7">
                <div class="mx-auto max-w-[838px]">
                    <h5 class="h5 mb-5 text-primary">
                        {{ __('Created by AI') }}
                    </h5>

                    <h2 class="h2 mb-4 text-title">
                        {{ __('Creatives') }}
                    </h2>

                    <p class="max-w-lg text-lg">
                        {{ __('Check out the latest arts we have on AI-powered image generation and editing tools.') }}
                    </p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-12 gap-[100px] section-container">
            <div class="col-span-12 xl:col-span-8 products-section">
                @if ($products->count())
                    <div class="grid grid-cols-12 justify-center gap-4 lg:gap-6">
                    @foreach ($products as $product)
                        @continue(! $product->translations->first())

                        <div class="col-span-12 md:col-span-6 xl:col-span-4">
                            <div class="group rounded-[10px] border border-gray p-3">
                                <a
                                    class="block overflow-hidden rounded-[10px]"
                                    href="{{ route('products.show', ['slug' => $product->translations->first()->slug]) }}"
                                >
                                <img
                                    alt="image"
                                    loading="lazy"
                                    width="404"
                                    height="275"
                                    decoding="async"
                                    data-nimg="1"
                                    class="w-full rounded-[10px] duration-300 group-hover:scale-110"
                                    src="{{ asset('storage/' . $product->getThumbnailPath()) }}"
                                    style="color: transparent"
                                />
                                </a>
                                <div class="flex flex-col px-3 pb-[10px] pt-3 md:px-[18px]">
                                    <h6 class="h6 block text-title text-center">
                                        {{ __('Price :amount', ['amount' => $product->price]) }} SAT
                                    </h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                @else
                    <p class="text-2xl">{{ __('There is no generated images...') }}</p>
                @endif

                <div class="page-pagination-one pt-[30px]">
                    {{ $products->appends(request()->all())->links('themes.itsol.pagination.simple') }}
                </div>
            </div>

            <div class="col-span-12 xl:col-span-4 category-section">
                <h3 class="font-bold text-3xl">Category</h3>

                <div class="mt-5">
                    <ul class="flex flex-col gap-1">
                        @foreach(\App\Enums\ProductCategory::cases() as $category)
                            <li>
                                <a
                                    href="{{ route('products.index', ['category' => [$category]]) }}"
                                    class="hover:text-secondary duration-300"
                                >
                                    {{ $category->translatedValue() }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Mobile adjustments */
@media (max-width: 767px) {
    .h5 {
        margin-top: 30px
    }
    .section-container {
        display: flex;
        flex-direction: column;
        gap: 20px; /* Reduced gap for mobile */
    }
    .products-section {
        order: 2;
    }
    .category-section {
        order: 1;
        margin-bottom: 20px; /* Spacing between category and products */
    }
    .products-section .grid-cols-12 {
        grid-template-columns: 1fr; /* Single column for products */
    }
    .products-section .col-span-12 {
        grid-column: span 1 / span 1;
    }
    /* Responsive images */
    .group img {
        width: 100%;
        height: auto;
        aspect-ratio: 404 / 275; /* Maintain aspect ratio */
    }
}
</style>
@endsection
