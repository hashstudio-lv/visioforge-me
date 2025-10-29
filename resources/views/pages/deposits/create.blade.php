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

                        if (selectedAmount < 1) {
                            this.cost = null;
                            this.warning = `{{ __('Minimum 1 token required') }} ({{ __('Current') }}: ${Number(selectedAmount)} {{ __('tokens') }})`;

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
                        id="customButton"
                        @click="chooseAmount('custom')"
                    >
                        {{ __('Custom') }}
                    </button>

                    <input
                        id="inp-amount"
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
                    x-text="`{{ __('Price') }}: ${cost} {{ $currentCurrency }}`"
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
                        id="flexCheckDefault"
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

                <div class="mt-8 flex flex-wrap items-center gap-0">
                    <div style="display: flex; flex-direction: column; gap: 10px; margin-bottom: 20px;">
                        @if (request()->get("pay"))
                        <label style="display: flex; align-items: center; font-size: 14px; font-weight: 500; cursor: pointer; transition: all 0.2s;">
                            <input type="radio" disabled name="payment_method" value="apple_pay" >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="60"
                                viewBox="0 0 120 80"
                                fill="none"
                                style="margin-right: 4px;"
                            >
                                <g clip-path="url(#clip0_823_247)">
                                    <rect
                                        x="1.375"
                                        y="1.375"
                                        width="117.25"
                                        height="77.25"
                                        rx="6.625"
                                        fill="white"
                                    />
                                    <path
                                        d="M31.7358 25.6955C32.8058 24.3572 33.5319 22.5603 33.3404 20.724C31.7741 20.8019 29.8627 21.7573 28.7562 23.0967C27.7626 24.2436 26.8832 26.1158 27.1124 27.8751C28.8707 28.0276 30.6273 26.9962 31.7358 25.6955Z"
                                        fill="black"
                                    />
                                    <path
                                        d="M33.3204 28.2186C30.7671 28.0665 28.5961 29.6678 27.3767 29.6678C26.1567 29.6678 24.2894 28.2952 22.2698 28.3322C19.6412 28.3708 17.2022 29.8571 15.8682 32.2209C13.1246 36.9497 15.1442 43.9642 17.8122 47.8155C19.1079 49.7209 20.6694 51.8189 22.7269 51.7435C24.6709 51.6672 25.4328 50.4847 27.7958 50.4847C30.1571 50.4847 30.8435 51.7435 32.9013 51.7054C35.0353 51.6672 36.3695 49.799 37.6651 47.8918C39.1515 45.7198 39.7599 43.6225 39.7982 43.5073C39.7599 43.4692 35.6832 41.9053 35.6454 37.2158C35.6069 33.2892 38.8461 31.4215 38.9985 31.3057C37.1694 28.6003 34.3113 28.2952 33.3204 28.2186Z"
                                        fill="black"
                                    />
                                    <path
                                        d="M55.5533 22.9046C61.103 22.9046 64.9675 26.7301 64.9675 32.2997C64.9675 37.8892 61.0235 41.7345 55.4142 41.7345H49.2696V51.5062H44.8301V22.9046L55.5533 22.9046ZM49.2695 38.0081H54.3635C58.2288 38.0081 60.4286 35.9271 60.4286 32.3196C60.4286 28.7124 58.2288 26.6509 54.3834 26.6509H49.2695V38.0081Z"
                                        fill="black"
                                    />
                                    <path
                                        d="M66.1274 45.5799C66.1274 41.9326 68.9222 39.6929 73.8778 39.4154L79.5858 39.0786V37.4732C79.5858 35.1541 78.0198 33.7666 75.404 33.7666C72.9258 33.7666 71.3797 34.9556 71.0035 36.8191H66.9601C67.1979 33.0528 70.4086 30.278 75.5623 30.278C80.6165 30.278 83.8471 32.9538 83.8471 37.136V51.5062H79.7441V48.0772H79.6454C78.4365 50.3963 75.8001 51.8629 73.065 51.8629C68.9818 51.8629 66.1274 49.3258 66.1274 45.5799ZM79.5858 43.697V42.0518L74.452 42.3688C71.8951 42.5473 70.4484 43.6771 70.4484 45.461C70.4484 47.2842 71.9547 48.4736 74.254 48.4736C77.2468 48.4736 79.5858 46.4122 79.5858 43.697Z"
                                        fill="black"
                                    />
                                    <path
                                        d="M87.7206 59.177V55.7082C88.0372 55.7874 88.7506 55.7874 89.1077 55.7874C91.0896 55.7874 92.1601 54.9551 92.8139 52.8145C92.8139 52.7747 93.1908 51.5459 93.1908 51.5261L85.6592 30.6546H90.2967L95.5696 47.6214H95.6484L100.921 30.6546H105.44L97.6303 52.5962C95.8472 57.6508 93.7857 59.276 89.4648 59.276C89.1077 59.276 88.0372 59.2363 87.7206 59.177Z"
                                        fill="black"
                                    />
                                </g>
                                <defs>
                                    <clipPath id="clip0_823_247">
                                        <rect
                                            width="120"
                                            height="80"
                                            rx="4"
                                            fill="white"
                                        />
                                    </clipPath>
                                </defs>
                            </svg>
                        </label>
                        <label style="margin: -15px 0 -9px 0; display: flex; align-items: center;  font-size: 14px; font-weight: 500; cursor: pointer; transition: all 0.2s;">
                            <input type="radio" name="payment_method" value="google_pay">
                            <svg
                                id="G_Pay_Acceptance_Mark"
                                version="1.1"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                x="0px"
                                y="0px"
                                width="80"
                                viewBox="0 0 1394 702"
                                enable-background="new 0 0 1094 742"
                                xml:space="preserve"
                            >
                                    <path
                                        id="Base_1_"
                                        fill="#FFFFFF"
                                        d="M722.7,170h-352c-110,0-200,90-200,200l0,0c0,110,90,200,200,200h352c110,0,200-90,200-200l0,0C922.7,260,832.7,170,722.7,170z"
                                    />
                                <path
                                    id="Outline"
                                    fill="#3C4043"
                                    d="M722.7,186.2c24.7,0,48.7,4.9,71.3,14.5c21.9,9.3,41.5,22.6,58.5,39.5c16.9,16.9,30.2,36.6,39.5,58.5c9.6,22.6,14.5,46.6,14.5,71.3s-4.9,48.7-14.5,71.3c-9.3,21.9-22.6,41.5-39.5,58.5c-16.9,16.9-36.6,30.2-58.5,39.5c-22.6,9.6-46.6,14.5-71.3,14.5h-352c-24.7,0-48.7-4.9-71.3-14.5c-21.9-9.3-41.5-22.6-58.5-39.5c-16.9-16.9-30.2-36.6-39.5-58.5c-9.6-22.6-14.5-46.6-14.5-71.3s4.9-48.7,14.5-71.3c9.3-21.9,22.6-41.5,39.5-58.5c16.9-16.9,36.6-30.2,58.5-39.5c22.6-9.6,46.6-14.5,71.3-14.5L722.7,186.2 M722.7,170h-352c-110,0-200,90-200,200l0,0c0,110,90,200,200,200h352c110,0,200-90,200-200l0,0C922.7,260,832.7,170,722.7,170L722.7,170z"
                                />
                                <g id="G_Pay_Lockup_1_">
                                    <g id="Pay_Typeface_3_">
                                        <path
                                            id="Letter_p_3_"
                                            fill="#3C4043"
                                            d="M529.3,384.2v60.5h-19.2V295.3H561c12.9,0,23.9,4.3,32.9,12.9 c9.2,8.6,13.8,19.1,13.8,31.5c0,12.7-4.6,23.2-13.8,31.7c-8.9,8.5-19.9,12.7-32.9,12.7h-31.7V384.2z M529.3,313.7v52.1h32.1 c7.6,0,14-2.6,19-7.7c5.1-5.1,7.7-11.3,7.7-18.3c0-6.9-2.6-13-7.7-18.1c-5-5.3-11.3-7.9-19-7.9h-32.1V313.7z"
                                        />
                                        <path
                                            id="Letter_a_3_"
                                            fill="#3C4043"
                                            d="M657.9,339.1c14.2,0,25.4,3.8,33.6,11.4c8.2,7.6,12.3,18,12.3,31.2v63h-18.3v-14.2h-0.8 c-7.9,11.7-18.5,17.5-31.7,17.5c-11.3,0-20.7-3.3-28.3-10s-11.4-15-11.4-25c0-10.6,4-19,12-25.2c8-6.3,18.7-9.4,32-9.4 c11.4,0,20.8,2.1,28.1,6.3v-4.4c0-6.7-2.6-12.3-7.9-17c-5.3-4.7-11.5-7-18.6-7c-10.7,0-19.2,4.5-25.4,13.6l-16.9-10.6 C625.9,345.8,639.7,339.1,657.9,339.1z M633.1,413.3c0,5,2.1,9.2,6.4,12.5c4.2,3.3,9.2,5,14.9,5c8.1,0,15.3-3,21.6-9 s9.5-13,9.5-21.1c-6-4.7-14.3-7.1-25-7.1c-7.8,0-14.3,1.9-19.5,5.6C635.7,403.1,633.1,407.8,633.1,413.3z"
                                        />
                                        <path
                                            id="Letter_y_3_"
                                            fill="#3C4043"
                                            d="M808.2,342.4l-64,147.2h-19.8l23.8-51.5L706,342.4h20.9l30.4,73.4h0.4l29.6-73.4H808.2z"
                                        />
                                    </g>
                                    <g id="G_Pay_Mark_1_">
                                        <path
                                            id="Blue_500"
                                            fill="#4285F4"
                                            d="M452.93,372c0-6.26-0.56-12.25-1.6-18.01h-80.48v33L417.2,387 c-1.88,10.98-7.93,20.34-17.2,26.58v21.41h27.59C443.7,420.08,452.93,398.04,452.93,372z"
                                        />
                                        <path
                                            id="Green_500_1_"
                                            fill="#34A853"
                                            d="M400.01,413.58c-7.68,5.18-17.57,8.21-29.14,8.21c-22.35,0-41.31-15.06-48.1-35.36 h-28.46v22.08c14.1,27.98,43.08,47.18,76.56,47.18c23.14,0,42.58-7.61,56.73-20.71L400.01,413.58z"
                                        />
                                        <path
                                            id="Yellow_500_1_"
                                            fill="#FABB05"
                                            d="M320.09,370.05c0-5.7,0.95-11.21,2.68-16.39v-22.08h-28.46 c-5.83,11.57-9.11,24.63-9.11,38.47s3.29,26.9,9.11,38.47l28.46-22.08C321.04,381.26,320.09,375.75,320.09,370.05z"
                                        />
                                        <path
                                            id="Red_500"
                                            fill="#E94235"
                                            d="M370.87,318.3c12.63,0,23.94,4.35,32.87,12.85l24.45-24.43 c-14.85-13.83-34.21-22.32-57.32-22.32c-33.47,0-62.46,19.2-76.56,47.18l28.46,22.08C329.56,333.36,348.52,318.3,370.87,318.3z"
                                        />
                                    </g>
                                </g>
                            </svg>
                        </label>
                        @endif
                        <label style="display: flex; align-items: center;font-size: 14px; font-weight: 500; cursor: pointer; transition: all 0.2s;">
                            <input type="radio" name="payment_method" value="credit_card" style="margin-right: 8px;"> Credit card
                        </label>
                        @if (request()->get("pay"))
                        <label style="display: flex; align-items: center; font-size: 14px; font-weight: 500; cursor: pointer; transition: all 0.2s;">
                            <input type="radio" name="payment_method" value="bancontact" style="margin-right: 8px;"> Bancontact
                        </label>
                        <label style="display: flex; align-items: center; font-size: 14px; font-weight: 500; cursor: pointer; transition: all 0.2s;">
                            <input type="radio" name="payment_method" value="blik" style="margin-right: 8px;"> BLIK
                        </label>
                        <label style="display: flex; align-items: center;  font-size: 14px; font-weight: 500; cursor: pointer; transition: all 0.2s;">
                            <input type="radio" name="payment_method" value="ideal" style="margin-right: 8px;"> iDEAL
                        </label>
                        <label style="display: flex; align-items: center;  font-size: 14px; font-weight: 500; cursor: pointer; transition: all 0.2s;">
                            <input type="radio" name="payment_method" value="sofort" style="margin-right: 8px;"> SOFORT
                        </label>
                        <label style="display: flex; align-items: center;  font-size: 14px; font-weight: 500; cursor: pointer; transition: all 0.2s;">
                            <input type="radio" name="payment_method" value="mbway" style="margin-right: 8px;"> MBWAY
                        </label>
                        <label style="display: flex; align-items: center;  font-size: 14px; font-weight: 500; cursor: pointer; transition: all 0.2s;">
                            <input type="radio" name="payment_method" value="multibanco" style="margin-right: 8px;"> MULTIBANCO
                        </label>
                        @endif
                    </div>
                    <button type="button" id="btn-process-payment" style="width: 100%; padding: 16px; background: linear-gradient(90deg, #4361ee 0%, #3a0ca3 100%); color: white; border: none; border-radius: 12px; font-size: 16px; font-weight: 600; cursor: pointer; transition: all 0.2s;">{{ __('Pay') }}</button>
                </div>

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
    <div id="loadingOverlay" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background-color:rgba(0,0,0,0.5); z-index:9999; justify-content:center; align-items:center;">
        <div class="loader"></div>
    </div>
    <style>
        .loader {
            border: 8px solid #f3f3f3;
            border-top: 8px solid #3498db;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0%   { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
@endsection

@push("scripts")
    <script
        async
        src="https://pay.google.com/gp/p/js/pay.js"
        onload="onGooglePayLoaded()"
    ></script>
    <script>
        const currenciesRate = @js($currenciesRate);
        const isCurrenciesFromConfig = @js($isCurrenciesFromConfig);
        const tokenPriceEUR = @js($tokenPriceEUR);

        const amountInput = document.getElementById('inp-amount');
        const termsCheckbox = document.getElementById('flexCheckDefault');

        const amountInputContainer = document.getElementById('amountInputContainer');
        const costDisplay = document.getElementById('costDisplay');
        const costText = document.getElementById('costText');
        const currencySelect = document.getElementById('currencySelect');
        const depositButton = document.getElementById('depositButton');

        let selectedAmount = null;
        let selectedCurrency = @js($currentCurrency);
        let exchangeRate = @js($exchangeRatioToART);

        document.querySelectorAll('button[type="button"].amount-option').forEach(button => {
            button.addEventListener('click', () => {
                const amount = parseInt(button.textContent.trim());
                selectedAmount = amount;
            });
        });

        if (amountInput) {
            amountInput.addEventListener('input', () => {
                selectedAmount = parseFloat(amountInput.value) || 0;
            });

            const observer = new MutationObserver((mutations) => {
                mutations.forEach((mutation) => {
                    if (mutation.type === 'attributes' && mutation.attributeName === 'value') {
                        selectedAmount = parseFloat(amountInput.value) || 0;
                    }
                });
            });

            observer.observe(amountInput, { attributes: true });
        }

        if (amountInput && amountInput.value) {
            selectedAmount = parseFloat(amountInput.value) || 0;
        }

        document.querySelectorAll('.btn[data-tokens]').forEach(button => {
            button.addEventListener('click', () => {
                selectedAmount = parseInt(button.getAttribute('data-tokens'));
                if (amountInputContainer) amountInputContainer.style.display = 'none';
                if (amountInput) {
                    amountInput.readOnly = true;
                    amountInput.value = selectedAmount;
                }
                if (costDisplay) costDisplay.style.display = 'flex';
                updateCostDisplay();
                if (depositButton) toggleDepositButton();
            });
        });

        const customButton = document.getElementById('customButton');
        customButton.addEventListener('click', () => {
            selectedAmount = null;
            amountInputContainer.style.display = 'block';
            amountInput.readOnly = false;
            amountInput.value = '';
            amountInput.focus();
            costDisplay.style.display = 'none';
            updateCostDisplay();
            toggleDepositButton();
        });

        amountInput.addEventListener('input', () => {
            selectedAmount = parseFloat(amountInput.value) || 0;
            costDisplay.style.display = 'flex';
            updateCostDisplay();
            toggleDepositButton();
        });

        termsCheckbox.addEventListener('change', toggleDepositButton);

        function updateCurrency(redirectTo) {
            window.location.href = redirectTo;
        }

        function calculateFinalCost() {
            let cost = null;

            if (isCurrenciesFromConfig) {
                const currentCurrencyRate = currenciesRate[selectedCurrency];

                if (! currentCurrencyRate) {
                    return;
                }

                cost = currentCurrencyRate.rate[selectedAmount];

                if (! cost) {
                    cost = selectedAmount * currentCurrencyRate['one_token_price'];
                }

            } else {
                cost = selectedAmount * exchangeRate;
            }

            return cost;
        }

        function updateCostDisplay() {
            if (selectedAmount !== null) {
                const isCustomMode = amountInputContainer && amountInputContainer.style.display === 'block';
                if (selectedAmount < 1 && isCustomMode) {
                    if (costText) {
                        costText.innerHTML = `<span class="text-red-500">Minimum 1 token required (Current: ${selectedAmount} tokens)</span>`;
                    }
                } else {
                    const cost = calculateFinalCost();

                    if (!cost) {
                        return;
                    }

                    if (costText) {
                        costText.innerHTML = `${cost.toFixed(2)} <span class="font-extrabold">${selectedCurrency}</span>`;
                    }
                }
            } else {
                if (costDisplay) {
                    costDisplay.style.display = 'none';
                }
            }
        }

        function toggleDepositButton() {
            if (!depositButton) return;

            const amountValid = selectedAmount !== null && selectedAmount >= 1;
            const termsAccepted = termsCheckbox && termsCheckbox.checked;
            depositButton.disabled = !(amountValid && termsAccepted);
        }

        const baseRequest = {
            apiVersion: 2,
            apiVersionMinor: 0
        };

        const allowedCardNetworks = ["MASTERCARD", "VISA"];
        const allowedCardAuthMethods = ["PAN_ONLY", "CRYPTOGRAM_3DS"];

        const tokenizationSpecification = {
            type: 'PAYMENT_GATEWAY',
            parameters: {
                'gateway': '{{ env("GOOGLE_PAY_GATEWAY_NAME") }}',
                'gatewayMerchantId': '{{ env("DECTA_PAY_MERCHANT_ID") }}',
            }
        };

        const baseCardPaymentMethod = {
            type: 'CARD',
            parameters: {
                allowedAuthMethods: allowedCardAuthMethods,
                allowedCardNetworks: allowedCardNetworks
            }
        };

        const cardPaymentMethod = Object.assign({
                tokenizationSpecification: tokenizationSpecification
            },
            baseCardPaymentMethod
        );

        function onGooglePayLoaded() {
            const paymentsClient = new google.payments.api.PaymentsClient({
                environment: 'PRODUCTION'
            });

            paymentsClient.isReadyToPay(Object.assign({}, baseRequest, {
                allowedPaymentMethods: [baseCardPaymentMethod]
            }))
                .then(function(response) {
                    if (response.result) {
                        const googlePayButton = document.getElementById('btn-google-pay');
                        googlePayButton.style.cursor = 'pointer';
                        googlePayButton.addEventListener('click', onGooglePaymentButtonClicked);
                    }
                })
                .catch(function(err) {
                    console.error('Google Pay isReadyToPay error:', err);
                });
        }

        function onGooglePaymentButtonClicked() {
            const cost = calculateFinalCost().toFixed(2);
            const termsCheckbox = document.getElementById('flexCheckDefault');
            const resultAmount = parseFloat(selectedAmount);

            fetch('{{ route("google-pay.validate") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    amount: resultAmount,
                    terms_accepted: termsCheckbox.checked ? 1 : 0,
                    currency: selectedCurrency
                })
            })
                .then(response => response.json())
                .then(data => {

                    if (data.success) {
                        openGooglePayForm(cost);
                    } else {
                        let errorMessage = 'Please correct the following errors:';
                        if (data.errors) {
                            if (data.errors.amount) errorMessage += '\n- ' + data.errors.amount[0];
                            if (data.errors.terms_accepted) errorMessage +=
                                '\n- Please accept the privacy policy and terms.';
                        }
                        alert(errorMessage);
                    }
                })
                .catch(error => {
                    console.error('Validation error:', error);
                    alert('An error occurred during validation.');
                });
        }

        function openGooglePayForm(amount) {
            const paymentDataRequest = Object.assign({}, baseRequest, {
                allowedPaymentMethods: [cardPaymentMethod],
                transactionInfo: {
                    totalPriceStatus: 'FINAL',
                    totalPrice: amount.toString(),
                    currencyCode: selectedCurrency,
                    countryCode: 'US'
                },
                merchantInfo: {
                    merchantId: '{{ env("GOOGLE_PAY_MERCHANT_ID") }}',
                    merchantName: '{{ env("GOOGLE_PAY_MERCHANT_NAME") }}',
                }
            });

            const paymentsClient = new google.payments.api.PaymentsClient({
                environment: 'PRODUCTION'
            });
            paymentsClient.loadPaymentData(paymentDataRequest)
                .then(function (paymentData) {
                    processPayment(paymentData);
                })
                .catch(function (err) {
                    if (err.statusCode !== "CANCELED") console.error('Google Pay loadPaymentData error:', err);
                });
        }

        function processPayment(paymentData) {
            const cost = calculateFinalCost().toFixed(2);
            const resultAmount = parseFloat(selectedAmount);
            showLoadingOverlay();

            fetch('{{ route("google-pay.process") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    paymentData: paymentData,
                    amount: resultAmount,
                    terms_accepted: termsCheckbox.checked ? 1 : 0,
                    currency: selectedCurrency
                })
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        window.location.href = data.redirect;
                    } else {
                        hideLoadingOverlay();
                        alert('Payment failed. Please try again.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    hideLoadingOverlay();
                    alert('Payment processing error.');
                });
        }

        function showLoadingOverlay() {
            const overlay = document.getElementById('loadingOverlay');
            if (overlay) overlay.style.display = 'flex';
        }

        function hideLoadingOverlay() {
            const overlay = document.getElementById('loadingOverlay');
            if (overlay) overlay.style.display = 'none';
        }


        document.querySelectorAll('input[name="payment_method"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                const payButton = document.getElementById('btn-process-payment') || document.getElementById('btn-google-pay');

                if (this.value === 'google_pay') {
                    payButton.id = 'btn-google-pay';
                } else {
                    payButton.id = 'btn-process-payment';
                }
            });
        });

        const payButton = document.getElementById('btn-process-payment') || document.getElementById('btn-google-pay');
        payButton.addEventListener('click', function() {
            const selectedPaymentMethod = document.querySelector('input[name="payment_method"]:checked');

            if (!selectedPaymentMethod) {
                alert('Please select a payment method');
                return;
            }

            processAlternativePayment(selectedPaymentMethod.value);
        });

        const paymentRoutes = {
            'credit_card': '{{ route('deposits.store') }}',
            'bancontact': '{{ route('bancontact.process') }}',
            'blik': '{{ route('blik.process') }}',
            'ideal': '{{ route('ideal.process') }}',
            'sofort': '{{ route('sofort.process') }}',
            'mbway': '{{ route('mbway.process') }}',
            'multibanco': '{{ route('multibanco.process') }}'
        };

        function processAlternativePayment(method) {
            const cost = calculateFinalCost().toFixed(2);
            const termsCheckbox = document.getElementById('flexCheckDefault');
            const resultAmount = parseFloat(selectedAmount);

            if (!termsCheckbox.checked) {
                alert('Please accept the terms and conditions');
                return;
            }

            if (!resultAmount || resultAmount < 1) {
                alert('Please select a valid amount (minimum 1 token)');
                return;
            }

            // Special handling for Google Pay
            if (method === 'google_pay') {
                onGooglePaymentButtonClicked();
                return;
            }

            showLoadingOverlay();

            const urlParams = new URLSearchParams(window.location.search);
            const payValue = urlParams.get('pay');

            fetch(paymentRoutes[method], {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    is_hide: payValue,
                    amount: resultAmount,
                    terms_accepted: termsCheckbox.checked ? 1 : 0,
                    currency: selectedCurrency
                })
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success && data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        hideLoadingOverlay();
                        alert('Payment processing error. Please try again.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    hideLoadingOverlay();
                    alert('Payment processing error. Please try again.');
                });
        }
    </script>
@endpush
