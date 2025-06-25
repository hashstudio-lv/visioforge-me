@extends('layouts.dashboard')

@push('custom-styles')
    <style>
        .wrapper {
            display: flex;
            justify-content: center;
        }

        .card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            width: 100%;
            max-width: 480px;
            overflow: hidden;
        }

        .card-header {
            background: linear-gradient(90deg, #4361ee 0%, #3a0ca3 100%);
            color: white;
            padding: 24px;
        }

        .card-title {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .card-subtitle {
            font-size: 15px;
            opacity: 0.9;
            font-weight: 400;
        }

        .card-body {
            padding: 28px;
        }

        .form-section {
            margin-bottom: 28px;
        }

        .form-label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            color: #525252;
            margin-bottom: 10px;
        }

        .currency-select {
            width: 100%;
            padding: 14px 16px;
            border: 1px solid #e0e0e0;
            border-radius: 12px;
            font-size: 15px;
            background-color: #f8f9fa;
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 12px center;
            background-size: 18px;
        }

        .amount-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
            margin-bottom: 12px;
        }

        .amount-option {
            background: #f8f9fa;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 14px;
            text-align: center;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
        }

        .amount-option:hover {
            background: #e9ecef;
        }

        .amount-option.active {
            background: #4361ee;
            color: white;
            border-color: #4361ee;
        }

        .custom-amount {
            width: 100%;
            padding: 14px 16px;
            border: 1px solid #e0e0e0;
            border-radius: 12px;
            font-size: 15px;
            background-color: #f8f9fa;
        }

        .terms-check {
            display: flex;
            align-items: center;
            margin: 24px 0;
        }

        .terms-check a {
            color: rgb(95 45 237 / var(--tw-bg-opacity));
        }

        .terms-check a:hover {
            text-decoration: underline;
        }

        .terms-check input {
            margin-right: 12px;
            accent-color: #4361ee;
            width: 18px;
            height: 18px;
        }

        .terms-check label {
            font-size: 14px;
            color: #525252;
        }

        .primary-btn {
            width: 100%;
            padding: 16px;
            background: linear-gradient(90deg, #4361ee 0%, #3a0ca3 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
        }

        .primary-btn:disabled {
            opacity: 0.7;
            pointer-events: none;
        }

        .primary-btn:hover {
            opacity: 0.9;
            transform: translateY(-1px);
        }

        .divider {
            background: #e0e0e0;
            margin-top: 24px;
            height: 1px;
        }

        .payment-methods {
            display: flex;
            justify-content: center;
            gap: 16px;
        }

        .payment-method {
            padding: 12px 24px;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 500;
            color: #525252;
            cursor: pointer;
            transition: all 0.2s;
        }

        .payment-method:hover {
            background: #f8f9fa;
        }

        .footer {
            text-align: center;
            margin-top: 24px;
            color: #9e9e9e;
            font-size: 13px;
        }
    </style>
@endpush

@section('dashboard-content')
    <div class="wrapper">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    {{ __('Create New Deposit (:currency)', ['currency' => $currentCurrency]) }}
                </div>
                <div class="card-subtitle">
                    {{ __('You can make deposit') }}
                </div>
            </div>

            <form
                class="card-body"
                method="POST"
                action="{{ route('deposits.store') }}"
                x-data="{
                    amount: 0, // for ui input
                    isAgree: false,
                    isSubmitted: false,
                    exchangeRate: {{ $exchangeRatioToART }},
                    currency: '{{ $currentCurrency }}',
                
                    get isSubmitAllow() {
                        return this.isAgree && this.cost !== null && !this.isSubmitted;
                    },
                
                    handleFormSubmit() {
                        this.isSubmitted = true;
                    },
                
                    // Deposits logic
                    showCustomAmountInput: false,
                    cost: null,
                    warning: null,
                    currenciesRate: @js($currenciesRate),
                    isCurrenciesFromConfig: @js($isCurrenciesFromConfig),
                    exchangeRate: @js($exchangeRatioToART),
                    selectedCurrency: @js($currentCurrency),
                    tokenPriceEUR: @js($tokenPriceEUR),
                
                    updateLocation(event) {
                        window.location.href = event.target.value;
                    },
                
                    chooseAmount(selectedAmount) {
                        if (selectedAmount === 'custom') {
                            this.showCustomAmountInput = true;
                            this.amount = null;
                            this.cost = null;
                
                            return;
                        }
                
                        this.inputAmount(selectedAmount);
                
                        this.showCustomAmountInput = false;
                        this.warning = null;
                    },
                
                    inputAmount(selectedAmount, from) {
                        this.amount = selectedAmount;
                
                        if (selectedAmount < 5) {
                            this.cost = null;
                            this.warning = `Minimum 5 tokens required (Current: ${Number(selectedAmount)} tokens)`;
                
                            return;
                        } else {
                            // because we are taking amount from input, we must not hide it
                            if (from !== 'input') {
                                this.showCustomAmountInput = false;
                            }
                
                            this.warning = null;
                        }
                
                        // Calculation logic
                        if (this.isCurrenciesFromConfig) {
                            const currentCurrencyRate = this.currenciesRate[this.selectedCurrency];
                
                            // user selected the wrong currency
                            if (!currentCurrencyRate) {
                                return;
                            }
                
                            this.cost = currentCurrencyRate.rate[selectedAmount];
                
                            if (!this.cost) {
                                this.cost = selectedAmount * currentCurrencyRate['one_token_price'];
                            }
                
                        } else {
                            this.cost = selectedAmount * (this.selectedCurrency !== 'EUR' ? this.tokenPriceEUR * this.exchangeRate : this.tokenPriceEUR);
                        }
                
                        if (!this.cost) {
                            return;
                        }
                
                        this.cost = this.cost.toFixed(2);
                    },
                }"
                @submit="handleFormSubmit"
            >
                @csrf
                <div class="form-section">
                    <label class="form-label">
                        @if ($isCurrenciesFromConfig)
                            {{ __('Choose currency: (:amount :currency = 1 VFT)', [
                                'currency' => $currentCurrency,
                                'amount' => $currenciesRate[$currentCurrency]['one_token_price'],
                            ]) }}
                        @else
                            {{ __('Choose currency: (:amount :currency = 1 VFT)', [
                                'currency' => $currentCurrency,
                                'amount' => $exchangeRatioToART,
                            ]) }}
                        @endif
                    </label>
                    <select
                        class="currency-select"
                        @change="updateLocation"
                    >
                        @foreach ($currenciesList as $cur)
                            <option
                                value="{{ route('deposits.create', ['currency' => $cur]) }}"
                                @selected($currentCurrency === $cur)
                            >
                                {{ $cur }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-section">
                    <label class="form-label">
                        {{ __('Select Tokens Amount') }}
                    </label>
                    <div class="amount-grid">
                        <button
                            type="button"
                            class="amount-option"
                            @click="chooseAmount(50)"
                        >
                            50
                        </button>
                        <button
                            type="button"
                            class="amount-option"
                            @click="chooseAmount(100)"
                        >
                            100
                        </button>
                        <button
                            type="button"
                            class="amount-option"
                            @click="chooseAmount(200)"
                        >
                            200
                        </button>
                    </div>
                    <button
                        x-show="! showCustomAmountInput"
                        type="button"
                        class="custom-amount"
                        @click="chooseAmount('custom')"
                    >
                        {{ __('Custom') }}
                    </button>

                    <input
                        x-show="showCustomAmountInput"
                        x-model="amount"
                        x-cloak
                        type="text"
                        class="custom-amount"
                        placeholder="{{ __('Enter custom tokens amount') }}"
                        name="amount"
                        @input="inputAmount(event.target.value, 'input')"
                    >

                    <input
                        type="hidden"
                        name="currency"
                        value="{{ $currentCurrency }}"
                    >
                </div>

                <div
                    x-show="cost"
                    x-text="`Price: ${cost} {{ $currentCurrency }}`"
                    class="text-center font-bold"
                >
                </div>

                @error('amount')
                    <p class="mb-0 mt-2 text-sm font-normal text-red-600">{{ $message }}</p>
                @enderror
                <p
                    class="mb-0 mt-2 text-center text-sm font-normal"
                    x-text="warning"
                ></p>

                <div class="terms-check">
                    <input
                        id="terms-agreement"
                        x-model="isAgree"
                        type="checkbox"
                    >
                    <label for="terms-agreement">
                        {{ __('I agree to the') }}
                        <a href="{{ route('pages.show', 'privacy-policy') }}">
                            {{ __('Privacy Policy') }}
                        </a>
                        {{ __('and') }}
                        <a href="{{ route('pages.show', 'terms-and-conditions') }}">
                            {{ __('Terms and Conditions') }}
                        </a>
                    </label>
                </div>

                <button
                    x-bind:disabled="!isSubmitAllow"
                    x-cloak
                    class="primary-btn"
                >
                    {{ __('Confirm Deposit') }}
                </button>

                <div class="divider"></div>

                <div class="footer">
                    &copy; {{ now()->format('Y') }} {{ env('COMPANY_NAME') }}. {{ __('All rights reserved') }}
                </div>

				<div class="divider"></div>

				<div class="footer">
                    <div class="flex items-center justify-center">
                        <div class="mr-2">
                            <img
                                src="{{ asset('assets/images/Visa_Brandmark_Blue_RGB_2021.png') }}"
                                style="width: 3rem;"
                            >
                        </div>
                        <div>
                            <img
                                src="{{ asset('assets/images/ma_symbol_opt_73_2x.png') }}"
                                style="width: 3rem;"
                            >
                        </div>
                        <div>
                            <img
                                src="{{ asset('assets/images/PngItem_7569533.png') }}"
                                style="width: 3rem;"
                            >
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
