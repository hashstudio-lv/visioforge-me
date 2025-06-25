@extends('themes.new.layouts.app')

@section('content')
    <div class="hero-banner-two relative pt-[250px] lg:pt-[200px] md:pt-[150px] sm:pt-[150px] xsm:pt-[150px]">
        <img src="{{ asset('/assets2/images/lazy') }}" data-src="{{ asset('/assets2/images/shape/shape_26') }}" alt=""
            class="lazy-img shapes shape-left absolute z-[-1] w-[11.9%] max-w-[248px] left-[8%] top-[12%]">
        <img src="{{ asset('/assets2/images/lazy') }}" data-src="{{ asset('/assets2/images/shape/shape_27') }}" alt=""
            class="lazy-img shapes shape-right absolute z-[-1] w-[9.1%] max-w-[193px] right-[9%] top-[13%]">
        <div class="container">
            <div class="flex flex-wrap mx-[-12px]">
                <div
                    class="xl:w-8/12 lg:w-8/12 md:w-9/12 w-full flex-[0_0_auto] px-[12px] max-w-full m-auto text-center wow fadeInUp">
                    <h1
                        class="hero-heading font-normal font-Recoleta relative text-[82px] 2xl:text-[70px] lg:text-[58px] md:text-[40px] md:leading-[1.2em] sm:text-[40px] sm:leading-[1.2em] xsm:text-[40px] xsm:leading-[1.2em] leading-[1.09em]">
                        <img src="{{ asset('/assets2/images/lazy') }}"
                            data-src="{{ asset('/assets2/images/shape/shape_25') }}" alt=""
                            class="lazy-img shapes line-shape absolute z-[-1] left-[3%] top-[45%] md:!hidden sm:!hidden xsm:!hidden">
                        {{ __('Create your') }} <span
                            class="relative inline-block z-[1] before:content-[''] before:absolute before:-translate-y-2/4 before:w-[73%] before:h-[81%] before:z-[-1] before:left-[31%] before:top-2/4 before:bg-[#FFEBE5]">{{ __('workspace') }}</span>
                        & {{ __('make life easier.') }}</h1>
                    <p
                        class=" text-[24px] 2xl:text-[22px] lg:text-[19px] md:text-[19px] sm:text-[19px] xsm:text-[19px] leading-[1.67em] mb-[75px] pt-5 lg:mb-[50px] md:mb-[50px] sm:mb-[50px] xsm:mb-[50px] lg:pt-[10px] md:pt-[10px] sm:pt-[10px] xsm:pt-[10px]">
                        {{ __('Janu is your online team mangement tool that easy and promot') }}</p>
                    <div class="flex xsm:block justify-center items-center">
                        <a href="contact-us.html"
                            class="tran3s text-[17px] font-medium btn-three mb-[25px] ml-[.5rem] !mr-[1rem] text-white leading-[52px] relative transition-all duration-[0.3s] ease-[ease-in-out] p-[0_40px] rounded-[28px] bg-[var(--prime-two)] hover:bg-[#090F32] md:p-[0_35px] md:leading-[48px] sm:p-[0_35px] sm:leading-[48px] xsm:p-[0_35px] xsm:leading-[48px] lg:text-[15px] md:text-[15px] sm:text-[15px] xsm:text-[15px]">Try
                            {{ __('Free Now') }}</a>
                        <a class="fancybox video-icon tran3s mb-[25px] ml-[.5rem] !mr-[1rem] flex items-center justify-center group"
                            data-fancybox="" href="https://www.youtube.com/embed/aXFSJTjVjw0">
                            <i
                                class="fas fa-play w-[52px] h-[52px] border leading-[50px] text-[20px] transition-all duration-[0.3s] ease-[ease-in-out] text-[color:var(--prime-two)] pl-[5px] rounded-[50%] border-solid border-[#eaeaeb] group-hover:text-white group-hover:border-[#090F32] group-hover:bg-[#090F32]"></i>
                            <div class="!pl-[1rem] text-left ">
                                <span class="block text-[color:var(--prime-two)]">{{ __('Watch') }}</span>
                                <strong
                                    class=" text-[18px] lg:text-[16px] md:text-[16px] sm:text-[16px] xsm:text-[16px] leading-[1.67em] font-medium text-black block">Intro
                                    {{ __('video') }}</strong>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="illustration-holder relative mt-[120px] lg:mt-20 md:mt-20 sm:mt-[30px] xsm:mt-[30px] wow fadeInUp"
                data-wow-delay="0.2s">
                <div class="bg-wrapper z-[1] p-[4%] rounded-[20px] bg-[#F3F7F8]">
                    <img src="{{ asset('/assets2/images/lazy') }}" data-src="{{ asset('/assets2/images/media/img_05') }}"
                        alt="" class="lazy-img main-screen w-full">
                </div> <!-- /.bg-wrapper -->
                <img src="{{ asset('/assets2/images/lazy') }}" data-src="{{ asset('/assets2/images/shape/shape_28') }}"
                    alt=""
                    class="lazy-img shapes shape-one absolute top-[-10%] left-[-7%] xsm:left-[1%] w-[13.5%] z-0 animate-[rotatedHalf_25s_infinite_linear]">
                <img src="{{ asset('/assets2/images/lazy') }}" data-src="{{ asset('/assets2/images/shape/shape_29') }}"
                    alt=""
                    class="lazy-img shapes shape-two absolute z-[-1] bottom-[-16%] right-[-11%] xsm:right-[1%] w-[28.3%] animate-[rotatedHalfTwo_25s_infinite_linear]">
                <img src="{{ asset('/assets2/images/lazy') }}" data-src="{{ asset('/assets2/images/shape/shape_30') }}"
                    alt="" class="lazy-img shapes shape-three absolute right-[-10%] w-[12%] z-0 top-[7%]">
                <img src="{{ asset('/assets2/images/lazy') }}" data-src="{{ asset('/assets2/images/shape/shape_31') }}"
                    alt="" class="lazy-img shapes shape-four absolute left-[-10%] w-[12%] z-0 bottom-[9%]">
            </div> <!-- /.illustration-holder -->
        </div> <!-- /.container -->
    </div> <!-- /.hero-banner-two -->


    <!--
                =============================================
                    Feature Section Three
                ==============================================
                -->
    <div class="fancy-feature-three pt-[300px] lg:pt-[200px] md:pt-[170px] sm:pt-[120px] xsm:pt-[120px]
            ">
        <div class="container">
            <div class="flex flex-wrap mx-[-12px] items-center">
                <div class="xl:w-5/12 lg:w-5/12 md:w-6/12 w-full flex-[0_0_auto] px-[12px] max-w-full">
                    <div class="block-style-two xxl:!pr-[3rem] md:mb-[50px] sm:mb-[50px] xsm:mb-[50px] wow fadeInLeft">
                        <div class="title-style-three">
                            <div
                                class="sc-title uppercase text-[14px] lg:text-[13px] md:text-[13px] sm:text-[13px] xsm:text-[13px] tracking-[1px] text-[rgba(0,0,0,0.3)] pb-2.5">
                                {{ __('Integrates your tools') }}</div>
                            <h2
                                class="main-title font-normal text-[64px] leading-[1.15em] tracking-[0px] m-0 font-Recoleta 2xl:text-[58px] lg:text-[48px] md:text-[34px] md:leading-[1.2em] sm:text-[34px] sm:leading-[1.2em] xsm:text-[34px] xsm:leading-[1.2em]">
                                {{ __('Connect jano with the') }} <span class="inline-block relative z-[1]">{{ __('software') }} <span
                                        class="mark-bg absolute left-[-5px] -translate-y-2/4 w-[98%] h-[50px] z-[-1] top-2/4 md:h-[34px] sm:h-[34px] xsm:h-[34px]"
                                        style="background-color:#D6F9EF;"></span></span> {{ __('you use.') }}</h2>
                        </div> <!-- /.title-style-three -->
                        <p
                            class=" text-[24px] 2xl:text-[22px] lg:text-[19px] md:text-[19px] sm:text-[19px] xsm:text-[19px] leading-[1.67em] mt-[25px] mb-[60px] lg:mb-10 md:mb-10 sm:mb-10 xsm:mb-10">
                            {{ __('The EMV roll out was clumsy, expensive and failed to consider.') }}</p>
                        <a href="feature(sass).html"
                            class="btn-four font-medium text-white leading-[52px] relative transition-all duration-[0.3s] ease-[ease-in-out] p-[0_40px] rounded-[7px] bg-[var(--prime-two)] hover:bg-[#090F32] lg:leading-[48px] lg:text-[15px] lg:p-[0_35px] md:leading-[48px] md:text-[15px] md:p-[0_35px] sm:leading-[48px] sm:text-[15px] sm:p-[0_35px] xsm:leading-[48px] xsm:text-[15px] xsm:p-[0_35px]">Learn
                            {{ __('More') }}</a>
                    </div> <!-- /.block-style-two -->
                </div>

                <div
                    class="xl:w-6/12 lg:w-7/12 md:w-6/12 w-full flex-[0_0_auto] px-[12px] max-w-full !ml-auto wow fadeInRight">
                    <div
                        class="screen-holder-one flex items-center justify-center w-[432px] h-[470px] relative z-[1] ml-auto mr-[10%] my-0 rounded-[25px] bg-[#F3F7F8] xsm:w-full">
                        <div class="round-bg flex items-center justify-center shadow-[0px_20px_50px_rgba(27,75,132,0.03)] rounded-[50%] bg-white"
                            style="width:193px; height: 193px;"><img src="{{ asset('/assets2/images/lazy') }}"
                                data-src="{{ asset('/assets2/images/logo/Plogo-1') }}" alt="" class="lazy-img">
                        </div>
                        <div class="round-bg flex items-center justify-center shadow-[0px_20px_50px_rgba(27,75,132,0.03)] rounded-[50%] bg-white shapes absolute z-[1] logo-one top-[-45px] animate-[jumpTwo_6s_infinite_linear] right-[37%]"
                            style="width:65px; height: 65px;"><img src="{{ asset('/assets2/images/lazy') }}"
                                data-src="{{ asset('/assets2/images/logo/Plogo-2') }}" alt="" class="lazy-img">
                        </div>
                        <div class="round-bg flex items-center justify-center shadow-[0px_20px_50px_rgba(27,75,132,0.03)] rounded-[50%] bg-white shapes absolute z-[1] logo-two left-[-59px] animate-[jumpThree_6s_infinite_linear] top-[23%] md:left-0 sm:left-0 xsm:left-0"
                            style="width:105px; height: 105px;"><img src="{{ asset('/assets2/images/lazy') }}"
                                data-src="{{ asset('/assets2/images/logo/Plogo-3') }}" alt="" class="lazy-img">
                        </div>
                        <div class="round-bg flex items-center justify-center shadow-[0px_20px_50px_rgba(27,75,132,0.03)] rounded-[50%] bg-white shapes absolute z-[1] logo-three left-[-46px] animate-[jumpTwo_6s_infinite_linear] top-[72%] xsm:left-0"
                            style="width:80px; height: 80px;"><img src="{{ asset('/assets2/images/lazy') }}"
                                data-src="{{ asset('/assets2/images/logo/Plogo-4') }}" alt="" class="lazy-img">
                        </div>
                        <div class="round-bg flex items-center justify-center shadow-[0px_20px_50px_rgba(27,75,132,0.03)] rounded-[50%] bg-white shapes absolute z-[1] logo-four bottom-[-75px] animate-[jumpThree_6s_infinite_linear] left-[58%]"
                            style="width:148px; height: 148px;"><img src="{{ asset('/assets2/images/lazy') }}"
                                data-src="{{ asset('/assets2/images/logo/Plogo-5') }}" alt="" class="lazy-img">
                        </div>
                        <div class="round-bg flex items-center justify-center shadow-[0px_20px_50px_rgba(27,75,132,0.03)] rounded-[50%] bg-white shapes absolute z-[1] logo-five right-[-39px] animate-[jumpThree_6s_infinite_linear] top-[21%] xsm:right-0"
                            style="width:105px; height: 105px;"><img src="{{ asset('/assets2/images/lazy') }}"
                                data-src="{{ asset('/assets2/images/logo/Plogo-6') }}" alt="" class="lazy-img">
                        </div>
                        <img src="{{ asset('/assets2/images/lazy') }}"
                            data-src="{{ asset('/assets2/images/shape/shape_32') }}" alt=""
                            class="lazy-img shapes shape-one absolute z-[1] right-[-15%] top-[44%]">
                    </div>
                </div>
            </div>
        </div> <!-- /.container -->
    </div> <!-- /.fancy-feature-three -->


    <!--
                =============================================
                    Feature Section Four
                ==============================================
                -->
    <div class="fancy-feature-four pt-[250px] lg:pt-[120px] md:pt-[120px] sm:pt-[120px] xsm:pt-[120px]">
        <div class="container">
            <div class="flex flex-wrap mx-[-12px]">
                <div
                    class="xxl:w-7/12 xl:w-8/12 lg:w-8/12 md:w-8/12 w-full flex-[0_0_auto] px-[12px] max-w-full m-auto text-center wow fadeInUp">
                    <div class="title-style-three">
                        <h2
                            class="main-title font-normal text-[64px] leading-[1.15em] tracking-[0px] m-0 font-Recoleta 2xl:text-[58px] lg:text-[48px] md:text-[34px] md:leading-[1.2em] sm:text-[34px] sm:leading-[1.2em] xsm:text-[34px] xsm:leading-[1.2em]">
                            {{ __('Bring all team') }} <span class="inline-block relative z-[1]">{{ __('managment') }} <span
                                    class="mark-bg absolute left-[-5px] -translate-y-2/4 w-[98%] h-[50px] z-[-1] top-2/4 md:h-[34px] sm:h-[34px] xsm:h-[34px]"
                                    style="background-color:#F7E4FF;"></span></span> & {{ __('task togather') }}</h2>
                    </div> <!-- /.title-style-three -->
                    <p
                        class=" text-[24px] 2xl:text-[22px] lg:text-[19px] md:text-[19px] sm:text-[19px] xsm:text-[19px] leading-[1.67em] mt-10 mb-[100px] lg:mt-5 md:mt-5 sm:mt-5 xsm:mt-5 lg:mb-[50px] md:mb-[50px] sm:mb-[50px] xsm:mb-[50px]">
                        {{ __('After a thorough review of a client’s circumstances and needs.') }}</p>
                </div>
            </div>

            <ul class="nav nav-tabs block xl:flex lg:flex md:flex justify-between border overflow-hidden text-center rounded-[15px] border-solid border-[#f3f3f3] flex-wrap mb-0 pl-0 wow fadeInUp"
                role="tablist">
                <li class="nav-item w-[33.33333%] relative border-r-[#f3f3f3] border-r border-solid before:content-['\f285'] before:w-10 before:h-10 before:border before:text-center before:leading-[38px] before:text-[14px] before:absolute before:-translate-y-2/4 before:z-[1] before:rounded-[50%] before:border-solid before:border-[#D9D9D9] before:-right-5 before:top-2/4 last:border-0 last:before:hidden before:font-Bootstrap before:bg-white sm:w-full sm:border-r-0 sm:border-b-[#f3f3f3] sm:border-b sm:border-solid xsm:w-full xsm:border-r-0 xsm:border-b-[#f3f3f3] xsm:border-b xsm:border-solid md:before:w-[35px] md:before:h-[35px] md:before:leading-[35px] sm:before:w-[35px] sm:before:h-[35px] sm:before:leading-[35px] xsm:before:w-[35px] xsm:before:h-[35px] xsm:before:leading-[35px] sm:bottom-[-17px] sm:-translate-x-2/4 sm:before:translate-y-0 sm:before:rotate-90 sm:before:left-2/4 sm:before:top-auto xsm:before:bottom-[-17px] xsm:before:-translate-x-2/4 xsm:before:translate-y-0 xsm:before:rotate-90 xsm:before:left-2/4 xsm:before:top-auto"
                    role="presentation">
                    <button
                        class="nav-link w-full text-[22px] leading-[1.41em] text-black m-0 p-[29px_20%] rounded-none border-b-[5px] border-b-transparent border-0 border-solid lg:text-[17px] lg:p-[15px_30px] md:text-[17px] md:p-[15px_30px] sm:text-[17px] sm:p-[22px_15px] xsm:text-[17px] xsm:p-[22px_15px] active"
                        data-bs-toggle="tab" data-bs-target="#sp1" type="button" role="tab">{{ __('Create task') }} <span
                            class=" hidden xl:inline-block lg:inline-block">{{ __('for any team person') }}</span></button>
                </li>
                <li class="nav-item w-[33.33333%] relative border-r-[#f3f3f3] border-r border-solid before:content-['\f285'] before:w-10 before:h-10 before:border before:text-center before:leading-[38px] before:text-[14px] before:absolute before:-translate-y-2/4 before:z-[1] before:rounded-[50%] before:border-solid before:border-[#D9D9D9] before:-right-5 before:top-2/4 last:border-0 last:before:hidden before:font-Bootstrap before:bg-white sm:w-full sm:border-r-0 sm:border-b-[#f3f3f3] sm:border-b sm:border-solid xsm:w-full xsm:border-r-0 xsm:border-b-[#f3f3f3] xsm:border-b xsm:border-solid md:before:w-[35px] md:before:h-[35px] md:before:leading-[35px] sm:before:w-[35px] sm:before:h-[35px] sm:before:leading-[35px] xsm:before:w-[35px] xsm:before:h-[35px] xsm:before:leading-[35px] sm:bottom-[-17px] sm:-translate-x-2/4 sm:before:translate-y-0 sm:before:rotate-90 sm:before:left-2/4 sm:before:top-auto xsm:before:bottom-[-17px] xsm:before:-translate-x-2/4 xsm:before:translate-y-0 xsm:before:rotate-90 xsm:before:left-2/4 xsm:before:top-auto"
                    role="presentation">
                    <button
                        class="nav-link w-full text-[22px] leading-[1.41em] text-black m-0 p-[29px_20%] rounded-none border-b-[5px] border-b-transparent border-0 border-solid lg:text-[17px] lg:p-[15px_30px] md:text-[17px] md:p-[15px_30px] sm:text-[17px] sm:p-[22px_15px] xsm:text-[17px] xsm:p-[22px_15px]"
                        data-bs-toggle="tab" data-bs-target="#sp2" type="button" role="tab">{{ __('Make timeframe') }} <span
                            class=" hidden xl:inline-block lg:inline-block">{{ __('for do the task') }}</span></button>
                </li>
                <li class="nav-item w-[33.33333%] relative border-r-[#f3f3f3] border-r border-solid before:content-['\f285'] before:w-10 before:h-10 before:border before:text-center before:leading-[38px] before:text-[14px] before:absolute before:-translate-y-2/4 before:z-[1] before:rounded-[50%] before:border-solid before:border-[#D9D9D9] before:-right-5 before:top-2/4 last:border-0 last:before:hidden before:font-Bootstrap before:bg-white sm:w-full sm:border-r-0 sm:border-b-[#f3f3f3] sm:border-b sm:border-solid xsm:w-full xsm:border-r-0 xsm:border-b-[#f3f3f3] xsm:border-b xsm:border-solid md:before:w-[35px] md:before:h-[35px] md:before:leading-[35px] sm:before:w-[35px] sm:before:h-[35px] sm:before:leading-[35px] xsm:before:w-[35px] xsm:before:h-[35px] xsm:before:leading-[35px] sm:bottom-[-17px] sm:-translate-x-2/4 sm:before:translate-y-0 sm:before:rotate-90 sm:before:left-2/4 sm:before:top-auto xsm:before:bottom-[-17px] xsm:before:-translate-x-2/4 xsm:before:translate-y-0 xsm:before:rotate-90 xsm:before:left-2/4 xsm:before:top-auto"
                    role="presentation">
                    <button
                        class="nav-link w-full text-[22px] leading-[1.41em] text-black m-0 p-[29px_20%] rounded-none border-b-[5px] border-b-transparent border-0 border-solid lg:text-[17px] lg:p-[15px_30px] md:text-[17px] md:p-[15px_30px] sm:text-[17px] sm:p-[22px_15px] xsm:text-[17px] xsm:p-[22px_15px]"
                        data-bs-toggle="tab" data-bs-target="#sp3" type="button" role="tab">{{ __('Get task complated') }}
                        <span class=" hidden xl:inline-block lg:inline-block">{{ __('by your member') }}</span></button>
                </li>
            </ul>

            <div class="tab-content relative mt-[120px] lg:mt-20 md:mt-20 sm:mt-20 xsm:mt-20 wow fadeInUp">
                <div
                    class="shapes shape-one rounded-[50%] absolute z-0 w-[126px] h-[126px] top-[-75px] animate-[jumpFive_3s_infinite_linear] -right-10 bg-[rgba(0,236,183,0.66)] md:w-20 md:h-20 md:top-[-55px] sm:w-20 sm:h-20 sm:top-[-55px] xsm:w-20 xsm:h-20 xsm:top-[-55px]">
                </div>
                <div
                    class="shapes shape-two rounded-[50%] absolute z-[-1] w-[285px] h-[285px] bottom-[-10%] left-[-6%] animate-[fade-in_8s_infinite_linear] bg-[#998EFF] md:w-[150px] md:h-[150px] sm:w-[150px] sm:h-[150px] xsm:w-[150px] xsm:h-[150px]">
                </div>
                <img src="{{ asset('/assets2/images/lazy') }}" data-src="{{ asset('/assets2/images/shape/shape_33') }}"
                    alt=""
                    class="lazy-img shapes shape-three absolute z-0 right-[-13%] animate-[jumpTwo_3s_infinite_linear] top-2/4 md:!hidden sm:!hidden xsm:!hidden">
                <img src="{{ asset('/assets2/images/lazy') }}" data-src="{{ asset('/assets2/images/shape/shape_34') }}"
                    alt=""
                    class="lazy-img shapes shape-four absolute z-0 left-[-13%] animate-[jumpThree_3s_infinite_linear] top-[13%] md:!hidden sm:!hidden xsm:!hidden">
                <div class="tab-pane p-[4%] rounded-[20px] bg-[#F3F7F8] active show" id="sp1">
                    <img src="{{ asset('/assets2/images/lazy') }}"
                        data-src="{{ asset('/assets2/images/media/img_06') }}" alt=""
                        class="lazy-img main-screen w-full rounded-[25px]">
                </div> <!-- /.tab-pane -->
                <div class="tab-pane p-[4%] rounded-[20px] bg-[#F3F7F8]" id="sp2">
                    <img src="{{ asset('/assets2/images/media/img_05') }}" alt=""
                        class="main-screen w-full rounded-[25px]">
                </div> <!-- /.tab-pane -->
                <div class="tab-pane p-[4%] rounded-[20px] bg-[#F3F7F8]" id="sp3">
                    <img src="{{ asset('/assets2/images/media/img_06.1') }}" alt=""
                        class="main-screen w-full rounded-[25px]">
                </div> <!-- /.tab-pane -->
            </div> <!-- /.tab-content -->
        </div> <!-- /.container -->
    </div> <!-- /.fancy-feature-four -->

    <!--
                =============================================
                    Feature Section Five
                ==============================================
                -->
    <div class="fancy-feature-five pt-[300px] lg:pt-[140px] md:pt-[140px] sm:pt-[140px] xsm:pt-[140px]">
        <div class="container">
            <div class="flex flex-wrap mx-[-12px] items-center">
                <div
                    class="xl:w-5/12 lg:w-5/12 md:w-6/12 w-full flex-[0_0_auto] px-[12px] max-w-full xl:order-last lg:order-last md:order-last !ml-auto">
                    <div class="block-style-two xxl:!pr-[3rem] sm:mb-[50px] xsm:mb-[50px]  wow fadeInRight">
                        <div class="title-style-three">
                            <div
                                class="sc-title uppercase text-[14px] lg:text-[13px] md:text-[13px] sm:text-[13px] xsm:text-[13px] tracking-[1px] text-[rgba(0,0,0,0.3)] pb-2.5">
                                {{ __('Over') }} <span class=" underline " style="color:#FF7B5E;">150,000+ {{ __('client') }}</span></div>
                            <h2
                                class="main-title font-normal text-[64px] leading-[1.15em] tracking-[0px] m-0 font-Recoleta 2xl:text-[58px] lg:text-[48px] md:text-[34px] md:leading-[1.2em] sm:text-[34px] sm:leading-[1.2em] xsm:text-[34px] xsm:leading-[1.2em]">
                                {{ __('Why you') }} <span class="inline-block relative z-[1]">{{ __('choose') }} <span
                                        class="mark-bg absolute left-[-5px] -translate-y-2/4 w-[98%] h-[50px] z-[-1] top-2/4 md:h-[34px] sm:h-[34px] xsm:h-[34px]"
                                        style="background-color:#D8FFE8;"></span></span> {{ __('Janu tools.') }}</h2>
                        </div> <!-- /.title-style-three -->
                        <p
                            class=" text-[24px] 2xl:text-[22px] lg:text-[19px] md:text-[19px] sm:text-[19px] xsm:text-[19px] leading-[1.67em] mt-10 mb-[75px] lg:mt-[30px] lg:mb-[50px] md:mb-[50px] sm:mb-[50px] xsm:mb-[50px]">
                            {{ __('The core of our service is based on the objective investment advice we seek to provide support.') }}
                        </p>
                        <a href="feature(sass).html"
                            class="btn-four font-medium text-white leading-[52px] relative transition-all duration-[0.3s] ease-[ease-in-out] p-[0_40px] rounded-[7px] bg-[var(--prime-two)] hover:bg-[#090F32] lg:leading-[48px] lg:text-[15px] lg:p-[0_35px] md:leading-[48px] md:text-[15px] md:p-[0_35px] sm:leading-[48px] sm:text-[15px] sm:p-[0_35px] xsm:leading-[48px] xsm:text-[15px] xsm:p-[0_35px]">{{ __('Try free now') }}</a>
                    </div> <!-- /.block-style-two -->
                </div>

                <div
                    class="xl:w-6/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] px-[12px] max-w-full xl:order-first lg:order-first md:order-first wow fadeInLeft">
                    <div
                        class="tags-wrapper relative p-[45px_65px_50px] 2xl:p-[35px_35px_40px] lg:p-[25px_15px_30px] md:p-[25px_15px_30px] sm:p-[25px_15px_30px] xsm:p-[25px_15px_30px] rounded-[25px] bg-[#F3F7F8]">
                        <img src="{{ asset('/assets2/images/lazy') }}"
                            data-src="{{ asset('/assets2/images/shape/shape_35') }}" alt=""
                            class="lazy-img shapes shape-one absolute w-3/12 z-0 animate-[jumpThree_3s_infinite_linear] right-[1%] top-[1%]">
                        <div class="h3 !m-0 font-normal text-black ">13+</div>
                        <p
                            class=" text-[24px] 2xl:text-[22px] lg:text-[19px] md:text-[19px] sm:text-[19px] xsm:text-[19px] leading-[1.67em] opacity-50 pb-[25px] lg:pb-[10px] md:pb-[10px] sm:pb-[10px] xsm:pb-[10px]">
                            {{ __('Reason to choose us') }}</p>
                        <ul class="flex flex-wrap items-center mb-0 pl-0 list-none m-[0_-10px]">
                            <li
                                class=" text-[24px] lg:text-[20px] md:text-[20px] sm:text-[20px] xsm:text-[20px] text-black m-[10px_0] p-[0_10px] lg:m-[5px_0] md:m-[5px_0] sm:m-[5px_0] xsm:m-[5px_0]">
                                <a class=" text-black text-[18px] lg:text-[15px] md:text-[15px] sm:text-[15px] xsm:text-[15px] lg:p-3 md:p-3 sm:p-3 xsm:p-3 transition-all duration-[0.3s] ease-[ease-in-out] px-[30px] py-[22px] rounded-[10px] hover:shadow-[0_15px_40px_rgba(0,0,0,0.05)] bg-white"
                                    href="#"><span class=" inline-block leading-[25px] p-[0_3px] rounded-[5px]"
                                        style="background-color: rgba(255, 130, 130, 0.13);">{{ __('Great Interface') }}</span></a>
                            </li>
                            <li
                                class=" text-[24px] lg:text-[20px] md:text-[20px] sm:text-[20px] xsm:text-[20px] text-black m-[10px_0] p-[0_10px] lg:m-[5px_0] md:m-[5px_0] sm:m-[5px_0] xsm:m-[5px_0]">
                                <a class=" text-black text-[18px] lg:text-[15px] md:text-[15px] sm:text-[15px] xsm:text-[15px] lg:p-3 md:p-3 sm:p-3 xsm:p-3 transition-all duration-[0.3s] ease-[ease-in-out] px-[30px] py-[22px] rounded-[10px] hover:shadow-[0_15px_40px_rgba(0,0,0,0.05)] bg-white"
                                    href="#"><span class=" inline-block leading-[25px] p-[0_3px] rounded-[5px]"
                                        style="background-color: rgba(73, 230, 213, 0.13);">{{ __('Expereinced') }}</span></a></li>
                            <li
                                class=" text-[24px] lg:text-[20px] md:text-[20px] sm:text-[20px] xsm:text-[20px] text-black m-[10px_0] p-[0_10px] lg:m-[5px_0] md:m-[5px_0] sm:m-[5px_0] xsm:m-[5px_0]">
                                <a class=" text-black text-[18px] lg:text-[15px] md:text-[15px] sm:text-[15px] xsm:text-[15px] lg:p-3 md:p-3 sm:p-3 xsm:p-3 transition-all duration-[0.3s] ease-[ease-in-out] px-[30px] py-[22px] rounded-[10px] hover:shadow-[0_15px_40px_rgba(0,0,0,0.05)] bg-white"
                                    href="#"><span class=" inline-block leading-[25px] p-[0_3px] rounded-[5px]"
                                        style="background-color: rgba(73, 179, 230, 0.13);">{{ __('Low Price') }}</span></a></li>
                            <li
                                class=" text-[24px] lg:text-[20px] md:text-[20px] sm:text-[20px] xsm:text-[20px] text-black m-[10px_0] p-[0_10px] lg:m-[5px_0] md:m-[5px_0] sm:m-[5px_0] xsm:m-[5px_0]">
                                <a class=" text-black text-[18px] lg:text-[15px] md:text-[15px] sm:text-[15px] xsm:text-[15px] lg:p-3 md:p-3 sm:p-3 xsm:p-3 transition-all duration-[0.3s] ease-[ease-in-out] px-[30px] py-[22px] rounded-[10px] hover:shadow-[0_15px_40px_rgba(0,0,0,0.05)] bg-white"
                                    href="#"><span class=" inline-block leading-[25px] p-[0_3px] rounded-[5px]"
                                        style="background-color: rgba(251, 208, 80, 0.15);">{{ __('Customizable') }}</span></a></li>
                            <li
                                class=" text-[24px] lg:text-[20px] md:text-[20px] sm:text-[20px] xsm:text-[20px] text-black m-[10px_0] p-[0_10px] lg:m-[5px_0] md:m-[5px_0] sm:m-[5px_0] xsm:m-[5px_0]">
                                <a class=" text-black text-[18px] lg:text-[15px] md:text-[15px] sm:text-[15px] xsm:text-[15px] lg:p-3 md:p-3 sm:p-3 xsm:p-3 transition-all duration-[0.3s] ease-[ease-in-out] px-[30px] py-[22px] rounded-[10px] hover:shadow-[0_15px_40px_rgba(0,0,0,0.05)] bg-white"
                                    href="#"><span class=" inline-block leading-[25px] p-[0_3px] rounded-[5px]"
                                        style="background-color: rgba(213, 126, 255, 0.15);">{{ __('Trusted') }}</span></a></li>
                            <li
                                class=" text-[24px] lg:text-[20px] md:text-[20px] sm:text-[20px] xsm:text-[20px] text-black m-[10px_0] p-[0_10px] lg:m-[5px_0] md:m-[5px_0] sm:m-[5px_0] xsm:m-[5px_0]">
                                <a class=" text-black text-[18px] lg:text-[15px] md:text-[15px] sm:text-[15px] xsm:text-[15px] lg:p-3 md:p-3 sm:p-3 xsm:p-3 transition-all duration-[0.3s] ease-[ease-in-out] px-[30px] py-[22px] rounded-[10px] hover:shadow-[0_15px_40px_rgba(0,0,0,0.05)] bg-white"
                                    href="#"><span class=" inline-block leading-[25px] p-[0_3px] rounded-[5px]"
                                        style="background-color: rgba(189, 231, 122, 0.15);">{{ __('Great Support') }}</span></a></li>
                            <li
                                class=" text-[24px] lg:text-[20px] md:text-[20px] sm:text-[20px] xsm:text-[20px] text-black m-[10px_0] p-[0_10px] lg:m-[5px_0] md:m-[5px_0] sm:m-[5px_0] xsm:m-[5px_0]">
                                <a class=" text-black text-[18px] lg:text-[15px] md:text-[15px] sm:text-[15px] xsm:text-[15px] lg:p-3 md:p-3 sm:p-3 xsm:p-3 transition-all duration-[0.3s] ease-[ease-in-out] px-[30px] py-[22px] rounded-[10px] hover:shadow-[0_15px_40px_rgba(0,0,0,0.05)] bg-white"
                                    href="#"><span class=" inline-block leading-[25px] p-[0_3px] rounded-[5px]"
                                    style="background-color: rgba(255, 152, 152, 0.15);">{{ __('Safe') }}</span></a></li>
                            <li
                                class=" text-[24px] lg:text-[20px] md:text-[20px] sm:text-[20px] xsm:text-[20px] text-black m-[10px_0] p-[0_10px] lg:m-[5px_0] md:m-[5px_0] sm:m-[5px_0] xsm:m-[5px_0]">
                                & {{ __('more…') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- /.container -->
    </div> <!-- /.fancy-feature-five -->

    <!--
                =============================================
                    Feature Section Six
                ==============================================
                -->
    <div class="fancy-feature-six relative mt-[225px] lg:mt-[100px] md:mt-[100px] sm:mt-[100px] xsm:mt-20">
        <div class="container">
            <div class="flex flex-wrap mx-[-12px] xxl:mx-[-24px] items-center">
                <div class="xl:w-4/12 lg:w-4/12 md:w-6/12 mt-10 w-full flex-[0_0_auto] px-[12px] max-w-full wow fadeInUp">
                    <div class="title-style-three mb-[65px] lg:mb-10 md:mb-10 sm:mb-10 xsm:mb-10">
                        <h2
                            class="main-title font-normal text-[64px] leading-[1.15em] tracking-[0px] m-0 font-Recoleta 2xl:text-[58px] lg:text-[48px] md:text-[34px] md:leading-[1.2em] sm:text-[34px] sm:leading-[1.2em] xsm:text-[34px] xsm:leading-[1.2em]">
                            {{ __('Let’s') }} <br> <span class="inline-block relative z-[1]">{{ __('Discover') }} <span
                                    class="mark-bg absolute left-[-5px] -translate-y-2/4 w-[98%] h-[50px] z-[-1] top-2/4 md:h-[34px] sm:h-[34px] xsm:h-[34px]"
                                    style="background-color:#E1EDFF;"></span></span> {{ __('our all features') }}</h2>
                    </div> <!-- /.title-style-three -->
                    <a href="service-v1.html"
                        class="btn-five tran3s font-medium text-[17px] lg:text-[15px] md:text-[15px] sm:text-[15px] xsm:text-[15px] underline hover:underline text-[color:var(--prime-two)] hover:text-[#090F32]">{{ __('Click here for more info') }} <i class="bi bi-chevron-right inline-block text-[14px]"></i></a>
                </div>
                <div class="xl:w-4/12 lg:w-4/12 md:w-6/12 mt-10 w-full flex-[0_0_auto] px-[12px] max-w-full wow fadeInUp"
                    data-wow-delay="0.1s">
                    <div
                        class="card-style-three border transition-all duration-[0.3s] ease-[ease-in-out] w-full p-[42px_10px_30px_45px] lg:p-[30px_10px_25px_15px] md:p-[30px_10px_25px_15px] sm:p-[30px_10px_25px_15px] xsm:p-[30px_10px_25px_15px] rounded-[10px] border-solid border-[#f1f1f1] hover:shadow-[0_20px_50px_rgba(0,0,0,0.04)] hover:border-white bg-white">
                        <div class="icon flex items-end h-[65px]"><img src="{{ asset('/assets2/images/lazy') }}"
                                data-src="{{ asset('/assets2/images/icon/icon_13') }}" alt=""
                                class="lazy-img max-h-full"></div>
                        <h4
                            class="mt-[25px] mb-5 2xl:text-[22px] lg:text-[20px] md:text-[20px] sm:text-[20px] xsm:text-[20px]">
                            {{ __('File sharing') }}</h4>
                        <p class="mb-[50px]">{{ __('Our deep understanding of project and program management has enabled the success of our clients.') }}</p>
                        <a href="service-details.html"><img src="{{ asset('/assets2/images/lazy') }}"
                                data-src="{{ asset('/assets2/images/icon/icon_18') }}" alt=""
                                class="lazy-img"></a>
                    </div> <!-- /.card-style-three -->
                </div>
                <div class="xl:w-4/12 lg:w-4/12 md:w-6/12 mt-10 w-full flex-[0_0_auto] px-[12px] max-w-full wow fadeInUp"
                    data-wow-delay="0.2s">
                    <div
                        class="card-style-three border transition-all duration-[0.3s] ease-[ease-in-out] w-full p-[42px_10px_30px_45px] lg:p-[30px_10px_25px_15px] md:p-[30px_10px_25px_15px] sm:p-[30px_10px_25px_15px] xsm:p-[30px_10px_25px_15px] rounded-[10px] border-solid border-[#f1f1f1] hover:shadow-[0_20px_50px_rgba(0,0,0,0.04)] hover:border-white bg-white">
                        <div class="icon flex items-end h-[65px]"><img src="{{ asset('/assets2/images/lazy') }}"
                                data-src="{{ asset('/assets2/images/icon/icon_14') }}" alt=""
                                class="lazy-img max-h-full"></div>
                        <h4
                            class="mt-[25px] mb-5 2xl:text-[22px] lg:text-[20px] md:text-[20px] sm:text-[20px] xsm:text-[20px]">
                            {{ __('Team Managment') }}</h4>
                        <p class="mb-[50px]">{{ __('Our deep understanding of project and program management has enabled the success of our clients.') }}</p>
                        <a href="service-details.html"><img src="{{ asset('/assets2/images/lazy') }}"
                                data-src="{{ asset('/assets2/images/icon/icon_18') }}" alt=""
                                class="lazy-img"></a>
                    </div> <!-- /.card-style-three -->
                </div>
                <div class="xl:w-4/12 lg:w-4/12 md:w-6/12 mt-10 w-full flex-[0_0_auto] px-[12px] max-w-full wow fadeInUp"
                    data-wow-delay="0.05s">
                    <div
                        class="card-style-three border transition-all duration-[0.3s] ease-[ease-in-out] w-full p-[42px_10px_30px_45px] lg:p-[30px_10px_25px_15px] md:p-[30px_10px_25px_15px] sm:p-[30px_10px_25px_15px] xsm:p-[30px_10px_25px_15px] rounded-[10px] border-solid border-[#f1f1f1] hover:shadow-[0_20px_50px_rgba(0,0,0,0.04)] hover:border-white bg-white">
                        <div class="icon flex items-end h-[65px]"><img src="{{ asset('/assets2/images/lazy') }}"
                                data-src="{{ asset('/assets2/images/icon/icon_15') }}" alt=""
                                class="lazy-img max-h-full"></div>
                        <h4
                            class="mt-[25px] mb-5 2xl:text-[22px] lg:text-[20px] md:text-[20px] sm:text-[20px] xsm:text-[20px]">
                            {{ __('Time Tracking') }}</h4>
                        <p class="mb-[50px]">{{ __('Our deep understanding of project and program management has enabled the success of our clients.') }}</p>
                        <a href="service-details.html"><img src="{{ asset('/assets2/images/lazy') }}"
                                data-src="{{ asset('/assets2/images/icon/icon_18') }}" alt=""
                                class="lazy-img"></a>
                    </div> <!-- /.card-style-three -->
                </div>
                <div class="xl:w-4/12 lg:w-4/12 md:w-6/12 mt-10 w-full flex-[0_0_auto] px-[12px] max-w-full wow fadeInUp"
                    data-wow-delay="0.1s">
                    <div
                        class="card-style-three border transition-all duration-[0.3s] ease-[ease-in-out] w-full p-[42px_10px_30px_45px] lg:p-[30px_10px_25px_15px] md:p-[30px_10px_25px_15px] sm:p-[30px_10px_25px_15px] xsm:p-[30px_10px_25px_15px] rounded-[10px] border-solid border-[#f1f1f1] hover:shadow-[0_20px_50px_rgba(0,0,0,0.04)] hover:border-white bg-white">
                        <div class="icon flex items-end h-[65px]"><img src="{{ asset('/assets2/images/lazy') }}"
                                data-src="{{ asset('/assets2/images/icon/icon_16') }}" alt=""
                                class="lazy-img max-h-full"></div>
                        <h4
                            class="mt-[25px] mb-5 2xl:text-[22px] lg:text-[20px] md:text-[20px] sm:text-[20px] xsm:text-[20px]">
                            {{ __('	Voice & video call') }}</h4>
                        <p class="mb-[50px]">{{ __('Our deep understanding of project and program management has enabled the success of our clients.') }}</p>
                        <a href="service-details.html"><img src="{{ asset('/assets2/images/lazy') }}"
                                data-src="{{ asset('/assets2/images/icon/icon_18') }}" alt=""
                                class="lazy-img"></a>
                    </div> <!-- /.card-style-three -->
                </div>
                <div class="xl:w-4/12 lg:w-4/12 md:w-6/12 mt-10 w-full flex-[0_0_auto] px-[12px] max-w-full wow fadeInUp"
                    data-wow-delay="0.2s">
                    <div
                        class="card-style-three border transition-all duration-[0.3s] ease-[ease-in-out] w-full p-[42px_10px_30px_45px] lg:p-[30px_10px_25px_15px] md:p-[30px_10px_25px_15px] sm:p-[30px_10px_25px_15px] xsm:p-[30px_10px_25px_15px] rounded-[10px] border-solid border-[#f1f1f1] hover:shadow-[0_20px_50px_rgba(0,0,0,0.04)] hover:border-white bg-white">
                        <div class="icon flex items-end h-[65px]"><img src="{{ asset('/assets2/images/lazy') }}"
                                data-src="{{ asset('/assets2/images/icon/icon_17') }}" alt=""
                                class="lazy-img max-h-full"></div>
                        <h4
                            class="mt-[25px] mb-5 2xl:text-[22px] lg:text-[20px] md:text-[20px] sm:text-[20px] xsm:text-[20px]">
                            {{ __('Cloud storage') }}</h4>
                        <p class="mb-[50px]">{{ __('Our deep understanding of project and program management has enabled the success of our clients.') }}</p>
                        <a href="service-details.html"><img src="{{ asset('/assets2/images/lazy') }}"
                                data-src="{{ asset('/assets2/images/icon/icon_18') }}" alt=""
                                class="lazy-img"></a>
                    </div> <!-- /.card-style-three -->
                </div>
            </div>
        </div>
        <div
            class="shapes shape-one rounded-[50%] absolute z-[-1] w-[126px] h-[126px] left-[-50px] animate-[jumpThree_3s_infinite_linear] top-[4%] bg-[#FFC961]">
        </div>
        <img src="{{ asset('/assets2/images/lazy') }}" data-src="{{ asset('/assets2/images/shape/shape_36') }}"
            alt="" class="lazy-img shapes shape-two absolute z-[-1] right-[3%] top-[30%]">
        <div
            class="shapes shape-three rounded-[50%] absolute z-[-1] w-[300px] h-[300px] opacity-70 right-[-150px] animate-[jumpTwo_3s_infinite_linear] bottom-0 bg-[#FF35D9]">
        </div>
    </div> <!-- /.fancy-feature-six -->

    <!--
                =====================================================
                    Feedback Section Two
                =====================================================
                -->
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
                            style="background: #FFC961;"><img src="{{ asset('/assets2/images/lazy') }}"
                                data-src="{{ asset('/assets2/images/icon/icon_19') }}" alt="" class="lazy-img">
                        </div>
                        <h2
                            class="main-title font-normal text-[64px] leading-[1.15em] tracking-[0px] m-0 font-Recoleta 2xl:text-[58px] lg:text-[48px] md:text-[34px] md:leading-[1.2em] sm:text-[34px] sm:leading-[1.2em] xsm:text-[34px] xsm:leading-[1.2em]">
                            {{ __('Check what’s our') }} <span class="inline-block relative z-[1]">{{ __('client') }} <span
                                    class="mark-bg absolute left-[-5px] -translate-y-2/4 w-[98%] h-[50px] z-[-1] top-2/4"
                                    style="background-color:#BCF8F1;"></span></span> {{ __('say about us.') }}</h2>
                    </div> <!-- /.title-style-three -->
                </div>
            </div>

            <div class="flex flex-wrap mx-[-12px]">
                <div class="xl:w-7/12 lg:w-9/12 w-full flex-[0_0_auto] px-[12px] max-w-full m-auto">
                    <div class="feedback_slider_two">
                        <div class="item">
                            <div class="feedback-block-two text-center">
                                <p
                                    class="mb-20 lg:mb-10 md:mb-10 sm:mb-10 xsm:mb-10 text-[28px] 2xl:text-[25px] lg:text-[22px] md:text-[22px] sm:text-[22px] xsm:text-[20px] leading-[1.85em]">
                                    {{ __('Having a home based business is a wonderful asset to your life. The problem still stands it comes timeadvertise your business for a cheap cost. I know you have looked answer everywhere.') }}</p>
                                <h4
                                    class="!m-0 text-[24px] leading-[1.54em] 2xl:text-[22px] lg:text-[20px] md:text-[20px] sm:text-[20px] xsm:text-[20px]">
                                    {{ __('Rashed kabir') }}</h4>
                                <span class="opacity-75">{{ __('Designer') }}</span>
                            </div> <!-- /.feedback-block-two -->
                        </div>
                        <div class="item">
                            <div class="feedback-block-two text-center">
                                <p
                                    class="mb-20 lg:mb-10 md:mb-10 sm:mb-10 xsm:mb-10 text-[28px] 2xl:text-[25px] lg:text-[22px] md:text-[22px] sm:text-[22px] xsm:text-[20px] leading-[1.85em]">
                                    {{ __('Having a home based business is a wonderful asset to your life. The problem still stands it comes timeadvertise your business for a cheap cost. I know you have looked answer everywhere.') }}</p>
                                <h4
                                    class="!m-0 text-[24px] leading-[1.54em] 2xl:text-[22px] lg:text-[20px] md:text-[20px] sm:text-[20px] xsm:text-[20px]">
                                    {{ __('Rashed kabir') }}</h4>
                                <span class="opacity-75">{{ __('Designer') }}</span>
                            </div> <!-- /.feedback-block-two -->
                        </div>
                    </div> <!-- /.feedback_slider_two -->
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
            <img src="{{ asset('/assets2/images/lazy') }}" data-src="{{ asset('/assets2/images/shape/shape_37') }}"
                alt="" class="lazy-img main-img m-auto">
            <img src="{{ asset('/assets2/images/lazy') }}" data-src="{{ asset('/assets2/images/media/img_07') }}"
                alt=""
                class="lazy-img shapes rounded-[50%] cp-one absolute left-[16%] top-[19%] z-[1] lg:left-0 md:max-h-full sm:max-h-full xsm:max-h-full"
                style="width:80px; height:80px;">
            <img src="{{ asset('/assets2/images/lazy') }}" data-src="{{ asset('/assets2/images/media/img_08') }}"
                alt=""
                class="lazy-img shapes rounded-[50%] cp-two absolute left-[11%] top-[53%] z-[1] lg:left-0 md:left-0 sm:left-0 xsm:left-0 "
                style="width:45px; height:45px;">
            <img src="{{ asset('/assets2/images/lazy') }}" data-src="{{ asset('/assets2/images/media/img_09') }}"
                alt="" class="lazy-img shapes rounded-[50%] cp-three absolute left-1/4 bottom-[5%] z-[1]"
                style="width:85px; height:85px;">
            <img src="{{ asset('/assets2/images/lazy') }}" data-src="{{ asset('/assets2/images/media/img_10') }}"
                alt="" class="lazy-img shapes rounded-[50%] cp-four absolute right-[21%] top-[14%] z-[1]"
                style="width:45px; height:45px;">
            <img src="{{ asset('/assets2/images/lazy') }}" data-src="{{ asset('/assets2/images/media/img_11') }}"
                alt=""
                class="lazy-img shapes rounded-[50%] cp-five absolute right-[10%] top-[57%] z-[1] lg:right-0 md:right-0 sm:right-0 xsm:right-0 "
                style="width:110px; height:110px;">
            <img src="{{ asset('/assets2/images/lazy') }}" data-src="{{ asset('/assets2/images/media/img_12') }}"
                alt="" class="lazy-img shapes rounded-[50%] cp-six absolute right-[24%] bottom-[9%] z-[1]"
                style="width:55px; height:55px;">
        </div>
    </div> <!-- /.feedback-section-two -->


    <!--
                =============================================
                    Partner Section One
                ==============================================
                -->
    <div class="partner-section-one relative mt-[225px] lg:mt-[100px] md:mt-[100px] sm:mt-[100px] xsm:mt-[100px]">
        <div class="container">
            <div class="flex flex-wrap mx-[-12px]">
                <div class="xl:w-8/12 lg:w-8/12 w-full flex-[0_0_auto] px-[12px] max-w-full m-auto">
                    <div
                        class="title-style-three text-center mb-[100px] lg:mb-[30px] md:mb-[30px] sm:mb-[30px] xsm:mb-[30px] wow fadeInUp">
                        <div
                            class="sc-title uppercase text-[14px] lg:text-[13px] md:text-[13px] sm:text-[13px] xsm:text-[13px] tracking-[1px] text-[rgba(0,0,0,0.3)] pb-2.5">
                            {{ __('Our partners') }}</div>
                        <h2
                            class="main-title font-normal text-[64px] leading-[1.15em] tracking-[0px] m-0 font-Recoleta 2xl:text-[58px] lg:text-[48px] md:text-[34px] md:leading-[1.2em] sm:text-[34px] sm:leading-[1.2em] xsm:text-[34px] xsm:leading-[1.2em]">
                            {{ __('Our trusted partners') }} <span class="inline-block relative">{{ __('support') }} <span
                                    class="mark-bg absolute left-[-5px] -translate-y-2/4 w-[98%] h-[50px] z-[-1] top-2/4 md:h-[34px] sm:h-[34px] xsm:h-[34px]"
                                    style="background-color:#FFF3C6;"></span></span> {{ __('us always') }}</h2>
                    </div> <!-- /.title-style-three -->
                </div>
            </div>

            <div class="flex flex-wrap mx-[-12px]">
                <div class="xxl:w-11/12 w-full flex-[0_0_auto] px-[12px] max-w-full m-auto">
                    <div class="flex flex-wrap mx-[-12px] items-center">
                        <div class="xl:w-3/12 lg:w-3/12 md:w-4/12 w-6/12 flex-[0_0_auto] px-[12px] max-w-full wow fadeInUp"
                            data-wow-duration="1.2s">
                            <div
                                class="img-box bx-a shadow-[15px_30px_50px_rgba(23,32,90,0.06)] w-[175px] h-[175px] transition-all duration-[0.3s] ease-[ease-in-out] mt-0 mb-[25px] mx-auto rounded-[50%] hover:scale-110 bg-white md:w-[145px] md:h-[145px] sm:w-[145px] sm:h-[145px] xsm:w-[145px] xsm:h-[145px]">
                                <a class=" block h-full" href="#"><img src="{{ asset('/assets2/images/lazy') }}"
                                        data-src="{{ asset('/assets2/images/logo/p-1') }}" alt=""
                                        class="lazy-img relative -translate-y-2/4 m-[0_auto] top-2/4"></a>
                            </div> <!-- /.img-box -->
                        </div>
                        <div class="xl:w-2/12 lg:w-3/12 md:w-4/12 w-6/12 flex-[0_0_auto] px-[12px] max-w-full wow fadeInUp"
                            data-wow-duration="1.2s" data-wow-delay="0.05s">
                            <div
                                class="img-box bx-b shadow-[15px_30px_50px_rgba(23,32,90,0.06)] transition-all duration-[0.3s] ease-[ease-in-out] mt-0 mb-[25px] mx-auto rounded-[50%] hover:scale-110 bg-white w-[121px] h-[121px]">
                                <a class=" block h-full" href="#"><img src="{{ asset('/assets2/images/lazy') }}"
                                        data-src="{{ asset('/assets2/images/logo/p-2') }}" alt=""
                                        class="lazy-img relative -translate-y-2/4 m-[0_auto] top-2/4"></a>
                            </div> <!-- /.img-box -->
                        </div>
                        <div class="xl:w-3/12 lg:w-3/12 md:w-4/12 w-6/12 flex-[0_0_auto] px-[12px] max-w-full wow fadeInUp"
                            data-wow-duration="1.2s" data-wow-delay="0.1s">
                            <div
                                class="img-box bx-c shadow-[15px_30px_50px_rgba(23,32,90,0.06)] w-[175px] h-[175px] transition-all duration-[0.3s] ease-[ease-in-out] mt-0 mb-[25px] mx-auto rounded-[50%] hover:scale-110 bg-white md:w-[145px] md:h-[145px] sm:w-[145px] sm:h-[145px] xsm:w-[145px] xsm:h-[145px]">
                                <a class=" block h-full" href="#"><img src="{{ asset('/assets2/images/lazy') }}"
                                        data-src="{{ asset('/assets2/images/logo/p-3') }}" alt=""
                                        class="lazy-img relative -translate-y-2/4 m-[0_auto] top-2/4"></a>
                            </div> <!-- /.img-box -->
                        </div>
                        <div class="xl:w-2/12 lg:w-3/12 md:w-4/12 w-6/12 flex-[0_0_auto] px-[12px] max-w-full wow fadeInUp"
                            data-wow-duration="1.2s" data-wow-delay="0.15s">
                            <div
                                class="img-box bx-d shadow-[15px_30px_50px_rgba(23,32,90,0.06)] transition-all duration-[0.3s] ease-[ease-in-out] mt-0 mb-[25px] mx-auto rounded-[50%] hover:scale-110 bg-white w-[151px] h-[151px]">
                                <a class=" block h-full" href="#"><img src="{{ asset('/assets2/images/lazy') }}"
                                        data-src="{{ asset('/assets2/images/logo/p-4') }}" alt=""
                                        class="lazy-img relative -translate-y-2/4 m-[0_auto] top-2/4"></a>
                            </div> <!-- /.img-box -->
                        </div>
                        <div class="xl:w-2/12 lg:w-3/12 md:w-4/12 w-6/12 flex-[0_0_auto] px-[12px] max-w-full wow fadeInUp"
                            data-wow-duration="1.2s" data-wow-delay="0.2s">
                            <div
                                class="img-box bx-e shadow-[15px_30px_50px_rgba(23,32,90,0.06)] w-[175px] h-[175px] transition-all duration-[0.3s] ease-[ease-in-out] mt-0 mb-[25px] mx-auto rounded-[50%] hover:scale-110 bg-white md:w-[145px] md:h-[145px] sm:w-[145px] sm:h-[145px] xsm:w-[145px] xsm:h-[145px]">
                                <a class=" block h-full" href="#"><img src="{{ asset('/assets2/images/lazy') }}"
                                        data-src="{{ asset('/assets2/images/logo/p-5') }}" alt=""
                                        class="lazy-img relative -translate-y-2/4 m-[0_auto] top-2/4"></a>
                            </div> <!-- /.img-box -->
                        </div>
                        <div class="xl:w-4/12 lg:w-2/12 md:w-4/12 w-6/12 flex-[0_0_auto] px-[12px] max-w-full wow fadeInUp"
                            data-wow-duration="1.2s" data-wow-delay="0.25s">
                            <div
                                class="img-box bx-f shadow-[15px_30px_50px_rgba(23,32,90,0.06)] transition-all duration-[0.3s] ease-[ease-in-out] mt-0 mb-[25px] mx-auto rounded-[50%] hover:scale-110 bg-white w-[135px] h-[135px]">
                                <a class=" block h-full" href="#"><img src="{{ asset('/assets2/images/lazy') }}"
                                        data-src="{{ asset('/assets2/images/logo/p-6') }}" alt=""
                                        class="lazy-img relative -translate-y-2/4 m-[0_auto] top-2/4"></a>
                            </div> <!-- /.img-box -->
                        </div>
                        <div class="xl:w-2/12 lg:w-3/12 md:w-4/12 w-6/12 flex-[0_0_auto] px-[12px] max-w-full wow fadeInUp"
                            data-wow-duration="1.2s" data-wow-delay="0.3s">
                            <div
                                class="img-box bx-g shadow-[15px_30px_50px_rgba(23,32,90,0.06)] transition-all duration-[0.3s] ease-[ease-in-out] mt-0 mb-[25px] mx-auto rounded-[50%] hover:scale-110 bg-white w-[197px] h-[197px] md:w-40 md:h-40 sm:w-40 sm:h-40 xsm:w-40 xsm:h-40">
                                <a class=" block h-full" href="#"><img src="{{ asset('/assets2/images/lazy') }}"
                                        data-src="{{ asset('/assets2/images/logo/p-7') }}" alt=""
                                        class="lazy-img relative -translate-y-2/4 m-[0_auto] top-2/4"></a>
                            </div> <!-- /.img-box -->
                        </div>
                        <div class="xl:w-3/12 lg:w-3/12 md:w-4/12 w-6/12 flex-[0_0_auto] px-[12px] max-w-full wow fadeInUp"
                            data-wow-duration="1.2s" data-wow-delay="0.35s">
                            <div
                                class="img-box bx-h shadow-[15px_30px_50px_rgba(23,32,90,0.06)] transition-all duration-[0.3s] ease-[ease-in-out] mt-0 mb-[25px] mx-auto rounded-[50%] hover:scale-110 bg-white w-[138px] h-[138px]">
                                <a class=" block h-full" href="#"><img src="{{ asset('/assets2/images/lazy') }}"
                                        data-src="{{ asset('/assets2/images/logo/p-8') }}" alt=""
                                        class="lazy-img relative -translate-y-2/4 m-[0_auto] top-2/4"></a>
                            </div> <!-- /.img-box -->
                        </div>
                        <div class="xl:w-3/12 lg:w-full md:w-4/12 w-6/12 flex-[0_0_auto] px-[12px] max-w-full m-auto wow fadeInUp"
                            data-wow-duration="1.2s" data-wow-delay="0.4s">
                            <div
                                class="img-box bx-i shadow-[15px_30px_50px_rgba(23,32,90,0.06)] w-[175px] h-[175px] transition-all duration-[0.3s] ease-[ease-in-out] mt-0 mb-[25px] mx-auto rounded-[50%] hover:scale-110 bg-white md:w-[145px] md:h-[145px] sm:w-[145px] sm:h-[145px] xsm:w-[145px] xsm:h-[145px]">
                                <a class=" block h-full" href="#"><img src="{{ asset('/assets2/images/lazy') }}"
                                        data-src="{{ asset('/assets2/images/logo/p-9') }}" alt=""
                                        class="lazy-img relative -translate-y-2/4 m-[0_auto] top-2/4"></a>
                            </div> <!-- /.img-box -->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /.container -->
        <img src="{{ asset('/assets2/images/lazy') }}" data-src="{{ asset('/assets2/images/shape/shape_38') }}"
            alt=""
            class="lazy-img shapes shape-one absolute z-[-1] animate-[jumpTwo_4s_infinite_linear] right-[9%] top-[18%] md:!hidden sm:!hidden xsm:!hidden">
        <img src="{{ asset('/assets2/images/lazy') }}" data-src="{{ asset('/assets2/images/shape/shape_39') }}"
            alt=""
            class="lazy-img shapes shape-two absolute z-[-1] bottom-[-11%] animate-[jumpThree_4s_infinite_linear] left-[12%] md:!hidden sm:!hidden xsm:!hidden">
    </div> <!-- /.partner-section-one -->

    <!--
                =====================================================
                    Pricing Section One
                =====================================================
                -->
    <div class="pricing-section-one relative mt-[200px] lg:mt-[120px]">
        <div class="container">
            <div class="flex flex-wrap mx-[-12px]">
                <div class="xl:w-8/12 lg:w-8/12 w-full flex-[0_0_auto] px-[12px] max-w-full m-auto">
                    <div class="title-style-three text-center mb-[60px] lg:mb-10 wow fadeInUp">
                        <div
                            class="sc-title uppercase text-[14px] lg:text-[13px] md:text-[13px] sm:text-[13px] xsm:text-[13px] tracking-[1px] text-[rgba(0,0,0,0.3)] pb-2.5">
                            Pricing Plan</div>
                        <h2
                            class="main-title font-normal text-[64px] leading-[1.15em] tracking-[0px] m-0 font-Recoleta 2xl:text-[58px] lg:text-[48px] md:text-[34px] md:leading-[1.2em] sm:text-[34px] sm:leading-[1.2em] xsm:text-[34px] xsm:leading-[1.2em]">
                            No hidden charges! <span class="inline-block relative z-[1]">choose <span
                                    class="mark-bg absolute left-[-5px] -translate-y-2/4 w-[98%] h-[50px] z-[-1] top-2/4 md:h-[34px] sm:h-[34px] xsm:h-[34px]"
                                    style="background-color:#FFE1FB;"></span></span> your plan.</h2>
                    </div> <!-- /.title-style-three -->
                </div>
            </div>

            <ul class="nav nav-tabs pricing-nav-one justify-center pricing-nav-three flex flex-wrap mb-0 pl-0 wow fadeInUp"
                role="tablist">
                <li class="nav-item list-item" role="presentation">
                    <button
                        class="nav-link active text-[18px] leading-[58px] w-[150px] text-center text-black transition-all duration-[0.3s] ease-[ease-in-out] p-[0_15px] border-0 bg-[#f9f9f9] lg:text-base lg:leading-[50px] lg:w-[125px] md:text-base md:leading-[50px] md:w-[125px] sm:text-base sm:leading-[50px] sm:w-[125px] xsm:text-base xsm:leading-[50px] xsm:w-[125px] rounded-[45px_0_0_45px] border-r-0"
                        data-bs-toggle="tab" data-bs-target="#month" type="button" role="tab">Monthly</button>
                </li>
                <li class="nav-item list-item" role="presentation">
                    <button
                        class="nav-link text-[18px] leading-[58px] w-[150px] text-center text-black transition-all duration-[0.3s] ease-[ease-in-out] p-[0_15px] border-0 bg-[#f9f9f9] lg:text-base lg:leading-[50px] lg:w-[125px] md:text-base md:leading-[50px] md:w-[125px] sm:text-base sm:leading-[50px] sm:w-[125px] xsm:text-base xsm:leading-[50px] xsm:w-[125px] rounded-[0_45px_45px_0] border-l-0"
                        data-bs-toggle="tab" data-bs-target="#year" type="button" role="tab">Yearly</button>
                </li>
            </ul>

            <div
                class="pricing-table-area-one mt-[110px] lg:mt-[60px] md:mt-[60px] sm:mt-[60px] xsm:mt-[60px] xxl:!pr-[1.5rem] xxl:!pl-[1.5rem] wow fadeInUp">
                <div class="tab-content">
                    <div class="tab-pane show active" id="month">
                        <div class="flex flex-wrap !mx-0 relative">
                            <div
                                class="xl:w-3/12 lg:w-3/12 w-full flex-[0_0_auto] max-w-full pr-list-wrapper hidden xl:block lg:block relative border h-full rounded-[15px_0_0_15px] border-r-0 border-solid border-[#ededed] left-0 top-[228px] lg:top-[205px] md:top-[205px] sm:top-[205px] xsm:top-[205px]">
                                <ul class=" mb-0 pl-0 list-none ">
                                    <li class=" text-[17px] p-[28px_0_28px_25px] border-b-[#ededed] border-b border-solid">
                                        Full Access Library</li>
                                    <li class=" text-[17px] p-[28px_0_28px_25px] border-b-[#ededed] border-b border-solid">
                                        Multiple User</li>
                                    <li class=" text-[17px] p-[28px_0_28px_25px] border-b-[#ededed] border-b border-solid">
                                        Refund</li>
                                    <li class=" text-[17px] p-[28px_0_28px_25px] border-b-0">24/7 Support</li>
                                </ul>
                            </div>
                            <div
                                class="xl:w-9/12 lg:w-9/12 flex-[0_0_auto] max-w-full pr-table-wrapper ml-auto border text-center rounded-[15px] border-solid border-[#ededed] sm:border-0 xsm:border-0">
                                <div class="flex flex-wrap !mx-0">
                                    <div
                                        class="xl:w-4/12 lg:w-4/12 md:w-4/12 w-full flex-[0_0_auto] max-w-full pr-column border-r-[#ededed] border-r border-solid sm:border sm:rounded-[15px] sm:border-solid sm:border-[#ededed] xsm:border xsm:rounded-[15px] xsm:border-solid xsm:border-[#ededed] sm:mb-5 xsm:mb-5 ">
                                        <div class="pr-header pb-[35px] border-b-[#ededed] border-b border-solid">
                                            <div
                                                class="plan inline-block border leading-7 uppercase text-[13px] tracking-[1.5px] m-[29px_0_22px] p-[0_15px] rounded-[17px] border-solid border-[#CFCFCF]">
                                                Silver Plan</div>
                                            <div
                                                class="price text-[58px] lg:text-[42px] md:text-[42px] sm:text-[42px] xsm:text-[42px] tracking-[-1px] text-black leading-[initial] mb-[3px]">
                                                $17</div>
                                            <div class="info">Great for Individial Person</div>
                                        </div> <!-- /.pr-header -->
                                        <div class="pr-body">
                                            <ul class=" mb-0 pl-0 list-none ">
                                                <li
                                                    class=" p-[22px_0] sm:p-[12px_0_8px] xsm:p-[12px_0_8px] border-b-[#ededed] border-b border-solid">
                                                    <span
                                                        class="pr-text block xl:hidden lg:hidden mb-[5px] md:text-[15px] sm:text-[15px] xsm:text-[15px]">Send
                                                        documents for eSigning</span>
                                                    <i
                                                        class=" text-[25px] text-[rgba(151,151,151,0.75)] bi bi-x not-available"></i>
                                                </li>
                                                <li
                                                    class=" p-[22px_0] sm:p-[12px_0_8px] xsm:p-[12px_0_8px] border-b-[#ededed] border-b border-solid">
                                                    <span
                                                        class="pr-text block xl:hidden lg:hidden mb-[5px] md:text-[15px] sm:text-[15px] xsm:text-[15px]">Multiple
                                                        User</span>
                                                    <i
                                                        class=" text-[25px] text-[rgba(151,151,151,0.75)] bi bi-x not-available"></i>
                                                </li>
                                                <li
                                                    class=" p-[22px_0] sm:p-[12px_0_8px] xsm:p-[12px_0_8px] border-b-[#ededed] border-b border-solid">
                                                    <span
                                                        class="pr-text block xl:hidden lg:hidden mb-[5px] md:text-[15px] sm:text-[15px] xsm:text-[15px]">Refund</span>
                                                    <i
                                                        class=" text-[25px] text-[rgba(151,151,151,0.75)] bi bi-x not-available"></i>
                                                </li>
                                                <li
                                                    class=" p-[22px_0] sm:p-[12px_0_8px] xsm:p-[12px_0_8px] border-b-[#ededed] border-b border-solid">
                                                    <span
                                                        class="pr-text block xl:hidden lg:hidden mb-[5px] md:text-[15px] sm:text-[15px] xsm:text-[15px]">Bulk
                                                        invite to sign</span>
                                                    <i
                                                        class=" text-[25px] bi bi-check2 availabe text-[color:var(--prime-two)]"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="pr-footer p-[45px_0] sm:p-[16px_0] xsm:p-[16px_0]">
                                            <a href="#"
                                                class="trial-button font-medium text-[16px] tran3s w-40 leading-[46px] text-black rounded-[5px] hover:text-white bg-[#F4F4F4] hover:bg-[var(--prime-two)]">Sign
                                                up</a>
                                            <div
                                                class="trial-text mt-[15px] text-[15px] md:text-[14px] sm:text-[14px] xsm:text-[14px] opacity-75">
                                                Get your 30 day free trial</div>
                                        </div>
                                    </div> <!-- /.pr-column -->
                                    <div
                                        class="xl:w-4/12 lg:w-4/12 md:w-4/12 w-full flex-[0_0_auto] max-w-full pr-column border-r-[#ededed] border-r border-solid sm:border sm:rounded-[15px] sm:border-solid sm:border-[#ededed] xsm:border xsm:rounded-[15px] xsm:border-solid xsm:border-[#ededed] sm:mb-5 xsm:mb-5 ">
                                        <div class="pr-header pb-[35px] border-b-[#ededed] border-b border-solid">
                                            <div
                                                class="plan inline-block border leading-7 uppercase text-[13px] tracking-[1.5px] m-[29px_0_22px] p-[0_15px] rounded-[17px] border-solid border-[#CFCFCF]">
                                                Gold Plan</div>
                                            <div
                                                class="price text-[58px] lg:text-[42px] md:text-[42px] sm:text-[42px] xsm:text-[42px] tracking-[-1px] text-black leading-[initial] mb-[3px]">
                                                $25</div>
                                            <div class="info">Great for Startup</div>
                                        </div> <!-- /.pr-header -->
                                        <div class="pr-body">
                                            <ul class=" mb-0 pl-0 list-none ">
                                                <li
                                                    class=" p-[22px_0] sm:p-[12px_0_8px] xsm:p-[12px_0_8px] border-b-[#ededed] border-b border-solid">
                                                    <span
                                                        class="pr-text block xl:hidden lg:hidden mb-[5px] md:text-[15px] sm:text-[15px] xsm:text-[15px]">Send
                                                        documents for eSigning</span>
                                                    <i
                                                        class=" text-[25px] text-[rgba(151,151,151,0.75)] bi bi-x not-available"></i>
                                                </li>
                                                <li
                                                    class=" p-[22px_0] sm:p-[12px_0_8px] xsm:p-[12px_0_8px] border-b-[#ededed] border-b border-solid">
                                                    <span
                                                        class="pr-text block xl:hidden lg:hidden mb-[5px] md:text-[15px] sm:text-[15px] xsm:text-[15px]">Multiple
                                                        User</span>
                                                    <i
                                                        class=" text-[25px] text-[rgba(151,151,151,0.75)] bi bi-x not-available"></i>
                                                </li>
                                                <li
                                                    class=" p-[22px_0] sm:p-[12px_0_8px] xsm:p-[12px_0_8px] border-b-[#ededed] border-b border-solid">
                                                    <span
                                                        class="pr-text block xl:hidden lg:hidden mb-[5px] md:text-[15px] sm:text-[15px] xsm:text-[15px]">Refund</span>
                                                    <i
                                                        class=" text-[25px] bi bi-check2 availabe text-[color:var(--prime-two)]"></i>
                                                </li>
                                                <li
                                                    class=" p-[22px_0] sm:p-[12px_0_8px] xsm:p-[12px_0_8px] border-b-[#ededed] border-b border-solid">
                                                    <span
                                                        class="pr-text block xl:hidden lg:hidden mb-[5px] md:text-[15px] sm:text-[15px] xsm:text-[15px]">Bulk
                                                        invite to sign</span>
                                                    <i
                                                        class=" text-[25px] bi bi-check2 availabe text-[color:var(--prime-two)]"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="pr-footer p-[45px_0] sm:p-[16px_0] xsm:p-[16px_0]">
                                            <a href="#"
                                                class="trial-button font-medium text-[16px] tran3s w-40 leading-[46px] text-black rounded-[5px] hover:text-white bg-[#F4F4F4] hover:bg-[var(--prime-two)]">Sign
                                                up</a>
                                            <div
                                                class="trial-text mt-[15px] text-[15px] md:text-[14px] sm:text-[14px] xsm:text-[14px] opacity-75">
                                                Get your 30 day free trial</div>
                                        </div>
                                    </div> <!-- /.pr-column -->
                                    <div
                                        class="xl:w-4/12 lg:w-4/12 md:w-4/12 w-full flex-[0_0_auto] max-w-full pr-column border-r-[#ededed] border-r border-solid sm:border sm:rounded-[15px] sm:border-solid sm:border-[#ededed] xsm:border xsm:rounded-[15px] xsm:border-solid xsm:border-[#ededed] sm:mb-5 xsm:mb-5 ">
                                        <div class="pr-header pb-[35px] border-b-[#ededed] border-b border-solid">
                                            <div
                                                class="plan inline-block border leading-7 uppercase text-[13px] tracking-[1.5px] m-[29px_0_22px] p-[0_15px] rounded-[17px] border-solid border-[#CFCFCF]">
                                                Business Plan</div>
                                            <div
                                                class="price text-[58px] lg:text-[42px] md:text-[42px] sm:text-[42px] xsm:text-[42px] tracking-[-1px] text-black leading-[initial] mb-[3px]">
                                                $35</div>
                                            <div class="info">Great for Large Business</div>
                                        </div> <!-- /.pr-header -->
                                        <div class="pr-body">
                                            <ul class=" mb-0 pl-0 list-none ">
                                                <li
                                                    class=" p-[22px_0] sm:p-[12px_0_8px] xsm:p-[12px_0_8px] border-b-[#ededed] border-b border-solid">
                                                    <span
                                                        class="pr-text block xl:hidden lg:hidden mb-[5px] md:text-[15px] sm:text-[15px] xsm:text-[15px]">Send
                                                        documents for eSigning</span>
                                                    <i
                                                        class=" text-[25px] bi bi-check2 availabe text-[color:var(--prime-two)]"></i>
                                                </li>
                                                <li
                                                    class=" p-[22px_0] sm:p-[12px_0_8px] xsm:p-[12px_0_8px] border-b-[#ededed] border-b border-solid">
                                                    <span
                                                        class="pr-text block xl:hidden lg:hidden mb-[5px] md:text-[15px] sm:text-[15px] xsm:text-[15px]">Multiple
                                                        User</span>
                                                    <i
                                                        class=" text-[25px] bi bi-check2 availabe text-[color:var(--prime-two)]"></i>
                                                </li>
                                                <li
                                                    class=" p-[22px_0] sm:p-[12px_0_8px] xsm:p-[12px_0_8px] border-b-[#ededed] border-b border-solid">
                                                    <span
                                                        class="pr-text block xl:hidden lg:hidden mb-[5px] md:text-[15px] sm:text-[15px] xsm:text-[15px]">Refund</span>
                                                    <i
                                                        class=" text-[25px] bi bi-check2 availabe text-[color:var(--prime-two)]"></i>
                                                </li>
                                                <li
                                                    class=" p-[22px_0] sm:p-[12px_0_8px] xsm:p-[12px_0_8px] border-b-[#ededed] border-b border-solid">
                                                    <span
                                                        class="pr-text block xl:hidden lg:hidden mb-[5px] md:text-[15px] sm:text-[15px] xsm:text-[15px]">Bulk
                                                        invite to sign</span>
                                                    <i
                                                        class=" text-[25px] bi bi-check2 availabe text-[color:var(--prime-two)]"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="pr-footer p-[45px_0] sm:p-[16px_0] xsm:p-[16px_0]">
                                            <a href="#"
                                                class="trial-button font-medium text-[16px] tran3s w-40 leading-[46px] text-black rounded-[5px] hover:text-white bg-[#F4F4F4] hover:bg-[var(--prime-two)]">Sign
                                                up</a>
                                            <div
                                                class="trial-text mt-[15px] text-[15px] md:text-[14px] sm:text-[14px] xsm:text-[14px] opacity-75">
                                                Get your 30 day free trial</div>
                                        </div>
                                    </div> <!-- /.pr-column -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="year">
                        <div class="flex flex-wrap !mx-0 relative">
                            <div
                                class="xl:w-3/12 lg:w-3/12 w-full flex-[0_0_auto] max-w-full pr-list-wrapper hidden xl:block lg:block relative border h-full rounded-[15px_0_0_15px] border-r-0 border-solid border-[#ededed] left-0 top-[228px] lg:top-[205px] md:top-[205px] sm:top-[205px] xsm:top-[205px]">
                                <ul class=" mb-0 pl-0 list-none ">
                                    <li class=" text-[17px] p-[28px_0_28px_25px] border-b-[#ededed] border-b border-solid">
                                        Full Access Library</li>
                                    <li class=" text-[17px] p-[28px_0_28px_25px] border-b-[#ededed] border-b border-solid">
                                        Multiple User</li>
                                    <li class=" text-[17px] p-[28px_0_28px_25px] border-b-[#ededed] border-b border-solid">
                                        Refund</li>
                                    <li class=" text-[17px] p-[28px_0_28px_25px] border-b-0">24/7 Support</li>
                                </ul>
                            </div>
                            <div
                                class="xl:w-9/12 lg:w-9/12 flex-[0_0_auto] max-w-full pr-table-wrapper ml-auto border text-center rounded-[15px] border-solid border-[#ededed] sm:border-0 xsm:border-0">
                                <div class="flex flex-wrap !mx-0">
                                    <div
                                        class="xl:w-4/12 lg:w-4/12 md:w-4/12 w-full flex-[0_0_auto] max-w-full pr-column border-r-[#ededed] border-r border-solid sm:border sm:rounded-[15px] sm:border-solid sm:border-[#ededed] xsm:border xsm:rounded-[15px] xsm:border-solid xsm:border-[#ededed] sm:mb-5 xsm:mb-5 ">
                                        <div class="pr-header pb-[35px] border-b-[#ededed] border-b border-solid">
                                            <div
                                                class="plan inline-block border leading-7 uppercase text-[13px] tracking-[1.5px] m-[29px_0_22px] p-[0_15px] rounded-[17px] border-solid border-[#CFCFCF]">
                                                Silver Plan</div>
                                            <div
                                                class="price text-[58px] lg:text-[42px] md:text-[42px] sm:text-[42px] xsm:text-[42px] tracking-[-1px] text-black leading-[initial] mb-[3px]">
                                                $123</div>
                                            <div class="info">Great for Individial Person</div>
                                        </div> <!-- /.pr-header -->
                                        <div class="pr-body">
                                            <ul class=" mb-0 pl-0 list-none ">
                                                <li
                                                    class=" p-[22px_0] sm:p-[12px_0_8px] xsm:p-[12px_0_8px] border-b-[#ededed] border-b border-solid">
                                                    <span
                                                        class="pr-text block xl:hidden lg:hidden mb-[5px] md:text-[15px] sm:text-[15px] xsm:text-[15px]">Send
                                                        documents for eSigning</span>
                                                    <i
                                                        class=" text-[25px] text-[rgba(151,151,151,0.75)] bi bi-x not-available"></i>
                                                </li>
                                                <li
                                                    class=" p-[22px_0] sm:p-[12px_0_8px] xsm:p-[12px_0_8px] border-b-[#ededed] border-b border-solid">
                                                    <span
                                                        class="pr-text block xl:hidden lg:hidden mb-[5px] md:text-[15px] sm:text-[15px] xsm:text-[15px]">Multiple
                                                        User</span>
                                                    <i
                                                        class=" text-[25px] text-[rgba(151,151,151,0.75)] bi bi-x not-available"></i>
                                                </li>
                                                <li
                                                    class=" p-[22px_0] sm:p-[12px_0_8px] xsm:p-[12px_0_8px] border-b-[#ededed] border-b border-solid">
                                                    <span
                                                        class="pr-text block xl:hidden lg:hidden mb-[5px] md:text-[15px] sm:text-[15px] xsm:text-[15px]">Refund</span>
                                                    <i
                                                        class=" text-[25px] text-[rgba(151,151,151,0.75)] bi bi-x not-available"></i>
                                                </li>
                                                <li
                                                    class=" p-[22px_0] sm:p-[12px_0_8px] xsm:p-[12px_0_8px] border-b-[#ededed] border-b border-solid">
                                                    <span
                                                        class="pr-text block xl:hidden lg:hidden mb-[5px] md:text-[15px] sm:text-[15px] xsm:text-[15px]">Bulk
                                                        invite to sign</span>
                                                    <i
                                                        class=" text-[25px] bi bi-check2 availabe text-[color:var(--prime-two)]"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="pr-footer p-[45px_0] sm:p-[16px_0] xsm:p-[16px_0]">
                                            <a href="#"
                                                class="trial-button font-medium text-[16px] tran3s w-40 leading-[46px] text-black rounded-[5px] hover:text-white bg-[#F4F4F4] hover:bg-[var(--prime-two)]">Sign
                                                up</a>
                                            <div
                                                class="trial-text mt-[15px] text-[15px] md:text-[14px] sm:text-[14px] xsm:text-[14px] opacity-75">
                                                Get your 30 day free trial</div>
                                        </div>
                                    </div> <!-- /.pr-column -->
                                    <div
                                        class="xl:w-4/12 lg:w-4/12 md:w-4/12 w-full flex-[0_0_auto] max-w-full pr-column border-r-[#ededed] border-r border-solid sm:border sm:rounded-[15px] sm:border-solid sm:border-[#ededed] xsm:border xsm:rounded-[15px] xsm:border-solid xsm:border-[#ededed] sm:mb-5 xsm:mb-5 ">
                                        <div class="pr-header pb-[35px] border-b-[#ededed] border-b border-solid">
                                            <div
                                                class="plan inline-block border leading-7 uppercase text-[13px] tracking-[1.5px] m-[29px_0_22px] p-[0_15px] rounded-[17px] border-solid border-[#CFCFCF]">
                                                Gold Plan</div>
                                            <div
                                                class="price text-[58px] lg:text-[42px] md:text-[42px] sm:text-[42px] xsm:text-[42px] tracking-[-1px] text-black leading-[initial] mb-[3px]">
                                                $199</div>
                                            <div class="info">Great for Startup</div>
                                        </div> <!-- /.pr-header -->
                                        <div class="pr-body">
                                            <ul class=" mb-0 pl-0 list-none ">
                                                <li
                                                    class=" p-[22px_0] sm:p-[12px_0_8px] xsm:p-[12px_0_8px] border-b-[#ededed] border-b border-solid">
                                                    <span
                                                        class="pr-text block xl:hidden lg:hidden mb-[5px] md:text-[15px] sm:text-[15px] xsm:text-[15px]">Send
                                                        documents for eSigning</span>
                                                    <i
                                                        class=" text-[25px] text-[rgba(151,151,151,0.75)] bi bi-x not-available"></i>
                                                </li>
                                                <li
                                                    class=" p-[22px_0] sm:p-[12px_0_8px] xsm:p-[12px_0_8px] border-b-[#ededed] border-b border-solid">
                                                    <span
                                                        class="pr-text block xl:hidden lg:hidden mb-[5px] md:text-[15px] sm:text-[15px] xsm:text-[15px]">Multiple
                                                        User</span>
                                                    <i
                                                        class=" text-[25px] text-[rgba(151,151,151,0.75)] bi bi-x not-available"></i>
                                                </li>
                                                <li
                                                    class=" p-[22px_0] sm:p-[12px_0_8px] xsm:p-[12px_0_8px] border-b-[#ededed] border-b border-solid">
                                                    <span
                                                        class="pr-text block xl:hidden lg:hidden mb-[5px] md:text-[15px] sm:text-[15px] xsm:text-[15px]">Refund</span>
                                                    <i
                                                        class=" text-[25px] bi bi-check2 availabe text-[color:var(--prime-two)]"></i>
                                                </li>
                                                <li
                                                    class=" p-[22px_0] sm:p-[12px_0_8px] xsm:p-[12px_0_8px] border-b-[#ededed] border-b border-solid">
                                                    <span
                                                        class="pr-text block xl:hidden lg:hidden mb-[5px] md:text-[15px] sm:text-[15px] xsm:text-[15px]">Bulk
                                                        invite to sign</span>
                                                    <i
                                                        class=" text-[25px] bi bi-check2 availabe text-[color:var(--prime-two)]"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="pr-footer p-[45px_0] sm:p-[16px_0] xsm:p-[16px_0]">
                                            <a href="#"
                                                class="trial-button font-medium text-[16px] tran3s w-40 leading-[46px] text-black rounded-[5px] hover:text-white bg-[#F4F4F4] hover:bg-[var(--prime-two)]">Sign
                                                up</a>
                                            <div
                                                class="trial-text mt-[15px] text-[15px] md:text-[14px] sm:text-[14px] xsm:text-[14px] opacity-75">
                                                Get your 30 day free trial</div>
                                        </div>
                                    </div> <!-- /.pr-column -->
                                    <div
                                        class="xl:w-4/12 lg:w-4/12 md:w-4/12 w-full flex-[0_0_auto] max-w-full pr-column border-r-[#ededed] border-r border-solid sm:border sm:rounded-[15px] sm:border-solid sm:border-[#ededed] xsm:border xsm:rounded-[15px] xsm:border-solid xsm:border-[#ededed] sm:mb-5 xsm:mb-5 ">
                                        <div class="pr-header pb-[35px] border-b-[#ededed] border-b border-solid">
                                            <div
                                                class="plan inline-block border leading-7 uppercase text-[13px] tracking-[1.5px] m-[29px_0_22px] p-[0_15px] rounded-[17px] border-solid border-[#CFCFCF]">
                                                Business Plan</div>
                                            <div
                                                class="price text-[58px] lg:text-[42px] md:text-[42px] sm:text-[42px] xsm:text-[42px] tracking-[-1px] text-black leading-[initial] mb-[3px]">
                                                $239</div>
                                            <div class="info">Great for Large Business</div>
                                        </div> <!-- /.pr-header -->
                                        <div class="pr-body">
                                            <ul class=" mb-0 pl-0 list-none ">
                                                <li
                                                    class=" p-[22px_0] sm:p-[12px_0_8px] xsm:p-[12px_0_8px] border-b-[#ededed] border-b border-solid">
                                                    <span
                                                        class="pr-text block xl:hidden lg:hidden mb-[5px] md:text-[15px] sm:text-[15px] xsm:text-[15px]">Send
                                                        documents for eSigning</span>
                                                    <i
                                                        class=" text-[25px] bi bi-check2 availabe text-[color:var(--prime-two)]"></i>
                                                </li>
                                                <li
                                                    class=" p-[22px_0] sm:p-[12px_0_8px] xsm:p-[12px_0_8px] border-b-[#ededed] border-b border-solid">
                                                    <span
                                                        class="pr-text block xl:hidden lg:hidden mb-[5px] md:text-[15px] sm:text-[15px] xsm:text-[15px]">Multiple
                                                        User</span>
                                                    <i
                                                        class=" text-[25px] bi bi-check2 availabe text-[color:var(--prime-two)]"></i>
                                                </li>
                                                <li
                                                    class=" p-[22px_0] sm:p-[12px_0_8px] xsm:p-[12px_0_8px] border-b-[#ededed] border-b border-solid">
                                                    <span
                                                        class="pr-text block xl:hidden lg:hidden mb-[5px] md:text-[15px] sm:text-[15px] xsm:text-[15px]">Refund</span>
                                                    <i
                                                        class=" text-[25px] bi bi-check2 availabe text-[color:var(--prime-two)]"></i>
                                                </li>
                                                <li
                                                    class=" p-[22px_0] sm:p-[12px_0_8px] xsm:p-[12px_0_8px] border-b-[#ededed] border-b border-solid">
                                                    <span
                                                        class="pr-text block xl:hidden lg:hidden mb-[5px] md:text-[15px] sm:text-[15px] xsm:text-[15px]">Bulk
                                                        invite to sign</span>
                                                    <i
                                                        class=" text-[25px] bi bi-check2 availabe text-[color:var(--prime-two)]"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="pr-footer p-[45px_0] sm:p-[16px_0] xsm:p-[16px_0]">
                                            <a href="#"
                                                class="trial-button font-medium text-[16px] tran3s w-40 leading-[46px] text-black rounded-[5px] hover:text-white bg-[#F4F4F4] hover:bg-[var(--prime-two)]">Sign
                                                up</a>
                                            <div
                                                class="trial-text mt-[15px] text-[15px] md:text-[14px] sm:text-[14px] xsm:text-[14px] opacity-75">
                                                Get your 30 day free trial</div>
                                        </div>
                                    </div> <!-- /.pr-column -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.pricing-table-area-one -->
        </div>
        <div
            class="shapes shape-one rounded-[50%] absolute z-[-1] w-[293px] h-[293px] left-[-180px] animate-[jumpTwo_4s_infinite_linear] top-[24%] bg-[#57F2CF] lg:!hidden md:!hidden sm:!hidden xsm:!hidden">
        </div>
        <img src="{{ asset('/assets2/images/lazy') }}" data-src="{{ asset('/assets2/images/shape/shape_40') }}"
            alt=""
            class="lazy-img shapes shape-two absolute z-[-1] animate-[jumpFour_4s_infinite_linear] left-[20%] bottom-0 lg:!hidden md:!hidden sm:!hidden xsm:!hidden">
        <img src="{{ asset('/assets2/images/lazy') }}" data-src="{{ asset('/assets2/images/shape/shape_41') }}"
            alt=""
            class="lazy-img shapes shape-three absolute z-[-1] animate-[jumpThree_4s_infinite_linear] right-[3%] top-[35%]">
    </div> <!-- /.pricing-section-one -->


    <!--
                =====================================================
                    Fancy Short Banner Two
                =====================================================
                -->
    <div class="fancy-short-banner-two mt-[150px] lg:mt-[100px] md:mt-[100px] sm:mt-[100px] xsm:mt-[100px] wow fadeInUp">
        <div class="container">
            <div
                class="bg-wrapper xxl:mr-[1.5rem] xxl:ml-[1.5rem] relative p-[70px_12px] lg:p-[40px_20px] md:p-[40px_20px] sm:p-[40px_20px] xsm:p-[40px_20px] rounded-[10px] bg-[#F3F7F8]">
                <div
                    class="shapes rounded-[50%] shape-one absolute z-[-1] w-[121px] h-[121px] opacity-[0.65] bottom-[-50px] right-[-50px] animate-[jumpThree_4s_infinite_linear] bg-[#623CFF]">
                </div>
                <div class="inner-wrapper m-auto 2xl:max-w-[990px] lg:max-w-[800px] max-w-[1110px]">
                    <div class="flex flex-wrap mx-[-12px] items-center">
                        <div
                            class="xl:w-6/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] px-[12px] max-w-full text-center xl:text-left lg:text-left md:text-left sm:mb-[30px] xsm:mb-[30px]">
                            <h6 class="mb-[5px] text-[color:var(--prime-two)]">Need Custome Plan?</h6>
                            <h3 class="font-normal !m-0">Send us message for Help.</h3>
                        </div>
                        <div
                            class="xl:w-6/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] px-[12px] max-w-full sm:text-center xsm:text-center text-right ">
                            <a href="contact-us.html"
                                class="btn-six font-medium leading-[50px] rounded border-[color:var(--prime-two)] text-[color:var(--prime-two)] transition-all duration-[0.3s] ease-[ease-in-out] px-10 py-0 border-2 border-solid hover:text-white hover:bg-[var(--prime-two)]">Contact
                                us</a>
                        </div>
                    </div>
                </div>
            </div> <!-- /.bg-wrapper -->
        </div>
    </div> <!-- /.fancy-short-banner-two -->

    <!--
                =====================================================
                    Fancy Short Banner Three
                =====================================================
                -->
    <div class="fancy-short-banner-three mt-[180px] mb-[200px] lg:my-[100px] md:my-[100px] sm:my-[100px] xsm:my-[100px]">
        <div class="container">
            <div class="flex flex-wrap mx-[-12px]">
                <div
                    class="xxl:w-7/12 xl:w-8/12 lg:w-8/12 md:w-9/12 w-full flex-[0_0_auto] px-[12px] max-w-full m-auto text-center">
                    <div class="title-style-three text-center wow fadeInUp">
                        <h2
                            class="main-title font-normal text-[64px] leading-[1.15em] tracking-[0px] m-0 font-Recoleta 2xl:text-[58px] lg:text-[48px] md:text-[34px] md:leading-[1.2em] sm:text-[34px] sm:leading-[1.2em] xsm:text-[34px] xsm:leading-[1.2em]">
                            Ready to take <span class="inline-block relative z-[1]">plan? <span
                                    class="mark-bg absolute left-[-5px] -translate-y-2/4 w-[98%] h-[50px] z-[-1] top-2/4 md:h-[34px] sm:h-[34px] xsm:h-[34px]"
                                    style="background-color:#C3F0FF;"></span></span> It’s just a matter of clike</h2>
                    </div> <!-- /.title-style-three -->
                    <p class=" text-[24px] 2xl:text-[22px] lg:text-[19px] md:text-[19px] sm:text-[19px] xsm:text-[19px] leading-[1.67em] text-black pt-[30px] pb-[55px] lg:pb-[30px] md:pb-[30px] sm:pb-[30px] xsm:pb-[30px] wow fadeInUp"
                        data-wow-delay="0.1s">Try it risk free — we don’t charge cancellation fees.</p>
                    <div class="subscribe-form m-auto wow fadeInUp max-w-[620px]" data-wow-delay="0.2s">
                        <form action="#" class="relative h-[70px] xsm:h-[60px]">
                            <input
                                class=" w-full h-full p-[0_180px_0_40px] xsm:p-[0_122px_0_20px] rounded-[35px] border-0 bg-[#F5F5F5]"
                                type="email" placeholder="Email address">
                            <button
                                class="tran3s absolute font-medium w-[180px] xsm:w-[120px] text-white rounded-[0_35px_35px_0] right-0 inset-y-0 bg-[var(--prime-two)] hover:bg-[#090F32]">Try
                                for free</button>
                        </form>
                        <p class="!m-0 pt-5">Already a member? <a href="#"
                                class=" text-black  underline hover:text-[#0a58ca]">Sign in.</a></p>
                    </div> <!-- /.subscribe-form -->
                </div>
            </div>
        </div>
    </div> <!-- /.fancy-short-banner-three -->



    <!--
                =====================================================
                    Footer
                =====================================================
                -->
    <div
        class="footer-style-two theme-basic-footer p-[0_10%] 2xl:p-[0_4%] lg:p-[0_12px] md:p-[0_12px] sm:p-[0_12px] xsm:p-[0_12px]">
        <div
            class="top-footer relative border border-neutral-200 z-[1] p-[100px_12px_60px] md:p-[70px_12px_0] sm:p-[70px_12px_0] xsm:p-[70px_12px_0] rounded-[20px] border-solid">
            <div class="container">
                <div class="inner-wrapper m-auto max-w-[1170px]">
                    <div class="flex flex-wrap mx-[-12px]">
                        <div class="xl:w-3/12 lg:w-3/12 w-full flex-[0_0_auto] px-[12px] max-w-full footer-intro mb-10 ">
                            <div class="logo"><a href="index.html"><img
                                        src="{{ asset('/assets2/images/logo/logo_01') }}" alt=""
                                        width="95"></a></div>
                            <a href="#"
                                class="email tran3s text-[18px] lg:text-[16px] md:text-[16px] sm:text-[16px] xsm:text-[16px] leading-[1.67em] mt-[35px] mb-[15px] md:mt-[10px] sm:mt-[10px] xsm:mt-[10px] hover:underline hover:text-black">januinc@company.com</a>
                            <br>
                            <a href="#"
                                class="mobile tran3s text-[20px] lg:text-[18px] md:text-[18px] sm:text-[18px] xsm:text-[18px] font-medium text-[color:var(--prime-two)] hover:underline">+757
                                699-4478</a>
                        </div>
                        <div
                            class="xl:w-3/12 lg:w-3/12 md:w-4/12 sm:w-4/12 w-full flex-[0_0_auto] px-[12px] max-w-full !ml-auto mb-[30px]">
                            <h5
                                class="footer-title text-black font-medium text-[24px] mb-5 md:text-[20px] md:mb-[10px] sm:text-[20px] sm:mb-[10px] xsm:text-[20px] xsm:mb-[10px]">
                                Links</h5>
                            <ul class="footer-nav-link mb-0 pl-0 list-none ">
                                <li><a class=" text-[17px] leading-10 transition-all duration-[0.3s] ease-[ease-in-out] md:text-[16px] md:leading-[38px] sm:text-[16px] sm:leading-[38px] xsm:text-[16px] xsm:leading-[38px] hover:text-[color:var(--prime-two)] hover:underline"
                                        href="index.html">Home</a></li>
                                <li><a class=" text-[17px] leading-10 transition-all duration-[0.3s] ease-[ease-in-out] md:text-[16px] md:leading-[38px] sm:text-[16px] sm:leading-[38px] xsm:text-[16px] xsm:leading-[38px] hover:text-[color:var(--prime-two)] hover:underline"
                                        href="pricing.html">Pricing</a></li>
                                <li><a class=" text-[17px] leading-10 transition-all duration-[0.3s] ease-[ease-in-out] md:text-[16px] md:leading-[38px] sm:text-[16px] sm:leading-[38px] xsm:text-[16px] xsm:leading-[38px] hover:text-[color:var(--prime-two)] hover:underline"
                                        href="about-v1.html">About us</a></li>
                                <li><a class=" text-[17px] leading-10 transition-all duration-[0.3s] ease-[ease-in-out] md:text-[16px] md:leading-[38px] sm:text-[16px] sm:leading-[38px] xsm:text-[16px] xsm:leading-[38px] hover:text-[color:var(--prime-two)] hover:underline"
                                        href="blog-v1.html">Careers</a></li>
                                <li><a class=" text-[17px] leading-10 transition-all duration-[0.3s] ease-[ease-in-out] md:text-[16px] md:leading-[38px] sm:text-[16px] sm:leading-[38px] xsm:text-[16px] xsm:leading-[38px] hover:text-[color:var(--prime-two)] hover:underline"
                                        href="service-v1.html">Features</a></li>
                                <li><a class=" text-[17px] leading-10 transition-all duration-[0.3s] ease-[ease-in-out] md:text-[16px] md:leading-[38px] sm:text-[16px] sm:leading-[38px] xsm:text-[16px] xsm:leading-[38px] hover:text-[color:var(--prime-two)] hover:underline"
                                        href="blog-v1.html">Demo the product</a></li>
                            </ul>
                        </div>
                        <div
                            class="xl:w-3/12 lg:w-3/12 md:w-4/12 sm:w-4/12 w-full flex-[0_0_auto] px-[12px] max-w-full mb-[30px]">
                            <h5
                                class="footer-title text-black font-medium text-[24px] mb-5 md:text-[20px] md:mb-[10px] sm:text-[20px] sm:mb-[10px] xsm:text-[20px] xsm:mb-[10px]">
                                Legal</h5>
                            <ul class="footer-nav-link mb-0 pl-0 list-none ">
                                <li><a class=" text-[17px] leading-10 transition-all duration-[0.3s] ease-[ease-in-out] md:text-[16px] md:leading-[38px] sm:text-[16px] sm:leading-[38px] xsm:text-[16px] xsm:leading-[38px] hover:text-[color:var(--prime-two)] hover:underline"
                                        href="faq.html">Terms of use</a></li>
                                <li><a class=" text-[17px] leading-10 transition-all duration-[0.3s] ease-[ease-in-out] md:text-[16px] md:leading-[38px] sm:text-[16px] sm:leading-[38px] xsm:text-[16px] xsm:leading-[38px] hover:text-[color:var(--prime-two)] hover:underline"
                                        href="faq.html">Terms & conditions</a></li>
                                <li><a class=" text-[17px] leading-10 transition-all duration-[0.3s] ease-[ease-in-out] md:text-[16px] md:leading-[38px] sm:text-[16px] sm:leading-[38px] xsm:text-[16px] xsm:leading-[38px] hover:text-[color:var(--prime-two)] hover:underline"
                                        href="faq.html">Privacy policy</a></li>
                                <li><a class=" text-[17px] leading-10 transition-all duration-[0.3s] ease-[ease-in-out] md:text-[16px] md:leading-[38px] sm:text-[16px] sm:leading-[38px] xsm:text-[16px] xsm:leading-[38px] hover:text-[color:var(--prime-two)] hover:underline"
                                        href="faq.html">Cookie policy</a></li>
                            </ul>
                        </div>
                        <div
                            class="xl:w-2/12 lg:w-3/12 md:w-4/12 sm:w-4/12 w-full flex-[0_0_auto] px-[12px] max-w-full mb-[30px]">
                            <h5
                                class="footer-title text-black font-medium text-[24px] mb-5 md:text-[20px] md:mb-[10px] sm:text-[20px] sm:mb-[10px] xsm:text-[20px] xsm:mb-[10px]">
                                Products</h5>
                            <ul class="footer-nav-link mb-0 pl-0 list-none ">
                                <li><a class=" text-[17px] leading-10 transition-all duration-[0.3s] ease-[ease-in-out] md:text-[16px] md:leading-[38px] sm:text-[16px] sm:leading-[38px] xsm:text-[16px] xsm:leading-[38px] hover:text-[color:var(--prime-two)] hover:underline"
                                        href="blog-details.html">Take the tour</a></li>
                                <li><a class=" text-[17px] leading-10 transition-all duration-[0.3s] ease-[ease-in-out] md:text-[16px] md:leading-[38px] sm:text-[16px] sm:leading-[38px] xsm:text-[16px] xsm:leading-[38px] hover:text-[color:var(--prime-two)] hover:underline"
                                        href="blog-details.html">Live chat</a></li>
                                <li><a class=" text-[17px] leading-10 transition-all duration-[0.3s] ease-[ease-in-out] md:text-[16px] md:leading-[38px] sm:text-[16px] sm:leading-[38px] xsm:text-[16px] xsm:leading-[38px] hover:text-[color:var(--prime-two)] hover:underline"
                                        href="blog-details.html">Self-service</a></li>
                                <li><a class=" text-[17px] leading-10 transition-all duration-[0.3s] ease-[ease-in-out] md:text-[16px] md:leading-[38px] sm:text-[16px] sm:leading-[38px] xsm:text-[16px] xsm:leading-[38px] hover:text-[color:var(--prime-two)] hover:underline"
                                        href="blog-details.html">Social</a></li>
                                <li><a class=" text-[17px] leading-10 transition-all duration-[0.3s] ease-[ease-in-out] md:text-[16px] md:leading-[38px] sm:text-[16px] sm:leading-[38px] xsm:text-[16px] xsm:leading-[38px] hover:text-[color:var(--prime-two)] hover:underline"
                                        href="blog-details.html">Collaboration</a></li>
                                <li><a class=" text-[17px] leading-10 transition-all duration-[0.3s] ease-[ease-in-out] md:text-[16px] md:leading-[38px] sm:text-[16px] sm:leading-[38px] xsm:text-[16px] xsm:leading-[38px] hover:text-[color:var(--prime-two)] hover:underline"
                                        href="blog-details.html">Jano Reviews</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- /.inner-wrapper -->
            </div>
            <div
                class="shapes shape-one rounded-[50%] absolute z-[-1] w-60 h-60 opacity-70 top-[-120px] left-[-120px] bg-[#FFBF44] md:w-[100px] md:h-[100px] md:top-[-50px] md:-left-3 sm:w-[100px] sm:h-[100px] sm:top-[-50px] sm:-left-3 xsm:w-[100px] xsm:h-[100px] xsm:top-[-50px] xsm:-left-3">
            </div>
            <div
                class="shapes shape-two rounded-[50%] absolute z-[-1] w-[136px] h-[136px] opacity-[0.65] right-[-70px] bottom-[-55px] bg-[#15B9FF] md:w-[50px] md:h-[50px] md:-right-3 md:bottom-0 sm:w-[50px] sm:h-[50px] sm:-right-3 sm:bottom-0 xsm:w-[50px] xsm:h-[50px] xsm:-right-3 xsm:bottom-0">
            </div>
            <img src="{{ asset('/assets2/images/lazy') }}" data-src="{{ asset('/assets2/images/shape/shape_42') }}"
                alt=""
                class="lazy-img shapes shape-three absolute z-[-1] right-[-4%] top-[-14%] md:!hidden sm:!hidden xsm:!hidden">
            <img src="{{ asset('/assets2/images/lazy') }}" data-src="{{ asset('/assets2/images/shape/shape_43') }}"
                alt=""
                class="lazy-img shapes shape-four absolute z-[-1] left-[-6%] bottom-[16%] md:!hidden sm:!hidden xsm:!hidden">
        </div> <!-- /.top-footer -->
        <div class="bottom-footer relative z-[2] p-[40px_0_25px] md:p-[20px_0_0] sm:p-[20px_0_0] xsm:p-[20px_0_0]">
            <div class="container">
                <div class="inner-wrapper m-auto">
                    <div class="flex flex-wrap mx-[-12px]">
                        <div
                            class="xl:w-4/12 lg:w-4/12 md:w-4/12 w-full flex-[0_0_auto] px-[12px] max-w-full xl:order-none lg:order-none mb-[15px]">
                            <ul
                                class="flex justify-center xl:justify-start lg:justify-start footer-nav mb-0 pl-0 list-none ">
                                <li><a class=" text-[15px] font-medium text-black mr-[22px] hover:underline md:m-[0_10px] sm:m-[0_10px] xsm:m-[0_10px]"
                                        href="faq.html">Privacy &amp; Terms.</a></li>
                                <li><a class=" text-[15px] font-medium text-black mr-[22px] hover:underline md:m-[0_10px] sm:m-[0_10px] xsm:m-[0_10px]"
                                        href="contact-us.html">Contact Us</a></li>
                            </ul>
                        </div>
                        <div
                            class="xl:w-4/12 lg:w-4/12 md:w-4/12 w-full flex-[0_0_auto] px-[12px] max-w-full xl:order-2 lg:order-2 mb-[15px]">
                            <ul class="flex justify-center xl:justify-end lg:justify-end social-icon mb-0 pl-0 list-none ">
                                <li><a class=" text-[19px] text-[#333333] transition-all duration-[0.3s] ease-[ease-in-out] ml-[19px] hover:text-[color:var(--prime-two)] md:m-[0_10px] sm:m-[0_10px] xsm:m-[0_10px]"
                                        href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class=" text-[19px] text-[#333333] transition-all duration-[0.3s] ease-[ease-in-out] ml-[19px] hover:text-[color:var(--prime-two)] md:m-[0_10px] sm:m-[0_10px] xsm:m-[0_10px]"
                                        href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a class=" text-[19px] text-[#333333] transition-all duration-[0.3s] ease-[ease-in-out] ml-[19px] hover:text-[color:var(--prime-two)] md:m-[0_10px] sm:m-[0_10px] xsm:m-[0_10px]"
                                        href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <div
                            class="xl:w-4/12 lg:w-4/12 md:w-4/12 w-full flex-[0_0_auto] px-[12px] max-w-full xl:order-1 lg:order-1 mb-[15px]">
                            <p class="copyright text-center !m-0 text-[15px]">Copyright @2023 janu inc.</p>
                        </div>
                    </div>
                </div> <!-- /.inner-wrapper -->
            </div>
        </div> <!-- /.bottom-footer -->
    </div> <!-- /.footer-style-two -->


    <button
        class="scroll-top w-[35px] h-[35px] leading-[35px] fixed z-[99] text-center text-white text-[25px] cursor-pointer hidden transition-all duration-[0.3s] ease-[ease-in-out] rounded-[50%] right-[5px] bottom-5 after:absolute after:z-[-1] after:content-[''] after:h-2.5 after:w-[90%] after:opacity-100 after:left-[5%] after:top-full bg-[var(--prime-ten)] after:bg-[radial-gradient(ellipse_at_center,rgba(0,0,0,0.25)_0%,rgba(0,0,0,0)_80%)]">
        <i class="bi bi-arrow-up-short"></i>
    </button>
@endsection
