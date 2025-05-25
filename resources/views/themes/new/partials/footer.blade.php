<div
    class="footer-style-two theme-basic-footer p-[0_10%] 2xl:p-[0_4%] lg:p-[0_12px] md:p-[0_12px] sm:p-[0_12px] xsm:p-[0_12px] mt-[150px] ">
    <div
        class="top-footer relative border border-neutral-200 z-[1] p-[100px_12px_60px] md:p-[70px_12px_0] sm:p-[70px_12px_0] xsm:p-[70px_12px_0] rounded-[20px] border-solid">
        <div class="container">
            <div class="inner-wrapper m-auto max-w-[1170px]">
                <div class="flex flex-wrap mx-[-12px]">
                    <div class="xl:w-3/12 lg:w-3/12 w-full flex-[0_0_auto] px-[12px] max-w-full footer-intro mb-10 ">
                        <div class="logo">
                            <a href="{{ route('home') }}" class="font-bold font-Recoleta text-[35px]">
                                SHORTSY.ART
                        </div>
                        <a href="mailto:{{ env('COMPANY_EMAIL') }}"
                           class="email tran3s text-[18px] lg:text-[16px] md:text-[16px] sm:text-[16px] xsm:text-[16px] leading-[1.67em] mt-[35px] mb-[15px] md:mt-[10px] sm:mt-[10px] xsm:mt-[10px] hover:underline hover:text-black">
                            {{ env('COMPANY_EMAIL') }}
                        </a>
                        <br>
                        <p class="mb-0">
                            {{ env('COMPANY_NAME') }}
                        </p>
                        <p class="mb-0">
                            {{ env('COMPANY_ADDRESS') }}
                        </p>
                        <br>
                        <a href="tel:{{ env('COMPANY_PHONE') }}"
                           class="mobile tran3s text-[20px] lg:text-[18px] md:text-[18px] sm:text-[18px] xsm:text-[18px] font-medium text-[color:var(--prime-two)] hover:underline">
                            {{ env('COMPANY_PHONE') }}
                        </a>
                    </div>
                    <div
                        class="xl:w-3/12 lg:w-3/12 md:w-4/12 sm:w-4/12 w-full flex-[0_0_auto] px-[12px] max-w-full !ml-auto mb-[30px]">
                        <h5 class="footer-title text-black font-medium text-[24px] mb-5 md:text-[20px] md:mb-[10px] sm:text-[20px] sm:mb-[10px] xsm:text-[20px] xsm:mb-[10px]">
                            Links</h5>
                        <ul class="footer-nav-link mb-0 pl-0 list-none ">
                            @foreach([
                                ['url' => route('home'), 'title' => __('Home')],
                                ['url' => route('products.index'), 'title' => __('Creatives')],
                                ['url' => route('pages.image-generation'), 'title' => __('Image Generation')],
                                ['url' => route('pages.image-editing'), 'title' => __('Image Editing')],
                                ['url' => route('pages.show', 'contact-us'), 'title' => __('Contact Us')],
                            ] as $item)
                                <li>
                                    <a class="text-[17px] leading-10 transition-all duration-[0.3s] ease-[ease-in-out] md:text-[16px] md:leading-[38px] sm:text-[16px] sm:leading-[38px] xsm:text-[16px] xsm:leading-[38px] hover:text-[color:var(--prime-two)] hover:underline capitalize"
                                       href="{{ $item['url'] }}"
                                    >
                                        {{ $item['title'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div
                        class="xl:w-3/12 lg:w-3/12 md:w-4/12 sm:w-4/12 w-full flex-[0_0_auto] px-[12px] max-w-full mb-[30px]">
                        <h5 class="footer-title text-black font-medium text-[24px] mb-5 md:text-[20px] md:mb-[10px] sm:text-[20px] sm:mb-[10px] xsm:text-[20px] xsm:mb-[10px]">
                            {{ __('Services') }}
                        </h5>
                        <ul class="footer-nav-link mb-0 pl-0 list-none ">
                            @foreach([
                                [
                                    'title' => __('Background Remover'),
                                    'url' => route('services.show', \App\Enums\Service::BACKGROUND_REMOVER->value),
                                ],
                                [
                                    'title' => __('Image Upscale'),
                                    'url' => route('services.show', \App\Enums\Service::IMAGE_UPSCALE->value),
                                ],
                                [
                                    'title' => __('Text to Image'),
                                    'url' => route('services.show', \App\Enums\Service::TEXT_TO_IMAGE->value),
                                ],
                                [
                                    'title' => __('Text to PNG'),
                                    'url' => route('services.show', \App\Enums\Service::TEXT_TO_PNG->value),
                                ],
                                [
                                    'title' => __('AI Background'),
                                    'url' => route('services.show', \App\Enums\Service::AI_BACKGROUND->value),
                                ],
                            ] as $service)
                                <li>
                                    <a class="text-[17px] leading-10 transition-all duration-[0.3s] ease-[ease-in-out] md:text-[16px] md:leading-[38px] sm:text-[16px] sm:leading-[38px] xsm:text-[16px] xsm:leading-[38px] hover:text-[color:var(--prime-two)] hover:underline capitalize"
                                       href="{{ $service['url'] }}">
                                        {{ $service['title'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div
                        class="xl:w-2/12 lg:w-3/12 md:w-4/12 sm:w-4/12 w-full flex-[0_0_auto] px-[12px] max-w-full mb-[30px]">
                        <h5 class="footer-title text-black font-medium text-[24px] mb-5 md:text-[20px] md:mb-[10px] sm:text-[20px] sm:mb-[10px] xsm:text-[20px] xsm:mb-[10px]">
                            {{ __('Languages') }}
                        </h5>
                        <ul class="footer-nav-link mb-0 pl-0 list-none ">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    <a class="text-[17px] leading-10 transition-all duration-[0.3s] ease-[ease-in-out] md:text-[16px] md:leading-[38px] sm:text-[16px] sm:leading-[38px] xsm:text-[16px] xsm:leading-[38px] hover:text-[color:var(--prime-two)] hover:underline capitalize"
                                       href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['native'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="shapes shape-one rounded-[50%] absolute z-[-1] w-60 h-60 opacity-70 top-[-120px] left-[-120px] bg-[#FFBF44] md:w-[100px] md:h-[100px] md:top-[-50px] md:-left-3 sm:w-[100px] sm:h-[100px] sm:top-[-50px] sm:-left-3 xsm:w-[100px] xsm:h-[100px] xsm:top-[-50px] xsm:-left-3"></div>
        <div
            class="shapes shape-two rounded-[50%] absolute z-[-1] w-[136px] h-[136px] opacity-[0.65] right-[-70px] bottom-[-55px] bg-[#15B9FF] md:w-[50px] md:h-[50px] md:-right-3 md:bottom-0 sm:w-[50px] sm:h-[50px] sm:-right-3 sm:bottom-0 xsm:w-[50px] xsm:h-[50px] xsm:-right-3 xsm:bottom-0"></div>
        <img src="{{ asset('/assets2/images/lazy.svg') }}" data-src="{{ asset('/assets2/images/shape/shape_42.svg') }}"
             alt=""
             class="lazy-img shapes shape-three absolute z-[-1] right-[-4%] top-[-14%] md:!hidden sm:!hidden xsm:!hidden">
        <img src="{{ asset('/assets2/images/lazy.svg') }}" data-src="{{ asset('/assets2/images/shape/shape_43.svg') }}"
             alt=""
             class="lazy-img shapes shape-four absolute z-[-1] left-[-6%] bottom-[16%] md:!hidden sm:!hidden xsm:!hidden">
    </div> <!-- /.top-footer -->
    <div class="bottom-footer relative z-[2] p-[40px_0_25px] md:p-[20px_0_0] sm:p-[20px_0_0] xsm:p-[20px_0_0]">
        <div class="container">
            <div class="inner-wrapper m-auto">
                <div class="flex flex-wrap mx-[-12px]">
                    <div
                        class="xl:w-6/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] px-[12px] max-w-full xl:order-none lg:order-none mb-[15px]">
                        <ul class="flex justify-center xl:justify-start lg:justify-start footer-nav mb-0 pl-0 list-none ">
                            @foreach([
                                ['url' => route('pages.show', 'terms-and-conditions'), 'title' => __('Terms & Conditions')],
                                ['url' => route('pages.show', 'privacy-policy'), 'title' => __('Privacy Policy')],
                                ['url' => route('pages.show', 'cookie-policy'), 'title' => __('Cookie Policy')],
                            ] as $item)
                                <li>
                                    <a class=" text-[15px] font-medium text-black mr-[22px] hover:underline md:m-[0_10px] sm:m-[0_10px] xsm:m-[0_10px]"
                                       href="{{ $item['url'] }}">
                                        {{ $item['title'] }}.
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div
                        class="xl:w-6/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] px-[12px] max-w-full xl:order-2 lg:order-2 mb-[15px]">
                        <ul class="flex justify-center xl:justify-end lg:justify-end social-icon mb-0 pl-0 list-none items-center">
                            @if(env('SOCIAL_NETWORK_FACEBOOK'))
                                <li>
                                    <a class="w-3 text-[color:var(--prime-two)] text-[19px] text-[#333333] transition-all duration-[0.3s] ease-[ease-in-out] ml-[19px] hover:text-[color:var(--prime-two)] md:m-[0_10px] sm:m-[0_10px] xsm:m-[0_10px]"
                                       href="{{ env('SOCIAL_NETWORK_FACEBOOK') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"/></svg>
                                    </a>
                                </li>
                            @endif
                            @if(env('SOCIAL_NETWORK_INSTAGRAM'))
                                <li>
                                    <a class="mt-[2px] w-5 text-[19px] text-[#333333] transition-all duration-[0.3s] ease-[ease-in-out] ml-[19px] hover:text-[color:var(--prime-two)] md:m-[0_10px] sm:m-[0_10px] xsm:m-[0_10px]"
                                       href="{{ env('SOCIAL_NETWORK_INSTAGRAM') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>                                    </a>
                                    </a>
                                </li>
                            @endif
                            @if(env('SOCIAL_NETWORK_X'))
                                <li>
                                    <a class="w-5 text-[19px] text-[#333333] transition-all duration-[0.3s] ease-[ease-in-out] ml-[19px] hover:text-[color:var(--prime-two)] md:m-[0_10px] sm:m-[0_10px] xsm:m-[0_10px]"
                                       href="{{ env('SOCIAL_NETWORK_X') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>
                                    </a>
                                </li>
                            @endif
                            @if(env('SOCIAL_NETWORK_INSTAGRAM'))
                                <li>
                                    <a class="w-5 text-[19px] text-[#333333] transition-all duration-[0.3s] ease-[ease-in-out] ml-[19px] hover:text-[color:var(--prime-two)] md:m-[0_10px] sm:m-[0_10px] xsm:m-[0_10px]"
                                       href="{{ env('SOCIAL_NETWORK_INSTAGRAM') }}">
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div> <!-- /.inner-wrapper -->

            <div class="inner-wrapper m-auto text-[15px] flex justify-between">
                <div>
                {{ __('Copyright, :year @', ['year' => now()->year]) }}
                {!! env('COMPANY_NAME') . ' ' . env('COMPANY_ADDRESS') !!}
                </div>
                <div class="mb-2 flex items-center space-x-4 items-center">
                    <div>
                        <img src="{{ asset('assets/images/Visa_Brandmark_Blue_RGB_2021.png') }}"
                             style="width: 3rem;">
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/ma_symbol_opt_73_2x.png') }}"
                             style="width: 3rem;">
                    </div>
                </div>
            </div> <!-- /.inner-wrapper -->
        </div>
    </div> <!-- /.bottom-footer -->
</div> <!-- /.footer-style-two -->
