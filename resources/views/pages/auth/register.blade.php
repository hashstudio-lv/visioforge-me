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
                            {{ __('Register') }}
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
                  >{{ __('Register') }}</span
                  >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="relative">
            <div class="container py-100px">
                <div class="tab md:w-2/3 mx-auto">
                    <div
                        class="tab-links grid grid-cols-2 gap-11px text-blackColor text-lg lg:text-size-22 font-semibold font-hind mb-43px mt-30px md:mt-0">
                        <a href="{{ route('login') }}"
                           class="text-center py-9px lg:py-6 hover:text-primaryColor dark:hover:text-primaryColor dark:text-whiteColor bg-lightGrey7 dark:bg-lightGrey7-dark hover:bg-white dark:hover:bg-whiteColor-dark relative group/btn hover:shadow-bottom dark:shadow-standard-dark disabled:cursor-pointer rounded-standard">
                            <span class="absolute w-0 h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"></span>
                            {{ __('Login') }}
                        </a>
                        <a href="{{ route('register') }}"
                           class="text-center py-9px lg:py-6 hover:text-primaryColor dark:text-whiteColor dark:hover:text-primaryColor bg-white dark:bg-whiteColor-dark dark:hover:bg-whiteColor-dark hover:bg-white relative group/btn shadow-bottom hover:shadow-bottom dark:shadow-standard-dark disabled:cursor-pointer rounded-standard">
                            <span
                                class="absolute w-full h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"></span>
                            {{ __('Sign Up') }}
                        </a>
                    </div>

                    <div
                        class="shadow-container bg-whiteColor dark:bg-whiteColor-dark pt-10px px-5 pb-10 md:p-50px md:pt-30px rounded-5px">
                        <div class="tab-contents">
                            <div class="block opacity-100 transition-opacity duration-150 ease-linear">
                                <div class="text-center">
                                    <h3 class="text-size-32 font-bold text-blackColor dark:text-blackColor-dark mb-2 leading-normal">
                                        {{ __('Sign Up') }}
                                    </h3>
                                    <p class="text-contentColor dark:text-contentColor-dark mb-15px">
                                        {{ __('Already have an account?') }}
                                        <a href="{{ route('login') }}"
                                           class="hover:text-primaryColor relative after:absolute after:left-0 after:bottom-0.5 after:w-0 after:h-0.5 after:bg-primaryColor after:transition-all after:duration-300 hover:after:w-full">
                                            {{ __('Log In') }}
                                        </a>
                                    </p>
                                </div>

                                <form class="pt-25px" data-aos="fade-up" action="{{ route('register') }}" method="post">
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
                                            placeholder="{{ __('Your email') }}"
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

                                    <div class="mb-25px">
                                        <label
                                            class="text-contentColor dark:text-contentColor-dark mb-10px block"
                                            for="input-password">
                                            {{ __('Confirm password') }}
                                        </label>
                                        <input
                                            value="{{ old('password_confirmation') }}"
                                            id="input-password_confirmation"
                                            name="password_confirmation"
                                            type="password"
                                            placeholder="{{ __('Confirm Password') }}"
                                            class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded"
                                        >
                                        @error('password_confirmation')
                                        <div class="text-red-600 pt-[10px]">{{ $message }}</div>
                                        @enderror
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
                                            {{ __('Accept the terms and privacy policy') }}
                                        </label>
                                    </div>
                                    <div class="mt-25px text-center">
                                        <button
                                            type="submit"
                                            class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px w-full border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark"
                                        >
                                            {{ __('Register') }}
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
                    src="{{ asset('assets/images/education/hero_shape2.png') }}"
                    alt="Shape"
                >
                <img
                    loading="lazy"
                    class="absolute left-[5%] top-1/2 animate-move-hor"
                    src="{{ asset('assets/images/education/hero_shape3.png') }}"
                    alt="Shape"
                >
                <img
                    loading="lazy"
                    class="absolute left-1/2 bottom-[60px] animate-spin-slow"
                    src="{{ asset('assets/images/education/hero_shape4.png') }}"
                    alt="Shape"
                >
                <img
                    loading="lazy"
                    class="absolute left-1/2 top-10 animate-spin-slow"
                    src="{{ asset('assets/images/education/hero_shape5.png') }}"
                    alt="Shape"
                >
            </div>
        </section>
    </main>
@endsection
