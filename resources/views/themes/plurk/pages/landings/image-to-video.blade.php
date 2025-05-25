@extends('themes.plurk.layouts.app')

@section('content')
    <div class="-mt-[82px] flex-grow overflow-x-hidden lg:-mt-[106px]">
        <div class="bg-cover bg-bottom bg-no-repeat pt-[82px] lg:pt-[106px]"
             style="background-image: url('{{ asset('assets/images/inner-page-hero-bg.png') }}');">
            <div class="relative">
                <div class="container">
                    <div class="relative items-center py-14 lg:flex lg:py-[100px]">
                        <div class="relative z-[1] text-center text-white lg:w-3/5 ltr:lg:text-left rtl:lg:text-right xl:w-3/5 pr-8">
                            <h2 class="text-4xl font-black sm:text-5xl sm:leading-[126px] xl:text-[80px]">{{ __('Image to Video') }}</h2>
                            <p class="my-8 text-xl leading-[40px] text-[#7780A1]">
                                {{ __('Bring static visuals to life with motion. Our AI-powered image-to-video service transforms your images into smooth, engaging video clips — ideal for reels, ads, product showcases, and more. No animation or video editing skills needed.') }}
                            </p>
                            <a href="{{ route('dashboard') }}" class="btn mt-2 capitalize text-white">{{ __('Generate Your Video Now') }}</a>
                        </div>

                        <div
                            class="top-[100px] mt-10 h-96 w-auto ltr:right-0 rtl:left-0 lg:absolute lg:mt-0 lg:h-auto lg:w-2/5"
                            data-aos="fade-left"
                            data-aos-duration="1000">
                            <video autoplay muted loop playsinline class="w-full h-full object-cover bg-white p-1">
                                <source src="{{ asset('assets/videos/A_lively_scene_of_a_group_of_men_and_women_jogging_d98bb127-e216-42a5-95a4-a0721263af9e.mp4') }}" type="video/mp4"/>
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="bg-gradient-to-t from-white/50 to-transparent py-14 dark:from-white/[0.02] md:py-24">
            <div class="container">
                <div>
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
                            <p class="text-lg font-extrabold text-white">{{ __('FEATURES') }}</p>
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
                        {{ __('Powerful Tools at Your Fingertips.') }}
                    </h3>
                    <p class="mt-2.5 text-center text-lg font-medium ltr:md:text-left rtl:md:text-right">
                        {{ __('Everything you need to create, in one place.') }}
                    </p>
                </div>

                <div class="grid gap-[30px] sm:grid-cols-2 lg:grid-cols-3 mt-16">
                    <div data-aos="fade-up" data-aos-duration="1000">
                        <div
                            class="relative border-[2px] border-white bg-gradient-to-b from-white/50 to-transparent p-5 shadow-[-20px_30px_70px_rgba(219,222,225,0.4)] transition hover:border-secondary/50 hover:bg-secondary/20 dark:border-[rgba(119,128,161,0.15)] dark:bg-black dark:from-transparent dark:shadow-none dark:hover:border-secondary/50 dark:hover:bg-secondary/10 md:p-8"
                        >
                            <a href="javascript:" class="absolute inset-0 h-full w-full"></a>
                            <div class="flex h-[60px] w-[60px] items-center justify-center bg-primary/10">
                                <img src="{{ asset('assets/images/personal-portfolio/ui-ux-icon.svg') }}" alt="" />
                            </div>
                            <h5 class="pt-7 pb-3 text-[22px] font-bold text-black dark:text-white">{{ __('Image to Video') }}</h5>
                            <p class="text-lg leading-loose line-clamp-3">{{ __('Transform static images into smooth, AI-generated video clips in seconds.') }}</p>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="1000">
                        <div
                            class="relative border-[2px] border-white bg-gradient-to-b from-white/50 to-transparent p-5 shadow-[-20px_30px_70px_rgba(219,222,225,0.4)] transition hover:border-secondary/50 hover:bg-secondary/20 dark:border-[rgba(119,128,161,0.15)] dark:bg-black dark:from-transparent dark:shadow-none dark:hover:border-secondary/50 dark:hover:bg-secondary/10 md:p-8"
                        >
                            <a href="javascript:" class="absolute inset-0 h-full w-full"></a>
                            <div class="flex h-[60px] w-[60px] items-center justify-center bg-primary/10">
                                <img src="{{ asset('assets/images/personal-portfolio/product-icon.svg') }}" alt="" />
                            </div>
                            <h5 class="pt-7 pb-3 text-[22px] font-bold text-black dark:text-white">{{ __('Fast Generation') }}</h5>
                            <p class="text-lg leading-loose line-clamp-3">
                                {{ __('Create dynamic videos instantly — no animation or editing required.') }}
                            </p>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="1000">
                        <div
                            class="relative border-[2px] border-white bg-gradient-to-b from-white/50 to-transparent p-5 shadow-[-20px_30px_70px_rgba(219,222,225,0.4)] transition hover:border-secondary/50 hover:bg-secondary/20 dark:border-[rgba(119,128,161,0.15)] dark:bg-black dark:from-transparent dark:shadow-none dark:hover:border-secondary/50 dark:hover:bg-secondary/10 md:p-8"
                        >
                            <a href="javascript:" class="absolute inset-0 h-full w-full"></a>
                            <div class="flex h-[60px] w-[60px] items-center justify-center bg-primary/10">
                                <img src="{{ asset('assets/images/personal-portfolio/graphic-icon.svg') }}" alt="" />
                            </div>
                            <h5 class="pt-7 pb-3 text-[22px] font-bold text-black dark:text-white">{{ __('Creative Freedom') }}</h5>
                            <p class="text-lg leading-loose line-clamp-3">
                                {{ __('Upload any image — our AI brings it to life with motion and style.') }}
                            </p>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="1000">
                        <div
                            class="relative border-[2px] border-white bg-gradient-to-b from-white/50 to-transparent p-5 shadow-[-20px_30px_70px_rgba(219,222,225,0.4)] transition hover:border-secondary/50 hover:bg-secondary/20 dark:border-[rgba(119,128,161,0.15)] dark:bg-black dark:from-transparent dark:shadow-none dark:hover:border-secondary/50 dark:hover:bg-secondary/10 md:p-8"
                        >
                            <a href="javascript:" class="absolute inset-0 h-full w-full"></a>
                            <div class="flex h-[60px] w-[60px] items-center justify-center bg-primary/10">
                                <img src="{{ asset('assets/images/personal-portfolio/web-design-icon.svg') }}" alt="" />
                            </div>
                            <h5 class="pt-7 pb-3 text-[22px] font-bold text-black dark:text-white">{{ __('Multiple Styles') }}</h5>
                            <p class="text-lg leading-loose line-clamp-3">
                                {{ __('Choose from cinematic, smooth, or dramatic animations to match your needs.') }}
                            </p>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="1000">
                        <div
                            class="relative border-[2px] border-white bg-gradient-to-b from-white/50 to-transparent p-5 shadow-[-20px_30px_70px_rgba(219,222,225,0.4)] transition hover:border-secondary/50 hover:bg-secondary/20 dark:border-[rgba(119,128,161,0.15)] dark:bg-black dark:from-transparent dark:shadow-none dark:hover:border-secondary/50 dark:hover:bg-secondary/10 md:p-8"
                        >
                            <a href="javascript:" class="absolute inset-0 h-full w-full"></a>
                            <div class="flex h-[60px] w-[60px] items-center justify-center bg-primary/10">
                                <img src="{{ asset('assets/images/personal-portfolio/research-icon.svg') }}" alt="" />
                            </div>
                            <h5 class="pt-7 pb-3 text-[22px] font-bold text-black dark:text-white">{{ __('Easy to Use') }}</h5>
                            <p class="text-lg leading-loose line-clamp-3">
                                {{ __('Just upload and generate — your image becomes a video in moments.') }}
                            </p>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="1000">
                        <div
                            class="relative border-[2px] border-white bg-gradient-to-b from-white/50 to-transparent p-5 shadow-[-20px_30px_70px_rgba(219,222,225,0.4)] transition hover:border-secondary/50 hover:bg-secondary/20 dark:border-[rgba(119,128,161,0.15)] dark:bg-black dark:from-transparent dark:shadow-none dark:hover:border-secondary/50 dark:hover:bg-secondary/10 md:p-8"
                        >
                            <a href="javascript:" class="absolute inset-0 h-full w-full"></a>
                            <div class="flex h-[60px] w-[60px] items-center justify-center bg-primary/10">
                                <img src="{{ asset('assets/images/personal-portfolio/app-development-icon.svg') }}" alt="" />
                            </div>
                            <h5 class="pt-7 pb-3 text-[22px] font-bold text-black dark:text-white">{{ __('Perfect for Content') }}</h5>
                            <p class="text-lg leading-loose line-clamp-3">
                                {{ __('Ideal for social media, product showcases, campaigns, and storytelling.') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-gradient-to-t from-white/50 to-transparent pt-14 dark:from-white/[0.02] md:pt-24">
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
                    {{ __('Watch Images Come Alive.') }}
                </h3>
                <p class="mt-2.5 text-center text-lg font-medium ltr:md:text-left rtl:md:text-right">
                    {{ __('Browse powerful video clips generated from single frames.') }}
                </p>
            </div>

            @php
                $videos = [
                    'The_scene_captures_two_children_bundled_in_winter_917d7b7b-0b82-4fab-9dbe-04338143c803.mp4',
                    'A_vibrant_street_scene_showcasing_a_confident_cycl_41480843-98a2-4ae4-854e-d9773fb90302.mp4',
                    'A_captivating_scene_illustrates_a_person_gracefull_8b68f5d0-af89-40cf-84e5-fa69a820ca63.mp4',
                    'A_polar_bear_sitting_on_snow,_reading_a_book_near_a070733d-1b8f-4239-b0b5-e0dd8d68482a.mp4',
                    'A_medieval_banquet_setting_inside_a_grand_castle_h_240373fb-7622-430a-8926-148847505da1.mp4',
                    'A_man_in_a_vintage_hat_walking_down_a_narrow_alley_3dd17350-1bc8-49e9-8557-62dfa18393ea.mp4',
                    'A_graceful_ballerina_dressed_in_a_flowing,_delicat_7f0305a3-7d60-40ed-a1dd-d2305242ed86.mp4',
                    'A_deliciously_inviting_stack_of_golden_pancakes_ar_9e236243-0c66-4165-bfdf-c4cab2fbe807.mp4',
                    'An_underwater_video_of_a_scuba_diver_playing_a_bra_67c21f19-8bee-49b6-8ceb-5d4857d303f3.mp4',
                    'A_thrilling_view_from_the_perspective_of_a_motorcy_33f941e4-d310-4ac8-9bb4-6b5dfe2b142b.mp4',
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
                <div>
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
                            <p class="text-lg font-extrabold text-white">{{ __('EFFECTIVENESS') }}</p>
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
                        Boosting Results with AI-Powered Content
                    </h3>
                    <p class="mt-2.5 text-center text-lg font-medium ltr:md:text-left rtl:md:text-right">
                        Generate high-impact media in seconds.
                    </p>
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

        <section class="bg-black py-12 dark:bg-gray-dark md:py-[75px]">
            <div class="container">
                <div class="flex flex-col items-center justify-between gap-7 text-center sm:flex-row ltr:sm:text-left rtl:sm:text-right">
                    <p class="flex-1 text-2xl font-bold text-white md:text-3xl">Launch stunning, scroll-stopping content with AI in seconds.</p>
                    <a href="{{ route('login') }}" class="btn flex-none rounded-md text-white shadow-[10px_15px_30px_rgba(119,128,161,0.2)]">Get started</a>
                </div>
            </div>
        </section>
    </div>
@endsection
