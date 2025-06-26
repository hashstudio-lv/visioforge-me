@php use App\Enums\ProductCategory;use App\Models\Product; @endphp
@extends('layouts.app')

@section('content')
    <main class="bg-transparent">
        <section>
            <div
                class="container2-xl bg-darkdeep1 py-50px md:pt-20 md:pb-30 2xl:pt-130px 2xl:pb-50 rounded-2xl relative overflow-hidden shadow-brand"
            >
                <div class="container">
                    <div
                        class="flex flex-col items-center text-center w-full lg:w-83% xl:w-3/4 mx-auto"
                    >
                        <!-- banner Left -->
                        <div data-aos="fade-up" class="w-4/5">
                            <h3
                                class="uppercase text-secondaryColor text-size-15 mb-5px md:mb-15px font-inter tracking-5px"
                            >
                                {{ __('COMMUNICATION AI TOOL') }}
                            </h3>
                            <h1
                                class="text-3xl text-whiteColor md:text-6xl lg:text-size-50 2xl:text-6xl leading-10 md:leading-18 lg:leading-62px 2xl:leading-18 md:tracking-half lg:tracking-normal 2xl:tracking-half font-bold mb-15px sm:mb-30px"
                            >
                                {{ __('Write Better Emails') }} <br>
                                {{ __('In Seconds, With AI') }}
                                <span class="text-secondaryColor">.</span>
                            </h1>
                        </div>
                        <form
                            action="{{ route('services.show', 'generate-email') }}"
                            class="bg-whiteColor w-full rounded-full py-1 sm:py-6px pl-30px pr-1 sm:pr-2 flex items-center justify relative z-small"
                        >
                            <input
                                type="text"
                                name="prompt"
                                placeholder=@js(__("Enter key details for your email..."))
                                class="placeholder:text-darkdeep4 w-full ml-2 text-xs sm:text-sm md:text-base focus:outline-none"
                            >

                            <div class="self-end ml-auto">
                                <button
                                    type="submit"
                                    class="flex gap-x-1 items-center px-3 sm:px-25px py-2 sm:py-10px md:py-3 text-xs sm:text-size-15 text-whiteColor bg-primaryColor border border-primaryColor hover:text-primaryColor hover:bg-whiteColor rounded-full"
                                >
                                    {{ __('Generate') }}
                                </button>
                            </div>
                        </form>

                        <ul
                            class="flex gap-x-5 flex-wrap justify-center items-center mt-7 md:mt-50px"
                        >
                            <li>
                                <p class="text-whiteColor">
                                    <i class="icofont-check-alt"></i>
                                    <span class="ml-5px">{{ __('Over 27k Emails Generated') }}</span>
                                </p>
                            </li>
                            <li>
                                <p class="text-whiteColor">
                                    <i class="icofont-check-alt"></i>
                                    <span class="ml-5px">{{ __('Used in 1.4k Business Scenarios') }}</span>
                                </p>
                            </li>
                            <li>
                                <p class="text-whiteColor">
                                    <i class="icofont-check-alt"></i>
                                    <span class="ml-5px">{{ __('Trusted by 145+ Teams Worldwide') }}</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div>
                    <img
                        class="absolute left-1/2 bottom-[15%] animate-spin-slow"
                        src="{{ asset('assets/images/register/register__2.png') }}"
                        alt=""
                    ><img
                        class="absolute left-[42%] sm:left-[65%] md:left-[42%] lg:left-[5%] top-[4%] sm:top-[1%] md:top-[4%] lg:top-[10%] animate-move-hor"
                        src="{{ asset('assets/images/herobanner/herobanner__6.png') }}"
                        alt=""
                    ><img
                        class="absolute right-[5%] bottom-[15%]"
                        src="{{ asset('assets/images/herobanner/herobanner__7.png') }}"
                        alt=""
                    ><img
                        class="absolute top-[5%] left-[45%]"
                        src="{{ asset('assets/images/herobanner/herobanner__7.png') }}"
                        alt=""
                    >
                </div>
            </div>
        </section>

        <section>
            <div
                class="bg-lightGrey10 dark:bg-lightGrey10-dark relative z-0 overflow-hidden"
            >
                <div
                    class="container py-50px md:py-70px lg:py-20 2xl:pt-145px 2xl:pb-154px"
                >
                    <div
                        class="grid grid-cols-1 lg:grid-cols-2 items-center gap-30px lg:gap-0"
                    >
                        <!-- testimonial Left -->
                        <div data-aos="fade-up">
                            <h3
                                class="uppercase text-secondaryColor text-size-15 mb-5px md:mb-15px font-inter tracking-[4px] font-semibold"
                            >
                                {{ __('Hear from our users') }}
                            </h3>
                            <h1
                                class="text-3xl text-blackColor md:text-size-35 lg:text-size-42 2xl:text-size-47 leading-10 md:leading-45px lg:leading-12 2xl:leading-50px dark:text-blackColor-dark font-bold mb-15px"
                            >
                                {{ __('Trusted by Freelancers, Startups & Businesses Alike') }}
                            </h1>

                            <!-- Swiper -->
                            <div class="swiper testimonial-2">
                                <div class="swiper-wrapper">
                                    @foreach([
                                        ['review' => __('Writing cold emails used to take me forever. Now I just enter a few details and get a polished email ready to go.'), 'name' => 'Jason L.', 'position' => __('Sales Manager')],
                                        ['review' => __('This tool has completely transformed how I handle customer support. It saves time and keeps our tone consistent.'), 'name' => 'Emily R.', 'position' => __('Support Lead')],
                                        ['review' => __('Our marketing emails now sound sharp, clear, and on-brand — with zero effort. Total game-changer.'), 'name' => 'Carlos M.', 'position' => __('Marketing Strategist')],
                                        ['review' => __('As a non-native English speaker, this platform helps me sound more confident and professional in every message.'), 'name' => 'Yuki H.', 'position' => __('Freelance Consultant')],
                                        ['review' => __('We use it across the team for internal updates and external communications. It saves us hours each week.'), 'name' => 'Angela B.', 'position' => __('Project Manager')],
                                    ] as $item)
                                        <div class="swiper-slide">
                                            <div>
                                                <p class="md:text-xl md:leading-10 text-lightGrey dark:text-whiteColor">
                                                    <i class="icofont-quote-left quote__left text-primaryColor text-xl"></i>
                                                    {{ $item['review'] }}
                                                    <i class="icofont-quote-right quote__right text-primaryColor text-xl"></i>
                                                </p>

                                                <div class="flex items-center pt-10">
                                                    <div>
                                                        <h4>
                                                            <span
                                                                class="text-size-22 font-semibold text-contentColor hover:text-primaryColor dark:hover:text-primaryColor dark:text-contentColor-dark"
                                                            >
                                                                {{ $item['name'] }}
                                                            </span>
                                                        </h4>
                                                        <span class="text-primaryColor">
                                                            {{ $item['position'] }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="absolute bottom-0 right-0 flex flex-row-reverse gap-0.5">
                                    <div
                                        class="static swiper-button-next w-15 h-15 bg-whiteColor text-blackColor transition-all duration-300 text-3xl hover:bg-primaryColor hover:text-whiteColor dark:hover:bg-secondaryColor after:hidden before:hidden">
                                        <i class="icofont-long-arrow-right active"></i>
                                    </div>
                                    <div
                                        class="static swiper-button-prev w-15 h-15 transition-all duration-300 bg-whiteColor text-blackColor text-3xl hover:bg-primaryColor hover:text-whiteColor dark:hover:bg-secondaryColor after:hidden before:hidden">
                                        <i class="icofont-long-arrow-left"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div data-aos="fade-up">
                            <div class="tilt pl-0 md:pl-70px">
                                <img
                                    class="w-full"
                                    src="{{ asset('assets/images/testimonial/testi__group__1.png') }}"
                                    alt=""
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
