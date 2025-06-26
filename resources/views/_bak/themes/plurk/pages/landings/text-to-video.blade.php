@extends('themes.plurk.layouts.app')

@section('content')
    <div class="-mt-[82px] flex-grow overflow-x-hidden lg:-mt-[106px]">
        <div class="bg-cover bg-bottom bg-no-repeat pt-[82px] lg:pt-[106px]"
             style="background-image: url('{{ asset('assets/images/inner-page-hero-bg.png') }}');">
            <div class="relative">
                <div class="container">
                    <div class="relative items-center py-14 lg:flex lg:py-[100px]">
                        <div
                            class="relative z-[1] text-center text-white lg:w-3/5 ltr:lg:text-left rtl:lg:text-right xl:w-3/5 pr-8">
                            <h2 class="text-4xl font-black sm:text-4xl sm:leading-[126px] xl:text-[80px]">
                                {{ __('Text to Video') }}
                            </h2>
                            <p class="my-8 text-xl leading-[40px] text-[#7780A1]">
                                {{ __('Turn your ideas into stunning videos using just words. Our AI-powered text-to-video service transforms written prompts into dynamic, high-quality videos — perfect for social media, ads, storytelling, and more. No editing skills required.') }}
                            </p>
                            <a href="{{ route('dashboard') }}" class="btn mt-2 capitalize text-white">
                                {{ __('Generate Your Video Now') }}
                            </a>
                        </div>
                        <div
                            class="top-[100px] mt-10 h-96 w-auto ltr:right-0 rtl:left-0 lg:absolute lg:mt-0 lg:h-auto lg:w-2/5"
                            data-aos="fade-left"
                            data-aos-duration="1000">
                            <video autoplay muted loop playsinline class="w-full h-full object-cover bg-white p-1">
                                <source
                                    src="{{ asset('assets/videos/A_graceful_ballerina_dressed_in_a_flowing,_delicat_7f0305a3-7d60-40ed-a1dd-d2305242ed86.mp4') }}"
                                    type="video/mp4"/>
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="py-14 lg:py-[100px]">
            <div class="container">
                <div class="mb-7 flex flex-col items-center justify-center lg:mb-0 lg:flex-row lg:justify-between">
                    <div class="heading text-center ltr:lg:text-left rtl:lg:text-right">
                        <h6>{{ __('Styles') }}</h6>
                        <h4>{{ __('Highest quality Generative AI models') }}</h4>
                    </div>
                    <div class="flex items-center justify-end gap-4">
                        <button
                            type="button"
                            class="project-slider-button-prev flex h-10 w-10 items-center justify-center rounded-full bg-black/5 transition hover:bg-secondary dark:bg-white/5 dark:hover:bg-secondary"
                        >
                            <svg
                                width="7"
                                height="12"
                                viewBox="0 0 7 12"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                class="text-black rtl:rotate-180 dark:text-white"
                            >
                                <path
                                    d="M5.95007 1.2002L1.48924 5.3424C1.06317 5.73803 1.06317 6.41236 1.48924 6.80799L5.95007 10.9502"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                ></path>
                            </svg>
                        </button>
                        <button
                            type="button"
                            class="project-slider-button-next text-p flex h-10 w-10 items-center justify-center rounded-full bg-black/5 transition hover:bg-secondary dark:bg-white/5 dark:hover:bg-secondary"
                        >
                            <svg
                                width="7"
                                height="12"
                                viewBox="0 0 7 12"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                class="text-black rtl:rotate-180 dark:text-white"
                            >
                                <path
                                    d="M1.05005 10.7998L5.51089 6.6576C5.93695 6.26197 5.93695 5.58764 5.51089 5.19201L1.05005 1.0498"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                ></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="swiper project-slider px-6">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div
                            class="relative rounded-3xl border border-transparent bg-white transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:bg-gray-dark"
                        >
                            <div
                                class="absolute top-0 h-full w-full ltr:left-0 rtl:right-0"></div>
                            <img src="{{ asset('assets/images/flux-dev.webp') }}" alt="project-2"
                                 class="h-52 w-full rounded-t-3xl object-cover"/>
                            <div class="p-5 text-sm font-bold">
                                <h6 class="mb-1 text-black line-clamp-1 dark:text-white">
                                    {{ __('Flux dev') }}
                                </h6>
                                <p>{{ __('Building the Future of Fast and Smart Creation.') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="relative rounded-3xl border border-transparent bg-white transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:bg-gray-dark"
                        >
                            <div
                                class="absolute top-0 h-full w-full ltr:left-0 rtl:right-0"></div>
                            <img src="{{ asset('assets/images/flux-schnell.webp') }}" alt="project-3"
                                 class="h-52 w-full rounded-t-3xl object-cover"/>
                            <div class="p-5 text-sm font-bold">
                                <h6 class="mb-1 text-black line-clamp-1 dark:text-white">
                                    {{ __('Flux Schnell') }}
                                </h6>
                                <p>{{ __('Unmatched Speed and Precision in Generative Power.') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="relative rounded-3xl border border-transparent bg-white transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:bg-gray-dark"
                        >
                            <div
                                class="absolute top-0 h-full w-full ltr:left-0 rtl:right-0"></div>
                            <img src="{{ asset('assets/images/realistic.webp') }}" alt="project-4"
                                 class="h-52 w-full rounded-t-3xl object-cover"/>
                            <div class="p-5 text-sm font-bold">
                                <h6 class="mb-1 text-black line-clamp-1 dark:text-white">{{ __('Realistic') }}</h6>
                                <p>{{ __('An incredibly lifelike image with exceptional attention to detail.') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="relative rounded-3xl border border-transparent bg-white transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:bg-gray-dark"
                        >
                            <div
                                class="absolute top-0 h-full w-full ltr:left-0 rtl:right-0"></div>
                            <img src="{{ asset('assets/images/anime_1.webp') }}" alt="project-5"
                                 class="h-52 w-full rounded-t-3xl object-cover"/>
                            <div class="p-5 text-sm font-bold">
                                <h6 class="mb-1 text-black line-clamp-1 dark:text-white">
                                    {{ __('Anime') }}
                                </h6>
                                <p>{{ __('Bringing Your Imagination to Life in Every Vibrant Frame.') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="relative rounded-3xl border border-transparent bg-white transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:bg-gray-dark"
                        >
                            <div
                                class="absolute top-0 h-full w-full ltr:left-0 rtl:right-0"></div>
                            <img src="{{ asset('assets/images/turbo.webp') }}" alt="project-6"
                                 class="h-52 w-full rounded-t-3xl object-cover"/>
                            <div class="p-5 text-sm font-bold">
                                <h6 class="mb-1 text-black line-clamp-1 dark:text-white">
                                    {{ __('Imagine Turbo') }}
                                </h6>
                                <p>{{ __('Delivers high-quality images with great speed.') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="relative rounded-3xl border border-transparent bg-white transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:bg-gray-dark"
                        >
                            <div
                                class="absolute top-0 h-full w-full ltr:left-0 rtl:right-0"></div>
                            <img src="{{ asset('assets/images/sdxl.webp') }}" alt="project-6"
                                 class="h-52 w-full rounded-t-3xl object-cover"/>
                            <div class="p-5 text-sm font-bold">
                                <h6 class="mb-1 text-black line-clamp-1 dark:text-white">
                                    {{ __('SDXL 1.0') }}
                                </h6>
                                <p>{{ __('Powering Creativity with Expert-Led Latent Diffusion.') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="bg-black py-12 dark:bg-gray-dark md:py-[75px]">
            <div class="container">
                <div
                    class="flex flex-col items-center justify-between gap-7 text-center sm:flex-row ltr:sm:text-left rtl:sm:text-right">
                    <p class="flex-1 text-2xl font-bold text-white md:text-3xl">Launch stunning, scroll-stopping content
                        with AI in seconds.</p>
                    <a href="{{ route('login') }}"
                       class="btn flex-none rounded-md text-white shadow-[10px_15px_30px_rgba(119,128,161,0.2)]">Get
                        started</a>
                </div>
            </div>
        </section>

        <section class="bg-gradient-to-t from-white/50 to-transparent py-14 dark:from-white/[0.02] md:py-24">
            <div class="container">
                <div class="heading text-center ltr:lg:text-left rtl:lg:text-right">
                    <h6>{{ __('Features') }}</h6>
                    <h4>{{ __('Powerful Tools at Your Fingertips') }}</h4>
                </div>

                <div class="grid gap-[30px] sm:grid-cols-2 lg:grid-cols-3 mt-16">
                    <div data-aos="fade-up" data-aos-duration="1000">
                        <div
                            class="relative border-[2px] border-white bg-gradient-to-b from-white/50 to-transparent p-5 shadow-[-20px_30px_70px_rgba(219,222,225,0.4)] transition hover:border-secondary/50 hover:bg-secondary/20 dark:border-[rgba(119,128,161,0.15)] dark:bg-black dark:from-transparent dark:shadow-none dark:hover:border-secondary/50 dark:hover:bg-secondary/10 md:p-8"
                        >
                            <a href="javascript:" class="absolute inset-0 h-full w-full"></a>
                            <div class="flex h-[60px] w-[60px] items-center justify-center bg-primary/10">
                                <img src="{{ asset('assets/images/personal-portfolio/ui-ux-icon.svg') }}" alt=""/>
                            </div>
                            <h5 class="pt-7 pb-3 text-[22px] font-bold text-black dark:text-white">Text to Image</h5>
                            <p class="text-lg leading-loose line-clamp-3">Turn simple text prompts into high-quality,
                                AI-generated visuals in seconds.</p>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="1000">
                        <div
                            class="relative border-[2px] border-white bg-gradient-to-b from-white/50 to-transparent p-5 shadow-[-20px_30px_70px_rgba(219,222,225,0.4)] transition hover:border-secondary/50 hover:bg-secondary/20 dark:border-[rgba(119,128,161,0.15)] dark:bg-black dark:from-transparent dark:shadow-none dark:hover:border-secondary/50 dark:hover:bg-secondary/10 md:p-8"
                        >
                            <a href="javascript:" class="absolute inset-0 h-full w-full"></a>
                            <div class="flex h-[60px] w-[60px] items-center justify-center bg-primary/10">
                                <img src="{{ asset('assets/images/personal-portfolio/product-icon.svg') }}" alt=""/>
                            </div>
                            <h5 class="pt-7 pb-3 text-[22px] font-bold text-black dark:text-white">Fast Generation</h5>
                            <p class="text-lg leading-loose line-clamp-3">
                                Create stunning images instantly — no design skills or tools required.
                            </p>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="1000">
                        <div
                            class="relative border-[2px] border-white bg-gradient-to-b from-white/50 to-transparent p-5 shadow-[-20px_30px_70px_rgba(219,222,225,0.4)] transition hover:border-secondary/50 hover:bg-secondary/20 dark:border-[rgba(119,128,161,0.15)] dark:bg-black dark:from-transparent dark:shadow-none dark:hover:border-secondary/50 dark:hover:bg-secondary/10 md:p-8"
                        >
                            <a href="javascript:" class="absolute inset-0 h-full w-full"></a>
                            <div class="flex h-[60px] w-[60px] items-center justify-center bg-primary/10">
                                <img src="{{ asset('assets/images/personal-portfolio/graphic-icon.svg') }}" alt=""/>
                            </div>
                            <h5 class="pt-7 pb-3 text-[22px] font-bold text-black dark:text-white">Creative Freedom</h5>
                            <p class="text-lg leading-loose line-clamp-3">
                                Describe anything clearly — our AI turns words into unique visuals.
                            </p>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="1000">
                        <div
                            class="relative border-[2px] border-white bg-gradient-to-b from-white/50 to-transparent p-5 shadow-[-20px_30px_70px_rgba(219,222,225,0.4)] transition hover:border-secondary/50 hover:bg-secondary/20 dark:border-[rgba(119,128,161,0.15)] dark:bg-black dark:from-transparent dark:shadow-none dark:hover:border-secondary/50 dark:hover:bg-secondary/10 md:p-8"
                        >
                            <a href="javascript:" class="absolute inset-0 h-full w-full"></a>
                            <div class="flex h-[60px] w-[60px] items-center justify-center bg-primary/10">
                                <img src="{{ asset('assets/images/personal-portfolio/web-design-icon.svg') }}" alt=""/>
                            </div>
                            <h5 class="pt-7 pb-3 text-[22px] font-bold text-black dark:text-white">Multiple Styles</h5>
                            <p class="text-lg leading-loose line-clamp-3">
                                Choose from a variety of art styles to match your vision or brand.
                            </p>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="1000">
                        <div
                            class="relative border-[2px] border-white bg-gradient-to-b from-white/50 to-transparent p-5 shadow-[-20px_30px_70px_rgba(219,222,225,0.4)] transition hover:border-secondary/50 hover:bg-secondary/20 dark:border-[rgba(119,128,161,0.15)] dark:bg-black dark:from-transparent dark:shadow-none dark:hover:border-secondary/50 dark:hover:bg-secondary/10 md:p-8"
                        >
                            <a href="javascript:" class="absolute inset-0 h-full w-full"></a>
                            <div class="flex h-[60px] w-[60px] items-center justify-center bg-primary/10">
                                <img src="{{ asset('assets/images/personal-portfolio/research-icon.svg') }}" alt=""/>
                            </div>
                            <h5 class="pt-7 pb-3 text-[22px] font-bold text-black dark:text-white">Easy to Use</h5>
                            <p class="text-lg leading-loose line-clamp-3">
                                Just type and generate — the simplest way to create unique images.
                            </p>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="1000">
                        <div
                            class="relative border-[2px] border-white bg-gradient-to-b from-white/50 to-transparent p-5 shadow-[-20px_30px_70px_rgba(219,222,225,0.4)] transition hover:border-secondary/50 hover:bg-secondary/20 dark:border-[rgba(119,128,161,0.15)] dark:bg-black dark:from-transparent dark:shadow-none dark:hover:border-secondary/50 dark:hover:bg-secondary/10 md:p-8"
                        >
                            <a href="javascript:" class="absolute inset-0 h-full w-full"></a>
                            <div class="flex h-[60px] w-[60px] items-center justify-center bg-primary/10">
                                <img src="{{ asset('assets/images/personal-portfolio/app-development-icon.svg') }}"
                                     alt=""/>
                            </div>
                            <h5 class="pt-7 pb-3 text-[22px] font-bold text-black dark:text-white">Perfect for
                                Content</h5>
                            <p class="text-lg leading-loose line-clamp-3">
                                Ideal for marketing, social media content, blogs, and product visuals.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-gradient-to-t from-white/50 to-transparent pt-14 dark:from-white/[0.02] md:pt-24">
            <div class="container">
                <div class="heading text-center ltr:lg:text-left rtl:lg:text-right">
                    <h6>{{ __('Highlights') }}</h6>
                    <h4>{{ __('Discover what your content can become — in just seconds.') }}</h4>
                </div>
            </div>

            @php
                $videos = [
                    'A_talented_violinist_stands_center_stage,_illumina_d4022cad-8b24-4b64-8ea9-04a1844aac77.mp4',
                    'A_close-up_video_of_a_chameleon_crawling_on_a_bran_e39d5ea4-d049-4948-a8db-2208a682f569.mp4',
                    'A_tranquil_video_of_a_red_fox_strolling_through_a_882c7142-34e4-4136-8cdd-e63d6723fc2d.mp4',
                    'A_serene_and_enchanting_misty_forest_bathed_in_the_cd4e4e45-3d8a-4a1d-8100-cf9cadd2a26f.mp4',
                    'A_talented_chef_expertly_sears_seasoned_cuts_of_me_06fc1734-43dc-4339-a7a8-e6701b31c801.mp4',
                    'A_striking_visual_captures_a_person_standing_confi_29a41509-e423-4ab4-ad0d-a814c9aab2e5.mp4',
                    'A_dynamic_wildlife_scene_on_the_African_savannah._b49d9cbe-c3d2-4018-9dcd-c39112285cf4.mp4',
                    'A_lively_scene_of_a_group_of_men_and_women_jogging_d98bb127-e216-42a5-95a4-a0721263af9e.mp4',
                    'A_serene_depiction_of_two_ducks_swimming_in_a_tran_a236686d-496b-479d-b6fd-8d4d72e12e1d.mp4',
                    'A_captivating_and_realistic_scene_of_a_baby_boy_ri_1338cdc8-8aab-4aa4-b983-9ae4fd72cf0b.mp4',
                    ];

                $chunks = array_chunk($videos, 10);
            @endphp

            <div class="mt-16">
                @foreach($chunks as $chunk)
                    <div class="flex gap-2 h-[600px] mt-2">
                        @foreach(array_chunk($chunk, 2) as $index => $pair)
                            <div class="flex flex-col flex-1 gap-2">
                                @php
                                    $isEven = $index % 2 === 0;
                                @endphp

                                @if($isEven)
                                    <div class="basis-1/3 grow">
                                        <video autoplay muted loop playsinline class="w-full h-full object-cover">
                                            <source src="{{ asset('assets/videos/' . $pair[0]) }}" type="video/mp4"/>
                                        </video>
                                    </div>
                                    <div class="basis-2/3 grow">
                                        @if(isset($pair[1]))
                                            <video autoplay muted loop playsinline class="w-full h-full object-cover">
                                                <source src="{{ asset('assets/videos/' . $pair[1]) }}"
                                                        type="video/mp4"/>
                                            </video>
                                        @endif
                                    </div>
                                @else
                                    <div class="basis-2/3 grow">
                                        <video autoplay muted loop playsinline class="w-full h-full object-cover">
                                            <source src="{{ asset('assets/videos/' . $pair[0]) }}" type="video/mp4"/>
                                        </video>
                                    </div>
                                    <div class="basis-1/3 grow">
                                        @if(isset($pair[1]))
                                            <video autoplay muted loop playsinline class="w-full h-full object-cover">
                                                <source src="{{ asset('assets/videos/' . $pair[1]) }}"
                                                        type="video/mp4"/>
                                            </video>
                                        @endif
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </section>

        <section class="py-14 lg:py-[100px]">
            <div class="container">
                <div class="heading text-center ltr:lg:text-left rtl:lg:text-right">
                    <h6>{{ __('Effectiveness') }}</h6>
                    <h4>{{ __('Boosting Results with AI-Powered Content') }}</h4>
                </div>

                <div class="grid gap-4 sm:grid-cols-3 md:gap-[30px] mt-16">
                    <div data-aos="fade-up" data-aos-duration="1000">
                        <div
                            class="group rounded-[32px] border border-transparent bg-white py-8 px-4 text-center transition hover:border-secondary hover:bg-secondary/10 dark:bg-gray-dark dark:hover:bg-secondary"
                        >
                            <div class="mx-auto xl:w-1/2">
                                <h2 class="mb-4 text-4xl font-black text-secondary dark:group-hover:text-black md:mb-0 md:text-6xl md:leading-[75px]">
                                    90%
                                </h2>
                                <p class="text-sm font-bold text-gray-dark line-clamp-2 dark:text-white dark:group-hover:text-black">
                                    Clients reported up to 90% higher content performance
                                </p>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="1000">
                        <div
                            class="group rounded-[32px] border border-transparent bg-white py-8 px-4 text-center transition hover:border-secondary hover:bg-secondary/10 dark:bg-gray-dark dark:hover:bg-secondary"
                        >
                            <div class="mx-auto xl:w-1/2">
                                <h2 class="mb-4 text-4xl font-black text-secondary dark:group-hover:text-black md:mb-0 md:text-6xl md:leading-[75px]">
                                    10x
                                </h2>
                                <p class="text-sm font-bold text-gray-dark line-clamp-2 dark:text-white dark:group-hover:text-black">
                                    Video-driven campaigns delivered 10x higher conversions
                                </p>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="1000">
                        <div
                            class="group rounded-[32px] border border-transparent bg-white py-8 px-4 text-center transition hover:border-secondary hover:bg-secondary/10 dark:border-[rgba(119,128,161,0.15)] dark:bg-gray-dark dark:hover:bg-secondary"
                        >
                            <div class="mx-auto xl:w-1/2">
                                <h2 class="mb-4 text-4xl font-black text-secondary dark:group-hover:text-black md:mb-0 md:text-6xl md:leading-[75px]">
                                    4.4M
                                </h2>
                                <p class="text-sm font-bold text-gray-dark line-clamp-2 dark:text-white dark:group-hover:text-black">
                                    Over 4.4M impressions with strong engagement from day one
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('themes.plurk.sections.testimonials')

    </div>
@endsection

@push('scripts')
    <script>
        var swiper = new Swiper('.project-slider', {
            loop: true,
            slidesPerView: 'auto',
            spaceBetween: 30,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.project-slider-button-next',
                prevEl: '.project-slider-button-prev',
            },
            breakpoints: {
                600: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                1000: {
                    slidesPerView: 4,
                },
                1200: {
                    slidesPerView: 5,
                },
            },
        });
    </script>
@endpush
