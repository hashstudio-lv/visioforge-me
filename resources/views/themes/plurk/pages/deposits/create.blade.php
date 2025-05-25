@extends('themes.plurk.layouts.app')

@section('content')
    <div class="-mt-[82px] flex-grow overflow-x-hidden lg:-mt-[106px]">

        @include('themes.plurk.partials.dashboard.hero', ['title' => __('Adding balance')])

        <div class="py-14 md:py-[100px]">
            <div class="container">
                <div class="flex flex-col items-center justify-between sm:flex-row heading">
                    <div class="text-center">
                        <h4>{{ __('Deposit in :currency', ['currency' => $currency]) }}</h4>
                    </div>
                    <div>
                        <a href="{{ route('deposits.create', ['currency' => $currency == 'EUR' ? 'USD' : 'EUR']) }}"
                           class="btn text-white">
                            {{ __('Change to :currency', ['currency' => $currency == 'EUR' ? 'USD' : 'EUR']) }}
                        </a>
                    </div>
                </div>

                <section class="">
                    <form method="post" action="{{ route('deposits.store') }}"
                          class="rounded-3xl bg-white px-4 py-12 dark:bg-[#101626] lg:px-8">
                        <h5>{{ __('Replenishment amount (:amount :currency = 1 VCT)', ['currency' => $currency, 'amount' => $exchangeRatioToART]) }}</h5>
                        @csrf
                        <input type="hidden" name="currency" value="{{ $currency }}">
                        <div class="relative mt-10">
                            <input
                                type="text"
                                name="amount"
                                :value="old('amount')"
                                id="inp-amount"
                                placeholder="{{ __('Amount (min. 5 VCT)') }}"
                                class="w-full rounded-2xl border-2 border-gray/20 bg-transparent p-4 font-bold outline-none transition focus:border-secondary ltr:pr-12 rtl:pl-12"/>
                            <label for="inp-amount"
                                   class="absolute -top-3 bg-white px-2 font-bold ltr:left-6 rtl:right-6 dark:bg-[#101626] dark:text-white">
                                {{ __('Amount') }}
                            </label>
                        </div>

                        <div class="form-check mt-4">
                            <input class="form-check-input border" type="checkbox" value=""
                                   id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                {!! __('I agree with <a href=":privacyPolicyUrl" target="_blank">privacy policy</a> and <a href=":termsConditionsUrl">terms and conditions</a>.', ['privacyPolicyUrl' => route('pages.show', 'privacy-policy'), 'termsConditionsUrl' => route('pages.show', 'terms-conditions')]) !!}
                            </label>
                        </div>

                        <div class="mt-8 flex justify-between">
                            <button type="submit"
                                    class="btn bg-gray px-12 capitalize text-white dark:bg-white dark:text-black dark:hover:bg-secondary">
                                {{ __('Deposit') }}
                            </button>

                        </div>
                        <div class="mt-8">
                            <div class="mb-2 flex items-center">
                                <div>
                                    <img src="{{ asset('assets/images/Visa_Brandmark_Blue_RGB_2021.png') }}"
                                         style="width: 3rem;">
                                </div>
                                <div>
                                    <img src="{{ asset('assets/images/ma_symbol_opt_73_2x.png') }}"
                                         style="width: 3rem;">
                                </div>
                            </div>
                            <div>
                                {!! __('&copy; Copyright :year - :name', ['year' => now()->year, 'name' => env('COMPANY_ADDRESS')]) !!}
                            </div>
                        </div>
                    </form>
                </section>

            </div>
        </div>
    </div>
@endsection