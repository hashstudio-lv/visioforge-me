@extends("themes.itsol.layouts.app")

@section("content")
    <section class="section relative">
        <img
            alt="{{ __('element') }}"
            src="{{ asset('assets3/images/ai-data-element-1.png') }}"
            class="animate-rotate xxl:block absolute bottom-0 left-0 hidden"
        />
        <div class="container relative z-[1]">
            <div class="grid grid-cols-12 items-center gap-6">
                <div class="col-span-12 xl:col-span-6">
                    <h5 class="h5 text-primary mb-5">{{ __('Itsolutio - Your AI Helper') }}</h5>
                    <h2 class="h2 text-title mb-5">{{ __('AI Image Editing') }}</h2>
                    <p class="smb40px text-[#5A5F96]">
                        {{ __('Our image editing services are powered by top-tier talent and AI tools — delivering fast, high-quality visual enhancements for any project.') }}
                    </p>
                    <div>
                        <a
                            href="{{ route('dashboard') }}"
                            class="btn-primary border-secondary"
                        >
                            {{ __('Start now!') }}
                            <span class="bg-n8 text-primary flex items-center justify-center rounded-full p-1">
                                <i class="ti ti-chevron-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-span-12 text-center xl:col-span-6">
                    <div class="grid items-center gap-6 md:grid-cols-2">
                        <div class="grid grid-cols-12 gap-4 md:gap-6">
                            <div class="col-span-12 sm:col-span-6 md:col-span-12">
                                <a
                                    href="{{ route('services.show', 'background-remover') }}"
                                    class="bg-n8 shadow-box1 spx32px pb-30 pt-10 hover:bg-primary hover:text-n8 group flex h-full flex-col items-center rounded-xl no-underline duration-300"
                                >
                                    <div class="rounded-full">
                                        <img
                                            width="95"
                                            height="95"
                                            src="{{ asset('assets3/images/background-remover.png') }}"
                                            alt="{{ __('Background Remover') }}"
                                        />
                                    </div>
                                    <h5 class="h5 text-title group-hover:text-n8 mt-6 text-center font-semibold duration-300">
                                        {{ __('Background Remover') }}
                                    </h5>
                                    <p class="h6 text-para2 group-hover:text-n8 pt-4 font-normal duration-300">
                                        {{ __('Quickly eliminate image backgrounds with AI-powered precision.') }}
                                    </p>
                                </a>
                            </div>

                            <div class="col-span-12 sm:col-span-6 md:col-span-12">
                                <a
                                    href="{{ route('services.show', 'image-upscale') }}"
                                    class="bg-n8 shadow-box1 spx32px spy60px hover:bg-primary hover:text-n8 group flex h-full flex-col items-center rounded-xl no-underline duration-300"
                                >
                                    <div class="rounded-full">
                                        <img
                                            width="95"
                                            height="95"
                                            src="{{ asset('assets3/images/image-upscale.png') }}"
                                            alt="{{ __('Image Upscale') }}"
                                        />
                                    </div>
                                    <h5 class="h5 text-title group-hover:text-n8 mt-6 text-center font-semibold duration-300">
                                        {{ __('Image Upscale') }}
                                    </h5>
                                    <p class="h6 text-para2 group-hover:text-n8 pt-4 font-normal duration-300">
                                        {{ __('Boost image clarity and resolution without sacrificing quality.') }}
                                    </p>
                                </a>
                            </div>
                        </div>

                        <a
                            href="{{ route('services.show', 'ai-background') }}"
                            class="bg-n8 shadow-box1 spx32px spy60px hover:bg-primary hover:text-n8 group flex flex-col items-center rounded-xl no-underline duration-300"
                        >
                            <div class="rounded-full">
                                <img
                                    width="95"
                                    height="95"
                                    src="{{ asset('assets3/images/ai-background.png') }}"
                                    alt="{{ __('AI Background') }}"
                                />
                            </div>
                            <h5 class="h5 text-title group-hover:text-n8 mt-6 text-center font-semibold duration-300">
                                {{ __('AI Background') }}
                            </h5>
                            <p class="h6 text-para2 group-hover:text-n8 pt-4 font-normal duration-300">
                                {{ __('Seamlessly replace image backgrounds using AI.') }}
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section bg-primary">
        <div class="container px-0">
            <div class="mx-auto max-w-[838px] text-center lg:mb-14">
                <h5 class="h5 text-primary mb-5 text-white">{{ __('The views expressed by our existing clients') }}</h5>
                <h2 class="h2 text-title mb-4">
                    <p class="text-white">{{ __("Don't take our word for it.") }}</p>
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
                                {{ __('After wasting months with complex software, I wish I\'d discovered this service earlier. The one-click enhancements are unmatched, and the batch processing saves me hours weekly!') }}
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
                                {{ __('Unbelievable Precision! The AI detects edges better than any human editor. My product photos now look studio-quality without the studio price tag. This is my secret weapon for our e-commerce store!') }}
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
                                {{ __('Saved My Photography Business! The automatic color correction alone is worth ten times the price. Clients now think I\'ve upgraded all my equipment when I just upgraded my editing software!') }}
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
                                {{ __('Perfect for Social Media Managers! I edit hundreds of images weekly - this tool cut my work time in half. The batch processing and preset styles are game-changers for our agency\'s workflow.') }}
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
                                {{ __('Consistently Impressed! As a professional retoucher, I\'m picky about tools. This AI handles 80% of my basic edits now, letting me focus on creative work. The skin retouching alone is worth the subscription!') }}
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
                        <h6 class="h6 font-semibold">{{ __('What can I do with your image editing services?') }}</h6>
                    </div>
                    <div
                        class="bg-primary text-n8 flex size-8 shrink-0 items-center justify-center rounded-full leading-none duration-300">
                        <i class="ti ti-chevron-right text-[24px] duration-300"></i>
                    </div>
                </div>
                <div class="h-0 overflow-hidden duration-300">
                    <p class="l-text mt-4 opacity-80">
                        {{ __('Our tools offer professional-grade photo enhancement, background removal, color correction, and batch processing - perfect for photographers, e-commerce, and marketers.') }}
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
                        <h6 class="h6 font-semibold">{{ __('How does AI photo enhancement work?') }}</h6>
                    </div>
                    <div
                        class="bg-primary text-n8 flex size-8 shrink-0 items-center justify-center rounded-full leading-none duration-300">
                        <i class="ti ti-chevron-right text-[24px] duration-300"></i>
                    </div>
                </div>
                <div class="h-0 overflow-hidden duration-300">
                    <p class="l-text mt-4 opacity-80">
                        {{ __('Our AI analyzes each image to automatically adjust exposure, colors, and sharpness while preserving important details - delivering studio-quality results in one click.') }}
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
                        <h6 class="h6 font-semibold">{{ __('Is background removal really automatic?') }}</h6>
                    </div>
                    <div
                        class="bg-primary text-n8 flex size-8 shrink-0 items-center justify-center rounded-full leading-none duration-300">
                        <i class="ti ti-chevron-right text-[24px] duration-300"></i>
                    </div>
                </div>
                <div class="h-0 overflow-hidden duration-300">
                    <p class="l-text mt-4 opacity-80">
                        {{ __('Yes! Our AI detects subjects with 99% accuracy, even with complex edges like hair or fur. You get perfect cutouts in seconds, with optional manual refinements.') }}
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
                        <h6 class="h6 font-semibold">{{ __('Do I need Photoshop experience?') }}</h6>
                    </div>
                    <div
                        class="bg-primary text-n8 flex size-8 shrink-0 items-center justify-center rounded-full leading-none duration-300">
                        <i class="ti ti-chevron-right text-[24px] duration-300"></i>
                    </div>
                </div>
                <div class="h-0 overflow-hidden duration-300">
                    <p class="l-text mt-4 opacity-80">
                        {{ __('Not at all. Our interface is designed for beginners, with one-click enhancements and intuitive sliders for advanced users. Professional results require zero technical skills.') }}
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
                        <h6 class="h6 font-semibold">{{ __('Who uses your editing tools?') }}</h6>
                    </div>
                    <div
                        class="bg-primary text-n8 flex size-8 shrink-0 items-center justify-center rounded-full leading-none duration-300">
                        <i class="ti ti-chevron-right text-[24px] duration-300"></i>
                    </div>
                </div>
                <div class="h-0 overflow-hidden duration-300">
                    <p class="l-text mt-4 opacity-80">
                        {{ __('Photographers, e-commerce businesses, marketing agencies, social media managers, and anyone needing professional-looking images without the complexity of traditional software.') }}
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
