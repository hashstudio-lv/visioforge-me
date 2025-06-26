<x-app-layout>
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <section id="section-hero" aria-label="section" class="no-top no-bottom vh-100" data-bgimage="url({{ asset('assets/images/background/12.jpg') }}) bottom">
            <div id="particles-js"></div>
            <div class="v-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 offset-md-3 text-center">
                            <h6 class="wow fadeInUp" data-wow-delay=".5s"><span class="text-uppercase id-color-2">Your Trusted Digital Solutions</span></h6>
                            <div class="spacer-10"></div>
                            <h1 class="wow fadeInUp" data-wow-delay=".75s">Smart Tools for Images, Emails & Agreements</h1>
                            <p class="wow fadeInUp lead" data-wow-delay="1s">
                                Streamline your workflow with AI-powered image processing, seamless email solutions, and automated agreement generation – all in one place.
                            </p>
                            <div class="spacer-10"></div>
                            <a href="{{ route('pages.image-landing') }}" class="btn-main wow fadeInUp lead" data-wow-delay="1.25s">Images</a>
                            <a href="{{ route('pages.agreement-landing') }}" class="btn-main wow fadeInUp lead" data-wow-delay="1.50s">Agreements</a>
                            <a href="{{ route('pages.email-landing') }}" class="btn-main wow fadeInUp lead" data-wow-delay="1.75s">Emails</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-intro">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-sm-30">
                        <div class="feature-box f-boxed style-3">
                            <i class="wow fadeInUp bg-color-2 i-boxed icon_wallet"></i>
                            <div class="text">
                                <h4 class="wow fadeInUp">{{ __('AI-Powered Image Generation') }}</h4>
                                <p class="wow fadeInUp" data-wow-delay=".25s">
                                    {{ __('Create stunning, high-quality images instantly with our AI-driven tools. Generate unique visuals tailored to your needs with ease.') }}
                                </p>
                            </div>
                            <div>
                                <a href="{{ route('pages.image-landing') }}" class="btn-main wow fadeInUp lead">Explore images</a>
                            </div>
                            <i class="wm icon_wallet"></i>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-sm-30">
                        <div class="feature-box f-boxed style-3">
                            <i class="wow fadeInUp bg-color-2 i-boxed icon_cloud-upload_alt"></i>
                            <div class="text">
                                <h4 class="wow fadeInUp">{{ __('Automated Agreement Generation') }}</h4>
                                <p class="wow fadeInUp" data-wow-delay=".25s">
                                    {{ __('Effortlessly generate legally compliant agreements in seconds. Our platform simplifies document creation, saving you time and effort.') }}
                                </p>
                            </div>
                            <div>
                                <a href="{{ route('pages.agreement-landing') }}" class="btn-main wow fadeInUp lead">Generate agreement</a>
                            </div>
                            <i class="wm icon_cloud-upload_alt"></i>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-sm-30">
                        <div class="feature-box f-boxed style-3">
                            <i class="wow fadeInUp bg-color-2 i-boxed icon_tags_alt"></i>
                            <div class="text">
                                <h4 class="wow fadeInUp">{{ __('AI-Driven Email Generation') }}</h4>
                                <p class="wow fadeInUp" data-wow-delay=".25s">
                                    {{ __('Craft compelling, personalized emails with ease. Our AI-powered email generation helps you write, optimize, and automate messages for better communication and engagement.') }}
                                </p>
                            </div>
                            <div>
                                <a href="{{ route('pages.email-landing') }}" class="btn-main wow fadeInUp lead">Generate email</a>
                            </div>
                            <i class="wm icon_tags_alt"></i>
                        </div>
                    </div>
                </div>
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

        <section id="section-fun-facts">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <span class="p-title invert">Our Impact</span><br>
                        <h2>
                            Revolutionizing Workflows with AI
                        </h2>
                        <div class="small-border sm-left"></div>
                        <p>Empowering businesses with AI-driven image generation, contract automation, and intelligent email creation—enhancing efficiency, accuracy, and creativity.</p>
                    </div>

                    <div class="col-md-8 offset-md-1">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay="0s">
                                <div class="de_count">
                                    <h3><span class="timer" data-to="5" data-speed="3000">0</span>m+</h3>
                                    <h5 class="id-color">AI-generated images, agreements, and emails delivered.</h5>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay=".25s">
                                <div class="de_count">
                                    <h3><span class="timer" data-to="750" data-speed="3000">0</span>k+</h3>
                                    <h5 class="id-color">Businesses optimized their processes with our AI.</h5>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay=".4s">
                                <div class="de_count">
                                    <h3><span class="timer" data-to="99.9" data-speed="3000">0</span>%</h3>
                                    <h5 class="id-color">Accuracy in content, legal documents, and email generation.</h5>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay=".6s">
                                <div class="de_count">
                                    <h3><span class="timer" data-to="200" data-speed="3000">0</span>+</h3>
                                    <h5 class="id-color">Customizable templates for agreements and emails.</h5>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay=".8s">
                                <div class="de_count">
                                    <h3><span class="timer" data-to="20" data-speed="3000">0</span>k+</h3>
                                    <h5 class="id-color">Professionals and businesses rely on our AI solutions.</h5>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay="1s">
                                <div class="de_count">
                                    <h3><span class="timer" data-to="1" data-speed="3000">0</span>s</h3>
                                    <h5 class="id-color">To generate high-quality images, contracts, or emails instantly.</h5>
                                </div>
                            </div>
                        </div>
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
    </div>
</x-app-layout>
