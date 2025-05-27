@extends('layouts.dashboard')

@section('dashboard-content')
    <div
        class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-5 max-h-137.5 overflow-auto">
        <div
            class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark flex items-center justify-between gap-2 flex-wrap">
            <h2 class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                {{ __('Top-Up Balance in :currency', ['currency' => $currency]) }}
            </h2>
            <a href="{{ route('deposits.create', ['currency' => $currency == 'EUR' ? 'USD' : 'EUR']) }}"
               class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8">
                {{ __('Top-Up with :currency', ['currency' => $currency == 'EUR' ? 'USD' : 'EUR']) }}
            </a>
        </div>

        <section class="">
            <form method="post" action="{{ route('deposits.store') }}">
                @csrf
                <input type="hidden" name="currency" value="{{ $currency }}">

                <div class="mb-25px">
                    <label
                        class="text-contentColor mb-10px block"
                        for="input-amount">
                        {{ __('Amount') }}

                        <span class="text-contentColor text-xs">
                        {{ __('replenishment amount (:amount :currency = 1 VCT)', ['currency' => $currency, 'amount' => $exchangeRatioToART]) }}
                    </span>
                    </label>
                    <input
                        type="text"
                        name="amount"
                        id="input-amount"
                        placeholder="{{ __('Amount (min. 5 VCT)') }}"
                        class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded">
                    @error('amount')
                        <div class="">{{ $message }}</div>
                    @enderror
                </div>

                <div class="text-contentColor dark:text-contentColor-dark flex items-center">
                    <input type="checkbox" id="accept-pp" class="w-18px h-18px mr-2 block box-content">
                    <label for="accept-pp">
                        {!! __('I agree with <a href=":privacyPolicyUrl" target="_blank">privacy policy</a> and <a href=":termsConditionsUrl">terms and conditions</a>.', ['privacyPolicyUrl' => route('pages.show', 'privacy-policy'), 'termsConditionsUrl' => route('pages.show', 'terms-conditions')]) !!}
                    </label>
                </div>

                <div class="mt-25px text-center">
                    <button type="submit" class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px w-full border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark">
                        {{ __('Deposit') }}
                    </button>
                </div>

{{--                <div class="mt-8">--}}
{{--                    <div class="mb-2 flex items-center">--}}
{{--                        <div>--}}
{{--                            <img src="{{ asset('assets/images/Visa_Brandmark_Blue_RGB_2021.png') }}"--}}
{{--                                 style="width: 3rem;">--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <img src="{{ asset('assets/images/ma_symbol_opt_73_2x.png') }}"--}}
{{--                                 style="width: 3rem;">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </form>
        </section>
    </div>

@endsection
