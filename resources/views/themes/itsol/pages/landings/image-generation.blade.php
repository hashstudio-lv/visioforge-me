@extends("themes.itsol.layouts.app")

@section("content")
    <section class="max-lg:spy120px lg:spb120px bg-gradient-to-b from-[#f8fafc] to-[#e2e8f0]">
        <div class="container">
            <div class="mx-auto max-w-[867px] text-center">
                <h2 class="h1 pt-30 mb-4 bg-gradient-to-r from-blue-600 to-indigo-800 bg-clip-text text-transparent">
                    {{ __('AI Image Generation') }}
                </h2>
                <p class="mx-auto mb-10 max-w-[708px] text-lg text-gray-600 lg:mb-14">
                    {{ __('We specialize in cutting-edge AI image generation technology that transforms your ideas into stunning visuals, empowering businesses with innovative digital solutions to enhance their brand and accelerate growth.') }}
                </p>
            </div>
            <div class="flex justify-center">
                <div class="grid max-w-4xl grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-2 xl:gap-6">
                    <!-- Card 1 -->
                    <a
                        href="{{ route('services.show', 'text-to-png') }}"
                        class="hover:bg-primary group flex flex-col rounded-[10px] border border-[#1F3664] bg-white p-[30px] no-underline duration-300 hover:border-blue-400 hover:shadow-md"
                    >
                        <img
                            width="80"
                            height="80"
                            src="{{ asset('assets3/images/text-to-png.png') }}"
                            alt="{{ __('Text to PNG') }}"
                            class="group-hover:opacity-90"
                        />
                        <h6 class="h5 mt-7 font-semibold text-gray-800 group-hover:text-white">
                            {{ __('Text to PNG') }}
                        </h6>
                        <p class="mt-4 text-gray-600 group-hover:text-white">
                            {{ __('Produce clear-background PNG images from any text - excellent for branding assets, digital media, and smooth visual integration.') }}
                        </p>
                    </a>

                    <!-- Card 2 -->
                    <a
                        href="{{ route('services.show', 'text-to-image') }}"
                        class="hover:bg-primary group flex flex-col rounded-[10px] border border-[#1F3664] bg-white p-[30px] no-underline duration-300 hover:border-blue-400 hover:shadow-md"
                    >
                        <img
                            width="80"
                            height="80"
                            src="{{ asset('assets3/images/text-to-image.png') }}"
                            alt="{{ __('Text to Image') }}"
                            class="group-hover:opacity-90"
                        />
                        <h6 class="h5 mt-7 font-semibold text-gray-800 group-hover:text-white">
                            {{ __('Text to Image') }}
                        </h6>
                        <p class="mt-4 text-gray-600 group-hover:text-white">
                            {{ __('Instantly generate premium transparent visuals from text descriptions — the ultimate tool for ad campaigns, social media, and brand assets.') }}
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="section bg-primary">
        <div class="container px-0">
            <div class="mx-auto max-w-[838px] text-center lg:mb-14">
                <h5 class="h5 text-primary mb-5 text-white">{{ __('The views expressed by our existing clients') }}</h5>
                <h2 class="h2 text-title mb-4">
                    <p class="text-white">{{ __("Don’t take our word for it.") }}</p>
                    <p class="text-white">{{ __('Look at our clients feedback') }}</p>
                </h2>
                <p class="mx-auto mb-10 max-w-2xl lg:mb-14 text-white">
                    {{ __('Here are just a few of our customer feedbacks. Have no trust in what we have to say. Have a look at what some of our prior clients have said about us.') }}
                </p>
            </div>
            <div class="swiper customer-home2-swiper">
                <div class="swiper-wrapper">
                    <!-- Review 1 -->
                    <div class="swiper-slide p-3">
                        <div
                            class="bg-n8 hover:border-primary rounded-[20px] border border-transparent p-4 shadow-[0px_4px_32px_0px_rgba(0,0,0,0.05)] duration-300 hover:shadow-none lg:px-[30px] lg:py-10">
                            <div class="text-yellow3 flex gap-1">
                                <i class="ti ti-star-filled"></i>
                                <i class="ti ti-star-filled"></i>
                                <i class="ti ti-star-filled"></i>
                                <i class="ti ti-star-filled"></i>
                                <i class="ti ti-star-filled"></i>
                            </div>
                            <p class="py-4">
                                {{ __('Game-Changing AI Tool! After wasting months trying different image generators, I wish I\'d discovered this service earlier. The quality is unmatched, and the team\'s responsiveness is incredible. This is now my only go-to for all my design needs!') }}
                            </p>
                            <hr class="text-gray" />
                            <div class="flex items-center gap-4 pt-4">
                                <div class="flex-grow-1">
                                    <h5 class="h5 mb-1 font-semibold">{{ __('Peter Cooper') }}</h5>
                                    <p class="sm-text">{{ __('Barone LLC.') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Review 2 -->
                    <div class="swiper-slide p-3">
                        <div
                            class="bg-n8 hover:border-primary rounded-[20px] border border-transparent p-4 shadow-[0px_4px_32px_0px_rgba(0,0,0,0.05)] duration-300 hover:shadow-none lg:px-[30px] lg:py-10">
                            <div class="text-yellow3 flex gap-1">
                                <i class="ti ti-star-filled"></i>
                                <i class="ti ti-star-filled"></i>
                                <i class="ti ti-star-filled"></i>
                                <i class="ti ti-star-filled"></i>
                                <i class="ti ti-star-filled"></i>
                            </div>
                            <p class="py-4">
                                {{ __('Unbelievable Results! I\'ve tested countless AI image platforms over the past year, but none compare to this one. The precision and creativity are next-level. I almost don\'t want to share how good it is—it feels like my secret weapon!') }}
                            </p>
                            <hr class="text-gray" />
                            <div class="flex items-center gap-4 pt-4">
                                <div class="flex-grow-1">
                                    <h5 class="h5 mb-1 font-semibold">{{ __('Marvin McKey') }}</h5>
                                    <p class="sm-text">{{ __('Biffco Ltd.') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Review 3 -->
                    <div class="swiper-slide p-3">
                        <div
                            class="bg-n8 hover:border-primary rounded-[20px] border border-transparent p-4 shadow-[0px_4px_32px_0px_rgba(0,0,0,0.05)] duration-300 hover:shadow-none lg:px-[30px] lg:py-10">
                            <div class="text-yellow3 flex gap-1">
                                <i class="ti ti-star-filled"></i>
                                <i class="ti ti-star-filled"></i>
                                <i class="ti ti-star-filled"></i>
                                <i class="ti ti-star-filled"></i>
                                <i class="ti ti-star-filled"></i>
                            </div>
                            <p class="py-4">
                                {{ __('Saved My Business Time & Money! As a marketer, I struggled with expensive designers until I found this service. The AI-generated images are so professional, my clients think I hired a full-time artist. Why didn\'t I switch sooner?') }}
                            </p>
                            <hr class="text-gray" />
                            <div class="flex items-center gap-4 pt-4">
                                <div class="flex-grow-1">
                                    <h5 class="h5 mb-1 font-semibold">{{ __('Wade Warren') }}</h5>
                                    <p class="sm-text">{{ __('Big Kahuna Ltd.') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Review 4 -->
                    <div class="swiper-slide p-3">
                        <div
                            class="bg-n8 hover:border-primary rounded-[20px] border border-transparent p-4 shadow-[0px_4px_32px_0px_rgba(0,0,0,0.05)] duration-300 hover:shadow-none lg:px-[30px] lg:py-10">
                            <div class="text-yellow3 flex gap-1">
                                <i class="ti ti-star-filled"></i>
                                <i class="ti ti-star-filled"></i>
                                <i class="ti ti-star-filled"></i>
                                <i class="ti ti-star-filled"></i>
                                <i class="ti ti-star-filled"></i>
                            </div>
                            <p class="py-4">
                                {{ __('Perfect for Non-Designers! I\'m a writer with zero design skills, but this tool makes me look like a pro. The intuitive interface and stunning outputs have transformed my content. I’m honestly hesitant to recommend it—I want to keep the advantage!') }}
                            </p>
                            <hr class="text-gray" />
                            <div class="flex items-center gap-4 pt-4">
                                <div class="flex-grow-1">
                                    <h5 class="h5 mb-1 font-semibold">{{ __('Esther Howard') }}</h5>
                                    <p class="sm-text">{{ __('Abstergo Industries') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Review 5 -->
                    <div class="swiper-slide p-3">
                        <div
                            class="bg-n8 hover:border-primary rounded-[20px] border border-transparent p-4 shadow-[0px_4px_32px_0px_rgba(0,0,0,0.05)] duration-300 hover:shadow-none lg:px-[30px] lg:py-10">
                            <div class="text-yellow3 flex gap-1">
                                <i class="ti ti-star-filled"></i>
                                <i class="ti ti-star-filled"></i>
                                <i class="ti ti-star-filled"></i>
                                <i class="ti ti-star-filled"></i>
                                <i class="ti ti-star-filled"></i>
                            </div>
                            <p class="py-4">
                                {{ __('Consistently Impressed! After testing over five different image generators, I’ve finally discovered ‘the perfect one.’ The incredible attention to detail and advanced customization options blow me away. My only regret? Not stumbling upon this absolute gem years earlier!') }}
                            </p>
                            <hr class="text-gray" />
                            <div class="flex items-center gap-4 pt-4">
                                <div class="flex-grow-1">
                                    <h5 class="h5 mb-1 font-semibold">{{ __('Jenny Wilson') }}</h5>
                                    <p class="sm-text">{{ __('Binford Ltd.') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="spy120px container grid-cols-2 flex-col gap-6 max-lg:flex lg:grid">
        <div>
            <h5 class="h5 text-primary mb-5">{{ __('Questions and Answers') }}</h5>
            <h2 class="h2 text-title mb-4">{{ __('General Frequently Asked Questions') }}</h2>
            <p class="text-para mb-7">{{ __('If you want to ask us a question, contact us!') }}</p>

            <a
                href="{{ route('pages.show', 'contact-us') }}"
                class="btn-primary border-primary bg-primary"
            >
                {{ __('Contact us!') }}
                <span class="bg-n8 text-primary flex items-center justify-center rounded-full p-1">
                    <i class="ti ti-chevron-right"></i>
                </span>
            </a>
        </div>
        <div class="flex flex-col gap-4">
            <!-- single faq -->
            <div class="appear-downd spx32px py-4 shadow-[0px_8px_30px_0px_rgba(86,58,255,0.10)] sm:py-5">
                <div class="faq-accordion flex cursor-pointer items-center justify-between gap-2 duration-300 sm:gap-6">
                    <div class="flex items-center gap-4">
                        <div>
                            <img
                                src="{{ asset('assets3/images/faq-ans.png') }}"
                                alt="{{ __('FAQ Image') }}"
                            />
                        </div>
                        <h6 class="h6 font-semibold">{{ __('What can I do with your image generation services?') }}</h6>
                    </div>
                    <div
                        class="bg-primary text-n8 flex size-8 shrink-0 items-center justify-center rounded-full leading-none duration-300">
                        <i class="ti ti-chevron-right text-[24px] duration-300"></i>
                    </div>
                </div>
                <div class="h-0 overflow-hidden duration-300">
                    <p class="l-text mt-4 opacity-80">
                        {{ __('Our AI transforms text prompts into high-quality visuals. Generate anything from photorealistic scenes to abstract art and branded content—tailored to your creative vision.') }}
                    </p>
                </div>
            </div>
            <!-- single faq -->
            <div class="appear-downd spx32px py-4 shadow-[0px_8px_30px_0px_rgba(86,58,255,0.10)] sm:py-5">
                <div class="faq-accordion flex cursor-pointer items-center justify-between gap-2 duration-300 sm:gap-6">
                    <div class="flex items-center gap-4">
                        <div>
                            <img
                                src="{{ asset('assets3/images/faq-ans.png') }}"
                                alt="{{ __('FAQ Image') }}"
                            />
                        </div>
                        <h6 class="h6 font-semibold">{{ __('How does Text-to-Image work?') }}</h6>
                    </div>
                    <div
                        class="bg-primary text-n8 flex size-8 shrink-0 items-center justify-center rounded-full leading-none duration-300">
                        <i class="ti ti-chevron-right text-[24px] duration-300"></i>
                    </div>
                </div>
                <div class="h-0 overflow-hidden duration-300">
                    <p class="l-text mt-4 opacity-80">
                        {{ __('Text-to-Image AI analyzes your text prompt and generates a unique visual representation using deep learning algorithms. Just describe what you want, and the system creates it pixel by pixel.') }}
                    </p>
                </div>
            </div>
            <!-- single faq -->
            <div class="appear-downd spx32px py-4 shadow-[0px_8px_30px_0px_rgba(86,58,255,0.10)] sm:py-5">
                <div class="faq-accordion flex cursor-pointer items-center justify-between gap-2 duration-300 sm:gap-6">
                    <div class="flex items-center gap-4">
                        <div>
                            <img
                                src="{{ asset('assets3/images/faq-ans.png') }}"
                                alt="{{ __('FAQ Image') }}"
                            />
                        </div>
                        <h6 class="h6 font-semibold">{{ __('What is Text-to-PNG used for?') }}</h6>
                    </div>
                    <div
                        class="bg-primary text-n8 flex size-8 shrink-0 items-center justify-center rounded-full leading-none duration-300">
                        <i class="ti ti-chevron-right text-[24px] duration-300"></i>
                    </div>
                </div>
                <div class="h-0 overflow-hidden duration-300">
                    <p class="l-text mt-4 opacity-80">
                        {{ __('It creates images with transparent backgrounds (.PNG format)—perfect for logos, product mockups, social media graphics, and designs requiring seamless overlays.') }}
                    </p>
                </div>
            </div>
            <!-- single faq -->
            <div class="appear-downd spx32px py-4 shadow-[0px_8px_30px_0px_rgba(86,58,255,0.10)] sm:py-5">
                <div class="faq-accordion flex cursor-pointer items-center justify-between gap-2 duration-300 sm:gap-6">
                    <div class="flex items-center gap-4">
                        <div>
                            <img
                                src="{{ asset('assets3/images/faq-ans.png') }}"
                                alt="{{ __('FAQ Image') }}"
                            />
                        </div>
                        <h6 class="h6 font-semibold">{{ __('Do I need any design or technical skills?') }}</h6>
                    </div>
                    <div
                        class="bg-primary text-n8 flex size-8 shrink-0 items-center justify-center rounded-full leading-none duration-300">
                        <i class="ti ti-chevron-right text-[24px] duration-300"></i>
                    </div>
                </div>
                <div class="h-0 overflow-hidden duration-300">
                    <p class="l-text mt-4 opacity-80">
                        {{ __('No. The AI handles everything—just type what you imagine in plain language. No Photoshop or design experience required.') }}
                    </p>
                </div>
            </div>
            <!-- single faq -->
            <div class="appear-downd spx32px py-4 shadow-[0px_8px_30px_0px_rgba(86,58,255,0.10)] sm:py-5">
                <div class="faq-accordion flex cursor-pointer items-center justify-between gap-2 duration-300 sm:gap-6">
                    <div class="flex items-center gap-4">
                        <div>
                            <img
                                src="{{ asset('assets3/images/faq-ans.png') }}"
                                alt="{{ __('FAQ Image') }}"
                            />
                        </div>
                        <h6 class="h6 font-semibold">{{ __('Who benefits from using image generation tools?') }}</h6>
                    </div>
                    <div
                        class="bg-primary text-n8 flex size-8 shrink-0 items-center justify-center rounded-full leading-none duration-300">
                        <i class="ti ti-chevron-right text-[24px] duration-300"></i>
                    </div>
                </div>
                <div class="h-0 overflow-hidden duration-300">
                    <p class="l-text mt-4 opacity-80">
                        {{ __('Marketers, designers, entrepreneurs, content creators, and developers who need fast, affordable, and royalty-free visuals.') }}
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
