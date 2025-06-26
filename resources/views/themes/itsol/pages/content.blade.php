@extends('themes.itsol.layouts.app')

@section('content')
    <div class="fancy-feature-fiftyOne relative mt-[200px]">
        <div class="container">
            <div class="flex flex-wrap mx-[-12px]">
                <div class="xl:w-7/12 lg:w-7/12 w-full flex-[0_0_auto] px-[12px] max-w-full wow fadeInLeft">
                    <div class="title-style-five mb-[65px] lg:mb-10 md:mb-10 sm:mb-10 xsm:mb-10">
                        <h2 class="mt-30 text-6xl main-title font-bold text-black text-[72px] leading-[1.25em] 2xl:text-[58px] lg:text-[50px] md:text-[35px] sm:text-[35px] xsm:text-[35px]">
                            {{ $page->title }}
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        <img src="{{ asset('assets2/images/lazy.svg') }}" data-src="images/shape/shape_172.svg" alt="" class="lazy-img shapes shape-two absolute z-[-1] right-[17%] 2xl:right-[8%] lg:right-[6%] md:!hidden sm:!hidden xsm:!hidden top-[4%]">
    </div>


    <div class="pt-[70px] pb-[50px] lg:pb-[10px] md:pb-[10px] sm:pb-[10px] xsm:pb-[10px]  md:pt-[10px] sm:pt-[10px] xsm:pt-[10px]">
            <div class="container mb-20">
            {!! $page['content']  !!}
            </div>
    </div>
@endsection
