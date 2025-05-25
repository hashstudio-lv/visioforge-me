@extends('layouts.app')

@section('content')
    <main class="bg-transparent">
        <!-- banner section -->
        <section>
            <!-- banner section -->
            <div
                class="bg-lightGrey10 dark:bg-lightGrey10-dark relative z-0 overflow-y-visible py-50px md:py-20 lg:py-100px 2xl:pb-150px 2xl:pt-40.5"
            >
                <!-- animated icons -->
                <div>
                    <img
                        class="absolute left-0 bottom-0 md:left-[14px] lg:left-[50px] lg:bottom-[21px] 2xl:left-[165px] 2xl:bottom-[60px] animate-move-var z-10"
                        src="{{ asset('assets/images/herobanner/herobanner__1.png') }}"
                        alt=""
                    ><img
                        class="absolute left-0 top-0 lg:left-[50px] lg:top-[100px] animate-spin-slow"
                        src="{{ asset('assets/images/herobanner/herobanner__2.png') }}"
                        alt=""
                    ><img
                        class="absolute right-[30px] top-0 md:right-10 lg:right-[575px] 2xl:top-20 animate-move-var2 opacity-50 hidden md:block"
                        src="{{ asset('assets/images/herobanner/herobanner__3.png') }}"
                        alt=""
                    >

                    <img
                        class="absolute right-[30px] top-[212px] md:right-10 md:top-[157px] lg:right-[45px] lg:top-[100px] animate-move-hor"
                        src="{{ asset('assets/images/herobanner/herobanner__5.png') }}"
                        alt=""
                    >
                </div>
                <div class="container">
                    <div class="text-center">
                        <h1
                            class="text-3xl md:text-size-40 2xl:text-size-55 font-bold text-blackColor dark:text-blackColor-dark mb-7 md:mb-6 pt-3"
                        >
                            {{ __('Image Stock') }}
                        </h1>
                        <ul class="flex gap-1 justify-center">
                            <li>
                                <a
                                    href="{{ route('home') }}"
                                    class="text-lg text-blackColor2 dark:text-blackColor2-dark"
                                >{{ __('Home') }} <i class="icofont-simple-right"></i
                                    ></a>
                            </li>
                            <li>
                  <span
                      class="text-lg text-blackColor2 dark:text-blackColor2-dark"
                  >{{ __('Image Stock') }}</span
                  >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- courses section -->
        <div>
            <div class="container tab py-10 md:py-50px lg:py-60px 2xl:py-100px">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-30px">
                    <!-- courses sidebar -->
                    <div class="md:col-start-1 md:col-span-4 lg:col-span-3">
                        <div class="flex flex-col">
                            <!-- tags -->
                            <div
                                class="pt-30px pr-15px pl-10px pb-23px 2xl:pt-10 2xl:pr-25px 2xl:pl-5 2xl:pb-33px mb-30px border border-borderColor dark:border-borderColor-dark"
                                data-aos="fade-up"
                            >
                                <h4
                                    class="text-size-22 text-blackColor dark:text-blackColor-dark font-bold leading-30px mb-25px"
                                >
                                    {{ __('Categories') }}
                                </h4>
                                <ul class="flex flex-col gap-y-23px">
                                    @foreach(\App\Enums\ProductCategory::cases() as $category)
                                        <li class="text-primaryColor text-size-15 font-medium dark:text-contentColor-dark flex justify-between leading-26px group">
                                            <a href="{{ route('products.index', ['category' => [$category]]) }}" class="w-full flex items-center gap-11px">
                                                <span class="w-14px h-15px border border-primaryColor bg-primaryColor group-hover:border-primaryColor group-hover:bg-primaryColor"></span>
                                                <span>{{ $category->translatedValue() }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- courses main -->
                    <div
                        class="md:col-start-5 md:col-span-8 lg:col-start-4 lg:col-span-9 space-y-[30px]"
                    >
                        <div class="tab-contents">
                            <!-- grid ordered cards -->
                            <div
                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-30px"
                            >
                                @foreach($products as $product)

                                    <div class="group">
                                        <div class="tab-content-wrapper" data-aos="fade-up">
                                            <div
                                                class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark">
                                                <div
                                                    class="relative mb-4">
                                                    <a
                                                        href="{{ route('products.show', $product->slug) }}"
                                                        class="w-full overflow-hidden rounded">
                                                        <img
                                                            src="{{ asset('storage/' . $product->getThumbnailPath()) }}"
                                                            alt=""
                                                            class="w-full transition-all duration-300 group-hover:scale-110">
                                                    </a>
                                                    <div
                                                        class="absolute left-0 top-1 flex justify-between w-full items-center px-2">
                                                        <div>
                                                            <p class="text-xs text-whiteColor px-4 py-[3px] bg-secondaryColor rounded font-semibold">
                                                                {{ $product->category }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- card content -->
                                                <div>
                                                    <a
                                                        href="{{ route('products.show', $product->slug) }}"
                                                        class="text-lg font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                                                    >
                                                        {{ $product->title }}
                                                    </a>
                                                    <!-- price -->
                                                    <div
                                                        class="text-lg font-semibold text-primaryColor font-inter mb-4"
                                                    >
                                                        {{ $product->price }} VST
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div>
                            {{ $products->appends(request()->query())->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
