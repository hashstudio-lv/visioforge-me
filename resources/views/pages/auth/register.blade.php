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
                        src="./assets/images/herobanner/herobanner__1.png"
                        alt=""
                    ><img
                        class="absolute left-0 top-0 lg:left-[50px] lg:top-[100px] animate-spin-slow"
                        src="./assets/images/herobanner/herobanner__2.png"
                        alt=""
                    ><img
                        class="absolute right-[30px] top-0 md:right-10 lg:right-[575px] 2xl:top-20 animate-move-var2 opacity-50 hidden md:block"
                        src="./assets/images/herobanner/herobanner__3.png"
                        alt=""
                    >

                    <img
                        class="absolute right-[30px] top-[212px] md:right-10 md:top-[157px] lg:right-[45px] lg:top-[100px] animate-move-hor"
                        src="./assets/images/herobanner/herobanner__5.png"
                        alt=""
                    >
                </div>
                <div class="container">
                    <div class="text-center">
                        <h1
                            class="text-3xl md:text-size-40 2xl:text-size-55 font-bold text-blackColor dark:text-blackColor-dark mb-7 md:mb-6 pt-3"
                        >
                            Log In
                        </h1>
                        <ul class="flex gap-1 justify-center">
                            <li>
                                <a
                                    href="index.html"
                                    class="text-lg text-blackColor2 dark:text-blackColor2-dark"
                                >Home <i class="icofont-simple-right"></i
                                    ></a>
                            </li>
                            <li>
                  <span
                      class="text-lg text-blackColor2 dark:text-blackColor2-dark"
                  >Log In</span
                  >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!--form section -->
        <section class="relative">
            <div class="container py-100px">
                <div class="tab md:w-2/3 mx-auto">
                    <!-- tab controller -->

                    <div
                        class="tab-links grid grid-cols-2 gap-11px text-blackColor text-lg lg:text-size-22 font-semibold font-hind mb-43px mt-30px md:mt-0"
                    >
                        <a href="{{ route('login') }}"
                            class="text-center py-9px lg:py-6 hover:text-primaryColor dark:text-whiteColor dark:hover:text-primaryColor bg-white dark:bg-whiteColor-dark dark:hover:bg-whiteColor-dark hover:bg-white relative group/btn shadow-bottom hover:shadow-bottom dark:shadow-standard-dark disabled:cursor-pointer rounded-standard"
                        >
                <span
                    class="absolute w-full h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"
                ></span>

                            {{ __('Login') }}
                        </a>
                        <a href="{{ route('register') }}"
                            class="text-center py-9px lg:py-6 hover:text-primaryColor dark:hover:text-primaryColor dark:text-whiteColor bg-lightGrey7 dark:bg-lightGrey7-dark hover:bg-white dark:hover:bg-whiteColor-dark relative group/btn hover:shadow-bottom dark:shadow-standard-dark disabled:cursor-pointer rounded-standard"
                        >
                <span
                    class="absolute w-0 h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"
                ></span>

                            {{ __('Sing up') }}
                        </a>
                    </div>

                    <!--  tab contents -->
                    <div
                        class="shadow-container bg-whiteColor dark:bg-whiteColor-dark pt-10px px-5 pb-10 md:p-50px md:pt-30px rounded-5px"
                    >
                        <div class="tab-contents">
                            <!-- login form-->
                            <div
                                class="block opacity-100 transition-opacity duration-150 ease-linear"
                            >
                                <!-- heading   -->
                                <div class="text-center">
                                    <h3 class="text-size-32 font-bold text-blackColor dark:text-blackColor-dark mb-2 leading-normal">
                                        {{ __('Login') }}
                                    </h3>
                                    <p class="text-contentColor dark:text-contentColor-dark mb-15px">
                                        {{ __("Don't have an account yet?") }}
                                        <a href="{{ route('register') }}"
                                           class="hover:text-primaryColor relative after:absolute after:left-0 after:bottom-0.5 after:w-0 after:h-0.5 after:bg-primaryColor after:transition-all after:duration-300 hover:after:w-full">
                                            {{ __('Sign up for free') }}
                                        </a>
                                    </p>
                                </div>

                                <form class="pt-25px" data-aos="fade-up" method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="mb-25px">
                                        <label
                                            class="text-contentColor dark:text-contentColor-dark mb-10px block"
                                            id="input-email">
                                            {{ __('Email') }}
                                        </label>
                                        <input
                                            type="text"
                                            value="{{ old('email') }}"
                                            id="input-email"
                                            name="email"
                                            placeholder="Your email"
                                            class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded"
                                        >
                                        @error('email')
                                        <div class="text-red-600 pt-[10px]">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-25px">
                                        <label
                                            class="text-contentColor dark:text-contentColor-dark mb-10px block"
                                            for="input-password">
                                            {{ __('Password') }}
                                        </label>
                                        <input
                                            value="{{ old('password') }}"
                                            id="input-password"
                                            name="password"
                                            type="password"
                                            placeholder="{{ __('Enter Password') }}"
                                            class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded"
                                        >
                                        @error('password')
                                        <div class="text-red-600 pt-[10px]">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div
                                        class="text-contentColor dark:text-contentColor-dark flex items-center justify-between">
                                        <div class="flex items-center">
                                            <input
                                                type="checkbox"
                                                id="remember"
                                                class="w-18px h-18px mr-2 block box-content"
                                            >
                                            <label for="remember"> Remember me</label>
                                        </div>
                                        <div>
                                            <a
                                                href="#"
                                                class="hover:text-primaryColor relative after:absolute after:left-0 after:bottom-0.5 after:w-0 after:h-0.5 after:bg-primaryColor after:transition-all after:duration-300 hover:after:w-full"
                                            >Forgot your password?
                                            </a>
                                        </div>
                                    </div>
                                    <div class="my-25px text-center">
                                        <button
                                            type="submit"
                                            class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px w-full border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark"
                                        >
                                            Log in
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- sign up form-->
                            <div
                                class="hidden opacity-0 transition-opacity duration-150 ease-linear"
                            >
                                <!-- heading   -->
                                <div class="text-center">
                                    <h3
                                        class="text-size-32 font-bold text-blackColor dark:text-blackColor-dark mb-2 leading-normal"
                                    >
                                        Sing Up
                                    </h3>
                                    <p
                                        class="text-contentColor dark:text-contentColor-dark mb-15px"
                                    >
                                        Already have an account?
                                        <a
                                            href="login.html"
                                            class="hover:text-primaryColor relative after:absolute after:left-0 after:bottom-0.5 after:w-0 after:h-0.5 after:bg-primaryColor after:transition-all after:duration-300 hover:after:w-full"
                                        >Log In</a
                                        >
                                    </p>
                                </div>

                                <form class="pt-25px" data-aos="fade-up">
                                    <div
                                        class="grid grid-cols-1 lg:grid-cols-2 lg:gap-x-30px gap-y-25px mb-25px"
                                    >
                                        <div>
                                            <label
                                                class="text-contentColor dark:text-contentColor-dark mb-10px block"
                                            >First Name</label
                                            >
                                            <input
                                                type="text"
                                                placeholder="First Name"
                                                class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded"
                                            >
                                        </div>
                                        <div>
                                            <label
                                                class="text-contentColor dark:text-contentColor-dark mb-10px block"
                                            >Last Name</label
                                            >
                                            <input
                                                type="text"
                                                placeholder="Last Name"
                                                class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded"
                                            >
                                        </div>
                                    </div>
                                    <div
                                        class="grid grid-cols-1 lg:grid-cols-2 lg:gap-x-30px gap-y-25px mb-25px"
                                    >
                                        <div>
                                            <label
                                                class="text-contentColor dark:text-contentColor-dark mb-10px block"
                                            >Username</label
                                            >
                                            <input
                                                type="text"
                                                placeholder="Username"
                                                class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded"
                                            >
                                        </div>
                                        <div>
                                            <label
                                                class="text-contentColor dark:text-contentColor-dark mb-10px block"
                                            >Email</label
                                            >
                                            <input
                                                type="email"
                                                placeholder="Your Email"
                                                class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded"
                                            >
                                        </div>
                                    </div>
                                    <div
                                        class="grid grid-cols-1 lg:grid-cols-2 lg:gap-x-30px gap-y-25px mb-25px"
                                    >
                                        <div>
                                            <label
                                                class="text-contentColor dark:text-contentColor-dark mb-10px block"
                                            >Password</label
                                            >
                                            <input
                                                type="password"
                                                placeholder="Password"
                                                class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded"
                                            >
                                        </div>
                                        <div>
                                            <label
                                                class="text-contentColor dark:text-contentColor-dark mb-10px block"
                                            >Re-Enter Password</label
                                            >
                                            <input
                                                type="password"
                                                placeholder="Re-Enter Password"
                                                class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded"
                                            >
                                        </div>
                                    </div>

                                    <div
                                        class="text-contentColor dark:text-contentColor-dark flex items-center"
                                    >
                                        <input
                                            type="checkbox"
                                            id="accept-pp"
                                            class="w-18px h-18px mr-2 block box-content"
                                        >
                                        <label for="accept-pp">
                                            Accept the Terms and Privacy Policy</label
                                        >
                                    </div>
                                    <div class="mt-25px text-center">
                                        <button
                                            type="submit"
                                            class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px w-full border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark"
                                        >
                                            Log in
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- animated icons -->
            <div>
                <img
                    loading="lazy"
                    class="absolute right-[14%] top-[30%] animate-move-var"
                    src="./assets/images/education/hero_shape2.png"
                    alt="Shape"
                >
                <img
                    loading="lazy"
                    class="absolute left-[5%] top-1/2 animate-move-hor"
                    src="./assets/images/education/hero_shape3.png"
                    alt="Shape"
                >
                <img
                    loading="lazy"
                    class="absolute left-1/2 bottom-[60px] animate-spin-slow"
                    src="./assets/images/education/hero_shape4.png"
                    alt="Shape"
                >
                <img
                    loading="lazy"
                    class="absolute left-1/2 top-10 animate-spin-slow"
                    src="./assets/images/education/hero_shape5.png"
                    alt="Shape"
                >
            </div>
        </section>
    </main>

    <div
        class="user-data-section flex items-center justify-center flex-col relative min-h-screen z-[1] p-[150px_12px_0] bg-[#F6F9FB] lg:p-[120px_12px_0]  md:p-[120px_12px_0] sm:p-[120px_12px_0]  xsm:p-[120px_12px_0] ">
        <div
            class="form-wrapper relative m-auto w-[700px] shadow-[0px_15px_30px_rgba(0,50,108,0.03)] pt-[50px] pb-[60px] px-[70px] rounded-[10px] before:content-[url({{ asset('/assets2/images/shape/shape\_177.svg') }})] before:absolute before:right-[-60px] before:top-[-60px] bg-white sm:w-full xsm:w-full xsm:p-[40px_20px]">
            <div class="text-center">
                <h2 class=" text-black  mb-[30px] lg:mb-[10px] md:mb-[10px] sm:mb-[10px] xsm:mb-[10px] 2xl:text-[54px]">
                    {{ __('Login') }}</h2>
                <p
                    class="text-[20px] leading-[1.67em] lg:text-[18px] md:text-[18px] sm:text-[18px] xsm:text-[18px] text-black">
                    {{ __("Still don't have an account?") }}

                    <a href="{{ route('register') }}" class="underline hover:underline hover:opacity-50">
                        {{ __('Sign up') }}
                    </a>
                </p>
            </div>

            <form method="POST" action="{{ route('login') }}"
                  class="user-data-form mt-10 lg:mt-[30px] md:mt-[30px] sm:mt-[30px] xsm:mt-[30px]">
                @csrf

                <div class="flex flex-wrap mx-[-12px]">
                    <div class="w-full flex-[0_0_auto] px-[12px] max-w-full">
                        <div class="input-group-meta mb-[25px] relative">
                            <label
                                for="email"
                                class=" text-[14px] font-normal text-[rgba(0,0,0,0.5)] block mb-1.5"
                            >
                                {{ __('Email') }}
                            </label>
                            <input
                                value="{{ old('email') }}" id="email" name="email"
                                placeholder="your@email.com"
                                class="w-full h-[60px] text-[17px] text-black pl-5 pr-[52px] py-0 rounded-lg border-2 border-solid border-black bg-transparent placeholder:text-gray-500"
                            >
                            @error('email')
                            <div class="text-red-600 pt-[10px]">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full flex-[0_0_auto] px-[12px] max-w-full">
                        <div class="input-group-meta mb-[25px] relative">
                            <label
                                for="password"
                                class=" text-[14px] font-normal text-[rgba(0,0,0,0.5)] block mb-1.5"
                            >
                                {{ __('Password') }}
                            </label>
                            <input
                                value="{{ old('password') }}"
                                id="password"
                                name="password"
                                type="password"
                                placeholder="{{ __('Enter Password') }}"
                                class="pass_log_id w-full h-[60px] text-[17px] text-black pl-5 pr-[52px] py-0 rounded-lg border-2 border-solid border-black bg-transparent placeholder:text-gray-500"
                            >
                            <span
                                class="placeholder_icon absolute h-[60px] w-[50px] text-center z-[1] text-[rgba(0,0,0,0.45)] text-[17px] right-0 top-[30px] bottom-0"><span
                                    class="passVicon w-full h-full cursor-pointer block relative before:content-[''] before:w-0.5 before:h-[26px] before:absolute before:rotate-45 before:z-[5] before:transition-all before:duration-[0.2s] before:ease-[ease-in-out] before:left-6 before:top-[17px] before:bg-black"><img
                                        class=" relative -translate-y-2/4 mx-auto my-0 top-2/4"
                                        src="{{ asset('/assets2/images/icon/icon_151.svg') }}"
                                        alt=""></span></span>

                            @error('password')
                            <div class="text-red-600 pt-[10px]">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full flex-[0_0_auto] px-[12px] max-w-full">
                        {{--                        @if (Route::has('password.request'))--}}
                        {{--                            <div class="agreement-checkbox flex justify-between items-center">--}}
                        {{--                                <a--}}
                        {{--                                    href="{{ route('password.request') }}"--}}
                        {{--                                    class="relative text-[15px] text-[#1E1E1E] hover:underline hover:text-[color:var(--p-color)]"--}}
                        {{--                                >--}}
                        {{--                                    Forget Password?--}}
                        {{--                                </a>--}}
                        {{--                            </div>--}}
                        {{--                        @endif--}}

                    </div>
                    <div class="w-full flex-[0_0_auto] px-[12px] max-w-full">
                        <button
                            type="submit"
                            class="btn-twentyTwo w-full font-medium tran3s uppercase mt-[30px] leading-[55px] text-white tracking-[-0.2px] px-[42px] py-0 rounded-[7px] bg-[var(--prime-ten)] hover:bg-black lg:p-[0_32px] lg:leading-[50px] md:p-[0_32px] md:leading-[50px] sm:p-[0_35px] sm:leading-[50px] xsm:p-[0_35px] xsm:leading-[50px]"
                        >
                            {{ __('Sign In') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <img src="{{ asset('/assets2/images/lazy.svg') }}" data-src="{{ asset('/assets2/images/assets/ils_11.png') }}"
             alt=""
             class="lazy-img illustration-one wow fadeInRight absolute w-[25.44%] z-[-1] opacity-30 right-0 bottom-0">
        <img src="{{ asset('/assets2/images/lazy.svg') }}" data-src="{{ asset('/assets2/images/assets/ils_12.png') }}"
             alt=""
             class="lazy-img illustration-two wow fadeInLeft absolute w-[28.05%] z-[-1] opacity-30 left-0 bottom-0">
    </div>
@endsection
