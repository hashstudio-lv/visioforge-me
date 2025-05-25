<x-app-layout>
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <section id="section-hero" aria-label="section" class="pt60">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="spacer- single"></div>
                        <h6 class="wow fadeInUp" data-wow-delay=".5s">
                            <span class="text-uppercase id-color-2">{{ __('Prompt marketplace') }}</span>
                        </h6>
                        <div class="spacer-10"></div>
                        <h1 class="wow fadeInUp"
                            data-wow-delay=".75s">{{ __('Discover and Buy Unique AI Prompts.') }}</h1>
                        <p class="wow fadeInUp lead" data-wow-delay="1s">
                            {{ __('Explore AI-driven prompts tailored for business, finance, and investment strategies. Every purchased artwork can be used as per your desired needs.') }}
                        </p>
                        <div class="spacer-10"></div>
                        <a href="{{ route('products.index') }}" class="btn-main wow fadeInUp lead mb-2"
                           data-wow-delay="1.25s">
                            {{ __('Explore') }}
                        </a>
                    </div>
                    <div class="col-md-6 xs-hide">
                        <div class="d-carousel">
                            <div id="item-carousel-big-type-2" class="owl-carousel wow fadeIn">
                                @foreach($heroSectionProducts as $product)
                                    <div class="nft_pic style-2">
                                        <a href="{{ route('products.show', $product->slug) }}">
                                            <span class="nft_pic_info">
                                                <span class="nft_pic_title">{{ $product->title }}</span>
                                                <span class="nft_pic_by">{{ $product->category->translatedValue() }}</span>
                                            </span>
                                        </a>
                                        <div class="nft_pic_wrap">
                                            <img src="{{ $product->getThumbnailUrl() }}" class="lazy img-fluid" alt="">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="d-arrow-left"><i class="fa fa-angle-left"></i></div>
                            <div class="d-arrow-right"><i class="fa fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-intro" class="no-top no-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-sm-30">
                        <div class="feature-box f-boxed style-3">
                            <i class="wow fadeInUp bg-color-2 i-boxed icon_wallet"></i>
                            <div class="text">
                                <h4 class="wow fadeInUp">{{ __('Top Up Your Wallet') }}</h4>
                                <p class="wow fadeInUp" data-wow-delay=".25s">
                                    {{ __('Securely fund your wallet to unlock premium AI-driven business insights, financial models, and investment strategies.') }}
                                </p>
                            </div>
                            <i class="wm icon_wallet"></i>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-sm-30">
                        <div class="feature-box f-boxed style-3">
                            <i class="wow fadeInUp bg-color-2 i-boxed icon_cloud-upload_alt"></i>
                            <div class="text">
                                <h4 class="wow fadeInUp">{{ __('Browse and Buy Prompts') }}</h4>
                                <p class="wow fadeInUp" data-wow-delay=".25s">
                                    {{ __('Access AI-powered prompts designed for financial forecasting, business planning, and data-driven decision-making. Stay ahead with intelligent automation.') }}
                                </p>
                            </div>
                            <i class="wm icon_cloud-upload_alt"></i>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-sm-30">
                        <div class="feature-box f-boxed style-3">
                            <i class="wow fadeInUp bg-color-2 i-boxed icon_tags_alt"></i>
                            <div class="text">
                                <h4 class="wow fadeInUp">{{ __('Access Your Purchases') }}</h4>
                                <p class="wow fadeInUp" data-wow-delay=".25s">
                                    {{ __('Easily manage and apply your acquired AI-generated financial and business insights in one centralized dashboard, optimizing efficiency and strategy execution.') }}
                                </p>
                            </div>
                            <i class="wm icon_tags_alt"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-hero" class="no-bottom" aria-label="section">
            <div class="d-carousel">
                <div id="item-carousel-big-type-4" class="owl-carousel owl-center wow fadeIn" data-wow-delay=".5s">
                    @foreach(\App\Models\Product::public()->take(6)->inRandomOrder()->get() as $product)
                        <div class="nft_pic mod-a">
                            <a href="{{ route('products.show', $product->slug) }}">
                                <span class="nft_pic_info">
                                    <span class="nft_pic_title">{{ $product->title }}</span>
                                    <span class="nft_pic_by">{{ $product->category->translatedValue() }}</span>
                                </span>
                            </a>
                            <div class="nft_pic_wrap">
                                <img src="{{ $product->getThumbnailUrl() }}" class="lazy img-fluid" alt="">
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-arrow-left mod-a"><i class="fa fa-angle-left"></i></div>
                <div class="d-arrow-right mod-a"><i class="fa fa-angle-right"></i></div>
            </div>
        </section>

        <section id="section-items" class="no-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2>{{ __('New prompts') }}</h2>
                            <div class="small-border bg-color-2"></div>
                        </div>
                    </div>
                    <div id="items-carousel" class="items-carousel owl-carousel wow fadeIn">
                        @foreach($newProducts as $product)
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

        <section id="section-popular" class="pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2>{{ __('Top Sellers') }}</h2>
                            <div class="small-border bg-color-2"></div>
                        </div>
                    </div>
                    <div class="col-md-12 wow fadeIn">
                        <ol class="author_list">
                            @foreach($lastSoldProducts as $product)
                                <li>
                                    <div class="author_list_pp">
                                        <a href="{{ route('products.show', $product->slug) }}"
                                           title="{{ $product->title }}">
                                            <img class="lazy" src="{{ $product->getThumbnailUrl() }}"
                                                 alt="{{ $product->title }}">
                                        </a>
                                    </div>
                                    <div class="author_list_info">
                                        <a href="{{ route('products.show', $product->slug) }}"
                                           title="{{ $product->title }}">
                                            {{ \Illuminate\Support\Str::limit($product->title, 14, '..') }}
                                        </a>
                                        <span>{{ __(':amount AET', ['amount' => $product->price]) }}</span>
                                    </div>
                                </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-category" class="no-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2>{{ __('Browse by style') }}</h2>
                            <div class="small-border bg-color-2"></div>
                        </div>
                    </div>
                    @foreach(Arr::take(\App\Enums\ProductStyle::cases(), 6) as $style)
                        <div class="col-md-2 col-sm-4 col-6 mb-sm-30 wow fadeInRight"
                             data-wow-delay="{{ ".{$loop->iteration}s" }}">
                            <a href="{{ route('products.index', ['style' => [$style->value]]) }}"
                               class="icon-box style-2 rounded">
                                <img src="{{ $style->image() }}" alt="" width="80%">
                                <span>{{ $style->translatedValue() }}</span>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
