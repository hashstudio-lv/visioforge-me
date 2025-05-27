<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @section('meta')
        @if(isset($meta))
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

    <link rel="stylesheet" href="{{ asset('assets/css/icofont.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/css/video-modal.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
<body
    class="relative font-inter font-normal text-base leading-[1.8] bg-bodyBg dark:bg-bodyBg-dark"
>
<!-- theme fixed shadow -->
<div>
    <div class="fixed-shadow left-[-250px]"></div>
    <div class="fixed-shadow right-[-250px]"></div>
</div>

<!-- scroll up button -->
<div>
    <button
        class="scroll-up w-50px h-50px leading-50px text-center text-primaryColor bg-white hover:text-whiteColor hover:bg-primaryColor rounded-full fixed right-5 bottom-[60px] shadow-scroll-up z-medium text-xl dark:text-whiteColor dark:bg-primaryColor dark:hover:text-whiteColor-dark hidden"
    >
        <i class="icofont-rounded-up"></i>
    </button>
</div>
<!--======= Header area start =======-->
<header>
    @include('includes.nav-bar')

    <!-- mobile menu -->
    <div
        class="mobile-menu w-mobile-menu-sm md:w-mobile-menu-lg fixed top-0 -right-[280px] md:-right-[330px] transition-all duration-500 w-mobile-menu h-full shadow-dropdown-secodary bg-whiteColor dark:bg-whiteColor-dark z-high block lg:hidden"
    >
        <button
            class="close-mobile-menu text-lg bg-darkdeep1 hover:bg-secondaryColor text-white px-[11px] py-[6px] absolute top-0 right-full hidden"
        >
            <i class="icofont icofont-close-line"></i>
        </button>
        <!-- mobile menu wrapper -->
        <div
            class="px-5 md:px-30px pt-5 md:pt-10 pb-50px h-full overflow-y-auto"
        >
            <!-- search input  -->
            <div
                class="pb-10 border-b border-borderColor dark:border-borderColor-dark"
            >
                <form
                    class="flex justify-between items-center w-full bg-whitegrey2 dark:bg-whitegrey2-dark px-15px py-[11px]"
                >
                    <input
                        type="text"
                        placeholder="Search entire store..."
                        class="bg-transparent w-4/5 focus:outline-none text-sm text-darkdeep1 dark:text-blackColor-dark"
                    >
                    <button
                        class="block text-lg text-darkdeep1 hover:text-secondaryColor dark:text-blackColor-dark dark:hover:text-secondaryColor"
                    >
                        <i class="icofont icofont-search-2"></i>
                    </button>
                </form>
            </div>

            <!-- mobile menu accordions -->
            <div
                class="pt-8 pb-6 border-b border-borderColor dark:border-borderColor-dark"
            >
                <ul class="accordion-container">
                    <li class="accordion">
                        <!-- accordion header -->
                        <div class="flex items-center justify-between">
                            <a
                                class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                href="index.html"
                            >Home</a
                            >
                            <button class="accordion-controller px-3 py-4">
                    <span
                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                    ></span
                    ><span
                                    class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-500"
                                ></span>
                            </button>
                        </div>
                        <!-- accordion content -->
                        <div
                            class="accordion-content h-0 overflow-hidden transition-all duration-500"
                        >
                            <div class="content-wrapper">
                                <ul class="accordion-container">
                                    <li class="accordion">
                                        <!-- accordion header -->
                                        <div class="flex items-center justify-between">
                                            <a
                                                href="index.html"
                                                class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                            >Home Light</a
                                            >
                                            <button class="accordion-controller px-3 py-4">
                            <span
                                class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                            ></span
                            ><span
                                                    class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-500"
                                                ></span>
                                            </button>
                                        </div>
                                        <!-- accordion content -->
                                        <div
                                            class="accordion-content h-0 overflow-hidden transition-all duration-500"
                                        >
                                            <div class="content-wrapper">
                                                <!-- Dropdown -->
                                                <ul>
                                                    <li>
                                                        <a
                                                            href="index.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Home (Default)</a
                                                        >
                                                    </li>

                                                    <li>
                                                        <a
                                                            href="home-2.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Elegant</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="home-3.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Classic</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="home-4.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Classic LMS</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="home-5.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Online Course</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="home-6.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Marketplace</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="home-7.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >University</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="home-8.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >ECommerce</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="home-9.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Kindergarten</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="home-10.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Machine Learning</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="home-11.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Single Course</a
                                                        >
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="accordion">
                                        <!-- accordion header -->
                                        <div class="flex items-center justify-between">
                                            <a
                                                href="index-dark.html"
                                                class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                            >Home Dark</a
                                            >
                                            <button class="accordion-controller px-3 py-4">
                            <span
                                class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                            ></span
                            ><span
                                                    class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-500"
                                                ></span>
                                            </button>
                                        </div>
                                        <!-- accordion content -->
                                        <div
                                            class="accordion-content h-0 overflow-hidden transition-all duration-500"
                                        >
                                            <div class="content-wrapper">
                                                <!-- Dropdown -->
                                                <ul>
                                                    <li>
                                                        <a
                                                            href="index-dark.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Home Default (Dark)</a
                                                        >
                                                    </li>

                                                    <li>
                                                        <a
                                                            href="home-2-dark.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Elegant (Dark)</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="home-3-dark.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Classic (Dark)</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="home-4-dark.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Classic LMS (Dark)</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="home-5-dark.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Online Course (Dark)</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="home-6-dark.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Marketplace (Dark)</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="home-7-dark.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >University (Dark)</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="home-8-dark.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >ECommerce (Dark)</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="home-9-dark.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Kindergarten (Dark)</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="home-10-dark.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Machine Learning (Dark)</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="home-11-dark.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Single Course (Dark)</a
                                                        >
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="accordion">
                        <!-- accordion header -->
                        <div class="flex items-center justify-between">
                            <a
                                class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                href="#"
                            >Pages</a
                            >
                            <button class="accordion-controller px-3 py-4">
                    <span
                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                    ></span
                    ><span
                                    class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-500"
                                ></span>
                            </button>
                        </div>
                        <!-- accordion content -->
                        <div
                            class="accordion-content h-0 overflow-hidden transition-all duration-500"
                        >
                            <div class="content-wrapper">
                                <ul class="accordion-container">
                                    <li class="accordion">
                                        <!-- accordion header -->
                                        <div class="flex items-center justify-between">
                                            <a
                                                href="#"
                                                class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                            >Get Started 1</a
                                            >
                                            <button class="accordion-controller px-3 py-4">
                            <span
                                class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                            ></span
                            ><span
                                                    class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-300"
                                                ></span>
                                            </button>
                                        </div>
                                        <!-- accordion content -->
                                        <div
                                            class="accordion-content h-0 overflow-hidden transition-all duration-300"
                                        >
                                            <div class="content-wrapper">
                                                <!-- Dropdown -->
                                                <ul>
                                                    <li>
                                                        <a
                                                            href="about.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >About</a
                                                        >
                                                    </li>

                                                    <li>
                                                        <a
                                                            href="about-dark.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >About (Dark)</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="blog.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Block</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="blog-dark.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Block (Dark)</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="blog-details.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Block Details</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="blog-details-dark.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Block Details (Dark)</a
                                                        >
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion">
                                        <!-- accordion header -->
                                        <div class="flex items-center justify-between">
                                            <a
                                                href="#"
                                                class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                            >Get Started 2</a
                                            >
                                            <button class="accordion-controller px-3 py-4">
                            <span
                                class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                            ></span
                            ><span
                                                    class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-300"
                                                ></span>
                                            </button>
                                        </div>
                                        <!-- accordion content -->
                                        <div
                                            class="accordion-content h-0 overflow-hidden transition-all duration-300"
                                        >
                                            <div class="content-wrapper">
                                                <!-- Dropdown -->
                                                <ul>
                                                    <li>
                                                        <a
                                                            href="error.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Error 404</a
                                                        >
                                                    </li>

                                                    <li>
                                                        <a
                                                            href="error-dark.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Error (Dark)</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="event-details.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Event Details</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="./pages/zoom/zoom-meetings.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Zoom
                                                            <span
                                                                class="px-15px py-5px text-primaryColor bg-whitegrey3 text-xs rounded ml-5px"
                                                            >Online Call</span
                                                            ></a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="./pages/zoom/zoom-meetings-dark.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Zoom Meeting (Dark)</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="./pages/zoom/zoom-meeting-details.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Zoom Meeting Details</a
                                                        >
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion">
                                        <!-- accordion header -->
                                        <div class="flex items-center justify-between">
                                            <a
                                                href="#"
                                                class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                            >Get Started 3</a
                                            >
                                            <button class="accordion-controller px-3 py-4">
                            <span
                                class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                            ></span
                            ><span
                                                    class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-300"
                                                ></span>
                                            </button>
                                        </div>
                                        <!-- accordion content -->
                                        <div
                                            class="accordion-content h-0 overflow-hidden transition-all duration-300"
                                        >
                                            <div class="content-wrapper">
                                                <!-- Dropdown -->
                                                <ul>
                                                    <li>
                                                        <a
                                                            href="./pages/zoom/zoom-meeting-details-dark.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Meeting Details (Dark)</a
                                                        >
                                                    </li>

                                                    <li>
                                                        <a
                                                            href="login.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Login</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="login-dark.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Login (Dark)</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="maintenance.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Maintenance</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="maintenance-dark.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Maintenance (Dark)</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="#"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Term & Condition</a
                                                        >
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion">
                                        <!-- accordion header -->
                                        <div class="flex items-center justify-between">
                                            <a
                                                href="#"
                                                class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                            >Get Started 4</a
                                            >
                                            <button class="accordion-controller px-3 py-4">
                            <span
                                class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                            ></span
                            ><span
                                                    class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-300"
                                                ></span>
                                            </button>
                                        </div>
                                        <!-- accordion content -->
                                        <div
                                            class="accordion-content h-0 overflow-hidden transition-all duration-300"
                                        >
                                            <div class="content-wrapper">
                                                <!-- Dropdown -->
                                                <ul>
                                                    <li>
                                                        <a
                                                            href="#"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Term & Condition (Dark)</a
                                                        >
                                                    </li>

                                                    <li>
                                                        <a
                                                            href="#"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Privacy Policy
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="#"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Privacy Policy (Dark)</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="#"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Success Stories</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="#"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Success Stories (Dark)</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="#"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Work Policy</a
                                                        >
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" class="pl-15px pt-3 pb-7px"
                                        ><img
                                                class="w-full"
                                                src="./assets/images/mega/mega_menu_2.png"
                                                alt=""
                                            ></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="accordion">
                        <!-- accordion header -->
                        <div class="flex items-center justify-between">
                            <a
                                class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                href="course.html"
                            >Courses</a
                            >
                            <button class="accordion-controller px-3 py-4">
                    <span
                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                    ></span
                    ><span
                                    class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-500"
                                ></span>
                            </button>
                        </div>
                        <!-- accordion content -->
                        <div
                            class="accordion-content h-0 overflow-hidden transition-all duration-500"
                        >
                            <div class="content-wrapper">
                                <ul class="accordion-container">
                                    <li class="accordion">
                                        <!-- accordion header -->
                                        <div class="flex items-center justify-between">
                                            <a
                                                href="#"
                                                class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                            >Get Started 1</a
                                            >
                                            <button class="accordion-controller px-3 py-4">
                            <span
                                class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                            ></span
                            ><span
                                                    class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-300"
                                                ></span>
                                            </button>
                                        </div>
                                        <!-- accordion content -->
                                        <div
                                            class="accordion-content h-0 overflow-hidden transition-all duration-300"
                                        >
                                            <div class="content-wrapper">
                                                <!-- Dropdown -->
                                                <ul>
                                                    <li>
                                                        <a
                                                            href="course.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Grid</a
                                                        >
                                                    </li>

                                                    <li>
                                                        <a
                                                            href="course-dark.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Course Grid (Dark)</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="course-dark.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Course Grid</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="course-grid-dark.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Course Grid (Dark)</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="course-list.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Course List</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="course-list-dark.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Course List (Dark)</a
                                                        >
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion">
                                        <!-- accordion header -->
                                        <div class="flex items-center justify-between">
                                            <a
                                                href="#"
                                                class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                            >Get Started 2</a
                                            >
                                            <button class="accordion-controller px-3 py-4">
                            <span
                                class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                            ></span
                            ><span
                                                    class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-300"
                                                ></span>
                                            </button>
                                        </div>
                                        <!-- accordion content -->
                                        <div
                                            class="accordion-content h-0 overflow-hidden transition-all duration-300"
                                        >
                                            <div class="content-wrapper">
                                                <!-- Dropdown -->
                                                <ul>
                                                    <li>
                                                        <a
                                                            href="course-details.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Course Details</a
                                                        >
                                                    </li>

                                                    <li>
                                                        <a
                                                            href="course-details-dark.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Course Details (Dark)</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="course-details-2.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Course Details 2</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="course-details-2-dark.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Details 2 (Dark)
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="course-details-3.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Course Details 3</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="course-details-3-dark.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Details 3 (Dark)</a
                                                        >
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion">
                                        <!-- accordion header -->
                                        <div class="flex items-center justify-between">
                                            <a
                                                href="#"
                                                class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                            >Get Started 3</a
                                            >
                                            <button class="accordion-controller px-3 py-4">
                            <span
                                class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                            ></span
                            ><span
                                                    class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-300"
                                                ></span>
                                            </button>
                                        </div>
                                        <!-- accordion content -->
                                        <div
                                            class="accordion-content h-0 overflow-hidden transition-all duration-300"
                                        >
                                            <div class="content-wrapper">
                                                <!-- Dropdown -->
                                                <ul>
                                                    <li>
                                                        <a
                                                            href="./pages/dashboards/become-an-instructor.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Become An Instructor</a
                                                        >
                                                    </li>

                                                    <li>
                                                        <a
                                                            href="./pages/dashboards/create-course.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Create Course
                                                            <span
                                                                class="px-15px py-5px text-primaryColor bg-whitegrey3 text-xs rounded ml-5px"
                                                            >Career</span
                                                            >
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="instructor.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Instructor</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="instructor-dark.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Instructor (Dark)</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="instructor-details.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Instructor Details</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="lesson.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Course Lesson
                                                            <span
                                                                class="px-15px py-5px text-secondaryColor bg-whitegrey3 text-xs rounded ml-5px"
                                                            >New</span
                                                            >
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="#" class="pl-15px pt-3 pb-7px"
                                        ><img
                                                class="w-full"
                                                src="./assets/images/mega/mega_menu_1.png"
                                                alt=""
                                            ></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="accordion">
                        <!-- accordion header -->
                        <div class="flex items-center justify-between">
                            <a
                                class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                href="./pages/dashboards/instructor-dashboard.html"
                            >Dashboard</a
                            >
                            <button class="accordion-controller px-3 py-4">
                    <span
                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                    ></span
                    ><span
                                    class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-500"
                                ></span>
                            </button>
                        </div>
                        <!-- accordion content -->
                        <div
                            class="accordion-content h-0 overflow-hidden transition-all duration-500"
                        >
                            <div class="content-wrapper">
                                <ul class="accordion-container">
                                    <li class="accordion">
                                        <!-- accordion header -->
                                        <div class="flex items-center justify-between">
                                            <a
                                                href="./pages/dashboards/admin-dashboard.html"
                                                class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                            >Admin</a
                                            >
                                            <button class="accordion-controller px-3 py-4">
                            <span
                                class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                            ></span
                            ><span
                                                    class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-300"
                                                ></span>
                                            </button>
                                        </div>
                                        <!-- accordion content -->
                                        <div
                                            class="accordion-content h-0 overflow-hidden transition-all duration-300"
                                        >
                                            <div class="content-wrapper">
                                                <!-- Dropdown -->
                                                <ul>
                                                    <li>
                                                        <a
                                                            href="./pages/dashboards/admin-dashboard.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Admin Dashboard</a
                                                        >
                                                    </li>

                                                    <li>
                                                        <a
                                                            href="./pages/dashboards/admin-profile.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Admin Profile</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="./pages/dashboards/admin-message.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Message</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="./pages/dashboards/admin-course.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Courses</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="./pages/dashboards/admin-reviews.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Review</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="./pages/dashboards/admin-quiz-attempts.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Admin Quiz</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="./pages/dashboards/admin-settings.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Settings</a
                                                        >
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion">
                                        <!-- accordion header -->
                                        <div class="flex items-center justify-between">
                                            <a
                                                href="./pages/dashboards/instructor-dashboard.html"
                                                class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                            >Instructor</a
                                            >
                                            <button class="accordion-controller px-3 py-4">
                            <span
                                class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                            ></span
                            ><span
                                                    class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-300"
                                                ></span>
                                            </button>
                                        </div>
                                        <!-- accordion content -->
                                        <div
                                            class="accordion-content h-0 overflow-hidden transition-all duration-300"
                                        >
                                            <div class="content-wrapper">
                                                <!-- Dropdown -->
                                                <ul>
                                                    <li>
                                                        <a
                                                            href="./pages/dashboards/instructor-dashboard.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Inst. Dashboard</a
                                                        >
                                                    </li>

                                                    <li>
                                                        <a
                                                            href="./pages/dashboards/instructor-profile.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Inst. Profile</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="./pages/dashboards/instructor-message.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Message</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="./pages/dashboards/instructor-wishlist.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Wishlist
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="./pages/dashboards/instructor-reviews.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Review</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="./pages/dashboards/instructor-my-quiz-attempts.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >My Quiz</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="./pages/dashboards/instructor-order-history.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Order History</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="./pages/dashboards/instructor-course.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >My Courses</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="./pages/dashboards/instructor-announcments.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Announcements</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="./pages/dashboards/instructor-quiz-attempts.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Quiz Attempts</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="./pages/dashboards/instructor-assignments.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Assignments</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="./pages/dashboards/instructor-settings.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Settings</a
                                                        >
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion">
                                        <!-- accordion header -->
                                        <div class="flex items-center justify-between">
                                            <a
                                                href="./pages/dashboards/student-dashboard.html"
                                                class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                            >Student</a
                                            >
                                            <button class="accordion-controller px-3 py-4">
                            <span
                                class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                            ></span
                            ><span
                                                    class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-300"
                                                ></span>
                                            </button>
                                        </div>
                                        <!-- accordion content -->
                                        <div
                                            class="accordion-content h-0 overflow-hidden transition-all duration-300"
                                        >
                                            <div class="content-wrapper">
                                                <!-- Dropdown -->
                                                <ul>
                                                    <li>
                                                        <a
                                                            href="./pages/dashboards/student-dashboard.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Dashboard</a
                                                        >
                                                    </li>

                                                    <li>
                                                        <a
                                                            href="./pages/dashboards/student-profile.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Profile
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="./pages/dashboards/student-message.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Message</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="./pages/dashboards/student-enrolled-courses.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Enrolled Courses</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="./pages/dashboards/student-wishlist.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Wishlist</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="./pages/dashboards/student-reviews.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Review
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="./pages/dashboards/student-my-quiz-attempts.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >My Quiz
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="./pages/dashboards/student-assignments.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Assignment
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="./pages/dashboards/student-settings.html"
                                                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                                        >Settings
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="accordion">
                        <!-- accordion header -->
                        <div class="flex items-center justify-between">
                            <a
                                class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                href="./pages/ecommerce/shop.html"
                            >ECommerce</a
                            >
                            <button class="accordion-controller px-3 py-4">
                    <span
                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                    ></span
                    ><span
                                    class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-500"
                                ></span>
                            </button>
                        </div>
                        <!-- accordion content -->
                        <div
                            class="accordion-content h-0 overflow-hidden transition-all duration-500"
                        >
                            <div class="content-wrapper">
                                <ul>
                                    <li>
                                        <!-- accordion header -->
                                        <div class="flex items-center justify-between">
                                            <a
                                                href="./pages/ecommerce/shop.html"
                                                class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                            >Shop
                                                <span
                                                    class="px-15px py-5px text-primaryColor bg-whitegrey3 text-xs rounded ml-5px"
                                                >Online Store</span
                                                ></a
                                            >
                                        </div>
                                    </li>
                                    <li>
                                        <!-- accordion header -->
                                        <div class="flex items-center justify-between">
                                            <a
                                                href="./pages/ecommerce/product-details.html"
                                                class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                            >Product Details</a
                                            >
                                        </div>
                                        <!-- accordion content -->
                                    </li>
                                    <li>
                                        <!-- accordion header -->
                                        <div class="flex items-center justify-between">
                                            <a
                                                href="./pages/ecommerce/cart.html"
                                                class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                            >Cart</a
                                            >
                                        </div>
                                        <!-- accordion content -->
                                    </li>
                                    <li>
                                        <!-- accordion header -->
                                        <div class="flex items-center justify-between">
                                            <a
                                                href="./pages/ecommerce/checkout.html"
                                                class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                            >Checkout</a
                                            >
                                        </div>
                                        <!-- accordion content -->
                                    </li>
                                    <li>
                                        <!-- accordion header -->
                                        <div class="flex items-center justify-between">
                                            <a
                                                href="./pages/ecommerce/wishlist.html"
                                                class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                            >Wishlist</a
                                            >
                                        </div>
                                        <!-- accordion content -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- my account accordion -->
            <div>
                <ul
                    class="accordion-container mt-9 mb-30px pb-9 border-b border-borderColor dark:border-borderColor-dark"
                >
                    <li class="accordion group">
                        <!-- accordion header -->
                        <div
                            class="accordion-controller flex items-center justify-between"
                        >
                            <a
                                class="leading-1 text-darkdeep1 font-medium group-hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                href="#"
                            >My Account</a
                            >
                            <button class="px-3 py-1">
                                <i
                                    class="icofont-thin-down text-size-15 text-darkdeep1 group-hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                ></i>
                            </button>
                        </div>
                        <!-- accordion content -->
                        <div
                            class="accordion-content h-0 overflow-hidden transition-all duration-500 shadow-standard"
                        >
                            <div class="content-wrapper">
                                <ul>
                                    <li>
                                        <!-- accordion header -->
                                        <div class="flex items-center gap-1">
                                            <a
                                                href="login.html"
                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-7 pb-3 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                            >Login
                                            </a>

                                            <a
                                                href="login.html"
                                                class="leading-1 text-darkdeep1 text-sm pr-30px pt-7 pb-4 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                            >
                                                <span>/</span> Create Account
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- accordion header -->
                                        <div class="flex items-center justify-between">
                                            <a
                                                href="login.html"
                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                            >My Account</a
                                            >
                                        </div>
                                        <!-- accordion content -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Mobile menu social area -->
            <div>
                <ul class="flex gap-6 items-center mb-5">
                    <li>
                        <a class="facebook" href="#"
                        ><i
                                class="icofont icofont-facebook text-fb-color dark:text-whiteColor dark:hover:text-secondaryColor"
                            ></i
                            ></a>
                    </li>
                    <li>
                        <a class="twitter" href="#"
                        ><i
                                class="icofont icofont-twitter text-twiter-color dark:text-whiteColor dark:hover:text-secondaryColor"
                            ></i
                            ></a>
                    </li>
                    <li>
                        <a class="pinterest" href="#"
                        ><i
                                class="icofont icofont-pinterest dark:text-whiteColor dark:hover:text-secondaryColor"
                            ></i
                            ></a>
                    </li>
                    <li>
                        <a class="instagram" href="#"
                        ><i
                                class="icofont icofont-instagram dark:text-whiteColor dark:hover:text-secondaryColor"
                            ></i
                            ></a>
                    </li>
                    <li>
                        <a class="google" href="#"
                        ><i
                                class="icofont icofont-youtube-play dark:text-whiteColor dark:hover:text-secondaryColor"
                            ></i
                            ></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

@yield('content')

<footer class="bg-darkblack">
    <div class="container pt-65px">
        <div>
            <div
                class="grid grid-cols-1 md:grid-cols-2 gap-y-5 md:gap-y-0 items-center pb-45px border-b border-darkcolor"
            >
                <div data-aos="fade-up">
                    <a href="{{ route('login') }}" class="text-primaryColor font-bold text-4xl">
                        VISIO<span class="text-white">FORGE</span>
                    </a>
                </div>
                <div>
                    <form
                        class="max-w-form-xl md:max-w-form-md lg:max-w-form-lg xl:max-w-form-xl 2xl:max-w-form-2xl bg-deepgray ml-auto rounded relative"
                        data-aos="fade-up"
                    >
                        <input
                            type="email"
                            placeholder="Enter your email here"
                            class="text-whiteColor h-62px pl-15px focus:outline-none border border-deepgray focus:border-whitegrey bg-transparent rounded w-full"
                        >
                        <button
                            type="submit"
                            class="px-3 md:px-10px lg:px-5 bg-primaryColor hover:bg-deepgray text-xs lg:text-size-15 text-whiteColor border border-primaryColor block rounded absolute right-0 top-0 h-full"
                        >
                            Subscribe Now
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- footer main -->
        <section>
            <div
                class="grid grid-cols-12 gap-30px md:gap-y-5 lg:gap-y-0 pt-60px pb-50px md:pt-30px md:pb-30px lg:pt-110px lg:pb-20 mb-5"
            >
                <!-- left -->
                <div
                    class="col-start-1 col-span-12 md:col-span-6 lg:col-span-4 mr-30px"
                    data-aos="fade-up"
                >
                    <h4 class="text-size-22 font-bold text-whiteColor mb-3">
                        {{ __('About us') }}
                    </h4>
                    <p
                        class="text-base lg:text-sm 2xl:text-base text-darkgray mb-30px leading-1.8 2xl:leading-1.8"
                    >
                        {{ __('Professionals and teams around the world rely on VisioForge.me for smart, AI-powered email writing, contract creation, and access to stunning stock images — all in one place.') }}
                    </p>
                    <ul class="flex gap-3 lg:gap-2 2xl:gap-3" data-aos="fade-up">
                        <li>
                            <a
                                href="#"
                                class="w-11 md:w-10 2xl:w-11 h-11 md:h-10 2xl:h-11 leading-11 md:leading-10 2xl:leading-11 text-whitegrey bg-darkgray bg-opacity-10 hover:text-whiteColor dark:text-whiteColor-dark dark:bg-whiteColor dark:hover:bg-secondaryColor dark:hover:text-whiteColor rounded-full text-center"
                            ><i class="icofont-facebook"></i
                                ></a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="w-11 md:w-10 2xl:w-11 h-11 md:h-10 2xl:h-11 leading-11 md:leading-10 2xl:leading-11 text-whitegrey bg-darkgray bg-opacity-10 hover:text-whiteColor dark:text-whiteColor-dark dark:bg-whiteColor dark:hover:bg-secondaryColor dark:hover:text-whiteColor rounded-full text-center"
                            ><i class="icofont-twitter"></i
                                ></a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="w-11 md:w-10 2xl:w-11 h-11 md:h-10 2xl:h-11 leading-11 md:leading-10 2xl:leading-11 text-whitegrey bg-darkgray bg-opacity-10 hover:text-whiteColor dark:text-whiteColor-dark dark:bg-whiteColor dark:hover:bg-secondaryColor dark:hover:text-whiteColor rounded-full text-center"
                            ><i class="icofont-vimeo"></i
                                ></a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="w-11 md:w-10 2xl:w-11 h-11 md:h-10 2xl:h-11 leading-11 md:leading-10 2xl:leading-11 text-whitegrey bg-darkgray bg-opacity-10 hover:text-whiteColor dark:text-whiteColor-dark dark:bg-whiteColor dark:hover:bg-secondaryColor dark:hover:text-whiteColor rounded-full text-center"
                            ><i class="icofont-linkedin"></i
                                ></a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="w-11 md:w-10 2xl:w-11 h-11 md:h-10 2xl:h-11 leading-11 md:leading-10 2xl:leading-11 text-whitegrey bg-darkgray bg-opacity-10 hover:text-whiteColor dark:text-whiteColor-dark dark:bg-whiteColor dark:hover:bg-secondaryColor dark:hover:text-whiteColor rounded-full text-center"
                            ><i class="icofont-skype"></i
                                ></a>
                        </li>
                    </ul>
                </div>
                <!-- middle 1 -->
                <div
                    class="col-start-1 col-span-12 md:col-start-7 lg:col-start-5 md:col-span-6 lg:col-span-2"
                    data-aos="fade-up"
                >
                    <h4 class="text-size-22 font-bold text-whiteColor mb-3">
                        Usefull Links
                    </h4>
                    <ul class="flex flex-col gap-y-3">
                        @foreach([
                                ['url' => route('home'), 'title' => __('Home')],
                                ['url' => route('products.index'), 'title' => __('Agreement Generation')],
                                ['url' => route('products.index'), 'title' => __('Email Generation')],
                                ['url' => route('products.index'), 'title' => __('Image Stock')],
                                ['url' => route('pages.show', 'contact-us'), 'title' => __('Contact Us')],
                            ] as $item)
                            <li>
                                <a
                                    href="{{ $item['url'] }}"
                                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                                >{{ $item['title'] }}</a
                                >
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- middle 2 -->
                <div
                    class="col-start-1 col-span-12 md:col-start-1 lg:col-start-7 md:col-span-6 lg:col-span-3 pl-0 2xl:pl-60px"
                    data-aos="fade-up"
                >
                    <h4 class="text-size-22 font-bold text-whiteColor mb-3">
                        {{ __('Image Stock') }}
                    </h4>
                    <ul class="flex flex-col gap-y-3">
                        <li>
                            <a
                                href="#"
                                class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                            >Ui Ux Design</a
                            >
                        </li>
                        <li>
                            <a
                                href="#"
                                class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                            >Web Development</a
                            >
                        </li>
                        <li>
                            <a
                                href="#"
                                class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                            >Business Strategy</a
                            >
                        </li>
                        <li>
                            <a
                                href="#"
                                class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                            >Softwere Development</a
                            >
                        </li>
                        <li>
                            <a
                                href="#"
                                class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                            >Business English</a
                            >
                        </li>
                    </ul>
                </div>
                <!-- right -->
                <div
                    class="col-start-1 col-span-12 md:col-start-7 lg:col-start-10 md:col-span-6 lg:col-span-3 pl-0 2xl:pl-50px"
                    data-aos="fade-up"
                >
                    <h4 class="text-size-22 font-bold text-whiteColor mb-3">
                        {{ __('Languages') }}
                    </h4>
                    <ul class="flex flex-col gap-y-3">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                    class="capitalize text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>

        <!-- footer copyright  -->
        <div>
            <div
                class="grid grid-cols-1 sm:grid-cols-2 gap-5 py-5 lg:py-10 items-center border-t border-darkcolor"
            >
                <div>
                    <p class="text-base text-darkgray">
                        © 2024 Powered by
                        <a href="#" class="hover:text-primaryColor">Edurock</a>. All
                        Rights Reserved.
                    </p>
                </div>

                <div>
                    <ul class="flex items-center justify-end">
                        <li>
                            <a
                                href="{{ route('pages.show', 'terms-and-conditions') }}"
                                class="text-base text-darkgray hover:text-primaryColor pr-4 border-r border-darkgray leading-1">
                                {{ __('Terms & Conditions') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pages.show', 'privacy-policy') }}"
                                class="text-base text-darkgray hover:text-primaryColor pl-4 pr-4 border-r border-darkgray leading-1">
                                {{ __('Privacy Policy') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pages.show', 'cookie-policy') }}"
                               class="text-base text-darkgray hover:text-primaryColor pl-4">
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
