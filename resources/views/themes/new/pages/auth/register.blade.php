@extends('themes.new.layouts.app')

@section('content')
    <div
        class="user-data-section flex items-center justify-center flex-col relative min-h-screen z-[1] p-[150px_12px_0] bg-[#F6F9FB] lg:p-[120px_12px_0]  md:p-[120px_12px_0] sm:p-[120px_12px_0]  xsm:p-[120px_12px_0] ">
        <div
            class="form-wrapper relative m-auto w-[700px] shadow-[0px_15px_30px_rgba(0,50,108,0.03)] pt-[50px] pb-[60px] px-[70px] rounded-[10px] before:content-[url({{ asset('/assets2/images/shape/shape\_177.svg') }})] before:absolute before:right-[-60px] before:top-[-60px] bg-white sm:w-full xsm:w-full xsm:p-[40px_20px]">
            <div class="text-center">
                <h2 class=" text-black  mb-[30px] lg:mb-[10px] md:mb-[10px] sm:mb-[10px] xsm:mb-[10px] 2xl:text-[54px]">
                    {{ __('Registration') }}
                </h2>
                <p class="text-[20px] lg:text-[18px] md:text-[18px] sm:text-[18px] xsm:text-[18px]  leading-[1.67em] lg:text-[18px] md:text-[18px] sm:text-[18px] xsm:text-[18px] text-black">
                    {{ __('Have an account?') }} <a href="{{ route('login') }}" class="underline hover:opacity-40">{{ __('Login Here') }}</a>
                </p>
            </div>

            <form
                method="POST"
                action="{{ route('register') }}"
                class="user-data-form mt-10 lg:mt-[30px] md:mt-[30px] sm:mt-[30px] xsm:mt-[30px]"
            >
                @csrf

                <div class="flex flex-wrap mx-[-12px]">
                    <div class="w-full flex-[0_0_auto] px-[12px] max-w-full">
                        <div class="input-group-meta mb-[25px] relative">
                            <label for="email" class="text-[14px] font-normal text-[rgba(0,0,0,0.5)] block mb-1.5">{{ __('Email') }}</label>
                            <input
                                value="{{ old('email', request()->input('email')) }}"
                                id="email"
                                name="email"
                                type="email"
                                placeholder="your@email.com"
                                class="w-full h-[60px] text-[17px] text-black pl-5 pr-[52px] py-0 rounded-lg border-2 border-solid border-black bg-transparent placeholder:text-gray-500"
                            >
                            @error('email')
                                <div class="text-red-600 pt-[10px]">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full flex-[0_0_auto] px-[12px] max-w-full">
                        <div class="input-group-meta mb-[25px] relative">
                            <label for="password" class="text-[14px] font-normal text-[rgba(0,0,0,0.5)] block mb-1.5">{{ __('Password') }}</label>
                            <input
                                id="password"
                                name="password"
                                type="password"
                                placeholder="{{ __('Enter Password') }}"
                                class="pass_log_id w-full h-[60px] text-[17px] text-black pl-5 pr-[52px] py-0 rounded-lg border-2 border-solid border-black bg-transparent placeholder:text-gray-500"
                            >
                            @error('password')
                                <div class="text-red-600 pt-[10px]">{{ $message }}</div>
                            @enderror
                            <span
                                class="placeholder_icon absolute h-[60px] w-[50px] text-center z-[1] text-[rgba(0,0,0,0.45)] text-[17px] right-0 top-[30px] bottom-0"><span
                                class="passVicon w-full h-full cursor-pointer block relative before:content-[''] before:w-0.5 before:h-[26px] before:absolute before:rotate-45 before:z-[5] before:transition-all before:duration-[0.2s] before:ease-[ease-in-out] before:left-6 before:top-[17px] before:bg-black"><img
                                class=" relative -translate-y-2/4 mx-auto my-0 top-2/4"
                                src="{{ asset('/assets2/images/icon/icon_151.svg') }}" alt="">
                            </span>
                        </span>
                        </div>
                    </div>
                    <div class="w-full flex-[0_0_auto] px-[12px] max-w-full">
                        <div class="input-group-meta mb-[25px] relative">
                            <label for="password_confirmation" class=" text-[14px] font-normal text-[rgba(0,0,0,0.5)] block mb-1.5">
                                {{ __('Confirm Password') }}
                            </label>
                            <input
                                id="password_confirmation"
                                name="password_confirmation"
                                type="password"
                                placeholder="{{ __('Enter Password') }}"
                                class="pass_log_id w-full h-[60px] text-[17px] text-black pl-5 pr-[52px] py-0 rounded-lg border-2 border-solid border-black bg-transparent placeholder:text-gray-500"
                            >
                            @error('password')
                                <div class="text-red-600 pt-[10px]">{{ $message }}</div>
                            @enderror
                            <span
                                class="placeholder_icon absolute h-[60px] w-[50px] text-center z-[1] text-[rgba(0,0,0,0.45)] text-[17px] right-0 top-[30px] bottom-0"><span
                                    class="passVicon w-full h-full cursor-pointer block relative before:content-[''] before:w-0.5 before:h-[26px] before:absolute before:rotate-45 before:z-[5] before:transition-all before:duration-[0.2s] before:ease-[ease-in-out] before:left-6 before:top-[17px] before:bg-black"><img
                                        class=" relative -translate-y-2/4 mx-auto my-0 top-2/4"
                                        src="{{ asset('/assets2/images/icon/icon_151.svg') }}" alt=""></span></span>
                        </div>
                    </div>
                    <div class="w-full flex-[0_0_auto] px-[12px] max-w-full">
                        <button
                            class="btn-twentyTwo w-full font-medium tran3s uppercase mt-[30px] leading-[55px] text-white tracking-[-0.2px] px-[42px] py-0 rounded-[7px] bg-[var(--prime-ten)] hover:bg-black lg:p-[0_32px] lg:leading-[50px] md:p-[0_32px] md:leading-[50px] sm:p-[0_35px] sm:leading-[50px] xsm:p-[0_35px] xsm:leading-[50px]">
                            {{ __('Sign Up') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <img
            src="{{ asset('/assets2/images/lazy.svg') }}"
            data-src="{{ asset('/assets2/images/assets/ils_11.png') }}"
            alt=""
            class="lazy-img illustration-one wow fadeInRight absolute w-[25.44%] z-[-1] opacity-30 right-0 bottom-0"
        >
        <img
            src="{{ asset('/assets2/images/lazy.svg') }}"
            data-src="{{ asset('/assets2/images/assets/ils_12.png') }}"
            alt=""
            class="lazy-img illustration-two wow fadeInLeft absolute w-[28.05%] z-[-1] opacity-30 left-0 bottom-0"
        >
    </div>
@endsection
