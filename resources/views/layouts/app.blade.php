<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    @section('meta')
        @if (isset($meta))
            {{ $meta }}
        @else
            <title>{{ config('app.name', 'Laravel') }}</title>
        @endif
    @show

    <link
        rel="shortcut icon"
        type="image/x-icon"
        href="{{ asset('assets/images/favicon.ico') }}"
    >

    <link
        rel="stylesheet"
        href="{{ asset('assets/css/icofont.min.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('assets/css/video-modal.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('assets/css/swiper-bundle.min.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('assets/css/aos.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('assets/css/style.css') }}"
    >
    <script
        defer
        src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>

    @stack('custom-styles')

    <!-- Google tag (gtag.js) -->
    <script
        async
        src="https://www.googletagmanager.com/gtag/js?id=G-5MZE0W603V"
    ></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-5MZE0W603V');
    </script>
</head>

<body class="font-inter bg-bodyBg dark:bg-bodyBg-dark relative text-base font-normal leading-[1.8]">
    <div>
        <div class="fixed-shadow left-[-250px]"></div>
        <div class="fixed-shadow right-[-250px]"></div>
    </div>

    <div>
        <button
            class="scroll-up w-50px h-50px leading-50px text-primaryColor hover:text-whiteColor hover:bg-primaryColor shadow-scroll-up z-medium dark:text-whiteColor dark:bg-primaryColor dark:hover:text-whiteColor-dark fixed bottom-[60px] right-5 hidden rounded-full bg-white text-center text-xl"
        >
            <i class="icofont-rounded-up"></i>
        </button>
    </div>
    <header>
        <div
            class="sticky-header z-medium dark:bg-whiteColor-dark border-borderColor dark:border-borderColor-dark transition-all duration-500 lg:border-b">
            <nav>
                <div
                    class="py-15px px-15px sm:container-fluid 3xl:container-secondary 4xl:container container relative mx-auto lg:container lg:py-0">
                    <div class="gap-15px grid grid-cols-2 items-center lg:grid-cols-12">
                        <!-- navbar left -->
                        <div class="lg:col-span-2 lg:col-start-1">
                            <a
                                href="{{ route('home') }}"
                                class="block text-3xl font-bold"
                            >
                                <span class="text-primaryColor">VISIO</span><span
                                    class="text-secondaryColor">FORGE</span>
                            </a>
                        </div>
                        <!-- Main menu -->
                        <div class="hidden lg:col-span-7 lg:col-start-3 lg:block">
                            <ul class="nav-list flex justify-center">
                                @foreach ([
                                    ['title' => __('Home'), 'url' => route('home'), 'is_active' => request()->route()->getName() == 'home'],
                                    ['title' => __('Generate Agreements'), 'url' => route('pages.agreements'), 'is_active' => request()->route()->getName() == 'pages.agreements'],
                                    ['title' => __('Generate Emails'), 'url' => route('pages.emails'), 'is_active' => request()->route()->getName() == 'pages.emails'],
                                    ['title' => __('Image Stock'), 'url' => route('products.index'), 'is_active' => request()->route()->getName() == 'products.index']
                                ] as $item)
                                    <li class="nav-item group">
                                        <a
                                            href="{{ $item['url'] }}"
                                            class="@if ($item['is_active']) text-primaryColor @endif lg:px-10px 2xl:px-15px 3xl:px-5 2xl:py-30px 3xl:py-10 leading-sm 2xl:leading-lg group-hover:text-primaryColor block px-5 py-10 text-base font-semibold lg:py-5 lg:text-sm 2xl:text-base"
                                        >
                                            {{ $item['title'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- navbar right -->
                        <div class="lg:col-span-3 lg:col-start-10">
                            <ul class="nav-list relative flex items-center justify-end">
                                @if (auth()->check())
                                    <li class="hidden lg:block">
                                        <a
                                            href="{{ route('login') }}"
                                            class="text-size-12 2xl:text-size-15 px-15px text-blackColor hover:text-whiteColor bg-whiteColor hover:bg-primaryColor border-borderColor1 rounded-standard 2xl:mr-15px dark:text-blackColor-dark dark:bg-whiteColor-dark dark:hover:bg-primaryColor dark:hover:text-whiteColor dark:hover:border-primaryColor mr-[7px] block border py-2 font-semibold"
                                        >
                                            <i class="icofont-user-alt-5"></i>
                                        </a>
                                    </li>
                                @else
                                    <li class="hidden lg:block">
                                        <a
                                            href="{{ route('login') }}"
                                            class="text-size-12 2xl:text-size-15 px-15px text-blackColor hover:text-whiteColor bg-whiteColor hover:bg-primaryColor border-borderColor1 rounded-standard 2xl:mr-15px dark:text-blackColor-dark dark:bg-whiteColor-dark dark:hover:bg-primaryColor dark:hover:text-whiteColor dark:hover:border-primaryColor mr-[7px] block border py-2 font-semibold"
                                        >
                                            <i class="icofont-user-alt-5"></i>
                                        </a>
                                    </li>
                                    <li class="hidden lg:block">
                                        <a
                                            href="{{ route('register') }}"
                                            class="text-size-12 2xl:text-size-15 text-whiteColor bg-primaryColor border-primaryColor hover:text-primaryColor px-15px rounded-standard dark:hover:bg-whiteColor-dark dark: dark:hover:text-whiteColor block border py-2 hover:bg-white"
                                        >
                                            {{ __('Get Start') }}
                                        </a>
                                    </li>
                                @endif
                                <li class="relative">
                                    <button
                                        class="text-contentColor dark:text-contentColor-dark pl-15px flex items-center uppercase"
                                    >
                                        {{ app()->getLocale() }}
                                        <i class="icofont-rounded-down"></i>
                                    </button>
                                    <!-- dropdown menu -->
                                    <div
                                        class="dropdown z-medium absolute left-0 hidden translate-y-10 opacity-0"
                                        style="transition: 0.3s; display: none; opacity: 0; transform: translateY(20px);"
                                    >
                                        <div
                                            class="shadow-dropdown3 max-w-dropdown2 w-2000 rounded-standard dark:bg-whiteColor-dark bg-white">
                                            <ul>
                                                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                    <li>
                                                        <a
                                                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                                            class="text-size-13 text-blackColor p-10px hover:bg-darkdeep4 hover:text-whiteColor dark:text-blackColor-dark dark:hover:text-whiteColor-dark dark:hover:bg-darkdeep4 flex items-center capitalize transition duration-300"
                                                        >
                                                            {{ $properties['native'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="block lg:hidden" style="margin-left: 10px;">
                                    <button
                                        class="open-mobile-menu text-darkdeep1 hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor text-3xl"
                                    >
                                        <i class="icofont-navigation-menu"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <div
            class="mobile-menu w-mobile-menu-sm md:w-mobile-menu-lg w-mobile-menu shadow-dropdown-secodary bg-whiteColor dark:bg-whiteColor-dark z-high fixed -right-[280px] top-0 block h-full transition-all duration-500 md:-right-[330px] lg:hidden">
            <button
                class="close-mobile-menu bg-darkdeep1 hover:bg-secondaryColor absolute right-full top-0 hidden px-[11px] py-[6px] text-lg text-white"
            >
                <i class="icofont icofont-close-line"></i>
            </button>
            <div class="md:px-30px pb-50px h-full overflow-y-auto px-5 pt-5 md:pt-10">
                <div class="border-borderColor dark:border-borderColor-dark border-b pb-6">
                    <ul class="accordion-container">
                        <li class="accordion">
                            @foreach ([
                                ['title' => __('Home'), 'url' => route('home'), 'is_active' => request()->route()->getName() == 'home'],
                                ['title' => __('Generate Agreements'), 'url' => route('pages.agreements'), 'is_active' => request()->route()->getName() == 'pages.agreements'],
                                ['title' => __('Generate Emails'), 'url' => route('pages.emails'), 'is_active' => request()->route()->getName() == 'pages.emails'],
                                ['title' => __('Image Stock'), 'url' => route('products.index'), 'is_active' => request()->route()->getName() == 'products.index']
                            ] as $item)
                            <div class="flex items-center justify-between">
                                <a
                                    @class([
                                        "leading-1 py-11px text-darkdeep1 hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor font-medium",
                                        "text-secondaryColor" => $item['is_active'],
                                    ])
                                    href="{{ $item['url'] }}"
                                >
                                    {{ $item['title'] }}
                                </a>
                            </div>
                            @endforeach
                        </li>
                    </ul>
                </div>

                <div>
                    <ul
                        class="accordion-container mb-30px border-borderColor dark:border-borderColor-dark mt-5 border-b pb-9"
                        style="margin-top: 20px; padding-bottom: 20px;"
                    >
                        @guest
                            <li class="accordion group py-11px">
                                <div class="accordion-controller flex items-center justify-between">
                                    <a
                                        class="leading-1 text-darkdeep1 group-hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor font-medium"
                                        href="{{ route('login') }}"
                                    >
                                        {{ __('Login') }}
                                    </a>
                                </div>
                            </li>

                            <li class="accordion group py-11px">
                                <div class="accordion-controller flex items-center justify-between">
                                    <a
                                        class="leading-1 text-darkdeep1 group-hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor font-medium"
                                        href="{{ route('register') }}"
                                    >
                                        {{ __('Register') }}
                                    </a>
                                </div>
                            </li>
                        @endguest

                        @auth
                            <li class="accordion group py-11px">
                                <div class="accordion-controller flex items-center justify-between">
                                    <a
                                        class="leading-1 text-darkdeep1 group-hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor font-medium"
                                        href="{{ route('dashboard') }}"
                                    >
                                        {{ __('Dashboard') }}
                                    </a>
                                </div>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="bg-darkblack">
        <div class="pt-65px container">
            <div>
                <div
                    class="pb-45px border-darkcolor grid grid-cols-1 items-center gap-y-5 border-b md:grid-cols-2 md:gap-y-0">
                    <div data-aos="fade-up">
                        <a
                            href="{{ route('login') }}"
                            class="text-4xl font-bold"
                        >
                            <span class="text-primaryColor">VISIO</span><span class="text-secondaryColor">FORGE</span>
                        </a>
                    </div>
                    <div>
                        <div
                            x-data="{ submitted: false }"
                            class="max-w-form-xl md:max-w-form-md lg:max-w-form-lg xl:max-w-form-xl 2xl:max-w-form-2xl ml-auto"
                        >
                            <form
                                x-show="!submitted"
                                @submit.prevent="submitted = true"
                                class="bg-deepgray relative rounded"
                                data-aos="fade-up"
                            >
                                <input
                                    type="email"
                                    placeholder="{{ __('Enter your email here') }}"
                                    class="text-whiteColor h-62px pl-15px border-deepgray focus:border-whitegrey w-full rounded border bg-transparent focus:outline-none"
                                >
                                <button
                                    type="submit"
                                    class="md:px-10px bg-primaryColor hover:bg-deepgray lg:text-size-15 text-whiteColor border-primaryColor absolute right-0 top-0 block h-full rounded border px-3 text-xs lg:px-5"
                                >
                                    {{ __('Subscribe Now') }}
                                </button>
                            </form>

                            <div
                                x-show="submitted"
                                x-transition
                                class="text-whiteColor mt-4 rounded bg-green-600 px-4 py-3 text-sm"
                            >
                                {{ __('Thank you for subscribing!') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section>
                <div
                    class="gap-30px pt-60px pb-50px md:pt-30px md:pb-30px lg:pt-110px mb-5 grid grid-cols-12 md:gap-y-5 lg:gap-y-0 lg:pb-20">
                    <div
                        class="mr-30px col-span-12 col-start-1 md:col-span-6 lg:col-span-4"
                        data-aos="fade-up"
                    >
                        <h4 class="text-size-22 text-whiteColor mb-3 font-bold">
                            {{ __('About us') }}
                        </h4>
                        <p
                            class="text-darkgray mb-30px leading-1.8 2xl:leading-1.8 text-base lg:text-sm 2xl:text-base">
                            {{ __('Professionals and teams around the world rely on VisioForge.me for smart, AI-powered email writing, contract creation, and access to stunning stock images — all in one place.') }}
                        </p>
                        <ul
                            class="flex gap-3 lg:gap-2 2xl:gap-3"
                            data-aos="fade-up"
                        >
                            @if (env('SOCIAL_NETWORK_FACEBOOK'))
                                <li>
                                    <a
                                        href="{{ env('SOCIAL_NETWORK_FACEBOOK') }}"
                                        target="_blank"
                                        class="leading-11 2xl:leading-11 text-whitegrey bg-darkgray hover:text-whiteColor dark:text-whiteColor-dark dark:bg-whiteColor dark:hover:bg-secondaryColor dark:hover:text-whiteColor h-11 w-11 rounded-full bg-opacity-10 text-center md:h-10 md:w-10 md:leading-10 2xl:h-11 2xl:w-11"
                                    >
                                        <i class="icofont-facebook"></i>
                                    </a>
                                </li>
                            @endif
                            @if (env('SOCIAL_NETWORK_FACEBOOK'))
                                <li>
                                    <a
                                        href="{{ env('SOCIAL_NETWORK_X') }}"
                                        target="_blank"
                                        class="leading-11 2xl:leading-11 text-whitegrey bg-darkgray hover:text-whiteColor dark:text-whiteColor-dark dark:bg-whiteColor dark:hover:bg-secondaryColor dark:hover:text-whiteColor h-11 w-11 rounded-full bg-opacity-10 text-center md:h-10 md:w-10 md:leading-10 2xl:h-11 2xl:w-11"
                                    >
                                        <i class="icofont-twitter"></i>
                                    </a>
                                </li>
                            @endif
                            @if (env('SOCIAL_NETWORK_YOUTUBE'))
                                <li>
                                    <a
                                        href="{{ env('SOCIAL_NETWORK_YOUTUBE') }}"
                                        target="_blank"
                                        class="leading-11 2xl:leading-11 text-whitegrey bg-darkgray hover:text-whiteColor dark:text-whiteColor-dark dark:bg-whiteColor dark:hover:bg-secondaryColor dark:hover:text-whiteColor h-11 w-11 rounded-full bg-opacity-10 text-center md:h-10 md:w-10 md:leading-10 2xl:h-11 2xl:w-11"
                                    >
                                        <i class="icofont-youtube"></i>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <!-- middle 1 -->
                    <div
                        class="col-span-12 col-start-1 md:col-span-6 md:col-start-7 lg:col-span-2 lg:col-start-5"
                        data-aos="fade-up"
                    >
                        <h4 class="text-size-22 text-whiteColor mb-3 font-bold">
                            {{ __('Usefull Links') }}
                        </h4>
                        <ul class="flex flex-col gap-y-3">
                            @foreach ([['url' => route('home'), 'title' => __('Home')], ['url' => route('pages.agreements'), 'title' => __('Agreement Generation')], ['url' => route('pages.emails'), 'title' => __('Email Generation')], ['url' => route('products.index'), 'title' => __('Image Stock')], ['url' => route('pages.show', 'contact-us'), 'title' => __('Contact Us')]] as $item)
                                <li>
                                    <a
                                        href="{{ $item['url'] }}"
                                        class="text-darkgray hover:text-primaryColor after:h-2px after:bg-primaryColor relative after:absolute after:bottom-0 after:left-0 after:w-0 after:transition-all after:duration-300 hover:after:w-full"
                                    >{{ $item['title'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- middle 2 -->
                    <div
                        class="2xl:pl-60px col-span-12 col-start-1 pl-0 md:col-span-6 md:col-start-1 lg:col-span-3 lg:col-start-7"
                        data-aos="fade-up"
                    >
                        <h4 class="text-size-22 text-whiteColor mb-3 font-bold">
                            {{ __('Image Stock') }}
                        </h4>
                        <ul class="flex flex-col gap-y-3">
                            @foreach (Arr::take(\App\Enums\ProductCategory::cases(), 6) as $item)
                                <li>
                                    <a
                                        href="{{ route('products.index', ['category' => [$item->value]]) }}"
                                        class="text-darkgray hover:text-primaryColor after:h-2px after:bg-primaryColor relative after:absolute after:bottom-0 after:left-0 after:w-0 after:transition-all after:duration-300 hover:after:w-full"
                                    >
                                        {{ $item->translatedValue() }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- right -->
                    <div
                        class="2xl:pl-50px col-span-12 col-start-1 pl-0 md:col-span-6 md:col-start-7 lg:col-span-3 lg:col-start-10"
                        data-aos="fade-up"
                    >
                        <h4 class="text-size-22 text-whiteColor mb-3 font-bold">
                            {{ __('Languages') }}
                        </h4>
                        <ul class="flex flex-col gap-y-3">
                            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    <a
                                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                        class="text-darkgray hover:text-primaryColor after:h-2px after:bg-primaryColor relative capitalize after:absolute after:bottom-0 after:left-0 after:w-0 after:transition-all after:duration-300 hover:after:w-full"
                                    >
                                        {{ $properties['native'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </section>

            <div class="text-darkgray flex flex-col items-center justify-between py-5 text-base sm:flex-row lg:py-10">
                <div>
                    {{ env('COMPANY_NAME') }},
                    {{ env('COMPANY_ADDRESS') }},
                    <a
                        href="tel:{{ env('COMPANY_PHONE') }}"
                        class="mobile tran3s xsm:text-[18px] text-[20px] font-medium text-[color:var(--prime-two)] hover:underline sm:text-[18px] md:text-[18px] lg:text-[18px]"
                    >
                        {{ env('COMPANY_PHONE') }}
                    </a>
                </div>

                <div class="flex items-center">
                    <div class="mr-2">
                        <img
                            src="{{ asset('assets/images/PngItem_7569533.png') }}"
                            style="width: 3rem;"
                        >
                    </div>
                    <div class="mr-2">
                        <img
                            src="{{ asset('assets/images/Visa_Brandmark_Blue_RGB_2021.png') }}"
                            style="width: 3rem;"
                        >
                    </div>
                    <div>
                        <img
                            src="{{ asset('assets/images/ma_symbol_opt_73_2x.png') }}"
                            style="width: 3rem;"
                        >
                    </div>
                </div>
            </div>
            <!-- footer copyright  -->
            <div>
                <div
                    class="border-darkcolor grid grid-cols-1 items-center gap-5 border-t py-5 sm:grid-cols-2 lg:py-10">
                    <div>
                        <p class="text-darkgray text-base">
                            {{ __('© :year Powered by', ['year' => now()->format('Y')]) }}
                            <a
                                href="{{ route('home') }}"
                                class="hover:text-primaryColor"
                            >{{ config('app.name') }}</a>.
                            {{ __('All Rights Reserved.') }}
                        </p>
                    </div>

                    <div>
                        <ul class="flex items-center justify-end">
                            <li>
                                <a
                                    href="{{ route('pages.show', 'terms-and-conditions') }}"
                                    class="text-darkgray hover:text-primaryColor border-darkgray leading-1 border-r pr-4 text-base"
                                >
                                    {{ __('Terms & Conditions') }}
                                </a>
                            </li>
                            <li>
                                <a
                                    href="{{ route('pages.show', 'privacy-policy') }}"
                                    class="text-darkgray hover:text-primaryColor border-darkgray leading-1 border-r pl-4 pr-4 text-base"
                                >
                                    {{ __('Privacy Policy') }}
                                </a>
                            </li>
                            <li>
                                <a
                                    href="{{ route('pages.show', 'cookie-policy') }}"
                                    class="text-darkgray hover:text-primaryColor pl-4 text-base"
                                >
                                    {{ __('Cookie Policy') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}?t={{ now()->timestamp }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}?t={{ now()->timestamp }}"></script>
    <script src="{{ asset('assets/js/accordion.js') }}?t={{ now()->timestamp }}"></script>
    <script src="{{ asset('assets/js/chart.js') }}?t={{ now()->timestamp }}"></script>
    <script src="{{ asset('assets/js/count.js') }}?t={{ now()->timestamp }}"></script>
    <script src="{{ asset('assets/js/countdown.js') }}?t={{ now()->timestamp }}"></script>
    <script src="{{ asset('assets/js/counterup.js') }}?t={{ now()->timestamp }}"></script>
    <script src="{{ asset('assets/js/dropdown.js') }}?t={{ now()->timestamp }}"></script>
    <script src="{{ asset('assets/js/filter.js') }}?t={{ now()->timestamp }}"></script>
    <script src="{{ asset('assets/js/mobileMenu.js') }}?t={{ now()->timestamp }}"></script>
    <script src="{{ asset('assets/js/modal.js') }}?t={{ now()->timestamp }}"></script>
    <script src="{{ asset('assets/js/popup.js') }}?t={{ now()->timestamp }}"></script>
    <script src="{{ asset('assets/js/scrollUp.js') }}?t={{ now()->timestamp }}"></script>
    <script src="{{ asset('assets/js/slider.js') }}?t={{ now()->timestamp }}"></script>
    <script src="{{ asset('assets/js/smoothScroll.js') }}?t={{ now()->timestamp }}"></script>
    <script src="{{ asset('assets/js/stickyHeader.js') }}?t={{ now()->timestamp }}"></script>
    <script src="{{ asset('assets/js/tabs.js?t=1') }}?t={{ now()->timestamp }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}?t={{ now()->timestamp }}"></script>
    <script src="{{ asset('assets/js/videoModal.js') }}?t={{ now()->timestamp }}"></script>
    <script src="{{ asset('assets/js/vanilla-tilt.js') }}?t={{ now()->timestamp }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}?t={{ now()->timestamp }}"></script>
    <script src="{{ asset('assets/js/main.js') }}?t={{ now()->timestamp }}"></script>
</body>

</html>
