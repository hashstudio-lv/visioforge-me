@extends('themes.new.layouts.dashboard.main')

@section('dashboard-title')
    {{ $service->name() }}
@endsection

@section('dashboard-content')
    @if($service == \App\Enums\Service::TEXT_TO_PNG)
        @livewire('imagine-text-to-png')
    @elseif($service == \App\Enums\Service::TEXT_TO_IMAGE)
        @livewire('imagine-text-to-image')
    @elseif($service == \App\Enums\Service::BACKGROUND_REMOVER)
        @livewire('background-remover')
    @elseif($service == \App\Enums\Service::IMAGE_UPSCALE)
        @livewire('image-upscale')
    @elseif($service == \App\Enums\Service::AI_BACKGROUND)
        @livewire('imagine-ai-background')
    @endif
@endsection


{{--@extends('themes.new.layouts.app')--}}

{{--@section('content')--}}
{{--    <div class="fancy-feature-fiftyOne relative mt-[200px]">--}}
{{--        <div class="container">--}}
{{--            <div class="flex flex-wrap mx-[-12px]">--}}
{{--                <div class="w-full flex-[0_0_auto] px-[12px] max-w-full wow fadeInLeft">--}}
{{--                    <div class="title-style-five mb-[65px] lg:mb-10 md:mb-10 sm:mb-10 xsm:mb-10">--}}
{{--                        <div class="sc-title-two italic relative inline-block text-[17px] text-[color:var(--prime-ten)] mb-5 pl-10 before:content-[''] before:absolute before:w-6 before:h-px before:left-0 before:top-3.5 before:bg-[var(--prime-ten)]">--}}
{{--                            {{ __('Services') }}--}}
{{--                        </div>--}}
{{--                        <h2 class="main-title font-medium text-black text-[72px] leading-[1.25em] 2xl:text-[58px] lg:text-[50px] md:text-[35px] sm:text-[35px] xsm:text-[35px]">--}}
{{--                            {{ $service->name() }}--}}
{{--                        </h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <img src="{{ asset('assets2/images/lazy.svg') }}" data-src="images/shape/shape_172.svg" alt=""--}}
{{--             class="lazy-img shapes shape-two absolute z-[-1] right-[17%] 2xl:right-[8%] lg:right-[6%] md:!hidden sm:!hidden xsm:!hidden top-[4%]">--}}
{{--        <img src="{{ asset('assets2/images/shape/shape_175.svg') }}" alt=""--}}
{{--             class="lazy-img shapes shape-three absolute z-[-1] bottom-[-30%] left-[5%] md:!hidden sm:!hidden xsm:!hidden"--}}
{{--             style="">--}}
{{--    </div>--}}

{{--    <div--}}
{{--        class="service-details relative mt-[100px]  mb-[170px] md:mt-[50px] sm:mt-[50px] xsm:mt-[50px] lg:mb-[120px] md:mb-[120px] sm:mb-[120px] xsm:mb-[120px] ">--}}
{{--        <div class="container">--}}
{{--            <div class="flex flex-wrap mx-[-12px]">--}}
{{--                <div--}}
{{--                    class="xl:w-9/12 lg:w-8/12 w-full flex-[0_0_auto] px-[12px] max-w-full first-line:lg:w-8/12 xl:order-1 lg:order-1">--}}
{{--                    <div class="service-details-meta xl:!pl-[3rem] lg:!pl-[3rem] ">--}}
{{--                        <div class="contact-section-two text-left border-2 border-solid border-black lg:mt-[60px] md:mt-[60px] sm:mt-[60px] xsm:mt-[60px]  shadow-[0px_35px_70px_rgba(0,104,31,0.05)] p-[60px_80px_85px] lg:p-[40px_20px_50px] md:p-[40px_20px_50px] sm:p-[40px_20px_50px] xsm:p-[40px_20px_50px] rounded-[20px] bg-white">--}}
{{--                            <div class="flex flex-wrap mx-[-12px]">--}}
{{--                                <div class="w-full flex-[0_0_auto] px-[12px] max-w-full">--}}
{{--                                    <div class="form-style-three md:mb-[60px] sm:mb-[60px] xsm:mb-[60px]  wow fadeInLeft">--}}
{{--                                        <form action="inc/contact.php" id="contact-form"  data-toggle="validator">--}}
{{--                                            <div class="messages"></div>--}}
{{--                                            <div class="flex flex-wrap mx-[-12px] controls">--}}
{{--                                                <div class="w-full  flex-[0_0_auto] px-[12px] max-w-full">--}}
{{--                                                    <div class="input-group-meta form-group mb-[35px] ">--}}
{{--                                                        <label class="block text-[14px] text-[rgba(0,0,0,0.5)] mb-[7px]"  >Name*</label>--}}
{{--                                                        <input class=" w-full h-[60px] text-black text-[17px] pl-5 pr-[5px] py-0 rounded-lg border-2 border-solid border-black placeholder:text-black" type="text" placeholder="Rashed Kabir" name="name" required="required" data-error="Name is required.">--}}
{{--                                                        <div class="help-block with-errors"></div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="w-full  flex-[0_0_auto] px-[12px] max-w-full">--}}
{{--                                                    <div class="input-group-meta form-group mb-10 ">--}}
{{--                                                        <label class="block text-[14px] text-[rgba(0,0,0,0.5)] mb-[7px]"  >Email*</label>--}}
{{--                                                        <input class=" w-full h-[60px] text-black text-[17px] pl-5 pr-[5px] py-0 rounded-lg border-2 border-solid border-black placeholder:text-black" type="email" placeholder="demo@domain.com" name="email" required="required" data-error="Valid email is required.">--}}
{{--                                                        <div class="help-block with-errors"></div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="w-full  flex-[0_0_auto] px-[12px] max-w-full">--}}
{{--                                                    <div class="input-group-meta form-group mb-[30px]">--}}
{{--                                                        <textarea class=" w-full max-w-full h-[165px] text-black text-[17px] pl-5 pr-[5px] py-[15px] rounded-lg border-2 border-solid border-black placeholder:text-black" placeholder="Your message*" name="message" required="required" data-error="Please,leave us a message."></textarea>--}}
{{--                                                        <div class="help-block with-errors"></div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="w-full  flex-[0_0_auto] px-[12px] max-w-full"><button class="btn-one font-medium w-full uppercase text-[14px] block text-white leading-[50px] relative transition-all duration-[0.3s] ease-[ease-in-out] px-8 py-0 rounded-[5px] bg-black hover:bg-[var(--prime-one)] hover:text-white md:leading-[48px] md:text-[15px] md:p-[0_25px] sm:leading-[48px] sm:text-[15px] sm:p-[0_25px] xsm:leading-[48px] xsm:text-[15px] xsm:p-[0_25px]">Send Message</button></div>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}
{{--                                    </div> <!-- /.form-style-three -->--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div--}}
{{--                    class="xl:w-3/12 lg:w-4/12 md:w-8/12 w-full flex-[0_0_auto] px-[12px] max-w-full xl:order-none lg:order-none">--}}
{{--                    <div class="service-sidebar xxl:!pr-[3rem]  md:mt-[60px] sm:mt-[60px] xsm:mt-[60px]">--}}
{{--                        @include('themes.new.partials.dashboard.nav-bar')--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}

