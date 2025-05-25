@extends('themes.new.layouts.app')

@section('content')
    <div class="fancy-feature-fiftyOne relative mt-[200px]">
        <div class="container">
            <div class="mb-[65px] flex justify-between items-center flex-wrap mx-[-12px]">
                <div class="xl:w-7/12 lg:w-7/12 w-full flex-[0_0_auto] px-[12px] max-w-full wow fadeInLeft">
                    <div class="title-style-five lg:mb-10 md:mb-10 sm:mb-10 xsm:mb-10">
                        <h2 class="main-title font-medium text-black text-[72px] leading-[1.25em] 2xl:text-[58px] lg:text-[50px] md:text-[35px] sm:text-[35px] xsm:text-[35px]">
                            @yield('dashboard-title')
                        </h2>
                    </div>
                </div>

                <div>
                    @yield('dashboard-title-addition')
                </div>
            </div>
        </div>
        <img
            src="{{ asset('assets2/images/lazy.svg') }}"
            data-src="images/shape/shape_172.svg"
            alt=""
            class="lazy-img shapes shape-two absolute z-[-1] right-[17%] 2xl:right-[8%] lg:right-[6%] md:!hidden sm:!hidden xsm:!hidden top-[4%]"
        >
        <img
            src="{{ asset('assets2/images/shape/shape_175.svg') }}"
            alt=""
            class="lazy-img shapes shape-three absolute z-[-1] bottom-[-30%] left-[5%] md:!hidden sm:!hidden xsm:!hidden"
        >
    </div>

        <div
            class="service-details relative mt-[100px] mb-[170px] md:mt-[50px] sm:mt-[50px] xsm:mt-[50px] lg:mb-[120px] md:mb-[120px] sm:mb-[120px] xsm:mb-[120px]"
        >
        <div class="container">
            <div class="flex flex-wrap mx-[-12px]">
                <div
                    class="xl:w-9/12 lg:w-8/12 w-full flex-[0_0_auto] px-[12px] max-w-full first-line:lg:w-8/12 xl:order-1 lg:order-1">
                    <div class="service-details-meta xl:!pl-[3rem] lg:!pl-[3rem] ">
                        @yield('dashboard-content')
                    </div>
                </div>
                <div
                    class="xl:w-3/12 lg:w-4/12 md:w-8/12 w-full flex-[0_0_auto] px-[12px] max-w-full xl:order-none lg:order-none">
                    <div class="service-sidebar xxl:!pr-[3rem]  md:mt-[60px] sm:mt-[60px] xsm:mt-[60px]">
                        @include('themes.new.partials.dashboard.nav-bar')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
