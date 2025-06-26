<x-app-layout>
    <div class="no-bottom" id="content">
        <div id="top"></div>

        <section>
            <div class="container">
                <div class="row">
                    <aside class="col-md-3">
                        <form action="{{ route('products.index') }}" method="get">
                            <div class="item_filter_group">
                                <h4>{{ __('Categories') }}</h4>
                                <div class="de_form">
                                    @foreach(\App\Enums\ProductCategory::cases() as $category)
                                        <div class="de_checkbox">
                                            <input id="{{ "category-{$loop->iteration}" }}" name="category[]"
                                                   type="checkbox" value="{{ $category->value }}" @if(in_array($category->value, (request()->get('category') ?? []))) checked @endif>
                                            <label
                                                for="{{ "category-{$loop->iteration}" }}">{{ $category->translatedValue() }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="item_filter_group">
                                <h4>{{ __('Styles') }}</h4>
                                <div class="de_form">
                                    @foreach(\App\Enums\ProductStyle::cases() as $style)
                                        <div class="de_checkbox">
                                            <input id="{{ "style-{$loop->iteration}" }}" name="style[]" type="checkbox"
                                                   value="{{ $style->value }}" @if(in_array($style->value, (request()->get('style') ?? []))) checked @endif>
                                            <label
                                                for="{{ "style-{$loop->iteration}" }}">{{ $style->translatedValue() }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <button type="submit" class="btn-main wow fadeInUp lead animated">
                                {{ __('Search') }}
                            </button>
                        </form>
                    </aside>

                    <div class="col-md-9">
                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="nft__item style-2">
                                        <div class="nft__item_wrap">
                                            <a href="{{ route('products.show', $product->slug) }}">
                                                <div class="d-placeholder"></div>
                                                <img src="{{ $product->getThumbnailUrl() }}"
                                                     class="lazy nft__item_preview"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="nft__item_info">
                                            <a href="{{ route('products.show', $product->slug) }}">
                                                <h4>{{ $product->title }}</h4>
                                            </a>
                                            <div class="nft__item_price">
                                                {{ $product->price }} ART
                                            </div>
                                            <div class="nft__item_like">
                                                <i class="fa fa-heart"></i><span>97</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row text-center mt-4">
                            {{ $products->appends(request()->query())->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    {{--    --}}
    {{--    <x-slot name="header">--}}
    {{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
    {{--            {{ __('Marketplace') }}--}}
    {{--        </h2>--}}
    {{--    </x-slot>--}}

    {{--    <div class="max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-8">--}}
    {{--        <ul role="list" class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">--}}
    {{--            @foreach($products as $product)--}}
    {{--                <li class="relative">--}}
    {{--                    @include('products.partials.product-card', ['product' => $product])--}}
    {{--                </li>--}}
    {{--            @endforeach--}}
    {{--        </ul>--}}
    {{--    </div>--}}
</x-app-layout>
