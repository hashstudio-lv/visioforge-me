<x-app-layout>
    <!-- content begin -->
    <div id="content" class="no-top">
        <div id="top"></div>
        <section id="subheader">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>{{ $page->title }}</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-intro" class="pt80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1 class="wow fadeInUp" data-wow-delay=".5s">
                            {{ __('Your Gateway to AI-powered Business Solutions') }}
                        </h1>
                    </div>
                    <div class="col-md-5 xs-hide">
                        <p class="wow fadeInUp lead" data-wow-delay=".75s">
                            {{ __('At :name, we are dedicated to empowering creativity through innovative AI solutions. Founded with a passion for technology and artistry, our mission is to provide a platform where users can explore, create, and engage with unique AI-generated prompts. We believe in the transformative power of artificial intelligence and its ability to inspire and enhance creative projects. Join us on this journey as we unlock new possibilities for artists, writers, and creators everywhere!', ['name' => config('app.name')]) }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-hero" class="no-top no-bottom" aria-label="section">
            <div class="d-carousel">
                <div id="item-carousel-big-type-4" class="owl-carousel owl-center wow fadeIn" data-wow-delay="1s">
                    @foreach(\App\Models\Product::public()->take(6)->get() as $product)
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
    </div>
    <!-- content close -->
    <a href="#" id="back-to-top"></a>
</x-app-layout>
