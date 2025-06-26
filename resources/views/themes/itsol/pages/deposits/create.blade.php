@extends("themes.itsol.layouts.dashboard.main")

@section("dashboard-title")
    {{ __("Create Deposit") }}
@endsection

@section("dashboard-content")
    <div class="container mb-20 mt-10 flex justify-center">
        <div
            class="bg-n8 relative z-10 w-full text-center rounded-2xl px-3 py-6 text-lg shadow-xl sm:px-4 md:p-6 lg:px-[30px] lg:py-[60px]"
        >
            <form
                x-data="{
                    amount: '{{ old("amount") }}', // for ui input
                    isAgree: false,
                    isSubmitted: false,
                    exchangeRate: {{ $exchangeRatioToART }},
                    currency: '{{ $currentCurrency }}',

                    get isSubmitAllow() {
                        return this.isAgree && this.cost !== null && ! this.isSubmitted;
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
                            // reset all
                            this.showCustomAmountInput = true;
                            this.amount = null;
                            this.cost = null;

                            return;
                        }

                        // Choice of fixed amount
                        this.inputAmount(selectedAmount);

                        this.showCustomAmountInput = false;
                        this.warning = null;
                    },

                    inputAmount(selectedAmount) {
                        this.amount = selectedAmount;

                        if (selectedAmount < 5) {
                            this.cost = null;
                            this.warning = `Minimum 5 tokens required (Current: ${Number(selectedAmount)} tokens)`;

                            return;
                        } else {
                            this.warning = null;
                        }

                        // Calculation logic
                        if (this.isCurrenciesFromConfig) {
                            const currentCurrencyRate = this.currenciesRate[this.selectedCurrency];

                            // user selected the wrong currency
                            if (! currentCurrencyRate) {
                                return;
                            }

                            this.cost = currentCurrencyRate.rate[selectedAmount];

                            if (! this.cost) {
                                this.cost = selectedAmount * currentCurrencyRate['one_token_price'];
                            }

                        } else {
                            this.cost = selectedAmount * (this.selectedCurrency !== 'EUR' ? this.tokenPriceEUR * this.exchangeRate : this.tokenPriceEUR);
                        }

                        if (! this.cost) {
                            return;
                        }

                        this.cost = this.cost.toFixed(2);
                    },
                }"
                action="{{ route("deposits.store") }}"
                method="POST"
            >
                @csrf

                <input
                    type="hidden"
                    name="currency"
                    value="{{ $currentCurrency }}"
                />

                <h3 class="text-n1 mb-2.5 text-3xl font-bold leading-tight lg:text-[43px]">
                    {{ __("Deposit in :currency", ["currency" => $currentCurrency]) }}
                </h3>
                <div class="flex flex-col items-center gap-3 mb-4">
                    <div>
                        <label>
                            {{ __('Currency:') }}
                        </label>
                    </div>

                    <select
                        class="max-w-[450px] w-full border-gray bg-n7 focus:border-primary rounded-[30px] border px-4 py-3 focus:outline-none md:px-7 cursor-pointer"
                        @change="updateLocation"
                    >
                        @foreach ($currenciesList as $cur)
                            <option
                                value="{{ route("deposits.create", ["currency" => $cur]) }}"
                                @selected($currentCurrency === $cur)
                            >
                                {{ $cur }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="flex flex-col items-center gap-3 mb-4">
                    <div>
                        <label>
                            {{ __('Choose option:') }}
                        </label>
                    </div>

                    <div class="flex gap-3">
                        <button
                            type="button"
                            class="btn-primary btn-currency"
                            @click="chooseAmount(50)"
                        >
                            50
                        </button>
                        <button
                            type="button"
                            class="btn-primary btn-currency"
                            @click="chooseAmount(100)"
                        >
                            100
                        </button>
                        <button
                            type="button"
                            class="btn-primary btn-currency"
                            @click="chooseAmount(200)"
                        >
                            200
                        </button>
                        <button
                            type="button"
                            class="btn-primary btn-currency"
                            @click="chooseAmount('custom')"
                        >
                            {{ __('Custom') }}
                        </button>
                    </div>
                </div>

                <div
                    x-show="showCustomAmountInput"
                    x-cloak
                >
                    <input
                        x-model="amount"
                        name="amount"
                        value="{{ old("amount") }}"
                        type="number"
                        min="5"
                        step="1"
                        placeholder="{{ __("Amount (min. 5 SVT)") }}"
                        class="border-gray bg-n7 focus:border-primary w-full rounded-[30px] border px-4 py-3 focus:outline-none md:px-7"
                        required
                        @input="inputAmount(event.target.value)"
                    />

                    @error("amount")
                        <p class="text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                    <p
                        class="mb-0 mt-2 text-center text-sm font-normal"
                        x-text="warning"
                    ></p>
                </div>

                <div
                    x-show="cost"
                    x-text="`{{ __('Price') }}: ${cost} {{ $currentCurrency }}`"
                    class="text-center font-bold"
                >
                </div>

                <div class="flex justify-center items-center gap-2 text-center mt-2">
                    <input
                        id="agree-terms"
                        x-model="isAgree"
                        type="checkbox"
                        class="mr-3 h-5 w-5 rounded border-gray-300 text-[var(--prime-two)] focus:ring-[var(--prime-two)]"
                    >
                    <label
                        for="agree-terms"
                        class="text-sm text-gray-600"
                    >
                        {{ __("I agree to") }}
                        <a
                            href="{{ route("pages.show", "privacy-policy") }}"
                            class="text-primary hover:underline"
                        >
                            {{ __("Privacy Policy") }}
                        </a>,
                        <a
                            href="{{ route("pages.show", "terms-and-conditions") }}"
                            class="text-primary hover:underline"
                        >
                            {{ __("Terms and Conditions") }}
                        </a>
                    </label>
                </div>

                <button
                    x-bind:disabled="!isSubmitAllow"
                    type="submit"
                    class="btn-primary mt-2 px-16 disabled:pointer-events-none disabled:opacity-50 lg:mt-10"
                >
                    {{ __("Make Deposit") }}
                </button>
            </form>
        </div>
    </div>
@endsection
