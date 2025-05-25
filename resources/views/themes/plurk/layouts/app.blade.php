<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    @section('meta')
        @if(isset($meta))
            {{ $meta }}
        @else
            <title>{{ config('app.name', 'Laravel') }}</title>
            <meta content="" name="description"/>
            <meta content="" name="keywords"/>
            <meta content="" name="author"/>
        @endif
    @show
    <link rel="icon" type="icon" href="{{ asset('assets/images/favicon.png') }}"/>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;700;800;900&display=swap"
          rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}"/>
    <link href="{{ asset('assets/css/aos.css') }}" rel="stylesheet"/>

    <link rel="stylesheet" href="{{ asset('assets/css/fancybox.css') }}" />
    @stack('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
{{--    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>--}}


    @cookieconsentscripts
</head>

<body class="overflow-x-hidden">
<!-- screen loader -->
<div class="screen_loader fixed inset-0 z-[60] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
    <svg
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        width="200px"
        height="200px"
        viewBox="0 0 100 100"
        preserveAspectRatio="xMidYMid"
    >
        <circle cx="50" cy="50" r="0" fill="none" stroke="#47bdff" stroke-width="4">
            <animate
                attributeName="r"
                repeatCount="indefinite"
                dur="1s"
                values="0;16"
                keyTimes="0;1"
                keySplines="0 0.2 0.8 1"
                calcMode="spline"
                begin="0s"
            ></animate>
            <animate
                attributeName="opacity"
                repeatCount="indefinite"
                dur="1s"
                values="1;0"
                keyTimes="0;1"
                keySplines="0.2 0 0.8 1"
                calcMode="spline"
                begin="0s"
            ></animate>
        </circle>
        <circle cx="50" cy="50" r="0" fill="none" stroke="#b476e5" stroke-width="4">
            <animate
                attributeName="r"
                repeatCount="indefinite"
                dur="1s"
                values="0;16"
                keyTimes="0;1"
                keySplines="0 0.2 0.8 1"
                calcMode="spline"
                begin="-0.5s"
            ></animate>
            <animate
                attributeName="opacity"
                repeatCount="indefinite"
                dur="1s"
                values="1;0"
                keyTimes="0;1"
                keySplines="0.2 0 0.8 1"
                calcMode="spline"
                begin="-0.5s"
            ></animate>
        </circle>
    </svg>
</div>

<div
    class="flex min-h-screen flex-col bg-white bg-gradient-to-r from-[#FCF1F4] to-[#EDFBF9] font-mulish text-base font-normal text-gray antialiased dark:bg-[#101926] dark:from-transparent dark:to-transparent">
    @include('themes.plurk.partials.header')

    @yield('content')

    @include('themes.plurk.partials.footer')

    @cookieconsentview
</div>

<!-- Return to Top -->
<button type="button" id="scrollToTopBtn" class="fixed bottom-5 z-10 hidden animate-bounce ltr:right-5 rtl:left-5"
        onclick="scrollToTop()">
    <div
        class="group flex h-14 w-14 items-center justify-center rounded-full border border-black/20 bg-black text-white transition duration-500 hover:bg-secondary dark:bg-primary dark:hover:bg-secondary"
    >
        <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="h-6 w-6 transition group-hover:text-black"
        >
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5"/>
        </svg>
    </div>
</button>

<!-- Swiper Slider JS -->
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<!-- Counter Js -->
<script src="{{ asset('assets/js/vanilla-counter.js') }}"></script>
<!-- AOS Animation JS -->
<script src="{{ asset('assets/js/aos.js') }}"></script>
<!-- Custom Js -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

<script src="{{ asset('assets/js/fancybox.umd.js') }}"></script>

<script>
    var swiper = new Swiper('.ofc-slider', {
        slidesPerView: 'auto',
        loop: true,
        spaceBetween: 30,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.ofc-slider-button-next',
            prevEl: '.ofc-slider-button-prev',
        },
    });
</script>

@stack('scripts')
</body>
</html>
