@extends('themes.plurk.layouts.app')

@section('content')
    <div class="-mt-[82px] flex-grow overflow-x-hidden lg:-mt-[106px]">
        <section class="relative bg-black py-14 lg:py-[100px] lg:pt-[130px]">
            <div class="container">
                <div class="relative z-10 lg:flex flex justify-center">
                    <form method="POST" action="{{ route('login') }}" class="rounded-3xl bg-white px-4 py-12 dark:bg-[#101626] lg:w-2/3 lg:px-8">
                        @csrf

                        <div class="heading">
                            <h6>{{ __('Login') }}</h6>
                            <h4 class="leading-normal lg:!leading-[50px]">{{ __('Welcome back — ready to create?') }}</h4>
                        </div>

                        <div class="grid gap-10">
                            <div class="relative">
                                <x-text-input id="input-email" class="w-full rounded-2xl border-2 border-gray/20 bg-transparent p-4 font-bold outline-none transition focus:border-secondary ltr:pr-12 rtl:pl-12" type="text" name="email"
                                              :value="old('email')" required autofocus
                                              autocomplete="username"/>

                                <label for="input-email" class="absolute -top-3 bg-white px-2 font-bold ltr:left-6 rtl:right-6 dark:bg-[#101626] dark:text-white">
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
                            <div class="relative">
                                <x-text-input id="password" class="w-full rounded-2xl border-2 border-gray/20 bg-transparent p-4 font-bold outline-none transition focus:border-secondary ltr:pr-12 rtl:pl-12"
                                              type="password"
                                              name="password"
                                              placeholder=""
                                              required autocomplete="current-password"/>
                                <label for="" class="absolute -top-3 bg-white px-2 font-bold ltr:left-6 rtl:right-6 dark:bg-[#101626] dark:text-white">
                                    Password
                                </label>

                                <svg
                                    width="22"
                                    height="22"
                                    viewBox="0 0 22 22"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="absolute top-1/2 -translate-y-1/2 ltr:right-4 rtl:left-4 dark:text-white"
                                >
                                    <path
                                        d="M6.45241 1.40806C5.45292 0.783702 4.14202 0.887138 3.2983 1.73086L1.86856 3.1606C-0.302899 5.33207 1.73747 10.8931 6.42586 15.5815C11.1142 20.2699 16.6753 22.3102 18.8467 20.1388L20.2765 18.709C21.2635 17.722 21.2374 16.0956 20.2182 15.0764L18.0036 12.8619C16.9844 11.8426 15.358 11.8165 14.371 12.8036L14.0639 13.1107C13.531 13.6436 12.6713 13.6957 12.0713 13.2005C11.4925 12.7229 10.9159 12.208 10.3576 11.6497C9.79933 11.0914 9.28441 10.5149 8.80678 9.93607C8.31161 9.33601 8.36374 8.47631 8.89666 7.9434L9.20375 7.63631C9.98187 6.85819 10.1303 5.68271 9.65898 4.72062"
                                        stroke="currentColor"
                                        stroke-width="1.8"
                                        stroke-linecap="round"
                                    />
                                </svg>
                            </div>

                            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                        </div>
                        <div class="mt-10 flex justify-between items-center ltr:lg:text-right rtl:lg:text-left">
                            @if (Route::has('password.request'))
                                <div class="field-set pt-3">
                                    <a class=""
                                       href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                </div>
                            @endif

                            <button type="submit" class="btn bg-gray px-12 capitalize text-white dark:bg-white dark:text-black dark:hover:bg-secondary">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
