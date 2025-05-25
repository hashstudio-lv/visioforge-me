@extends('themes.plurk.layouts.app')

@section('content')
    <div class="-mt-[82px] flex-grow overflow-x-hidden lg:-mt-[106px]">
        <section class="relative bg-black py-14 lg:py-[100px] lg:pt-[130px]">
            <div class="container">
                <div class="relative z-10 lg:flex flex justify-center">
                    <form method="POST" action="{{ route('register') }}"
                          class="rounded-3xl bg-white px-4 py-12 dark:bg-[#101626] lg:w-2/3 lg:px-8">
                        @csrf

                        <div class="heading">
                            <h6>Register</h6>
                            <h4 class="leading-normal lg:!leading-[50px]">Ready to Get Started?</h4>
                        </div>

                        <div class="relative mb-10">
                            <x-text-input id="input-email"
                                          class="w-full rounded-2xl border-2 border-gray/20 bg-transparent p-4 font-bold outline-none transition focus:border-secondary ltr:pr-12 rtl:pl-12"
                                          type="text" name="email"
                                          :value="old('email')" required autofocus
                                          autocomplete="username"/>

                            <label for="input-email"
                                   class="absolute -top-3 bg-white px-2 font-bold ltr:left-6 rtl:right-6 dark:bg-[#101626] dark:text-white">
                                {{ __('Email') }}
                            </label>

                            <x-input-error :messages="$errors->get('email')" class="mt-2"/>

                            <svg
                                width="22"
                                height="21"
                                viewBox="0 0 22 21"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                class="absolute top-1/2 -translate-y-1/2 ltr:right-4 rtl:left-4 dark:text-white"
                            >
                                <path
                                    d="M1 8.00732V7.00732C1 4.2459 3.23858 2.00732 6 2.00732H16C18.7614 2.00732 21 4.2459 21 7.00732V13.0073C21 15.7687 18.7614 18.0073 16 18.0073H6C3.23858 18.0073 1 15.7687 1 13.0073V12.0073"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linecap="round"
                                />
                                <path
                                    d="M5 7.00732L9.8 10.6073C10.5111 11.1407 11.4889 11.1407 12.2 10.6073L17 7.00732"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </div>

                        <div class="relative mb-10">
                            <x-text-input id="input-password"
                                          class="w-full rounded-2xl border-2 border-gray/20 bg-transparent p-4 font-bold outline-none transition focus:border-secondary ltr:pr-12 rtl:pl-12"
                                          type="password" name="password"
                                          :value="old('password')" required autofocus
                                          autocomplete="username"/>

                            <label for="input-password"
                                   class="absolute -top-3 bg-white px-2 font-bold ltr:left-6 rtl:right-6 dark:bg-[#101626] dark:text-white">
                                {{ __('Password') }}
                            </label>

                            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                        </div>

                        <div class="relative">
                            <x-text-input id="input-password_confirmation"
                                          class="w-full rounded-2xl border-2 border-gray/20 bg-transparent p-4 font-bold outline-none transition focus:border-secondary ltr:pr-12 rtl:pl-12"
                                          type="password" name="password_confirmation"
                                          :value="old('password_confirmation')" required autofocus
                                          autocomplete="username"/>

                            <label for="input-password_confirmation"
                                   class="absolute -top-3 bg-white px-2 font-bold ltr:left-6 rtl:right-6 dark:bg-[#101626] dark:text-white">
                                {{ __('Confirm Password') }}
                            </label>

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
                        </div>

                        <div class="mt-10 flex justify-between items-center ltr:lg:text-right rtl:lg:text-left">
                            <div class="field-set">
                                <input type='submit' id='send_message' value='{{ __('Register') }}'
                                       class="btn btn-main btn-fullwidth color-2">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
