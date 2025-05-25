@extends('themes.plurk.layouts.app')

@section('content')
    <div class="-mt-[82px] flex-grow lg:-mt-[106px]">
        <div class="h-20 bg-black lg:h-[104px]"></div>
        <section
            class="bg-white bg-[url(../assets/images/creative/banner-img.png)] bg-bottom bg-no-repeat rtl:rotate-y-180 dark:bg-black"
            style="background-image: url('{{ asset('assets/images/creative/banner-img.png') }}');">
            <div class="py-24 dark:bg-gradient-to-r dark:from-[#B476E5]/10 dark:to-[#47BDFF]/10 lg:py-40">
                <div class="container">
                    <div class="mx-auto max-w-[1028px] text-center rtl:rotate-y-180">
                        <h2 class="text-4xl font-black text-black dark:text-white sm:text-6xl lg:text-[100px] lg:leading-[125px]">
                            One <span class="text-color">smart</span> service. Infinite video content.
                        </h2>
                        <p class="mt-5 text-lg font-bold">
                            {{ __('Let us handle the heavy lifting - text & image to video, fully automated.') }}
                        </p>
                    </div>
                </div>
            </div>
        </section>



        <section class="bg-gray py-[50px] text-center dark:bg-gray-dark">
            <div class="swiper industry-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide !w-auto">
                        <h5 class="inline-block text-[22px] font-extrabold text-white">{{ __('SCROLL-STOPPERS') }}</h5>
                    </div>
                    <div class="swiper-slide !w-auto">
                        <h5 class="inline-block text-[22px] font-extrabold text-white">{{ __('REELS THAT SELL') }}</h5>
                    </div>
                    <div class="swiper-slide !w-auto">
                        <h5 class="inline-block text-[22px] font-extrabold text-white">{{ __('VIRAL CLIPS') }}</h5>
                    </div>
                    <div class="swiper-slide !w-auto">
                        <h5 class="inline-block text-[22px] font-extrabold text-white">{{ __('INSANE VISUALS') }}</h5>
                    </div>
                    <div class="swiper-slide !w-auto">
                        <h5 class="inline-block text-[22px] font-extrabold text-white">{{ __('SOCIAL-READY') }}</h5>
                    </div>
                    <div class="swiper-slide !w-auto">
                        <h5 class="inline-block text-[22px] font-extrabold text-white">{{ __('INSTANT PROMO') }}</h5>
                    </div>
                    <div class="swiper-slide !w-auto">
                        <h5 class="inline-block text-[22px] font-extrabold text-white">{{ __('AUTO-GENERATED VIDEOS') }}</h5>
                    </div>
                    <div class="swiper-slide !w-auto">
                        <h5 class="inline-block text-[22px] font-extrabold text-white">{{ __('AI-MADE MAGIC') }}</h5>
                    </div>
                    <div class="swiper-slide !w-auto">
                        <h5 class="inline-block text-[22px] font-extrabold text-white">{{ __('DYNAMIC STORIES') }}</h5>
                    </div>
                    <div class="swiper-slide !w-auto">
                        <h5 class="inline-block text-[22px] font-extrabold text-white">{{ __('SNACKABLE CONTENT') }}</h5>
                    </div>
                </div>
            </div>
        </section>


        <section class="bg-gradient-to-t from-white/[54%] to-transparent py-14 dark:bg-none lg:py-[100px]">
            <div class="container">
                <div class="grid items-center gap-8 md:grid-cols-3 lg:grid-cols-2 xl:items-start">
                    <div class="order-2 md:order-2 md:col-span-2 lg:col-auto">
                        <div class="heading mb-5 text-center ltr:md:text-left rtl:md:text-right">
                            <h6>Text to Video</h6>
                            <h4>Transform Words Into Motion</h4>
                        </div>
                        <div class="text-center font-semibold ltr:md:text-left rtl:md:text-right">
                            <p class="pb-5">
                                Our Text-to-Video feature lets you turn simple text prompts into fully generated videos — automatically and in seconds.
                            </p>
                            <p>
                                Just type what you want to see — from short product descriptions to creative scene ideas — and our AI brings your words to life with visuals, motion, and style. No editing, no templates, just pure text-to-video generation powered by AI.
                            </p>
                            <a href="{{ route('pages.text-to-video') }}" class="btn mt-10 capitalize text-white">Try Text to Video</a>
                        </div>
                    </div>
                    <video autoplay muted loop playsinline class="order-1 mx-auto rounded-[32px] md:order-1 md:mx-0 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000">
                        <source src="{{ asset('assets/videos/A_tranquil_underwater_scene_with_sunlight_piercing_487f2b2e-f4cb-485e-88f6-31201a75502f.mp4') }}" type="video/mp4"/>
                    </video>
                </div>
            </div>
        </section>

        <section class="bg-gradient-to-t from-white/[54%] to-transparent py-14 dark:bg-none lg:py-[100px]">
            <div class="container">
                <div class="grid items-center gap-8 md:grid-cols-3 lg:grid-cols-2 xl:items-start">
                    <div class="order-2 md:order-1 md:col-span-2 lg:col-auto">
                        <div class="heading mb-5 text-center ltr:md:text-left rtl:md:text-right">
                            <h6>Image to Video</h6>
                            <h4>Bring Your Images to Life</h4>
                        </div>
                        <div class="text-center font-semibold ltr:md:text-left rtl:md:text-right">
                            <p class="pb-5">
                                With our Image-to-Video feature, you can animate any static image and turn it into a dynamic, engaging video clip in seconds.
                            </p>
                            <p>
                                Upload an image, and our AI adds motion, transitions, and cinematic flair — instantly. It’s perfect for social posts, product showcases, or creative storytelling. No editing tools, just your image and our AI doing the magic.
                            </p>
                            <a href="{{ route('pages.image-to-video') }}" class="btn mt-10 capitalize text-white">Try Image to Video</a>
                        </div>
                    </div>

                    <video autoplay muted loop playsinline class="order-1 mx-auto rounded-[32px] md:order-2 md:mx-0 aos-init aos-animate" data-aos="fade-left" data-aos="fade-left" data-aos-duration="1000">
                        <source src="{{ asset('assets/videos/A_vibrant_floral_tunnel_filled_with_blooming_roses_bee11a98-0a1d-4251-ba0a-d0bc27b63ab4.mp4') }}" type="video/mp4"/>
                    </video>
                </div>
            </div>
        </section>

        <section
            class="relative bg-black bg-cover bg-fixed bg-center bg-no-repeat after:absolute after:inset-0 after:bg-black/90"
        >
            <div class="container">
                <div
                    class="relative z-[1] grid grid-cols-2 gap-5 py-12 text-center sm:gap-7 md:grid-cols-4 lg:py-24"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                >
                    <div class="rounded-2xl bg-white/25 p-[5px]">
                        <div class="rounded-2xl bg-white py-10 dark:bg-black">
                            <h3
                                class="text-[34px] font-black leading-[42px] text-gray"
                                data-vanilla-counter
                                data-start-at="0"
                                data-end-at="15000"
                                data-time="4000"
                                data-delay="1000"
                                data-format="{}+"
                            >
                                15,000+
                            </h3>
                            <p class="text-base font-bold text-black dark:text-white">Videos Generated</p>
                        </div>
                    </div>
                    <div class="rounded-2xl bg-white/25 p-[5px]">
                        <div class="rounded-2xl bg-white py-10 dark:bg-black">
                            <h3
                                class="text-[34px] font-black leading-[42px] text-gray"
                                data-vanilla-counter
                                data-start-at="0"
                                data-end-at="1200"
                                data-time="4000"
                                data-delay="1000"
                                data-format="{}+"
                            >
                                1,200+
                            </h3>
                            <p class="text-base font-bold text-black dark:text-white">Active Users</p>
                        </div>
                    </div>
                    <div class="rounded-2xl bg-white/25 p-[5px]">
                        <div class="rounded-2xl bg-white py-10 dark:bg-black">
                            <h3
                                class="text-[34px] font-black leading-[42px] text-gray"
                                data-vanilla-counter
                                data-start-at="0"
                                data-end-at="97"
                                data-time="4000"
                                data-delay="1000"
                                data-format="{}%"
                            >
                                97%
                            </h3>
                            <p class="text-base font-bold text-black dark:text-white">User Satisfaction</p>
                        </div>
                    </div>
                    <div class="rounded-2xl bg-white/25 p-[5px]">
                        <div class="rounded-2xl bg-white py-10 dark:bg-black">
                            <h3
                                class="text-[34px] font-black leading-[42px] text-gray"
                                data-vanilla-counter
                                data-start-at="0"
                                data-end-at="3"
                                data-time="4000"
                                data-delay="1000"
                                data-format="{}+"
                            >
                                3+
                            </h3>
                            <p class="text-base font-bold text-black dark:text-white">AI Models Supported</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="bg-gradient-to-t from-transparent to-white/60 pb-2 pt-12 dark:to-white/10 lg:pt-24">
            <div class="container">
                <div class="text-center ltr:md:text-left rtl:md:text-right">
                    <div class="mx-auto inline-flex items-center gap-2.5 bg-black p-2.5">
                                <span>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.09106 0.922891C4.26412 0.0268889 5.36879 -0.310967 6.01328 0.335155L8.72195 3.05047C8.88268 3.21162 9.08805 3.32082 9.31153 3.36366L13.0771 4.09131C13.9731 4.26422 14.3109 5.36877 13.6648 6.01338L10.9497 8.72186C10.7886 8.88263 10.6793 9.08815 10.6362 9.31148L9.9089 13.0771C9.73584 13.9731 8.63117 14.311 7.98668 13.6648L5.27801 10.9499C5.11728 10.7888 4.91191 10.6796 4.68842 10.6363L0.922825 9.90907C0.0268234 9.73578 -0.310912 8.63124 0.335135 7.98663L3.05025 5.27815C3.2114 5.11738 3.32061 4.91186 3.36376 4.68853L4.09106 0.922891Z"
                                            fill="#B476E5"></path>
                                    </svg>
                                </span>
                        <p class="text-lg font-extrabold text-white">{{ __('HIGHLIGHTS') }}</p>
                        <span>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.091 0.922891C4.26406 0.0268889 5.36872 -0.310967 6.01322 0.335155L8.72189 3.05047C8.88262 3.21162 9.08799 3.32082 9.31147 3.36366L13.0771 4.09131C13.9731 4.26422 14.3108 5.36877 13.6648 6.01338L10.9496 8.72186C10.7885 8.88263 10.6793 9.08815 10.6361 9.31148L9.90883 13.0771C9.73578 13.9731 8.63111 14.311 7.98662 13.6648L5.27795 10.9499C5.11721 10.7888 4.91185 10.6796 4.68836 10.6363L0.922764 9.90907C0.0267624 9.73578 -0.310973 8.63124 0.335074 7.98663L3.05019 5.27815C3.21134 5.11738 3.32055 4.91186 3.3637 4.68853L4.091 0.922891Z"
                                            fill="#47BDFF"></path>
                                    </svg>
                                </span>
                    </div>
                </div>
                <h3 class="mt-7 text-center text-3xl font-extrabold text-black dark:text-white md:text-[50px] md:leading-[70px] ltr:md:text-left rtl:md:text-right">
                    Randomly Generated. Always Impressive.
                </h3>
                <p class="mt-2.5 text-center text-lg font-medium ltr:md:text-left rtl:md:text-right">
                    Discover what your content can become — in just seconds.
                </p>
            </div>

            @php
                $videos = [
                    'A_captivating_and_realistic_scene_of_a_baby_boy_ri_1338cdc8-8aab-4aa4-b983-9ae4fd72cf0b.mp4',
                    'A_close-up_video_of_a_chameleon_crawling_on_a_bran_e39d5ea4-d049-4948-a8db-2208a682f569.mp4',
                    'A_lively_scene_of_a_group_of_men_and_women_jogging_d98bb127-e216-42a5-95a4-a0721263af9e.mp4',
                    'A_serene_and_enchanting_misty_forest_bathed_in_the_cd4e4e45-3d8a-4a1d-8100-cf9cadd2a26f.mp4',
                    'A_striking_visual_captures_a_person_standing_confi_29a41509-e423-4ab4-ad0d-a814c9aab2e5.mp4',
                    'A_tranquil_video_of_a_red_fox_strolling_through_a_882c7142-34e4-4136-8cdd-e63d6723fc2d.mp4',
                    'A_dynamic_wildlife_scene_on_the_African_savannah._b49d9cbe-c3d2-4018-9dcd-c39112285cf4.mp4',
                    'A_serene_depiction_of_two_ducks_swimming_in_a_tran_a236686d-496b-479d-b6fd-8d4d72e12e1d.mp4',
                    'A_talented_chef_expertly_sears_seasoned_cuts_of_me_06fc1734-43dc-4339-a7a8-e6701b31c801.mp4',
                    'A_talented_violinist_stands_center_stage,_illumina_d4022cad-8b24-4b64-8ea9-04a1844aac77.mp4',
                    'A_thrilling_view_from_the_perspective_of_a_motorcy_33f941e4-d310-4ac8-9bb4-6b5dfe2b142b.mp4',
                    'An_underwater_video_of_a_scuba_diver_playing_a_bra_67c21f19-8bee-49b6-8ceb-5d4857d303f3.mp4',
                    'A_deliciously_inviting_stack_of_golden_pancakes_ar_9e236243-0c66-4165-bfdf-c4cab2fbe807.mp4',
                    'A_graceful_ballerina_dressed_in_a_flowing,_delicat_7f0305a3-7d60-40ed-a1dd-d2305242ed86.mp4',
                    'A_man_in_a_vintage_hat_walking_down_a_narrow_alley_3dd17350-1bc8-49e9-8557-62dfa18393ea.mp4',
                    'A_medieval_banquet_setting_inside_a_grand_castle_h_240373fb-7622-430a-8926-148847505da1.mp4',
                    'A_polar_bear_sitting_on_snow,_reading_a_book_near_a070733d-1b8f-4239-b0b5-e0dd8d68482a.mp4',
                    'A_captivating_scene_illustrates_a_person_gracefull_8b68f5d0-af89-40cf-84e5-fa69a820ca63.mp4',
                    'A_vibrant_street_scene_showcasing_a_confident_cycl_41480843-98a2-4ae4-854e-d9773fb90302.mp4',
                    'The_scene_captures_two_children_bundled_in_winter_917d7b7b-0b82-4fab-9dbe-04338143c803.mp4'];
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


        <section class="bg-black py-12 dark:bg-gray-dark md:py-[75px]">
            <div class="container">
                <div
                    class="flex flex-col items-center justify-between gap-7 text-center sm:flex-row ltr:sm:text-left rtl:sm:text-right">
                    <p class="flex-1 text-2xl font-bold text-white md:text-3xl">{{ __('Bring your ideas to life with next-gen video creation.') }}</p>
                    <a href="{{ route('login') }}"
                       class="btn flex-none rounded-md text-white shadow-[10px_15px_30px_rgba(119,128,161,0.2)]">{{ __('Get started') }}</a>
                </div>
            </div>
        </section>

        <section class="bg-gradient-to-t from-white to-transparent py-14 dark:bg-none lg:py-[100px]">
            <div class="container">
                <div class="heading text-center">
                    <h6>FAQs</h6>
                    <h4>Frequently Asked Questions</h4>
                    <p class="mt-5 text-lg font-bold">Have questions? We’re help you.</p>
                </div>
                <div class="accordion-container mx-auto lg:w-[730px]">
                    @foreach([
                        [
                            'question' => 'What is Video-Creator.pro?',
                            'answer' => 'Video-Creator.pro is an AI-powered service that transforms your text and images into dynamic videos. Whether you want to generate short social clips or engaging visuals for your brand, our platform simplifies video creation with just a few clicks — no editing skills required.'
                        ],
                        [
                            'question' => 'What makes Video-Creator.pro unique?',
                            'answer' => 'Unlike traditional editors or generic tools, Video-Creator.pro focuses on AI-first generation, offering both text-to-video and image-to-video features. It’s fast, intuitive, and ideal for creators, marketers, or startups looking to scale content production effortlessly.'
                        ],
                        [
                            'question' => 'How do I create videos using Video-Creator.pro?',
                            'answer' => 'Simply enter a prompt, upload an image, or select your preferred generation model. Our AI processes your input and turns it into a visually compelling video. It’s as easy as writing an idea and watching it come to life.'
                        ],
                        [
                            'question' => 'Can AI really generate high-quality videos?',
                            'answer' => 'Yes — modern AI models like those behind Video-Creator.pro are capable of generating short-form, social-ready, and branded videos with minimal input. Our tools use advanced generative models to match creative intent with visually striking results.'
                        ],
                        [
                            'question' => 'Do I need a subscription or trial?',
                            'answer' => 'No subscriptions. No free trials. Video-Creator.pro works on a token system. Just purchase VCT tokens, and use them as needed. This gives you full control — pay only when you want to generate content.'
                        ],
                    ] as $item)
                        <div class="ac mt-6 border-0 border-b-2 border-gray/20 bg-transparent">
                            <h2 class="ac-header">
                                <button
                                    type="button"
                                    class="ac-trigger relative !flex w-full items-center justify-between gap-2 !py-2.5 !px-0 !font-mulish !text-lg !font-bold !text-black after:!hidden ltr:text-left rtl:text-right dark:!text-white"
                                >
                                    <div>{{ $item['question'] }}</div>
                                    <div
                                        class="trigger-icon grid h-6 w-6 place-content-center rounded-full border-2 border-gray text-gray transition">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.09961 0.500977C6.65189 0.500977 7.09961 0.948692 7.09961 1.50098L7.09961 10.501C7.09961 11.0533 6.65189 11.501 6.09961 11.501H5.89961C5.34732 11.501 4.89961 11.0533 4.89961 10.501L4.89961 1.50098C4.89961 0.948692 5.34732 0.500977 5.89961 0.500977H6.09961Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M0.5 5.90039C0.5 5.34811 0.947715 4.90039 1.5 4.90039H10.5C11.0523 4.90039 11.5 5.34811 11.5 5.90039V6.10039C11.5 6.65268 11.0523 7.10039 10.5 7.10039H1.5C0.947715 7.10039 0.5 6.65268 0.5 6.10039V5.90039Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                    </div>
                                </button>
                            </h2>
                            <div class="ac-panel lg:w-4/5">
                                <p class="ac-text !px-0 !pb-5 !pt-0 !font-mulish !text-sm !font-bold !leading-[18px] !text-gray">
                                    {{ $item['answer'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        @include('themes.plurk.sections.testimonials')
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/accordion.min.css') }}"/>
@endpush

@push('scripts')

    <script src="{{ asset('assets/js/accordion.min.js') }}"></script>

    <script>
        // Testimonial Slider
        var swiper = new Swiper('.mySwiper', {
            loop: true,
            slidesPerView: 'auto',
            spaceBetween: 30,
            speed: 1000,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.testimonial-swiper-button-next',
                prevEl: '.testimonial-swiper-button-prev',
            },
        });

        // Accordion
        const acc = new Accordion('.accordion-container');
        acc.open(0);

        // Service Page - Partner Slider
        var partnerSwiper = new Swiper('.industry-slider', {
            loop: true,
            slidesPerView: 'auto',
            spaceBetween: 100,
            speed: 2500,
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
            },
            breakpoints: {
                320: {
                    slidesPerView: 1.7,
                },
                600: {
                    slidesPerView: 3,
                },
                1000: {
                    slidesPerView: 5,
                },
                1600: {
                    slidesPerView: 8,
                },
            },
        });

        // together Slider
        var togetherSwiper = new Swiper('.together-slider', {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 20,
            speed: 4000,
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
            },
            breakpoints: {
                450: {
                    slidesPerView: 1.2,
                },
                700: {
                    slidesPerView: 1.6,
                },
                1000: {
                    slidesPerView: 2,
                },
                1600: {
                    slidesPerView: 3.5,
                },
            },
        });

        // client Page - client Slider
        var clientSwiper = new Swiper('.client-slider', {
            loop: true,
            slidesPerView: 'auto',
            spaceBetween: 20,
            speed: 1000,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                600: {
                    slidesPerView: 2,
                },
            },
            navigation: {
                nextEl: '.client-swiper-button-next',
                prevEl: '.client-swiper-button-prev',
            },
        });

        // Counter Js
        VanillaCounter();

        const filters = document.querySelectorAll('.filter');

        filters.forEach((filter) => {
            filter.addEventListener('click', function () {
                let selectedFilter = filter.getAttribute('data-filter');
                let itemsToHide = document.querySelectorAll(`.projects .project:not([data-filter='${selectedFilter}'])`);
                let itemsToShow = document.querySelectorAll(`.projects [data-filter='${selectedFilter}']`);

                if (selectedFilter == 'all') {
                    itemsToHide = [];
                    itemsToShow = document.querySelectorAll('.projects [data-filter]');
                }

                filterMenu = document.querySelectorAll('.filters li.filter');
                filterMenu.forEach((el) => {
                    el.classList.remove('active');
                });
                filter.classList.add('active');

                itemsToHide.forEach((el) => {
                    el.classList.add('hidden');
                    el.classList.remove('block');
                });

                itemsToShow.forEach((el) => {
                    el.classList.remove('hidden');
                    el.classList.add('block');
                });
            });

            // Project Slider
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
        });
    </script>

    <script>
        // Project Slider
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

