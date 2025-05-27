@php use App\Models\Product; @endphp

@section('meta')
    <title>{{ $product->title }} - {{ config('app.name', 'Laravel') }}</title>
@endsection

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
                            {{ $product->title }}
                        </h1>
                        <ul class="flex gap-1 justify-center">
                            <li>
                                <a
                                        href="{{ route('home') }}"
                                        class="text-lg text-blackColor2 dark:text-blackColor2-dark">
                                    {{ __('Home') }}
                                    <i class="icofont-simple-right"></i>
                                </a>
                            </li>
                            <li>
                                <a
                                        href="{{ route('products.index') }}"
                                        class="text-lg text-blackColor2 dark:text-blackColor2-dark">
                                    {{ __('Image Stock') }}
                                    <i class="icofont-simple-right"></i>
                                </a>
                            </li>
                            <li>
                                <span class="text-lg text-blackColor2 dark:text-blackColor2-dark">
                                    {{ $product->title }}
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!--blog details section -->
        <section>
            <div class="container py-50px md:py-70px lg:py-20 2xl:py-100px">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-30px">
                    <div class="lg:col-start-1 lg:col-span-8 space-y-[35px]">
                        <!-- event heading -->
                        {{--                        <div>--}}
                        {{--                            <p--}}
                        {{--                                class="text-sm text-whiteColor bg-indigo rounded leading-25px px-2 mb-30px inline-block"--}}
                        {{--                                data-aos="fade-up">--}}
                        {{--                                {{ $product->category }}--}}
                        {{--                            </p>--}}
                        {{--                            <p--}}
                        {{--                                class="text-sm text-white bg-secondaryColor rounded leading-25px px-2 mb-30px inline-block"--}}
                        {{--                                data-aos="fade-up">--}}
                        {{--                                {{ $product->style }}--}}
                        {{--                            </p>--}}
                        {{--                        </div>--}}
                        <!-- event 1 -->
                        <div data-aos="fade-up" class="mb-30px">
                            <!-- blog thumbnail -->
                            <div class="overflow-hidden relative mb-35px">
                                <img
                                        src="{{ asset('storage/' . $product->getThumbnailPath()) }}"
                                        alt=""
                                        class="w-full"
                                >
                            </div>
                            <!-- blog content -->
                            <div>
                                <h4
                                        class="text-size-26 font-bold text-blackColor dark:text-blackColor-dark mb-15px !leading-30px"
                                        data-aos="fade-up"
                                >
                                    Description
                                </h4>
                                <p
                                        class="text-darkdeep4 mb-15px !leading-29px"
                                        data-aos="fade-up"
                                >
                                    {{ $product->description }}
                                </p>
                            </div>
                        </div>
                        <div
                            class="flex justify-between items-center flex-wrap py-10 mb-10 border-y border-borderColor2 dark:border-borderColor2-dark gap-y-10px"
                            data-aos="fade-up"
                        >
                            <div>
                                <ul class="flex flex-wrap gap-10px">
                                    <li>
                                        <p
                                            class="text-lg md:text-size-22 leading-7 md:leading-30px text-blackColor dark:text-blackColor-dark font-bold"
                                        >
                                            Tag
                                        </p>
                                    </li>
                                    <li>
                                        <a
                                            href="{{ route('products.index', ['category' => [$product->category]]) }}"
                                            class="px-2 py-5px md:px-3 md:py-9px text-contentColor text-size-11 md:text-xs font-medium uppercase border border-borderColor2 hover:text-whiteColor hover:bg-primaryColor hover:border-primaryColor dark:text-contentColor-dark dark:border-borderColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:hover:border-primaryColor rounded"
                                        >{{ $product->category }}</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            href="{{ route('products.index', ['style' => [$product->style]]) }}"
                                            class="px-2 py-5px md:px-3 md:py-9px text-contentColor text-size-11 md:text-xs font-medium uppercase border border-borderColor2 hover:text-whiteColor hover:bg-primaryColor hover:border-primaryColor dark:text-contentColor-dark dark:border-borderColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:hover:border-primaryColor rounded"
                                        >{{ $product->style }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-start-9 lg:col-span-4">
                        <div
                                class="py-33px px-25px shadow-event mb-30px"
                                data-aos="fade-up"
                        >
                            <div class="flex justify-between mb-50px">
                                <div
                                        class="text-size-21 font-bold text-primaryColor font-inter leading-25px">
                                    {{ $product->price }} VFT
                                </div>
                            </div>
                            <ul>
                                <li class="flex items-center gap-x-10px mb-25px pb-22px border-b border-borderColor dark:border-borderColor-dark">
                                    <div>
                                        <p class="text-sm font-medium text-contentColor dark:text-contentColor-dark">
                                            <span class="mr-7px text-blackColor dark:text-blackColor-dark">
                                              Category:
                                            </span>
                                            {{ $product->category }}
                                        </p>
                                    </div>
                                </li>
                                <li class="flex items-center gap-x-10px mb-25px pb-22px border-b border-borderColor dark:border-borderColor-dark">
                                    <div>
                                        <p class="text-sm font-medium text-contentColor dark:text-contentColor-dark">
                                            <span class="mr-7px text-blackColor dark:text-blackColor-dark">
                                              Style:
                                            </span>
                                            {{ $product->style }}
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <div class="mt-30px" data-aos="fade-up">
                                <button
                                        type="submit"
                                        class="text-size-15 text-whiteColor bg-primaryColor px-14 py-10px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark"
                                >
                                    {{ __('Buy') }}
                                </button>
                            </div>
                        </div>
                        <div class="p-5 md:p-30px lg:p-5 2xl:p-30px mb-30px border border-borderColor2 dark:border-borderColor2-dark aos-init aos-animate"
                             data-aos="fade-up">
                            <h4 class="text-size-22 text-blackColor dark:text-blackColor-dark font-bold pl-2 before:w-0.5 relative before:h-[21px] before:bg-primaryColor before:absolute before:bottom-[5px] before:left-0 leading-30px mb-25px">
                                {{ __('Follow Us') }}
                            </h4>
                            <div>
                                <ul class="flex gap-4 items-center">
                                    @if(env('SOCIAL_NETWORK_FACEBOOK'))
                                        <li>
                                            <a href="{{ env('SOCIAL_NETWORK_FACEBOOK') }}"
                                               class="w-38px h-38px leading-38px text-center text-blackColor2 bg-whitegrey2 hover:text-whiteColor hover:bg-primaryColor dark:bg-whitegrey2-dark dark:text-blackColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor rounded"><i
                                                        class="icofont-facebook"></i></a>
                                        </li>
                                    @endif
                                    @if(env('SOCIAL_NETWORK_INSTAGRAM'))
                                        <li>
                                            <a href="{{ env('SOCIAL_NETWORK_INSTAGRAM') }}"
                                               class="w-38px h-38px leading-38px text-center text-blackColor2 bg-whitegrey2 hover:text-whiteColor hover:bg-primaryColor dark:bg-whitegrey2-dark dark:text-blackColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor rounded"><i
                                                        class="icofont-instagram"></i></a>
                                        </li>
                                    @endif
                                    @if(env('SOCIAL_NETWORK_X'))
                                        <li>
                                            <a href="{{ env('SOCIAL_NETWORK_X') }}"
                                               class="w-38px h-38px leading-38px text-center text-blackColor2 bg-whitegrey2 hover:text-whiteColor hover:bg-primaryColor dark:bg-whitegrey2-dark dark:text-blackColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor rounded"><i
                                                        class="icofont-twitter"></i></a>
                                        </li>
                                    @endif
                                    @if(env('SOCIAL_NETWORK_YOUTUBE'))
                                        <li>
                                            <a href="{{ env('SOCIAL_NETWORK_YOUTUBE') }}"
                                               class="w-38px h-38px leading-38px text-center text-blackColor2 bg-whitegrey2 hover:text-whiteColor hover:bg-primaryColor dark:bg-whitegrey2-dark dark:text-blackColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor rounded"><i
                                                        class="icofont-youtube"></i></a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
