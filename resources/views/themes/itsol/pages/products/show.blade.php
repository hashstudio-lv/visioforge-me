@extends('themes.itsol.layouts.app')

@section('meta')
    <title>{{ $product->title }} - {{ config('app.name', 'Laravel') }}</title>
@endsection

@section('content')
<section class="spt120px mb-9">
    <div class="container">
        <!-- Breadcrumbs -->
        <div class="mb-8">
            <nav class="flex nav-place" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2">
                    <li class="inline-flex items-center">
                        <a
                            href="{{ route('home') }}"
                            class="hover:text-primary inline-flex items-center text-lg font-medium text-gray-700"
                        >
                            <i class="ti ti-home mr-2"></i>
                            {{ __('Home') }}
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="ti ti-chevron-right text-gray-400"></i>
                            <a
                                href="{{ route('products.index') }}"
                                class="hover:text-primary ml-1 text-lg font-medium text-gray-700 md:ml-2"
                            >
                                {{ __('Creatives') }}
                            </a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="ti ti-chevron-right text-gray-400"></i>
                            <span class="ml-1 text-lg font-medium text-gray-500 md:ml-2">{{ $product->title }}</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>

        <!-- Product Details -->
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
            <!-- Product Image -->
            <div class="overflow-hidden rounded-xl bg-gray-100 mr-30">
                <img
                    src="{{ $product->getThumbnailUrl() }}"
                    alt="{{ $product->title }}"
                    class="h-full w-full object-cover"
                >
            </div>

            <!-- Product Info -->
            <div>
                <h1 class="h1 mb-4">{{ $product->title }}</h1>

                @if ($product->category)
                    <div class="mb-4">
                        <span class="text-lg font-medium">{{ __('Category') }}:</span>
                        <span class="text-lg text-gray-600">{{ $product->category }}</span>
                    </div>
                @endif

                <div class="mb-6">
                    <span class="text-primary text-3xl font-bold">{{ __(':amount SVT', ['amount' => $product->price]) }}</span>
                </div>

                <div class="mb-8">
                    <h3 class="h3 mb-3">{{ __('About') }}</h3>
                    <p class="text-lg text-gray-700">{{ $product->description }}</p>
                </div>

                <form
                    action="{{ route('products.purchase', $product->slug) }}"
                    method="post"
                    class="mb-8"
                >
                    @csrf
                    <button
                        type="submit"
                        class="btn-primary w-full max-w-[300px]"
                    >
                        {{ __('Buy for :amount SVT', ['amount' => $product->price]) }}
                    </button>
                </form>
            </div>
        </div>

        <!-- Navigation between products -->
        <div class="mt-16 flex justify-between border-t border-gray-200 pt-8">
            @if ($previousProduct->slug !== null)
                <a
                    href="{{ route('products.show', $previousProduct->slug) }}"
                    class="group flex items-center"
                >
                    <i class="ti ti-arrow-left group-hover:text-primary text-xl text-gray-500"></i>
                    <div class="ml-4">
                        <span class="text-sm uppercase text-gray-500">{{ __('Previous') }}</span>
                        <p class="group-hover:text-primary font-medium">{{ $previousProduct->title }}</p>
                    </div>
                </a>
            @else
                <div></div> <!-- Empty div for spacing -->
            @endif

            @if ($nextProduct->slug !== null)
                <a
                    href="{{ route('products.show', $nextProduct->slug) }}"
                    class="group flex items-center text-right"
                >
                    <div class="mr-4">
                        <span class="text-sm uppercase text-gray-500">{{ __('Next fully') }}</span>
                        <p class="group-hover:text-primary font-medium">{{ $nextProduct->title }}</p>
                    </div>
                    <i class="ti ti-arrow-right group-hover:text-primary text-xl text-gray-500"></i>
                </a>
            @endif
        </div>
    </div>
</section>

<style>
/* Mobile adjustments */
@media (max-width: 767px) {
    /* Fix mobile menu top margin */
    .mobile-menu nav {
        margin-top: 30px;
        margin-bottom: 20px;
        top: 0; /* Keep fixed positioning */
    }

    /* Ensure breadcrumb navigation is styled properly */
    .nav-place {
        margin-bottom: 16px;
    }

    /* Adjust product details for mobile */
    .grid-cols-1 {
        gap: 16px;
    }
    .mr-30 {
        margin-right: 0; /* Remove right margin on mobile */
    }
    .h1 {
        font-size: 1.5rem; /* Adjust font size for mobile */
    }
    .btn-primary {
        max-width: 100%; /* Full-width button on mobile */
    }
    .nav-place {
        padding-top: 60px;
    }
}
</style>
@endsection