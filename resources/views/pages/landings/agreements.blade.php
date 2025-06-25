@php use App\Enums\ProductCategory;use App\Models\Product; @endphp
@extends('layouts.app')

@section('content')
    <main class="bg-transparent">
        <section>
            <!-- bannaer section -->
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
                                {{ __('LEGAL AI SOLUTION') }}
                            </h3>
                            <h1
                                class="text-3xl text-whiteColor md:text-6xl lg:text-size-50 2xl:text-6xl leading-10 md:leading-18 lg:leading-62px 2xl:leading-18 md:tracking-half lg:tracking-normal 2xl:tracking-half font-bold mb-15px sm:mb-30px"
                            >
                                {{ __('Smart Agreements') }} <br>
                                {{ __('Available for Anyone') }}
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
								id="prompt"
                                placeholder=@js(__("Enter key details for your contract..."))
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
                                    <i class="icofont-check-alt"></i
                                    ><span class="ml-5px">{{ __('Over 9k Agreements Created') }}</span>
                                </p>
                            </li>
                            <li>
                                <p class="text-whiteColor">
                                    <i class="icofont-check-alt"></i
                                    ><span class="ml-5px">{{ __('1.2k Ready-to-Sign Use Cases') }}</span>
                                </p>
                            </li>
                            <li>
                                <p class="text-whiteColor">
                                    <i class="icofont-check-alt"></i
                                    ><span class="ml-5px">{{ __('150+ Business Professionals Trust Us') }}</span>
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
    ['review' => __("I needed a freelance contract urgently — the AI generated a complete, professional document in minutes. Saved me a ton of time."), 'name' => __('Laura M.'), 'position' => __('Freelance Graphic Designer')],
    ['review' => __("As a startup founder, drafting NDAs and service agreements used to be a pain. Now I can create them instantly without legal fees."), 'name' => __('Adam P.'), 'position' => __('Startup Founder')],
    ['review' => __("We use the platform for client contracts and internal agreements. The AI handles the heavy lifting, and we just review and sign."), 'name' => __('Michelle T.'), 'position' => __('Operations Manager')],
    ['review' => __("We don’t have an in-house lawyer, so this tool helps us stay compliant and professional without the cost."), 'name' => __('Rahul S.'), 'position' => __('E-commerce Store Owner')],
    ['review' => __("Our HR team uses it for employment agreements and offer letters. It’s intuitive, fast, and saves hours of admin work."), 'name' => __('Nina K.'), 'position' => __('HR Coordinator')],
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
                                                            <span href="#"
                                                                  class="text-size-22 font-semibold text-contentColor hover:text-primaryColor dark:hover:text-primaryColor dark:text-contentColor-dark">
                                                            {{ $item['name'] }}
                                                            </span>
                                                        </h4>
                                                        <span href="#" class="text-primaryColor">
                                                            {{ $item['position'] }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <!-- testimonial 2 -->

                                </div>
                                <!-- slide controller -->
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
