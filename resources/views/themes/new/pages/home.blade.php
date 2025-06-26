@extends('themes.new.layouts.app')

@section('content')
    <div class="hero-banner-two relative pt-[250px] lg:pt-[200px] md:pt-[150px] sm:pt-[150px] xsm:pt-[150px]">
        <img src="{{ asset('/assets2/images/lazy.svg') }}" data-src="{{ asset('/assets2/images/shape/shape_26.svg') }}" alt=""
             class="lazy-img shapes shape-left absolute z-[-1] w-[11.9%] max-w-[248px] left-[8%] top-[12%]">
        <img src="{{ asset('/assets2/images/lazy.svg') }}" data-src="{{ asset('/assets2/images/shape/shape_27.svg') }}" alt=""
             class="lazy-img shapes shape-right absolute z-[-1] w-[9.1%] max-w-[193px] right-[9%] top-[20%]">
        <div class="container">
            <div class="flex flex-wrap mx-[-12px]">
                <div
                    class="xl:w-8/12 lg:w-8/12 md:w-9/12 w-full flex-[0_0_auto] px-[12px] max-w-full m-auto text-center wow fadeInUp">
                    <h1
                        class="hero-heading font-normal font-Recoleta relative text-[82px] 2xl:text-[70px] lg:text-[58px] md:text-[40px] md:leading-[1.2em] sm:text-[40px] sm:leading-[1.2em] xsm:text-[40px] xsm:leading-[1.2em] leading-[1.09em]">
                        <img src="{{ asset('/assets2/images/lazy.svg') }}"
                             data-src="{{ asset('/assets2/images/shape/shape_25.svg') }}" alt=""
                             class="lazy-img shapes line-shape absolute z-[-1] left-[3%] top-[45%] md:!hidden sm:!hidden xsm:!hidden"
                        >
                        {{ __('Bring') }}
                        <span class="relative inline-block z-[1] before:content-[''] before:absolute before:-translate-y-2/4 before:w-[73%] before:h-[81%] before:z-[-1] before:left-[31%] before:top-2/4 before:bg-[#FFEBE5]">
        {{ __('Your Vision') }}
    </span>
                        {{ __('to Life with AI Creativity') }}
                    </h1>
                    <p
                        class="text-[24px] 2xl:text-[22px] lg:text-[19px] md:text-[19px] sm:text-[19px] xsm:text-[19px] leading-[1.67em] mb-[75px] pt-5 lg:mb-[50px] md:mb-[50px] sm:mb-[50px] xsm:mb-[50px] lg:pt-[10px] md:pt-[10px] sm:pt-[10px] xsm:pt-[10px]">
                        {{ __('Generate stunning visuals from text, enhance your own images with powerful editing tools, or simply browse and buy ready-made AI art — all in one place.') }}
                    </p>
                    <div class="flex xsm:block justify-center items-center">
                        <a href="{{ route('pages.image-generation') }}"
                           class="tran3s text-[17px] font-medium btn-three mb-[25px] ml-[.5rem] !mr-[1rem] text-white leading-[52px] relative transition-all duration-[0.3s] ease-[ease-in-out] p-[0_40px] rounded-[28px] bg-[var(--prime-two)] hover:bg-[#090F32] md:p-[0_35px] md:leading-[48px] sm:p-[0_35px] sm:leading-[48px] xsm:p-[0_35px] xsm:leading-[48px] lg:text-[15px] md:text-[15px] sm:text-[15px] xsm:text-[15px]">
                            {{ __('Image Generation') }}
                        </a>

                        <a href="{{ route('pages.image-editing') }}"
                           class="tran3s text-[17px] font-medium btn-three mb-[25px] ml-[.5rem] !mr-[1rem] text-white leading-[52px] relative transition-all duration-[0.3s] ease-[ease-in-out] p-[0_40px] rounded-[28px] bg-[var(--prime-two)] hover:bg-[#090F32] md:p-[0_35px] md:leading-[48px] sm:p-[0_35px] sm:leading-[48px] xsm:p-[0_35px] xsm:leading-[48px] lg:text-[15px] md:text-[15px] sm:text-[15px] xsm:text-[15px]">
                            {{ __('Image Editing') }}
                        </a>


                        <a href="#"
                           class="tran3s text-[17px] font-medium btn-three mb-[25px] ml-[.5rem] text-white leading-[52px] relative transition-all duration-[0.3s] ease-[ease-in-out] p-[0_40px] rounded-[28px] bg-[var(--prime-two)] hover:bg-[#090F32] md:p-[0_35px] md:leading-[48px] sm:p-[0_35px] sm:leading-[48px] xsm:p-[0_35px] xsm:leading-[48px] lg:text-[15px] md:text-[15px] sm:text-[15px] xsm:text-[15px]">
                            {{ __('Buy AI Creatives') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fancy-feature-fiftyNine relative mt-[190px] pt-[110px] pb-[150px] lg:mt-[130px] md:mt-[130px] sm:mt-[130px] xsm:mt-[130px] lg:pt-[10px] md:pt-[60px] sm:pt-[60px] xsm:pt-[60px] lg:pb-[60px] md:pb-[60px] sm:pb-[60px] xsm:pb-[60px] z-[1] after:content-[''] after:absolute after:w-full after:h-10 after:bg-cover after:bottom-[-38px] after:z-[-2] after:left-0 before:content-[''] before:absolute before:w-full before:h-[26px] before:bg-cover before:top-[-25px] before:z-[-1] before:left-0 bg-[#F5F5F5] after:bg-[url(../images/shape/shape_86.svg)] after:bg-no-repeat after:bg-[center_bottom] before:bg-[url(../images/shape/shape_87.svg)] before:bg-no-repeat before:bg-[center_top] ">
        <div class="wrapper">
            <div class="container">
                <div class="flex flex-wrap mx-[-12px]">
                    <div class="xl:w-3/12 lg:w-3/12 sm:w-6/12 w-full flex-[0_0_auto] px-[12px] max-w-full">
                        <div class="counter-block-five text-center mt-10  wow fadeInUp">
                            <div class="main-count font-Recoleta font-light text-[80px] text-[#151515] -mb-3 lg:text-[50px] lg:-mb-2 md:text-[50px] md:-mb-2 sm:text-[50px] sm:-mb-2 xsm:text-[50px] xsm:-mb-2"><span class="counter">150</span>k+</div>
                            <p class=" text-[18px] lg:text-[16px] md:text-[16px] sm:text-[16px] xsm:text-[16px] leading-[1.67em] mb-[15px]">{{ __('AI-Generated Images Delivered') }}</p>
                            <span class="block rounded-[50%] cicrle m-auto w-2 h-2" style="background:#FFC735;"></span>
                        </div> <!-- /.counter-block-five -->
                    </div>
                    <div class="xl:w-3/12 lg:w-3/12 sm:w-6/12 w-full flex-[0_0_auto] px-[12px] max-w-full">
                        <div class="counter-block-five text-center mt-10  wow fadeInUp" data-wow-delay="0.3s">
                            <div class="main-count font-Recoleta font-light text-[80px] text-[#151515] -mb-3 lg:text-[50px] lg:-mb-2 md:text-[50px] md:-mb-2 sm:text-[50px] sm:-mb-2 xsm:text-[50px] xsm:-mb-2"><span class="counter">30</span>k+</div>
                            <p class=" text-[18px] lg:text-[16px] md:text-[16px] sm:text-[16px] xsm:text-[16px] leading-[1.67em] mb-[15px]">{{ __('Transparent PNGs Created') }}</p>
                            <span class="block rounded-[50%] cicrle m-auto w-2 h-2" style="background:#00FCFC;"></span>
                        </div> <!-- /.counter-block-five -->
                    </div>
                    <div class="xl:w-3/12 lg:w-3/12 sm:w-6/12 w-full flex-[0_0_auto] px-[12px] max-w-full">
                        <div class="counter-block-five text-center mt-10  wow fadeInUp" data-wow-delay="0.2s">
                            <div class="main-count font-Recoleta font-light text-[80px] text-[#151515] -mb-3 lg:text-[50px] lg:-mb-2 md:text-[50px] md:-mb-2 sm:text-[50px] sm:-mb-2 xsm:text-[50px] xsm:-mb-2"><span class="counter">99.9</span>%</div>
                            <p class=" text-[18px] lg:text-[16px] md:text-[16px] sm:text-[16px] xsm:text-[16px] leading-[1.67em] mb-[15px]">{{ __('Successful Edit Accuracy Rate') }}</p>
                            <span class="block rounded-[50%] cicrle m-auto w-2 h-2" style="background:#F177FF;"></span>
                        </div> <!-- /.counter-block-five -->
                    </div>
                    <div class="xl:w-3/12 lg:w-3/12 sm:w-6/12 w-full flex-[0_0_auto] px-[12px] max-w-full">
                        <div class="counter-block-five text-center mt-10  wow fadeInUp" data-wow-delay="0.4s">
                            <div class="main-count font-Recoleta font-light text-[80px] text-[#151515] -mb-3 lg:text-[50px] lg:-mb-2 md:text-[50px] md:-mb-2 sm:text-[50px] sm:-mb-2 xsm:text-[50px] xsm:-mb-2"><span class="counter">7</span>+</div>
                            <p class=" text-[18px] lg:text-[16px] md:text-[16px] sm:text-[16px] xsm:text-[16px] leading-[1.67em] mb-[15px]">{{ __('AI Tools & Features Available') }}</p>
                            <span class="block rounded-[50%] cicrle m-auto w-2 h-2" style="background:#9671FF;"></span>
                        </div> <!-- /.counter-block-five -->
                    </div>
                </div>
            </div>
        </div> <!-- /.wrapper -->
        <img src="{{ asset('assets2/images/lazy.svg') }}" data-src="{{ asset('assets2/images/shape/shape_189.svg') }}" alt="" class="lazy-img shapes shape-one absolute z-[-1] left-0 top-[4%] sm:!hidden xsm:!hidden">
    </div> <!-- /.fancy-feature-fiftyNine -->

    <div class="fancy-feature-twenty mt-[250px] lg:mt-[140px] md:mt-[140px] sm:mt-[140px] xsm:mt-[140px]">
        <div class="container">
            <div class="flex flex-wrap mx-[-12px]">
                <div class="xl:w-7/12 lg:w-7/12 w-full flex-[0_0_auto] px-[12px] max-w-full !ml-auto xl:order-last lg:order-last">
                    <div class="block-style-one xxl:!pl-[3rem] wow fadeInRight">
                        <div class="title-style-one">
                            <div class="sc-title text-[16px] lg:text-[13px] md:text-[13px] sm:text-[13px] xsm:text-[13px]  tracking-[2px] text-[rgba(0,0,0,0.3)] mb-2">{{ __('Perfect for design, marketing, or product visuals.') }}</div>
                            <h2 class="main-title font-normal text-black !m- font-Recoleta">{{ __('Providing') }} <span class=" inline-block relative z-[1] before:content-[''] before:absolute before:w-[98%] before:h-3 before:z-[-1] before:left-1 before:bottom-2.5 before:bg-[rgba(255,139,37,0.4)]">{{ __('Image Generation') }}</span></h2>
                        </div> <!-- /.title-style-one -->
                        <p class="text-[24px] 2xl:text-[22px] lg:text-[19px] md:text-[19px] sm:text-[19px] xsm:text-[19px] leading-[1.67em] mb-[75px] pt-5 lg:mb-[50px] md:mb-[50px] sm:mb-[50px] xsm:mb-[50px] lg:pt-[10px] md:pt-[10px] sm:pt-[10px] xsm:pt-[10px] ">{{ __('From words to visuals — powerful tools for unique creations.') }}</p>
                        <ul class=" mb-0 pl-0 list-none list-item text-[18px] lg:text-[16px] md:text-[16px] sm:text-[16px] xsm:text-[16px] leading-[1.67em] mb-[50px] lg:mb-[30px] md:mb-[30px] sm:mb-[30px] xsm:mb-[30px]">
                            <li class=" relative mb-[15px] pl-[30px] before:content-['\f633'] before:text-[13px] before:absolute before:text-[color:var(--prime-one)] before:left-0 before:top-1.5 before:!font-Bootstrap">{{ __('Text-to-Image Creation.') }}</li>
                            <li class=" relative mb-[15px] pl-[30px] before:content-['\f633'] before:text-[13px] before:absolute before:text-[color:var(--prime-one)] before:left-0 before:top-1.5 before:!font-Bootstrap">{{ __('Customizable Styles & Formats.') }}</li>
                            <li class=" relative mb-[15px] pl-[30px] before:content-['\f633'] before:text-[13px] before:absolute before:text-[color:var(--prime-one)] before:left-0 before:top-1.5 before:!font-Bootstrap">{{ __('Transparent PNG Output.') }}</li>
                            <li class=" relative mb-[15px] pl-[30px] before:content-['\f633'] before:text-[13px] before:absolute before:text-[color:var(--prime-one)] before:left-0 before:top-1.5 before:!font-Bootstrap">{{ __('Consistent & Predictable Results.') }}</li>
                            <li class=" relative mb-[15px] pl-[30px] before:content-['\f633'] before:text-[13px] before:absolute before:text-[color:var(--prime-one)] before:left-0 before:top-1.5 before:!font-Bootstrap">{{ __('Instant Delivery & Full Usage Rights.') }}</li>
                            <li class=" relative mb-[15px] pl-[30px] before:content-['\f633'] before:text-[13px] before:absolute before:text-[color:var(--prime-one)] before:left-0 before:top-1.5 before:!font-Bootstrap">{{ __('High-Resolution Outputs.') }}</li>
                        </ul>
                        <div>
                            <a href="{{ route('pages.image-generation') }}" class="tran3s text-[17px] font-medium btn-three mb-[25px] ml-[.5rem] !mr-[1rem] text-white leading-[52px] relative transition-all duration-[0.3s] ease-[ease-in-out] p-[0_40px] rounded-[28px] bg-[var(--prime-two)] hover:bg-[#090F32] md:p-[0_35px] md:leading-[48px] sm:p-[0_35px] sm:leading-[48px] xsm:p-[0_35px] xsm:leading-[48px] lg:text-[15px] md:text-[15px] sm:text-[15px] xsm:text-[15px]">
                                {{ __('Start generate Images') }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="xl:w-5/12 lg:w-5/12 md:w-10/12 flex-[0_0_auto] px-[12px] max-w-full xl:order-first lg:order-first wow fadeInLeft">
                    <div class="img-meta inline-block relative md:mt-10 sm:mt-10 xsm:mt-10 ">
                        <img src="{{ asset('assets2/images/lazy.svg') }}" data-src="{{ asset('assets2/images/services/Frame_2147226053_46c810d067.webp') }}" alt="" class="lazy-img">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-section-one p-[30px] lg:p-0 md:p-0 sm:p-0 xsm:p-0 mt-[160px] lg:mt-[120px] md:mt-[120px] sm:mt-[120px] xsm:mt-[120px]">
        <div class="bg-wrapper pt-[140px] pb-[170px] lg:py-[100px] md:py-[100px] sm:py-[100px] xsm:py-[100px] relative bg-[#E8FAF3] z-[1]">
            <div class="shapes shape-one absolute z-[-1] w-[49px] h-[49px] top-[-2%] animate-[rotated_30s_infinite_linear] rounded-[9px] right-[12%] bg-[#17BD37]"></div>
            <img src="{{ asset('assets2/images/lazy.svg') }}" data-src="{{ asset('assets2/images/shape/shape_16.svg') }}" alt="" class="lazy-img shapes shape-two absolute bottom-[-6%] z-0 animate-[jumpTwo_3.2s_infinite_linear] right-[11%] lg:!hidden md:!hidden sm:!hidden xsm:!hidden ">
            <div class="shapes shape-three absolute z-[-1] w-[70px] h-[70px] bottom-[-3%] animate-[rotated_35s_infinite_linear] rounded-[13px] left-[11%] bg-[#FF8C24]"></div>
            <div class="container">
                <div class="flex flex-wrap mx-[-12px] items-center">
                    <div class="xl:w-6/12 lg:w-6/12 md:w-7/12 sm:w-7/12 w-full flex-[0_0_auto] px-[12px] max-w-full">
                        <div class="title-style-one xsm:text-center text-left xsm:mb-[30px]">
                            <h2 class="main-title font-bold text-black !m-0">{{ __('Browse the') }} <span class=" inline-block relative z-[1] before:content-[''] before:absolute before:w-[98%] before:h-3 before:z-[-1] before:left-1 before:bottom-2.5 before:bg-[rgba(255,139,37,0.4)]">{{ __('AI-generated creatives.') }}</span></h2>
                        </div>
                    </div>
                    <div class="xl:w-6/12 lg:w-6/12 md:w-5/12 sm:w-5/12 w-full flex-[0_0_auto] px-[12px] max-w-full !ml-auto flex xsm:justify-center justify-end ">
                        <a href="{{ route('products.index') }}" class="btn-one font-medium text-white leading-[50px] relative transition-all duration-[0.3s] ease-[ease-in-out] p-[0_32px] rounded-[5px] bg-black hover:bg-[var(--prime-one)] hover:text-white md:leading-[48px] md:text-[15px] md:p-[0_25px] sm:leading-[48px] sm:text-[15px] sm:p-[0_25px] xsm:leading-[48px] xsm:text-[15px] xsm:p-[0_25px]">
                            {{ __('Explore Creatives') }}
                        </a>
                    </div>
                </div>

                <div class="flex flex-wrap mx-[-12px]  pt-[50px]  lg:pt-[30px] md:pt-[30px] sm:pt-[30px] xsm:pt-[30px] ">
                    <div class="wrapper  border-b-[#f1f1f1] border-b border-solid pb-[120px]  lg:pb-20  relative">
                        <div class="flex flex-wrap mx-[-12px]">
                            @foreach(\App\Models\Product::public()->inRandomOrder()->take(8)->get() as $product)
                            <div class="xl:w-3/12 lg:w-3/12 md:w-3/12 sm:w-6/12 w-full flex-[0_0_auto] px-[12px] max-w-full">
                                <div class="team-block-two mt-10  wow fadeInUp">
                                    <div class="img-meta relative">
                                        <img src="{{ asset('assets2/images/lazy.svg') }}" data-src="{{ $product->getThumbnailUrl() }}" alt="" class="lazy-img team-img w-full rounded-[15px_15px_0_0]">
                                        <div class="info text-center shadow-[0px_10px_20px_rgba(0,0,0,0.03)] pt-[15px] pb-[18px] px-[15px] bg-white ">
                                            <div class="text-black  mb-[5px]">
                                                {{ $product->title }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>>
        </div>
    </div>

    <div class="fancy-feature-twenty mt-[250px] lg:mt-[140px] md:mt-[140px] sm:mt-[140px] xsm:mt-[140px]">
        <div class="container">
            <div class="flex flex-wrap mx-[-12px]">
                <div class="xl:w-5/12 lg:w-6/12 w-full flex-[0_0_auto] px-[12px] max-w-full !ml-auto xl:order-last lg:order-last">
                    <div class="img-meta inline-block relative md:mt-10 sm:mt-10 xsm:mt-10 ">
                        <img src="{{ asset('assets2/images/lazy.svg') }}" data-src="{{ asset('assets2/images/services/Frame_2147226063_3x_ce6307542d.webp') }}" alt="" class="lazy-img">
                    </div>
                </div>
                <div class="xl:w-6/12 lg:w-6/12 md:w-10/12 flex-[0_0_auto] px-[12px] max-w-full xl:order-first lg:order-first wow fadeInLeft">
                    <div class="block-style-one xxl:!pl-[3rem] wow fadeInRight">
                        <div class="title-style-one">
                            <div class="sc-title text-[16px] lg:text-[13px] md:text-[13px] sm:text-[13px] xsm:text-[13px]  tracking-[2px] text-[rgba(0,0,0,0.3)] mb-2">{{ __('Perfect for e-commerce, content, or digital design.') }}</div>
                            <h2 class="main-title font-normal text-black !m-0 font-Recoleta">{{ __('Providing') }} <span class=" inline-block relative z-[1] before:content-[''] before:absolute before:w-[98%] before:h-3 before:z-[-1] before:left-1 before:bottom-2.5 before:bg-[rgba(255,139,37,0.4)]">{{ __('Image Editing') }}</h2>
                        </div>
                        <p class=" text-[24px] 2xl:text-[22px] lg:text-[19px] md:text-[19px] sm:text-[19px] xsm:text-[19px] leading-[1.67em] text-black pt-[60px] pb-[45px] lg:pt-[30px] md:pt-[30px] sm:pt-[30px] xsm:pt-[30px] lg:pb-[10px] md:pb-[10px] sm:pb-[10px] xsm:pb-[10px] ">{{ __('Enhance, transform, and refine your visuals with precision AI tools.') }}</p>
                        <ul class=" mb-0 pl-0 list-none list-item text-[18px] lg:text-[16px] md:text-[16px] sm:text-[16px] xsm:text-[16px] leading-[1.67em] mb-[50px] lg:mb-[30px] md:mb-[30px] sm:mb-[30px] xsm:mb-[30px]">
                            <li class=" relative mb-[15px] pl-[30px] before:content-['\f633'] before:text-[13px] before:absolute before:text-[color:var(--prime-one)] before:left-0 before:top-1.5 before:!font-Bootstrap">{{ __('Background Removal in Seconds.') }}</li>
                            <li class=" relative mb-[15px] pl-[30px] before:content-['\f633'] before:text-[13px] before:absolute before:text-[color:var(--prime-one)] before:left-0 before:top-1.5 before:!font-Bootstrap">{{ __('AI-Powered Image Upscaling.') }}</li>
                            <li class=" relative mb-[15px] pl-[30px] before:content-['\f633'] before:text-[13px] before:absolute before:text-[color:var(--prime-one)] before:left-0 before:top-1.5 before:!font-Bootstrap">{{ __('Generative Fill & Smart Retouching.') }}</li>
                            <li class=" relative mb-[15px] pl-[30px] before:content-['\f633'] before:text-[13px] before:absolute before:text-[color:var(--prime-one)] before:left-0 before:top-1.5 before:!font-Bootstrap">{{ __('Resize & Expand with Visual Consistency.') }}</li>
                            <li class=" relative mb-[15px] pl-[30px] before:content-['\f633'] before:text-[13px] before:absolute before:text-[color:var(--prime-one)] before:left-0 before:top-1.5 before:!font-Bootstrap">{{ __('Clean, Transparent PNG Exports.') }}</li>
                            <li class=" relative mb-[15px] pl-[30px] before:content-['\f633'] before:text-[13px] before:absolute before:text-[color:var(--prime-one)] before:left-0 before:top-1.5 before:!font-Bootstrap">{{ __('Professional-Grade Quality Enhancements.') }}</li>
                        </ul>

                        <div>
                            <a href="{{ route('pages.image-editing') }}" class="tran3s text-[17px] font-medium btn-three mb-[25px] ml-[.5rem] !mr-[1rem] text-white leading-[52px] relative transition-all duration-[0.3s] ease-[ease-in-out] p-[0_40px] rounded-[28px] bg-[var(--prime-two)] hover:bg-[#090F32] md:p-[0_35px] md:leading-[48px] sm:p-[0_35px] sm:leading-[48px] xsm:p-[0_35px] xsm:leading-[48px] lg:text-[15px] md:text-[15px] sm:text-[15px] xsm:text-[15px]">
                                {{ __('Start editing Images') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
        class="feedback-section-two relative mt-[170px] py-[150px] lg:mt-[100px] lg:py-[100px] md:py-[100px] sm:py-[10px] xsm:py-[10px] wow fadeInUp">
        <div class="container">
            <div class="flex flex-wrap mx-[-12px]">
                <div
                    class="xxl:w-6/12 xl:w-7/12 lg:w-7/12 md:w-8/12 sm:w-10/12 w-full flex-[0_0_auto] px-[12px] max-w-full m-auto">
                    <div class="title-style-three text-center mb-[70px] lg:mb-10 md:mb-10 sm:mb-10 xsm:mb-10">
                        <div class="icon flex items-center justify-center rounded-[50%] w-[90px] h-[90px] m-[0_auto_45px]
                                lg:w-[55px] lg:h-[55px] lg:m-[0_auto_20px] lg:p-[11px]
                                md:w-[55px] md:h-[55px] md:m-[0_auto_20px] md:p-[11px]
                                sm:w-[55px] sm:h-[55px] sm:m-[0_auto_20px] sm:p-[11px]
                                xsm:w-[55px] xsm:h-[55px] xsm:m-[0_auto_20px] xsm:p-[11px]"
                             style="background: #FFC961;"><img src="{{ asset('/assets2/images/lazy.svg') }}"
                                                               data-src="{{ asset('/assets2/images/icon/icon_19.svg') }}" alt="" class="lazy-img">
                        </div>
                        <h2
                            class="font-Recoleta main-title font-normal text-[64px] leading-[1.15em] tracking-[0px] m-0 2xl:text-[58px] lg:text-[48px] md:text-[34px] md:leading-[1.2em] sm:text-[34px] sm:leading-[1.2em] xsm:text-[34px] xsm:leading-[1.2em]">
                            {{ __('Check what’s our') }} <span class="inline-block relative z-[1]">{{ __('client') }} <span
                                    class="mark-bg absolute left-[-5px] -translate-y-2/4 w-[98%] h-[50px] z-[-1] top-2/4"
                                    style="background-color:#BCF8F1;"></span></span> {{ __('say about us.') }}</h2>
                    </div> <!-- /.title-style-three -->
                </div>
            </div>

            <div class="flex flex-wrap mx-[-12px]">
                <div class="xl:w-7/12 lg:w-9/12 w-full flex-[0_0_auto] px-[12px] max-w-full m-auto">
                    <div class="feedback_slider_two">
                        @foreach([
                            [
                                'name' => 'Sarah Lin',
                                'position' => __('Marketing Strategist'),
                                'review' => __('Shortsy text-to-image tool has completely transformed our content creation process. It saves us so much time, and the quality is consistently outstanding.')
                            ],
                            [
                                'name' => 'Marco Bennett',
                                'position' => __('E-commerce Photographer'),
                                'review' => __('The background remover is incredibly precise. What used to take 20 minutes per image now takes just a few seconds — and looks better.')
                            ],
                            [
                                'name' => 'Tomáš Novak',
                                'position' => __('App UI Designer'),
                                'review' => __('I use the image generation service to quickly test visual ideas during the design phase — it’s like having a creative assistant on demand.')
                            ],
                            [
                                'name' => 'Julia K.',
                                'position' => __('Creative Director'),
                                'review' => __('We rely on the upscaling and retouch tools for campaign assets. The results are sharp, clean, and perfectly aligned with our brand quality.')
                            ],
                        ] as $item)
                        <div class="item">
                            <div class="feedback-block-two text-center">
                                <p
                                    class="mb-20 lg:mb-10 md:mb-10 sm:mb-10 xsm:mb-10 text-[28px] 2xl:text-[25px] lg:text-[22px] md:text-[22px] sm:text-[22px] xsm:text-[20px] leading-[1.85em]">
                                    {{ $item['review'] }}
                                </p>
                                <h4
                                    class="!m-0 text-[24px] leading-[1.54em] 2xl:text-[22px] lg:text-[20px] md:text-[20px] sm:text-[20px] xsm:text-[20px]">
                                    {{ $item['name'] }}
                                </h4>
                                <span class="opacity-75">
                                    {{ $item['position'] }}
                                </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <ul class="slider-arrows slick-arrow-two flex justify-center mb-0 pl-0 list-none mt-[35px]">
                        <li class="prev_f2 slick-arrow tran3s text-[26px] cursor-pointer mx-3 my-0 hover:scale-110"
                            style=""><i class="bi bi-arrow-left"></i></li>
                        <li class="next_f2 slick-arrow tran3s text-[26px] cursor-pointer mx-3 my-0 hover:scale-110"
                            style=""><i class="bi bi-arrow-right"></i></li>
                    </ul>
                </div>
            </div>
        </div>
        <div
            class="circle-bg shapes w-full absolute z-[-2] left-0 top-0 lg:w-[78%] lg:-translate-x-2/4 lg:left-2/4 md:h-full sm:!hidden xsm:!hidden">
            <img src="{{ asset('/assets2/images/lazy.svg') }}" data-src="{{ asset('/assets2/images/shape/shape_37.svg') }}"
                 alt="" class="lazy-img main-img m-auto">

        </div>
    </div> <!-- /.feedback-section-two -->


    <!--
                =============================================
                    Partner Section One
                ==============================================
                -->


    <div class="fancy-short-banner-three mt-[180px] mb-[200px] lg:my-[100px] md:my-[100px] sm:my-[100px] xsm:my-[100px]">
        <div class="container">
            <div class="flex flex-wrap mx-[-12px]">
                <div
                    class="xxl:w-7/12 xl:w-8/12 lg:w-8/12 md:w-9/12 w-full flex-[0_0_auto] px-[12px] max-w-full m-auto text-center">
                    <div class="title-style-three text-center wow fadeInUp">
                        <h2
                            class="font-Recoleta main-title font-normal text-[64px] leading-[1.15em] tracking-[0px] m-0 2xl:text-[58px] lg:text-[48px] md:text-[34px] md:leading-[1.2em] sm:text-[34px] sm:leading-[1.2em] xsm:text-[34px] xsm:leading-[1.2em]">
                            {{ __('Ready to create something') }} <span class="inline-block relative z-[1]">{{ __('amazing?') }} <span
                                    class="mark-bg absolute left-[-5px] -translate-y-2/4 w-[98%] h-[50px] z-[-1] top-2/4 md:h-[34px] sm:h-[34px] xsm:h-[34px]"
                                    style="background-color:#C3F0FF;"></span></span> </h2>
                    </div>
                    <p class=" text-[24px] 2xl:text-[22px] lg:text-[19px] md:text-[19px] sm:text-[19px] xsm:text-[19px] leading-[1.67em] text-black pt-[30px] pb-[55px] lg:pb-[30px] md:pb-[30px] sm:pb-[30px] xsm:pb-[30px] wow fadeInUp"
                       data-wow-delay="0.1s">{{ __('Start your creative journey — it only takes a moment.') }}</p>
                    <div class="subscribe-form m-auto wow fadeInUp max-w-[620px]" data-wow-delay="0.2s">
                        <form
                            x-data="{
                                email: '',

                                get isSubmitAllow() {
                                    const isAllExist = this.email.length > 0;
                                    const isValidEmail = (/.+@.+\..+/i).test(this.email);

                                    return isAllExist && isValidEmail;
                                },
                            }"
                            @guest action="{{ route('register') }}" @endguest
                            @auth action="{{ route('dashboard') }}" @endauth
                            method="GET"
                            class="relative h-[70px] xsm:h-[60px]"
                        >
                            <input
                                x-model="email"
                                class=" w-full h-full p-[0_180px_0_40px] xsm:p-[0_122px_0_20px] rounded-[35px] border-0 bg-[#F5F5F5]"
                                type="email"
                                name="email"
                                placeholder={{ __("Email address") }}
                            >
                            <button
                                x-bind:disabled="! isSubmitAllow"
                                type="submit"
                                class="disabled:opacity-50 disabled:pointer-events-none tran3s absolute font-medium w-[180px] xsm:w-[120px] text-white rounded-[0_35px_35px_0] right-0 inset-y-0 bg-[var(--prime-two)] hover:bg-[#090F32]"
                            >
                                {{ __('Sign up') }}
                            </button>
                        </form>
                        <p
                            class="!m-0 pt-5">
                            {{ __('Already a member?') }}

                            @auth
                                <a
                                    href="{{ route('dashboard') }}"
                                    class="text-black underline hover:text-[#0a58ca]"
                                >
                                    {{ __('Dashboard.') }}
                                </a>
                            @endauth

                            @guest
                                <a
                                    href="{{ route('login') }}"
                                    class="text-black underline hover:text-[#0a58ca]"
                                >
                                    {{ __('Sign in.') }}
                                </a>
                            @endguest
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.fancy-short-banner-three -->
@endsection
