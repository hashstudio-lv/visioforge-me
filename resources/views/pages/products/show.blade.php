@php use App\Models\Product; @endphp
@section('meta')
    <title>{{ $product->title }} - {{ config('app.name', 'Laravel') }}</title>
@endsection

@extends('themes.new.layouts.app')

@section('content')
    <div class="fancy-feature-fiftyOne relative mt-[200px]">
        <div class="container">
            <div class="flex flex-wrap mx-[-12px]">
                <div class="xl:w-7/12 lg:w-7/12 w-full flex-[0_0_auto] px-[12px] max-w-full wow fadeInLeft">
                    <div class="title-style-five mb-[65px] lg:mb-10 md:mb-10 sm:mb-10 xsm:mb-10">
                        <div
                            class="font-Recoleta  sc-title-two italic relative text-[17px] text-[color:var(--prime-ten)] mb-5 pl-10 before:content-[''] before:absolute before:w-6 before:h-px before:left-0 before:top-3.5 before:bg-[var(--prime-ten)]">
                            {{ __('Creatives') }}
                        </div>
                        <h2 class="font-Recoleta main-title font-medium text-black text-[72px] leading-[1.25em] 2xl:text-[58px] lg:text-[50px] md:text-[35px] sm:text-[35px] xsm:text-[35px]">
                            {{ $product->title }}
                        </h2>
                    </div>
                </div>
            </div>
        </div> <!-- /.container -->
        <img src="{{ asset('assets2/images/lazy.svg') }}" data-src="{{ asset('assets2/images/shape/shape_172.svg') }}"
             alt=""
             class="lazy-img shapes shape-two absolute z-[-1] right-[17%] 2xl:right-[8%] lg:right-[6%] md:!hidden sm:!hidden xsm:!hidden top-[4%]">
    </div>

    <div
        class="portfolio-details-two pt-[70px] pb-[50px] lg:pb-[10px] md:pb-[10px] sm:pb-[10px] xsm:pb-[10px]  md:pt-[10px] sm:pt-[10px] xsm:pt-[10px]">
        <div class="project-desctiption">
            <div class="container">
                <div class="flex flex-wrap mx-[-12px]">
                    <div class="xl:w-6/12 lg:w-6/12 w-full flex-[0_0_auto] px-[12px] max-w-full wow fadeInLeft">
                        <div id="gallery-carousel"
                             class="carousel slide relative xxl:mr-[3rem]  md:mb-10 sm:mb-10 xsm:mb-10 "
                             data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ $product->getThumbnailUrl() }}" class="block w-full" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="xl:w-6/12 lg:w-6/12 w-full flex-[0_0_auto] px-[12px] max-w-full wow fadeInRight">
                        <div class="sidebar  xl:ml-[3rem] ">
                            <h3 class="mb-5 text-[36px] lg:text-[26px] md:text-[26px] sm:text-[26px] xsm:text-[26px]">{{ __('About') }}</h3>
                            <p class=" border-b-[#f1f1f1] border-b border-solid  pb-10  mb-[35px] lg:pb-5 md:pb-5 sm:pb-5 xsm:pb-5 text-[20px] lg:text-[17px] md:text-[17px] sm:text-[17px] xsm:text-[17px]">
                                {{ $product->description }}
                            </p>
                            <div class="flex flex-wrap mx-[-12px]">
                                <div class="w-full mb-[35px] flex-[0_0_auto] px-[12px] max-w-full">
                                    <div
                                        class="pt-title font-bold text-black uppercase text-[15px] tracking-[1px] mb-1.5 lg:text-[14px] lg:mb-1 md:text-[14px] md:mb-1 sm:text-[14px] sm:mb-1 xsm:text-[14px] xsm:mb-1">
                                        {{ __('Category') }}</div>
                                    <div
                                        class="pt-text text-[18px] lg:text-[16px] md:text-[16px] sm:text-[16px] xsm:text-[16px] text-[#999999]">
                                        {{ $product->category  }}
                                    </div>
                                </div>

                                <div class="w-full mb-[35px] flex-[0_0_auto] px-[12px] max-w-full">
                                    <div
                                        class="pt-title font-bold text-black uppercase text-[15px] tracking-[1px] mb-1.5 lg:text-[14px] lg:mb-1 md:text-[14px] md:mb-1 sm:text-[14px] sm:mb-1 xsm:text-[14px] xsm:mb-1">
                                        {{ __('Price') }}</div>
                                    <div
                                        class="pt-text text-[18px] lg:text-[16px] md:text-[16px] sm:text-[16px] xsm:text-[16px] text-[#999999]">
                                        {{ __(':amount SAT', ['amount' => $product->price]) }}
                                    </div>
                                </div>

                                <a href="https://rc-shortsy-art.test/en/image-generation"
                                   class="tran3s text-[17px] font-medium btn-three mb-[25px] ml-[.5rem] !mr-[1rem] text-white leading-[52px] relative transition-all duration-[0.3s] ease-[ease-in-out] p-[0_40px] rounded-[28px] bg-[var(--prime-two)] hover:bg-[#090F32] md:p-[0_35px] md:leading-[48px] sm:p-[0_35px] sm:leading-[48px] xsm:p-[0_35px] xsm:leading-[48px] lg:text-[15px] md:text-[15px] sm:text-[15px] xsm:text-[15px]"
                                   data-bs-toggle="modal" data-bs-target="#contactModal">
                                    {{ __('Buy Now') }}
                                </a>

                                <div
                                    class="modal fade transition-opacity duration-[0.15s] ease-linear fixed z-[1055] hidden w-full h-full overflow-x-hidden overflow-y-auto left-0 top-0"
                                    id="contactModal" data-bs-backdrop="static" data-bs-keyboard="false"
                                    tabindex="-1"
                                    aria-hidden="true">
                                    <div
                                        class="modal-dialog modal-xl xl:max-w-[1140px] lg:max-w-[800px] relative w-auto pointer-events-none m-2">
                                        <div
                                            class="modal-content relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding border rounded-[0.3rem] border-solid border-[rgba(0,0,0,0.2)]">
                                            <div
                                                class="modal-header flex shrink-0 items-center justify-between rounded-tl-[calc(0.3rem_-_1px)] rounded-tr-[calc(0.3rem_-_1px)] p-4 border-b-[#dee2e6] border-b border-solid">
                                                <button type="button"
                                                        class="btn-close mt-[-0.5rem] mr-[-0.5rem] mb-[-0.5rem] ml-auto p-2 box-content w-[1em] h-[1em] text-black rounded opacity-50 border-0 hover:text-black hover:no-underline hover:opacity-75"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body p-0 relative flex-auto">
                                                <div class="container">
                                                    <div class="flex flex-wrap mx-[-12px]">
                                                        <div
                                                            class="xl:w-8/12 lg:w-8/12 sm:w-11/12 w-full flex-[0_0_auto] px-[12px] max-w-full m-auto">
                                                            <div
                                                                class="pt-[50px] pb-[70px] lg:pt-[30px] md:pt-[30px] sm:pt-[30px] xsm:pt-[30px] lg:pb-[30px] md:pb-[30px] sm:pb-[30px] xsm:pb-[30px] ">
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
                                                                        <div class="flex flex-col justify-center items-center">
                                                                            <h3>{{ __('Checkout') }}</h3>
                                                                            <p>{!! __('You are about to purchase a <b>:title</b>', ['title' => $product->title]) !!}</p>
                                                                            <form
                                                                                action="{{ route('products.purchase', $product->slug) }}"
                                                                                method="post">
                                                                                @csrf

                                                                                <button type="submit"
                                                                                        class="tran3s text-[17px] font-medium btn-three mb-[25px] ml-[.5rem] !mr-[1rem] text-white leading-[52px] relative transition-all duration-[0.3s] ease-[ease-in-out] p-[0_40px] rounded-[28px] bg-[var(--prime-two)] hover:bg-[#090F32] md:p-[0_35px] md:leading-[48px] sm:p-[0_35px] sm:leading-[48px] xsm:p-[0_35px] xsm:leading-[48px] lg:text-[15px] md:text-[15px] sm:text-[15px] xsm:text-[15px]">
                                                                                    {{ __('Buy for :amount AET', ['amount' => $product->price]) }}
                                                                                </button>
                                                                            </form>
                                                                        </div>
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
                    </div>
                </div>


                <div class="pr-pagination-one mt-[110px] xl:mt-20 lg:mt-20 md:mt-20 sm:mt-20 xsm:mt-20">
                    <ul class=" mb-0 pl-0 list-none  flex justify-between">
                        @php
                            $previousProduct = Product::public()->inRandomOrder()->where('id', '!=', $product->id)->first();
                            $nextProduct = Product::public()->inRandomOrder()->whereNotIn('id', [$product->id, $previousProduct->id])->first();
                        @endphp
                        <li>
                            <a href="{{ route('products.show', $previousProduct->slug) }}" class="wow fadeInLeft group">
                                <span class="flex sm:items-center xsm:items-center items-end">
                                    <i class="bi bi-arrow-left text-[32px] transition-all duration-[0.3s] ease-[ease-in-out] leading-[1em] group-hover:text-[color:var(--prime-ten)]"></i>
                                    <span class="ml-[1rem] ">
                                        <span
                                            class="pr-dir uppercase block text-[13px] tracking-[2.6px] text-[rgba(62,62,62,0.5)]">
                                            {{ __('Previous') }}
                                        </span>
                                        <span
                                            class="pr-name sm:hidden xsm:hidden block  tran3s font-medium  text-black  text-[22px] lg:text-[18px] md:text-[18px] sm:text-[18px] xsm:text-[18px] mt-1 group-hover:text-[color:var(--prime-ten)]">
                                            {{ $previousProduct->title  }}
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('products.show', $nextProduct->slug) }}" class="wow fadeInRight group">
                                <span class="flex sm:items-center xsm:items-center items-end">
                                    <span class="!mr-[1rem] ">
                                        <span
                                            class="pr-dir uppercase block text-[13px] tracking-[2.6px] text-[rgba(62,62,62,0.5)]">
                                            {{ __('Next') }}
                                        </span>
                                        <span
                                            class="pr-name sm:hidden xsm:hidden block  tran3s font-medium  text-black  text-[22px] lg:text-[18px] md:text-[18px] sm:text-[18px] xsm:text-[18px] mt-1 group-hover:text-[color:var(--prime-ten)]">
                                            {{ $nextProduct->title  }}
                                        </span>
                                    </span>
                                    <i class="bi bi-arrow-right text-[32px] transition-all duration-[0.3s] ease-[ease-in-out] leading-[1em] group-hover:text-[color:var(--prime-ten)]"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
