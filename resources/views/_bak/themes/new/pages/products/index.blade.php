@extends('themes.new.layouts.app')

@section('content')
    <div class="fancy-feature-fiftyOne relative mt-[200px]">
        <div class="container">
            <div class="flex flex-wrap mx-[-12px]">
                <div class="xl:w-7/12 lg:w-7/12 w-full flex-[0_0_auto] px-[12px] max-w-full wow fadeInLeft">
                    <div class="title-style-five mb-[65px] lg:mb-5 md:mb-5 sm:mb-5 xsm:mb-5">
                        <div class="sc-title-two italic relative text-[17px] text-[color:var(--prime-ten)] mb-5 pl-10 before:content-[''] before:absolute before:w-6 before:h-px before:left-0 before:top-3.5 before:bg-[var(--prime-ten)]">
                            {{ __('Created by AI') }}
                        </div>
                        <h2 class="font-Recoleta main-title font-medium text-black text-[72px] leading-[1.25em] 2xl:text-[58px] lg:text-[50px] md:text-[35px] sm:text-[35px] xsm:text-[35px]">Creatives</h2>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('images/lazy.svg') }}" data-src="{{ asset('assets2/images/shape/shape_172.svg') }}" alt="" class="lazy-img shapes shape-two absolute z-[-1] right-[17%] 2xl:right-[8%] lg:right-[6%] md:!hidden sm:!hidden xsm:!hidden top-[4%]">
    </div>

    <div class="blog-section-five mt-[70px] lg:mt-[30px] md:mt-[30px] sm:mt-[30px] xsm:mt-[30px]">
        <div class="container">
            <div class="">
                <div class=" flex flex-wrap xl:mx-[-24px] ">
                    <div class="xl:w-9/12 lg:w-9/12 w-full flex-[0_0_auto] px-[12px] max-w-full">
                        <div class="blog-meta-wrapper xxl:!pr-[3rem] ">
                            <div class="flex flex-wrap mx-[-12px]">
                                @foreach($products as $product)
                                <div class="xl:w-3/12 lg:w-3/12 md:w-3/12 w-full flex-[0_0_auto] px-[12px] max-w-full">
                                    <article class="blog-meta-three mb-10  lg:mb-10 md:mb-10 sm:mb-10 xsm:mb-10 wow fadeInUp">
                                        <figure class="post-img !m-0 overflow-hidden rounded-[10px]">
                                            <a href="{{ route('products.show', $product->slug) }}" class="w-full block">
                                                <img src="{{ asset('assets2/images/lazy.svg') }}" data-src="{{ asset('storage/' . $product->getThumbnailPath()) }}" alt="" class="lazy-img w-full tran4s">
                                            </a>
                                        </figure>
                                        <div class="mt-[15px]">
                                            <div class="text-center uppercase text-[14px] tracking-[1px] lg:text-[12px] md:text-[12px] sm:text-[12px] xsm:text-[12px] ">
                                                {{ __('Price :amount', ['amount' => $product->price]) }} SAT
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="page-pagination-one pt-[30px]">
                            {{ $products->appends(request()->query())->links() }}
                        </div>
                    </div>

                    <div class="xl:w-3/12 lg:w-3/12 md:w-9/12 w-full flex-[0_0_auto] px-[12px] max-w-full">
                        <div class="blog-sidebar md:mt-[70px] sm:mt-[70px] xsm:mt-[70px]">
                            <div class="blog-sidebar-category mb-[60px] md:mb-[50px] sm:mb-[50px] xsm:mb-[50px] ">
                                <h4 class="sidebar-title text-[28px] lg:text-[22px] md:text-[22px] sm:text-[22px] xsm:text-[22px] mb-[15px]">Category</h4>
                                <ul class=" mb-0 pl-0 list-none ">
                                    @foreach(\App\Enums\ProductCategory::cases() as $category)
                                        <li>
                                            <a href="{{ route('products.index', ['category' => [$category]]) }}" class="text-[16px] leading-10 block text-black transition-all duration-[0.3s] ease-[ease-in-out] hover:text-[color:var(--prime-ten)]">
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
        </div>
    </div>
@endsection
