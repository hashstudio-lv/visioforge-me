@extends('themes.new.layouts.app')

@section('content')
    <div class="inner-banner-three text-center p-[30px] 2xl:p-5 lg:p-0 md:p-0 sm:p-0 xsm:p-0">
        <div
            class="bg-wrapper text-center bg-cover relative z-[1] p-[150px_0_108px] md:p-[120px_0_50px]  sm:p-[120px_0_50px]  xsm:p-[120px_0_50px] bg-[url(../images/assets/bg-16.svg)] bg-no-repeat bg-[top_center]">
            <div class="container">
                <div class="title-style-five">
                    <h2 class="font-Recoleta main-title text-black font-bold text-[72px] leading-[1.25em] 2xl:text-[58px] lg:text-[50px] md:text-[35px] sm:text-[35px] xsm:text-[35px]">
                        {{ __('Image Generation') }}
                    </h2>
                </div>
                <p class=" text-[24px] 2xl:text-[22px] lg:text-[19px] md:text-[19px] sm:text-[19px] xsm:text-[19px] leading-[1.67em] mt-[25px] mb-[60px]">
                    {{ __('Our image generation services combine advanced AI with creative flexibility — producing unique, high-quality visuals from text in seconds.') }}
                </p>
            </div>
        </div>
    </div>


    <div class="fancy-feature-one pt-[120px]  lg:pt-[90px] md:pt-[90px] sm:pt-[90px] xsm:pt-[90px]">
        <div class="container">
            <div class="flex flex-wrap mx-[-12px] items-center">
                <div class="xl:w-6/12 lg:w-6/12 w-full flex-[0_0_auto] px-[12px] max-w-full wow fadeInLeft">
                    <div class="title-style-one text-center xl:text-left lg:text-left">
                        <h2 class="main-title font-normal text-[64px] leading-[1.15em] tracking-[0px] m-0 font-Recoleta 2xl:text-[58px] lg:text-[48px] md:text-[34px] md:leading-[1.2em] sm:text-[34px] sm:leading-[1.2em] xsm:text-[34px] xsm:leading-[1.2em]">
                            Delivering
                            <span class="inline-block relative z-[1]">powerful, high-quality <span class="mark-bg absolute left-[-5px] -translate-y-2/4 w-[98%] h-[50px] z-[-1] top-2/4 md:h-[34px] sm:h-[34px] xsm:h-[34px]" style="background-color:#D6F9EF;"></span>
                            </span> image generation services.
                        </h2>

                    </div> <!-- /.title-style-one -->
                </div>
                <div class="xl:w-5/12 lg:w-5/12 w-full flex-[0_0_auto] px-[12px] max-w-full !ml-auto wow fadeInRight">
                    <p class=" text-[24px] 2xl:text-[22px] lg:text-[19px] md:text-[19px] sm:text-[19px] xsm:text-[19px] leading-[1.67em] text-center xl:text-left lg:text-left  md:pt-[30px] sm:pt-[30px] xsm:pt-[30px] !m-0">
                        Shortsy.art provides cutting-edge AI tools that turn your ideas into stunning visuals — fast, flexible, and built for creators.
                    </p>
                </div>
            </div>
        </div>
        <div class="container pt-[120px] lg:pt-20 md:pt-[60px] sm:pt-[60px] xsm:pt-[60px]">
            <div class="flex flex-wrap mx-[-12px] xxl:mx-[-24px]">
                @foreach([
                    [
                        'title' => __('Text to Image'),
                        'description' => __('Generate stunning, high-quality visuals from simple text prompts — perfect for creative projects, marketing, and concept design.'),
                        'url' => route('services.show', \App\Enums\Service::BACKGROUND_REMOVER->value),
                        'image' => ''
                    ],
                    [
                        'title' => __('Text to PNG'),
                        'description' => __('Create transparent PNG images directly from text — ideal for logos, digital assets, and seamless design integration.'),
                        'url' => route('services.show', \App\Enums\Service::IMAGE_UPSCALE->value),
                        'image' => ''
                    ],
                ] as $service)
                    <div
                        class="xl:w-4/12 lg:w-4/12 md:w-6/12 sm:w-6/12 w-full flex-[0_0_auto] px-[12px] max-w-full wow fadeInUp">
                        <div
                            class="card-style-one xxl:!pr-[3rem]  relative mb-[90px]  md:mb-[70px] sm:mb-[70px] xsm:mb-[70px] before:content-[''] before:absolute before:left-[-30px] before:top-[-30px] before:bottom-[-30px] before:shadow-[0px_30px_70px_rgba(10,22,37,0.0555514)] before:z-[-1] before:opacity-0 before:origin-[0_0] before:transition-all before:duration-[0.3s] before:ease-[ease-in-out] before:rounded-[5px] before:scale-x-100 before:scale-y-90 before:right-0 before:bg-white hover:before:opacity-100 hover:before:scale-[1.0] lg:p-[0_10px_0_15px] md:p-[0_10px_0_15px] sm:p-[0_10px_0_15px] xsm:p-[0_10px_0_15px]">
                            <div
                                class="flex items-center justify-center rounded-[15px] lg:p-[15px] md:p-[15px] sm:p-[15px] xsm:p-[15px]">
                                <img src="{{ asset('assets2/images/lazy.svg') }}" data-src="{{ $service['image'] }}"
                                     alt="" class="lazy-img">
                            </div>
                            <h5 class="font-medium mt-[35px] mb-[25px] lg:text-[20px] md:text-[20px] sm:text-[20px] xsm:text-[20px] ">
                                <a href="{{ $service['url'] }}"
                                   class="tran3s  text-black  hover:text-[color:var(--prime-one)]">
                                    {{ $service['title'] }}
                                </a>
                            </h5>
                            <p class="mb-[25px]">{{ $service['description'] }}</p>
                            <a href="{{ $service['url'] }}">
                                <img src="{{ asset('assets2/images/lazy.svg') }}"
                                     data-src="{{ asset('assets2/images/icon/icon_05.svg') }}"
                                     alt="{{ $service['title'] }}" class="lazy-img">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div> <!-- /.container -->
    </div> <!-- /.fancy-feature-one -->

    <div class="feedback-section-eleven relative mt-[100px] pt-[150px] pb-[70px] lg:mt-[100px] md:mt-[100px] sm:mt-[100px] xsm:mt-[100px] xl:pt-[150px] lg:pt-[70px] lg:pb-[50px] md:pb-[50px] sm:pb-[50px] xsm:pb-[50px] bg-[#F6F9FB] wow fadeInUp">
        <div class="container">
            <div class="title-style-one text-center mb-[50px] xl:mb-5 lg:mb-5">
                <h2 class="main-title font-normal text-[64px] leading-[1.15em] tracking-[0px] m-0 font-Recoleta 2xl:text-[58px] lg:text-[48px] md:text-[34px] md:leading-[1.2em] sm:text-[34px] sm:leading-[1.2em] xsm:text-[34px] xsm:leading-[1.2em]">{{ __('Client Feedback') }}</h2>
            </div>
        </div>

        <div class="inner-content w-[124vw] translate-x-[-12vw] 2xl:w-[150vw] 2xl:translate-x-[-25vw] md:w-[180vw] md:translate-x-[-40vw] sm:w-full sm:transform-none xsm:w-full xsm:transform-none">
            <div class="slider-wrapper">
                <div class="feedback_slider_seven">
                    @foreach([
                        [
                            'title' => __('Very Solid!!'),
                            'review' => __('The background remover is incredibly accurate. I used it for product shots, and it saved me hours of editing. Highly recommended!'),
                            'name' => 'Lena K.',
                            'position' => 'E-commerce Manager',
                        ],
                        [
                            'title' => __('Saved My Instagram Campaign'),
                            'review' => __('I used the upscale and retouch tools to prepare visuals for a last-minute ad — the results looked like a pro did them.'),
                            'name' => 'Marcus R.',
                            'position' => 'Content Creator',
                        ],
                        [
                            'title' => __('Super Intuitive Tools'),
                            'review' => __('Even with zero design experience, I was able to clean up and enhance all my product photos. Easy and effective.'),
                            'name' => 'Diana S.',
                            'position' => 'Online Store Owner',
                        ],
                        [
                            'title' => __('Looks Like Magic'),
                            'review' => __('The generative fill tool is amazing. I extended a background and added missing parts — and no one could tell it was AI!'),
                            'name' => 'Victor M.',
                            'position' => 'Photographer',
                        ],
                        [
                            'title' => __('Impressed with the Quality'),
                            'review' => __('I’ve tried a few image editing platforms, but this one delivered the best results, especially in upscale clarity and color correction.'),
                            'name' => 'Ella P.',
                            'position' => 'Graphic Designer',
                        ],
                    ] as $item)
                        <div class="item m-[0_25px] lg:m-[0_12px] md:m-[0_12px] sm:m-[0_12px] xsm:m-[0_12px]">
                            <div class="feedback-block-eleven shadow-[0px_30px_60px_rgba(19,45,73,0.05)] relative m-[40px_0_70px] pt-[50px] pb-10 px-[70px] rounded-[10px] bg-white 2xl:p-[50px_40px] lg:p-[30px_20px] md:p-[30px_20px] sm:m-[30px_0_50px] sm:shadow-[0px_30px_45px_rgb(19_45_73_/_3%)] sm:p-[30px_20px] xsm:m-[30px_0_50px] xsm:shadow-[0px_30px_45px_rgb(19_45_73_/_3%)] xsm:p-[30px_20px]">
                                <div class="top-header flex items-center justify-between">
                                    <div>
                                        <h3 class=" text-black !m-0">{{ $item['title'] }}</h3>
                                        <ul class=" mb-0 pl-0 list-none flex rating pt-[15px] ">
                                            <li class=" text-[16px] text-[#FFCC4A] leading-[initial] mr-2.5"><i class="bi bi-star-fill"></i></li>
                                            <li class=" text-[16px] text-[#FFCC4A] leading-[initial] mr-2.5"><i class="bi bi-star-fill"></i></li>
                                            <li class=" text-[16px] text-[#FFCC4A] leading-[initial] mr-2.5"><i class="bi bi-star-fill"></i></li>
                                            <li class=" text-[16px] text-[#FFCC4A] leading-[initial] mr-2.5"><i class="bi bi-star-fill"></i></li>
                                            <li class=" text-[16px] text-[#FFCC4A] leading-[initial] mr-2.5"><i class="bi bi-star-fill"></i></li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('assets2/images/icon/icon_112.svg') }}" alt="" width="50">
                                </div> <!-- /.top-header -->
                                <p class=" text-black text-[26px] leading-[1.78em] pt-[50px] pb-[30px] px-0 lg:p-[25px_0_10px] lg:text-[20px] md:p-[25px_0_10px] md:text-[20px] sm:p-[25px_0_10px] sm:text-[20px] xsm:p-[25px_0_10px] xsm:text-[20px]">
                                    {{ $item['review'] }}
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="cost font-medium text-black text-[20px] leading-[1.67em] lg:text-[18px] md:text-[18px] sm:text-[18px] xsm:text-[18px] ">{{ $item['name'] }}, <span class="opacity-50 font-normal">{{ $item['position'] }}</span></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div> <!-- /.feedback_slider_seven -->
            </div> <!-- /.slider-wrapper -->
        </div> <!-- /.inner-content -->
    </div> <!-- /.feedback-section-eleven -->

    <div class="fancy-feature-twentyFive mt-[140px] lg:mt-[90px] md:mt-[90px] sm:mt-[90px] xsm:mt-[90px] ">
        <div class="container">
            <div class="flex flex-wrap mx-[-12px] items-center">
                <div class="xl:w-9/12 m-auto wow fadeInUp">
                    <div class="title-style-seven text-center pb-[120px] lg:pb-[50px] md:pb-[50px] sm:pb-[50px] xsm:pb-[50px]  wow fadeInUp">
                        <h2 class="main-title font-normal text-[64px] leading-[1.15em] tracking-[0px] m-0 font-Recoleta 2xl:text-[58px] lg:text-[48px] md:text-[34px] md:leading-[1.2em] sm:text-[34px] sm:leading-[1.2em] xsm:text-[34px] xsm:leading-[1.2em]">
                            Got questions? <br> Well, we've got <span class="relative inline-block">answers <img class=" absolute z-[-1] max-w-[113%] -translate-x-2/4 -translate-y-2/4 left-2/4 top-2/4" src="{{ asset('assets2/images/shape/shape_99.svg') }}" alt=""></span>
                        </h2>
                    </div> <!-- /.title-style-seven -->
                </div>

                <div class="xl:w-9/12 lg:w-10/12 w-full flex-[0_0_auto] px-[12px] max-w-full m-auto wow fadeInUp">
                    <div class="accordion accordion-style-two border-b-[rgba(0,0,0,0.1)] border-b border-solid" id="accordionOne">
                        @foreach([
                                [
                                    'question' => 'What can I do with Shortsy image generation services?',
                                    'answer' => 'You can create high-quality images from text prompts using advanced AI. Whether you need realistic scenes, abstract visuals, or branded content, the tools allow you to generate visuals tailored to your creative needs.'
                                ],
                                [
                                    'question' => 'How does Text-to-Image work?',
                                    'answer' => 'Simply enter a descriptive text prompt, and the AI will generate an image based on your input. You can guide the output using optional parameters like style, aspect ratio, or composition preferences.'
                                ],
                                [
                                    'question' => 'What is Text-to-PNG used for?',
                                    'answer' => 'Text-to-PNG allows you to create images with transparent backgrounds, making them perfect for digital assets, marketing visuals, or overlays in designs. The output is instantly ready for use.'
                                ],
                                [
                                    'question' => 'Can I customize the style of the generated image?',
                                    'answer' => 'Yes. You can choose from a variety of styles such as realistic, illustrated, minimal, or artistic. The generator adapts to your prompt and style settings for a unique result.'
                                ],
                                [
                                    'question' => 'Will I get the same image if I use the same prompt again?',
                                    'answer' => 'Yes, using the same prompt and parameters will yield consistent results. This is useful when you need reliable, repeatable outputs for campaigns or multiple assets.'
                                ],
                                [
                                    'question' => 'Do I need any design or technical skills?',
                                    'answer' => 'No design skills are required. Just describe your idea in plain language — the AI handles the rest. It’s made for creators of all experience levels.'
                                ],
                                [
                                    'question' => 'Who benefits from using image generation tools?',
                                    'answer' => 'These tools are perfect for marketers, designers, developers, entrepreneurs, and content creators who need fast, high-quality visuals without hiring a designer or spending hours in editing software.'
                                ]
                        ] as $item)
                            <div class="accordion-item rounded-none border-t-[rgba(0,0,0,0.1)] border-0  border-t border-solid bg-white">
                                <div class="accordion-header" id="heading-{{ $loop->index }}">
                                    <button class="accordion-button font-medium text-[22px] leading-[1.62em] shadow-none text-black transition-all duration-[0.3s] ease-[ease-in-out] p-[32px_0] rounded-none after:content-[url(../images/icon/icon\_74.svg)] after:bg-none after:w-auto after:h-auto bg-transparent  lg:text-[18px] md:text-[18px] sm:text-[18px] xsm:text-[18px] lg:p-[20px_0] md:p-[20px_0] sm:p-[20px_0] xsm:p-[20px_0] relative flex items-center w-full text-left border-0 after:shrink-0 after:bg-no-repeat after:bg-[1.25rem] after:transition-transform after:duration-[0.2s] after:ease-[ease-in-out] after:ml-auto collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $loop->index }}" aria-expanded="false" aria-controls="collapse-{{ $loop->index }}">
                                        {{ $item['question'] }}
                                    </button>
                                </div>
                                <div id="collapse-{{ $loop->index }}" class="accordion-collapse collapse" aria-labelledby="heading-{{ $loop->index }}" data-bs-parent="#accordionOne">
                                    <div class="accordion-body p-[0_40px_20px_0] lg:p-[0_20px_10px_0] md:p-[0_20px_10px_0] sm:p-[0_20px_10px_0] xsm:p-[0_20px_10px_0] ">
                                        <p class=" text-[18px] lg:text-[16px] md:text-[16px] sm:text-[16px] xsm:text-[16px] leading-[34px] lg:leading-[30px] md:leading-[30px] sm:leading-[30px] xsm:leading-[30px] ">
                                            {{ $item['answer'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
