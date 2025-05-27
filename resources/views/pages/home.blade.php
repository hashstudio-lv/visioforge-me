@php use App\Enums\ProductCategory;use App\Models\Product; @endphp
@extends('layouts.app')

@section('content')
    <main class="bg-transparent">
        <div
            class="bg-lightGrey11 dark:bg-lightGrey11-dark relative z-0 overflow-hidden pb-100px pt-100px">
            <div class="container lg:max-w-770px xl:max-w-998px relative overflow-hidden lg:px-0">
                <div data-aos="fade-up" class="text-center aos-init aos-animate">
                    <div class="">
                        <h3 class="uppercase text-secondaryColor text-size-15 mb-5px md:mb-15px font-inter tracking-[4px] font-semibold">
                            {{ __('AI BUSINESS TOOLS') }}
                        </h3>
                        <h1 class="text-size-35 md:text-size-65 lg:text-5xl 2xl:text-size-65 leading-42px md:leading-18 lg:leading-15 2xl:leading-18 text-blackColor dark:text-blackColor-dark md:tracking-half lg:tracking-normal 2xl:tracking-half font-bold mb-15px">
                            <span class="text-secondaryColor">Smart Solutions</span> for Agreements, Emails & Images
                        </h1>
                        <p class="text-size-15 md:text-lg text-blackColor dark:text-blackColor-dark font-medium">
                            Boost your productivity with AI-generated legal documents, <br>
                            professional emails, and ready-to-use stock images — all in one platform.
                        </p>

                        <div class="mt-30px">
                            <a href="{{ route('login') }}"
                               class="text-sm md:text-size-15 text-whiteColor bg-primaryColor border border-primaryColor px-25px py-15px hover:text-primaryColor hover:bg-whiteColor rounded inline-block dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor">
                                {{ __('Start now') }}
                            </a>
                        </div>
                    </div>
                </div>

                <ul data-aos="fade-up"
                    class="flex justify-between items-center px-30px py-23px mt-50px bg-borderColor dark:bg-borderColor-dark rounded-lg2 aos-init aos-animate">
                    <li>
                        <div class="flex flex-col pr-4">
                            <span class="text-black dark:text-blackColor-dark font-bold">
                                {{ __('AI Email Generations') }}
                            </span>
                            <div class="text-sm">
                                Create professional, legally-sound agreements in seconds — just input key details, and
                                let AI handle the formatting and clauses.
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="whitespace-nowrap text-size-15 text-whiteColor bg-secondaryColor px-25px py-10px border border-secondaryColor hover:text-secondaryColor hover:bg-whiteColor inline-block rounded dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor"
                           href="{{ route('pages.emails') }}">
                            Generate Email <i class="icofont-long-arrow-right"></i>
                        </a>
                    </li>
                </ul>

                <ul data-aos="fade-up"
                    class="flex justify-between items-center px-30px py-23px mt-2 bg-borderColor dark:bg-borderColor-dark rounded-lg2 aos-init aos-animate">
                    <li>
                        <div class="flex flex-col pr-4">
                            <span class="text-black dark:text-blackColor-dark font-bold">
                                {{ __('AI Agreement Generations') }}
                            </span>
                            <div class="text-sm">
                                Craft clear, polished emails for any situation — from business proposals to customer
                                support — with AI-powered tone and structure.
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="whitespace-nowrap text-size-15 text-whiteColor bg-secondaryColor px-25px py-10px border border-secondaryColor hover:text-secondaryColor hover:bg-whiteColor inline-block rounded dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor"
                           href="{{ route('pages.agreements') }}">
                            Generate Agreement <i class="icofont-long-arrow-right"></i>
                        </a>
                    </li>
                </ul>

                <ul data-aos="fade-up"
                    class="flex justify-between items-center px-30px py-23px mt-2 bg-borderColor dark:bg-borderColor-dark rounded-lg2 aos-init aos-animate">
                    <li>
                        <div class="flex flex-col pr-4">
                            <span class="text-black dark:text-blackColor-dark font-bold">
                                {{ __('Stock Image Library') }}
                            </span>
                            <div class="text-sm">
                                Access a curated collection of high-quality stock images for websites, ads, and
                                presentations — royalty-free and ready to use.
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="whitespace-nowrap text-size-15 text-whiteColor bg-secondaryColor px-25px py-10px border border-secondaryColor hover:text-secondaryColor hover:bg-whiteColor inline-block rounded dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor"
                           href="{{ route('products.index') }}">
                            Explore <i class="icofont-long-arrow-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <section class="pt-100px pb-100px">
            <div
                class="py-10 md:py-10 2xl:py-50px 3xl:py-30 mx-10px md:mx-50px 3xl:mx-150px bg-darkdeep3 dark:bg-darkdeep3-dark shadow-container rounded-5">
                <div class="container">
                    <!-- about section  -->
                    <div class="grid grid-cols-1 xl:grid-cols-2 gap-x-30px">
                        <!-- about left -->
                        <div
                            class="relative z-0 mb-30px lg:mb-0 pb-0 md:pb-30px xl:pb-0 overflow-visible aos-init aos-animate"
                            data-aos="fade-up">
                            <div class="tilt"
                                 style="will-change: transform; transform: perspective(2000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                                <img class="w-full" src="{{ asset('assets/images/Rolands_Generate_image_for_website_service__AI_Email_Gener_9e1feb49-19b4-4553-aebf-8e6f65c5be8f.png') }}" alt="">
                            </div>
                        </div>
                        <!-- about right -->
                        <div data-aos="fade-up" class="aos-init aos-animate">
                            <span
                                class="text-sm font-semibold text-primaryColor bg-whitegrey3 px-6 py-5px mb-5 rounded-full inline-block">
                                AI Email Generation
                            </span>
                            <h3 class="text-3xl md:text-size-45 leading-10 md:leading-2xl font-bold text-blackColor dark:text-blackColor-dark pb-25px">
                                Welcome to the Future of
                                <span
                                    class="relative after:w-full after:h-[7px] after:bg-secondaryColor z-0 after:absolute after:left-0 after:bottom-3 md:after:bottom-5 md:after:-z-1">Email Writing</span>
                            </h3>
                            <p class="text-sm md:text-base leading-7 text-contentColor dark:text-contentColor-dark mb-6 pl-3 border-l-2 border-primaryColor">
                                AI-powered tools to help you write clear, professional, and effective emails for any
                                situation — instantly and effortlessly.
                            </p>
                            <ul class="space-y-5">
                                <li class="flex items-center group">
                                    <i class="icofont-check text-primaryColor mr-15px border border-primaryColor rounded-full"></i>
                                    <p class="text-sm md:text-base text-blackColor dark:text-blackColor-dark">
                                        Compose emails in seconds with AI assistance
                                    </p>
                                </li>
                                <li class="flex items-center group">
                                    <i class="icofont-check text-primaryColor mr-15px border border-primaryColor rounded-full"></i>
                                    <p class="text-sm md:text-base text-blackColor dark:text-blackColor-dark">
                                        Perfect for outreach, support, and daily communication
                                    </p>
                                </li>
                                <li class="flex items-center group">
                                    <i class="icofont-check text-primaryColor mr-15px border border-primaryColor rounded-full"></i>
                                    <p class="text-sm md:text-base text-blackColor dark:text-blackColor-dark">
                                        Boost reply rates and save writing time
                                    </p>
                                </li>
                            </ul>
                            <!-- about counter -->
                            <div class="counter flex flex-wrap lg:pt-30px gap-y-30px lg:gap-y-0">
                                <div class="basis-full sm:basis-1/2 lg:basis-1/3 aos-init aos-animate"
                                     data-aos="fade-up">
                                    <div class="flex gap-4">
                                        <div>
                                            <p class="text-size-34 leading-[1.1] text-blackColor font-bold font-hind dark:text-blackColor-dark">
                                                <span data-countup-number="27">27</span><span>k+</span>
                                            </p>
                                            <p class="uppercase text-blackColor font-medium leading-[18px] dark:text-blackColor-dark">
                                                Emails<br>Generated
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="basis-full sm:basis-1/2 lg:basis-1/3 aos-init aos-animate"
                                     data-aos="fade-up">
                                    <div class="flex gap-4">
                                        <div>
                                            <p class="text-size-34 leading-[1.1] text-blackColor font-bold font-hind dark:text-blackColor-dark">
                                                <span data-countup-number="145">145</span><span>+</span>
                                            </p>
                                            <p class="uppercase text-blackColor font-medium leading-[18px] dark:text-blackColor-dark">
                                                Business<br>Users
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="basis-full sm:basis-1/2 lg:basis-1/3 aos-init aos-animate"
                                     data-aos="fade-up">
                                    <div class="flex gap-4">
                                        <div>
                                            <p class="text-size-34 leading-[1.1] text-blackColor font-bold font-hind dark:text-blackColor-dark">
                                                <span data-countup-number="10">10</span><span>k</span>
                                            </p>
                                            <p class="uppercase text-blackColor font-medium leading-[18px] dark:text-blackColor-dark">
                                                Saved<br>Hours
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-10">
                                <a href="{{ route('pages.emails') }}" class="text-sm md:text-size-15 text-whiteColor bg-primaryColor border border-primaryColor px-25px py-15px hover:text-primaryColor hover:bg-whiteColor rounded inline-block dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor">
                                    {{ __('Generate Email') }}
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="pb-100px">
            <div class="py-10 md:py-10 2xl:py-50px 3xl:py-30 mx-10px md:mx-50px 3xl:mx-150px bg-darkdeep3 dark:bg-darkdeep3-dark shadow-container rounded-5">
                <div class="container">
                    <!-- about section  -->
                    <div class="grid grid-cols-1 xl:grid-cols-2 gap-x-30px">
                        <!-- about left -->
                        <!-- about right -->
                        <div data-aos="fade-up" class="aos-init aos-animate">
                    <span class="text-sm font-semibold text-primaryColor bg-whitegrey3 px-6 py-5px mb-5 rounded-full inline-block">
                        AI Agreement Generation
                    </span>
                            <h3 class="text-3xl md:text-size-45 leading-10 md:leading-2xl font-bold text-blackColor dark:text-blackColor-dark pb-25px">
                                Effortless Creation of<br>
                                <span
                                    class="relative after:w-full after:h-[7px] after:bg-secondaryColor z-0 after:absolute after:left-0 after:bottom-3 md:after:bottom-5 md:after:-z-1">Legal Documents</span>
                            </h3>
                            <p class="text-sm md:text-base leading-7 text-contentColor dark:text-contentColor-dark mb-6 pl-3 border-l-2 border-primaryColor">
                                Use AI to generate contracts, agreements, and legal forms with ease — accurate, customizable, and ready in seconds.
                            </p>
                            <ul class="space-y-5">
                                <li class="flex items-center group">
                                    <i class="icofont-check text-primaryColor mr-15px border border-primaryColor rounded-full"></i>
                                    <p class="text-sm md:text-base text-blackColor dark:text-blackColor-dark">
                                        Generate legal agreements in just a few clicks
                                    </p>
                                </li>
                                <li class="flex items-center group">
                                    <i class="icofont-check text-primaryColor mr-15px border border-primaryColor rounded-full"></i>
                                    <p class="text-sm md:text-base text-blackColor dark:text-blackColor-dark">
                                        Ideal for freelancers, startups, and businesses
                                    </p>
                                </li>
                                <li class="flex items-center group">
                                    <i class="icofont-check text-primaryColor mr-15px border border-primaryColor rounded-full"></i>
                                    <p class="text-sm md:text-base text-blackColor dark:text-blackColor-dark">
                                        Save hours on drafting and reviewing documents
                                    </p>
                                </li>
                            </ul>
                            <!-- about counter -->
                            <div class="counter flex flex-wrap lg:pt-30px gap-y-30px lg:gap-y-0">
                                <div class="basis-full sm:basis-1/2 lg:basis-1/3 aos-init aos-animate" data-aos="fade-up">
                                    <div class="flex gap-4">
                                        <div>
                                            <p class="text-size-34 leading-[1.1] text-blackColor font-bold font-hind dark:text-blackColor-dark">
                                                <span data-countup-number="9">9</span><span>k+</span>
                                            </p>
                                            <p class="uppercase text-blackColor font-medium leading-[18px] dark:text-blackColor-dark">
                                                Agreements<br>Created
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="basis-full sm:basis-1/2 lg:basis-1/3 aos-init aos-animate" data-aos="fade-up">
                                    <div class="flex gap-4">
                                        <div>
                                            <p class="text-size-34 leading-[1.1] text-blackColor font-bold font-hind dark:text-blackColor-dark">
                                                <span data-countup-number="120">120</span><span>+</span>
                                            </p>
                                            <p class="uppercase text-blackColor font-medium leading-[18px] dark:text-blackColor-dark">
                                                Legal Use<br>Cases
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="basis-full sm:basis-1/2 lg:basis-1/3 aos-init aos-animate" data-aos="fade-up">
                                    <div class="flex gap-4">
                                        <div>
                                            <p class="text-size-34 leading-[1.1] text-blackColor font-bold font-hind dark:text-blackColor-dark">
                                                <span data-countup-number="8">8</span><span>k</span>
                                            </p>
                                            <p class="uppercase text-blackColor font-medium leading-[18px] dark:text-blackColor-dark">
                                                Hours<br>Saved
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-10">
                                <a href="{{ route('pages.agreements') }}" class="text-sm md:text-size-15 text-whiteColor bg-primaryColor border border-primaryColor px-25px py-15px hover:text-primaryColor hover:bg-whiteColor rounded inline-block dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor">
                                    {{ __('Generate Agreement') }}
                                </a>
                            </div>
                        </div>

                        <div class="relative z-0 mb-30px lg:mb-0 pb-0 md:pb-30px xl:pb-0 overflow-visible aos-init aos-animate" data-aos="fade-up">
                            <div class="tilt" style="will-change: transform; transform: perspective(2000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                                <img class="w-full" src="{{ asset('assets/images/Rolands_An_advanced_AI_system_generating_a_formal_agreemen_b4538020-583d-4d57-8c44-3b4bb2c406de.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div
                class="pt-50px pb-10 md:pt-70px md:pb-50px lg:pt-20 2xl:pt-100px 2xl:pb-70px bg-lightGrey7 dark:bg-lightGrey7-dark"
            >
                <div class="filter-container container">
                    <!-- courses Heading -->
                    <div class="mb-5 md:mb-10" data-aos="fade-up">
                        <div class="text-center">
                <span
                    class="text-sm font-semibold text-primaryColor bg-whitegrey3 px-6 py-5px mb-5 rounded-full inline-block"
                >
                  {{ __('Image Stock') }}
                </span>
                        </div>

                        <h3
                            class="text-3xl md:text-[35px] lg:text-size-38 3xl:text-size-42 leading-10 mf:leading-45px 2xl:leading-50px 3xl:leading-2xl font-bold text-blackColor dark:text-blackColor-dark text-center"
                        >
                            High-Quality
                            <span class="relative after:w-full after:h-[7px] z-0 after:bg-secondaryColor after:absolute after:left-0 after:bottom-3 md:after:bottom-5 after:z-[-1]">
                                Images
                            </span>
                            <br>
                            for Your Projects
                        </h3>
                    </div>

                    <!-- courses tabs -->
                    <div data-aos="fade-up">
                        <ul class="filter-controllers flex flex-wrap md:flex-nowrap justify-center bg-whiteColor dark:bg-whiteColor-dark p-10px 3xl:px-10 py-0 2xl:mx-50px mb-25px rounded button-group filters-button-group">
                            <li>
                                <button
                                    data-filter="*"
                                    class="is-checked relative px-10px lg:px-3 2xl:px-15px py-10px md:py-4 lg:py-3 3xl:py-22px mx-10px md:mx-2 lg:mx-3 2xl:mx-15px text-base md:text-xs lg:text-base text-contentColor font-medium hover:text-primaryColor dark:text-contentColor-dark dark:hover:text-primaryColor after:w-0.5 after:h-15px after:absolute after:right-[-15px] after:bottom-1/2 after:translate-y-1/2 after:bg-contentColor before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300"
                                >
                                    All
                                </button>
                            </li>
                            @foreach([
                                ProductCategory::BUSINESS_TECHNOLOGY,
                                ProductCategory::ARCHITECTURE_URBAN,
                                ProductCategory::TRAVEL_ADVENTURE,
                                ProductCategory::PEOPLE_PORTRAITS,
                            ] as $category)
                                <li>
                                    <button
                                        data-filter=".filter-{{ $loop->index }}"
                                        @if(!$loop->last)
                                            class="relative px-10px lg:px-3 2xl:px-15px py-10px md:py-4 lg:py-3 3xl:py-22px mx-10px md:mx-2 lg:mx-3 2xl:mx-15px text-base md:text-xs lg:text-base text-contentColor font-medium hover:text-primaryColor dark:text-contentColor-dark dark:hover:text-primaryColor after:w-0.5 after:h-15px after:absolute after:right-[-15px] after:bottom-1/2 after:translate-y-1/2 after:bg-contentColor before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300"
                                        @else
                                            class="@if($loop->first) is-checked @endif relative px-10px lg:px-3 2xl:px-15px py-10px md:py-4 lg:py-3 3xl:py-22px mx-10px md:mx-2 lg:mx-3 2xl:mx-15px text-base md:text-xs lg:text-base text-contentColor font-medium hover:text-primaryColor dark:text-contentColor-dark dark:hover:text-primaryColor before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300"
                                        @endif
                                    >
                                        {{ $category->value }}
                                    </button>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div
                        class="container p-0 filter-contents flex flex-wrap sm:-mx-15px"
                        data-aos="fade-up"
                    >
                            @foreach([
                                    ProductCategory::BUSINESS_TECHNOLOGY,
                                    ProductCategory::ARCHITECTURE_URBAN,
                                    ProductCategory::TRAVEL_ADVENTURE,
                                    ProductCategory::PEOPLE_PORTRAITS,
                                ] as $category)
                                @foreach(Product::where('category', $category)->take(9)->get() as $product)
                                    <div
                                        class="w-full sm:w-1/2 lg:w-1/3 group grid-item filter-{{ $loop->parent->index }}"
                                    >
                                        <div class="tab-content-wrapper sm:px-15px mb-30px">
                                            <div
                                                class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                                            >
                                                <!-- card image -->
                                                <div
                                                    class="relative mb-4">
                                                    <a
                                                        href="{{ route('products.show', $product->slug) }}"
                                                        class="w-full overflow-hidden rounded">
                                                        <img
                                                            src="{{ asset('storage/' . $product->getThumbnailPath()) }}"
                                                            alt=""
                                                            class="w-full transition-all duration-300 group-hover:scale-110">
                                                    </a>
                                                    <div
                                                        class="absolute left-0 top-1 flex justify-between w-full items-center px-2">
                                                        <div>
                                                            <p class="text-xs text-whiteColor px-4 py-[3px] bg-secondaryColor rounded font-semibold">
                                                                {{ $product->category }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- card content -->
                                                <div>
                                                    <a
                                                        href="{{ route('products.show', $product->slug) }}"
                                                        class="text-lg font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                                                    >
                                                        {{ $product->title }}
                                                    </a>
                                                    <!-- price -->
                                                    <div
                                                        class="text-lg font-semibold text-primaryColor font-inter mb-4"
                                                    >
                                                        {{ $product->price }} VST
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-lightGrey10 dark:dark:bg-lightGrey10-dark relative">
            <div>
                <img src="./assets/images/about/about_6.png" alt=""
                     class="absolute top-[110px] left-[216px] animate-move-hor z-1">
                <img src="./assets/images/about/about_7.png" alt=""
                     class="absolute top-[360px] left-[162px] md:left-[262px] lg:left-[318px] 2xl:left-[162px] animate-spin-slow z-1">
                <img src="./assets/images/about/about_9.png" alt=""
                     class="absolute top-[430px] left-[156px] md:top-[630px] md:left-[476px] lg:top-[433px] lg:left-[196px] 2xl:top-[430px] 2xl:left-[156px] animate-move-var z-1">
            </div>
            <div class="container pt-20 pb-20 2xl:pt-30 2xl:pb-90px">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-15">
                    <div class="lg:col-start-1 lg:col-span-1 md:col-start-1 md:col-span-2 aos-init aos-animate"
                         data-aos="fade-up">
                        <div class="relative">
                <span
                    class="text-sm font-semibold text-primaryColor bg-whitegrey3 px-6 py-5px mb-5 rounded-full inline-block">
                  Reviews
                </span>
                            <h3 class="text-3xl md:text-size-35 2xl:text-size-38 3xl:text-size-42 leading-10 md:leading-45px 2xl:leading-50px 3xl:leading-2xl font-bold text-blackColor pb-25px dark:text-blackColor-dark">
                                What Our Users Say
                            </h3>
                            <p class="text-sm md:text-base text-contentColor mb-5 2xl:mb-45px dark:text-contentColor-dark">
                                Discover how our AI tools are transforming productivity. Hear from professionals who
                                streamline their work with smart email, agreement, and image solutions.
                            </p>
                        </div>
                    </div>
                    <div data-aos="fade-up" class="aos-init aos-animate">
                        <div class="bg-whiteColor px-25px py-50px mb-22px relative dark:bg-whiteColor-dark">
                            <p class="text-base lg:text-sm 2xl:text-base text-contentColor dark:text-contentColor-dark">
                                The AI agreement generator helped me create a solid freelance contract in under 5
                                minutes. It’s accurate, fast, and professional.
                            </p>

                            <div
                                class="text-xl lg:text-3xl text-whiteColor bg-primaryColor w-10 h-10 lg:w-15 lg:h-15 flex items-center justify-center absolute top-0 left-0 md:-translate-y-1/2 md:-translate-x-1/2 z-20">
                                <i class="icofont-quote-left"></i>
                            </div>
                            <span
                                class="w-0 h-0 border-l-12 border-r-12 border-t-15 border-l-transparent border-r-transparent border-t-whiteColor absolute bottom-[-14px] left-[27px] dark:border-t-whiteColor-dark"></span>
                        </div>

                        <div class="flex items-center gap-5 2xl:gap-20">
                            <div>
                                <h4 class="text-xl lg:text-lg 2xl:text-xl font-semibold text-blackColor dark:text-blackColor-dark">
                                    Samantha R.
                                </h4>
                                <p class="text-base lg:text-size-15 2xl:text-base text-lightGrey9 dark:text-lightGrey9-dark">
                                    Freelance Designer
                                </p>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" class="aos-init aos-animate">
                        <div class="bg-whiteColor px-25px py-50px mb-22px relative dark:bg-whiteColor-dark">
                            <p class="text-base lg:text-sm 2xl:text-base text-contentColor dark:text-contentColor-dark">
                                Writing client emails used to take me forever. Now, I just input a few key points and
                                the AI drafts a professional message instantly!
                            </p>

                            <div
                                class="text-xl lg:text-3xl text-whiteColor bg-primaryColor w-10 h-10 lg:w-15 lg:h-15 flex items-center justify-center absolute top-0 left-0 md:-translate-y-1/2 md:-translate-x-1/2 z-20">
                                <i class="icofont-quote-left"></i>
                            </div>
                            <span
                                class="w-0 h-0 border-l-12 border-r-12 border-t-15 border-l-transparent border-r-transparent border-t-whiteColor absolute bottom-[-14px] left-[27px] dark:border-t-whiteColor-dark"></span>
                        </div>

                        <div class="flex items-center gap-5 2xl:gap-20">
                            <div>
                                <h4 class="text-xl lg:text-lg 2xl:text-xl font-semibold text-blackColor dark:text-blackColor-dark">
                                    James K.
                                </h4>
                                <p class="text-base lg:text-size-15 2xl:text-base text-lightGrey9 dark:text-lightGrey9-dark">
                                    Customer Support Lead
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
