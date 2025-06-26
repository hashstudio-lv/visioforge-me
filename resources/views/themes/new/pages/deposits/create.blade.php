@extends('themes.new.layouts.dashboard.main')

@section('dashboard-title')
    {{ __('Create Deposit') }}
@endsection

@section('dashboard-content')
<div class="fancy-short-banner-three lg:my-[100px] md:my-[100px] sm:my-[100px] xsm:my-[100px]">
    <div class="container">
        <div class="flex flex-wrap mx-[-12px]">
            <div class="xxl:w-7/12 xl:w-8/12 lg:w-8/12 md:w-9/12 w-full flex-[0_0_auto] px-[12px] max-w-full m-auto text-center">
                <div class="title-style-three text-center wow fadeInUp">
                    <h2 class="main-title font-normal text-[64px] leading-[1.15em] tracking-[0px] m-0 font-Recoleta 2xl:text-[58px] lg:text-[48px] md:text-[34px] md:leading-[1.2em] sm:text-[34px] sm:leading-[1.2em] xsm:text-[34px] xsm:leading-[1.2em]">{{ __('Deposit in') }}
                        {{ $currency == 'USD' ? 'USD' : 'EUR' }} <span class="inline-block relative z-[1]"> <span class="mark-bg absolute left-[-5px] -translate-y-2/4 w-[98%] h-[50px] z-[-1] top-2/4 md:h-[34px] sm:h-[34px] xsm:h-[34px]" style="background-color:#C3F0FF;"></span></span></h2>
                </div>
                <a
                    href="{{ route('deposits.create', ['currency' => $currency == 'EUR' ? 'USD' : 'EUR']) }}"
                    class="hover:underline active:opacity-50 text-[24px] 2xl:text-[22px] lg:text-[19px] md:text-[19px] sm:text-[19px] xsm:text-[19px] leading-[1.67em] text-black pt-[30px] pb-[55px] lg:pb-[30px] md:pb-[30px] sm:pb-[30px] xsm:pb-[30px] wow fadeInUp"
                    data-wow-delay="0.1s"
                >
                    {{ __('Change To') }} {{ $currency == 'EUR' ? 'USD' : 'EUR' }}
                </a>
                @if ($errors->any())
                    @dd($errors)
                @endif
                <div class="subscribe-form m-auto wow fadeInUp max-w-[620px]" data-wow-delay="0.2s">
                    <form
                        x-data="{
                            amount: '',
                            isAgree: false,

                            resultMessage: '',

                            get isSubmitAllow() {
                                return this.amount.length > 0 && this.isAgree;
                            },
                        }"
                        class="relative"
                        action="{{ route('deposits.store') }}"
                        method="POST"
                    >
                        @csrf

                        <input type="hidden" name="currency" value="{{ $currency }}">

                        <input
                            x-model="amount"
                            class="w-full h-[70px] xsm:h-[60px] p-[0_180px_0_40px] xsm:p-[0_122px_0_20px] rounded-[35px] border-0 bg-[#F5F5F5] mb-4"
                            type="text"
                            name="amount"
                            value="{{ old('amount') }}"
                            placeholder="{{ __('Amount (min. 5 SAT)') }}"
                        >

                        <div class="flex items-center mb-4 pl-2">
                            <input
                                x-model="isAgree"
                                type="checkbox"
                                id="agree-terms"
                                class="w-5 h-5 mr-3 rounded border-gray-300 text-[var(--prime-two)] focus:ring-[var(--prime-two)]"
                            >
                            <label
                                for="agree-terms"
                                class="text-sm text-gray-600"
                            >
                                {{ __('I agree to') }} <a href="#" class="text-[var(--prime-two)] hover:underline">{{ __('Privacy Policy') }}</a>,
                                <a href="#" class="text-[var(--prime-two)] hover:underline">{{ __('Terms and Conditions') }}</a>
                            </label>
                        </div>

                        <button
                            x-bind:disabled="! isSubmitAllow"
                            type="submit"
                            class="disabled:pointer-events-none disabled:opacity-50 tran3s w-full h-[70px] xsm:h-[60px] font-medium text-white rounded-[35px] bg-[var(--prime-two)] hover:bg-[#090F32]"
                        >
                            {{ __("Deposit") }}
                        </button>

                        <template x-if="resultMessage.length > 0">
                            <div class="mt-2">
                                <p x-text="resultMessage"></p>
                            </div>
                        </template>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
