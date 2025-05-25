@extends('themes.plurk.layouts.app')

@section('content')
    <div class="-mt-[82px] flex-grow overflow-x-hidden lg:-mt-[106px]">
        <div class="bg-cover bg-bottom bg-no-repeat pt-[82px] lg:pt-[106px]"
             style="background-image: url('{{ asset('assets/images/inner-page-hero-bg.png') }}');">
            <div class="relative">
                <div class="container">
                    <div class="relative items-center py-14 lg:flex lg:py-[100px]">
                        <div
                            class="relative z-[1] text-center text-white lg:w-3/5 ltr:lg:text-left rtl:lg:text-right xl:w-3/5">
                            <h2 class="text-4xl font-black sm:text-4xl sm:leading-[126px] xl:text-[80px]">Tools for
                                Photo</h2>
                            <p class="my-8 text-xl leading-[40px] text-[#7780A1]">
                                Turn your ideas into stunning videos using just words. Our AI-powered text-to-video
                                service transforms written prompts into dynamic, high-quality videos — perfect for
                                social media, ads, storytelling, and more. No editing skills required.
                            </p>
                            <a href="{{ route('dashboard') }}" class="btn mt-2 capitalize text-white">Generate Your
                                Video Now</a>
                        </div>
                        <div
                            class="top-[100px] mt-10 h-96 w-auto ltr:right-0 rtl:left-0 lg:absolute lg:mt-0 lg:h-auto lg:w-2/5"
                            data-aos="fade-left"
                            data-aos-duration="1000"
                        >
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="py-20 md:py-28">
            <div class="container">
                <div class="heading text-center ltr:lg:text-left rtl:lg:text-right">
                    <h6>Tools</h6>
                    <h4>Smart AI Tools to Enhance and Refine Your Images</h4>
                </div>

                <div class="space-y-10">
                    <div
                        class="group grid-cols-2 overflow-hidden rounded-xl bg-white dark:bg-gray-dark sm:grid"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                    >
                        <div class="overflow-hidden p-8 pr-0 pb-0">
                            <video class="size-full object-cover" autoplay="" loop="" playsinline=""
                                   poster="https://cdn.web.imagine.art/imagine-frontend/assets/images/mini-app/bg-remover/usage-steps/poster.webp">
                                <source
                                    src="https://cdn.web.imagine.art/imagine-frontend/assets/video/mini-app/bg-remover/usage-steps/video.webm"
                                    type="video/webm">
                            </video>
                        </div>
                        <div class="space-y-4 p-5 font-semibold lg:py-20 lg:px-16">
                            <div
                                class="text-2xl font-extrabold text-black transition hover:text-secondary dark:text-white dark:hover:text-secondary">
                                {{ __('AI Background Remover') }}
                            </div>
                            <p>
                                {{ __('Erase image backgrounds in seconds. Just one click to get a clean, transparent result - perfect for products, portraits, and creatives.') }}
                            </p>
                            <h3 class="mb-7 text-xl font-extrabold text-black dark:text-white">{{ __('Features and Functionalities') }}</h3>
                            <ul class="list-disc space-y-4 font-semibold leading-6 ltr:ml-[18px] rtl:mr-[18px] md:text-md ">
                                <li>Erase backgrounds instantly with just a single click — fast, clean, and accurate.</li>
                                <li>Smart detection ensures subjects stay sharp while backgrounds vanish seamlessly.</li>
                                <li>Remove backgrounds from portraits, products, logos, and more with ease.</li>
                                <li>Download clean, transparent PNGs without quality loss.</li>
                                <li>Keep fine edges, hair, and shadows intact for natural, professional results.</li>
                            </ul>
                            <div class="text-center">
                                <a href="{{ route('login') }}" class="mt-4 btn flex-none rounded-md text-white shadow-[10px_15px_30px_rgba(119,128,161,0.2)]">
                                    {{ __('Remove Background Now') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="group grid-cols-2 overflow-hidden rounded-xl bg-white dark:bg-gray-dark sm:grid"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                    >
                        <div class="space-y-4 p-5 font-semibold lg:py-20 lg:px-16">
                            <div
                                class="text-2xl font-extrabold text-black transition hover:text-secondary dark:text-white dark:hover:text-secondary">
                                {{ __('AI Image Upscale') }}
                            </div>
                            <p>
                                {{ __('Enhance image quality in a single click. Instantly upscale your visuals to higher resolution — perfect for prints, products, and professional content.') }}
                            </p>

                            <h3 class="mb-7 text-xl font-extrabold text-black dark:text-white">Features and Functionalities</h3>

                            <ul class="list-disc space-y-4 font-semibold leading-6 ltr:ml-[18px] rtl:mr-[18px] md:text-md ">
                                <li>Upscale your images without sacrificing sharpness or clarity.</li>
                                <li>Automatically add fine textures and intricate details for a refined look.</li>
                                <li>Boost sharpness, contrast, and color vibrancy with intelligent adjustments.</li>
                                <li>Customize your results with artistic filters and focus adjustments.</li>
                                <li>Maintain the core composition and intent of the original image — just in higher quality.</li>
                            </ul>

                            <div class="text-center">
                                <a href="{{ route('login') }}" class="mt-4 btn flex-none rounded-md text-white shadow-[10px_15px_30px_rgba(119,128,161,0.2)]">
                                    {{ __('Start Upscaling') }}
                                </a>
                            </div>
                        </div>
                        <div class="overflow-hidden">
                            <video class="size-full object-cover" autoplay="" loop="" playsinline=""
                                   poster="{{ asset('assets/images/hero_image.avif') }}">
                                <source
                                    src="{{ asset('assets/videos/poster.webp') }}"
                                    type="video/webm">
                            </video>
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
    </div>
@endsection
