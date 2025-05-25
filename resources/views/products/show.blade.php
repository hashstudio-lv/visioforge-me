@section('meta')
    <title>{{ $product->title }} - {{ config('app.name', 'Laravel') }}</title>
@endsection

<x-app-layout>
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <section id="nft-item-details" aria-label="section" class="sm-mt-0 no-bottom">
            <div class="container">
                <div class="row g-5">
                    <div class="col-md-6 text-center">
                        <div class="nft-image-wrapper">
                            <img src="{{ $product->getThumbnailUrl() }}" class="img-fluid img-rounded mb-sm-30" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="item_info">
                            <h2>{{ $product->title }}</h2>
                            <div class="item_info_counts">
                                <div class="item_info_type"><i class="fa fa-image"></i>{{ $product->category->translatedValue() }}</div>
                                <div class="item_info_views"><i class="fa fa-eye"></i>250</div>
                                <div class="item_info_like"><i class="fa fa-heart"></i>18</div>
                            </div>
                            <p>
                                {{ $product->description }}
                            </p>

                            <div class="d-flex flex-row">
                                <div class="mr40">
                                    <h6>{{ __('Category') }}</h6>
                                    <div class="item_author">
                                        <div class="author_list_info" style="padding-left: 0;">
                                            <a href="{{ route('products.index', ['category' => [$product->category->value]]) }}">
                                                {{ $product->category->translatedValue() }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h6>{{ __('Style') }}</h6>
                                    <div class="item_author">
                                        <div class="author_list_info" style="padding-left: 0;">
                                            <a href="{{ route('products.index', ['style' => [$product->style->value]]) }}">
                                                {{ $product->style->translatedValue() }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="spacer-40"></div>

                            <div class="de_tab tab_simple">

                                <div class="spacer-10"></div>

                                <h6>{{ __('Price') }}</h6>
                                <div class="nft-item-price">
                                    <span>{{ __(':amount AET', ['amount' => $product->price]) }}</span>
                                </div>

                                <a href="#" class="btn-main btn-lg" data-bs-toggle="modal" data-bs-target="#buy_now">
                                    {{ __('Buy Now') }}
                                </a>

                                <!-- buy now -->
                                <div class="modal fade" id="buy_now" tabindex="-1" aria-labelledby="buy_now"
                                     aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered de-modal">
                                        <div class="modal-content">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            <div class="modal-body">
                                                <div class="p-3 form-border">
                                                    @if(auth()->check())
                                                        @if($product->price > auth()->user()->balance)
                                                            <h3>{{ __('Insufficient balance.') }}</h3>
                                                            {{ __("You don't have enough ART to make the purchase. Please make a deposit.") }}
                                                            <div class="spacer-single"></div>
                                                            <a href="{{ route('deposits.create') }}"
                                                               class="btn-main btn-fullwidth">
                                                                {{ __('Add funds') }}
                                                            </a>
                                                        @else
                                                            <h3>{{ __('Checkout') }}</h3>
                                                            <p>{!! __('You are about to purchase a <b>:title</b>', ['title' => $product->title]) !!}</p>
                                                            <p class="mb-0">{{ __('After purchase, you will receive a prompt for generating images like this. The original image will be available for download in .jpg, .png, or .webp formats, with a size of 1024x1024.') }}</p>
                                                            <div class="spacer-single"></div>
                                                            <div class="de-flex">
                                                                <div>{{ __('Your balance') }}</div>
                                                                <div>
                                                                    <b>{{ __(':amount AET', ['amount' => auth()->user()->balance]) }}</b>
                                                                </div>
                                                            </div>
                                                            <div class="de-flex">
                                                                <div>{{ __('You will pay') }}</div>
                                                                <div>
                                                                    <b>{{ __(':amount AET', ['amount' => $product->price]) }}</b>
                                                                </div>
                                                            </div>
                                                            <div class="spacer-single"></div>
                                                            <form action="{{ route('products.purchase', $product->slug) }}" method="post">
                                                                @csrf

                                                                <button href="#"
                                                                   class="btn-main btn-fullwidth">
                                                                    {{ __('Purchase') }}
                                                                </button>
                                                            </form>
                                                        @endif
                                                    @else
                                                        <h3>{{ __('You need to be logged in.') }}</h3>
                                                        <div class="spacer-single"></div>
                                                        <a href="{{ route('login') }}"
                                                           class="btn-main btn-fullwidth">
                                                            {{ __('Login') }}
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-items">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2>{{ __('Similar products in same category') }}</h2>
                            <div class="small-border bg-color-2"></div>
                        </div>
                    </div>
                    <div id="items-carousel" class="owl-carousel wow fadeIn">
                        @foreach(\App\Models\Product::public()->take(6)->get() as $product)
                            <div class="d-item">
                                <div class="nft__item">
                                    <div class="nft__item_wrap">
                                        <div class="nft__item_extra">
                                            <div class="nft__item_buttons">
                                                <button
                                                    onclick="location.href='{{ route('products.show', $product->slug) }}'">
                                                    {{ __('Buy Now') }}
                                                </button>
{{--                                                <div class="nft__item_share">--}}
{{--                                                    <h4>{{ __('Share') }}</h4>--}}
{{--                                                    <a href="{{ route('products.show', $product->slug) }}"--}}
{{--                                                       target="_blank">--}}
{{--                                                        <i class="fa fa-facebook fa-lg"></i>--}}
{{--                                                    </a>--}}
{{--                                                    <a href="{{ route('products.show', $product->slug) }}"--}}
{{--                                                       target="_blank">--}}
{{--                                                        <i class="fa fa-twitter fa-lg"></i>--}}
{{--                                                    </a>--}}
{{--                                                    <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site {{ route('products.show', $product->slug) }}">--}}
{{--                                                        <i class="fa fa-envelope fa-lg"></i>--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>
                                        <a href="{{ route('products.show', $product->slug) }}">
                                            <img src="{{ $product->getThumbnailUrl() }}" class="lazy nft__item_preview"
                                                 alt="">
                                        </a>
                                    </div>
                                    <div class="nft__item_info">
                                        <a href="{{ route('products.show', $product->slug) }}">
                                            <h4>{{ $product->title }}</h4>
                                        </a>
{{--                                        <div class="nft__item_click">--}}
{{--                                            <span></span>--}}
{{--                                        </div>--}}
                                        <div class="nft__item_price">
                                            {{ __(':amount AET', ['amount' => $product->price]) }}
                                        </div>
                                        <div class="nft__item_like">
                                            <i class="fa fa-heart"></i><span>50</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
