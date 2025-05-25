<x-app-layout>
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <section id="subheader">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>{{ __('Deposit') }}</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-main" aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="nft__item p-5">
                            <div class="col-md-6">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a href="{{ route('deposits.create', ['currency' => 'EUR']) }}" class="nav-link @if($currency == 'EUR') active @endif">
                                            EUR
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('deposits.create', ['currency' => 'USD']) }}" class="nav-link @if($currency == 'USD') active @endif">
                                            USD
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <form method="post" action="{{ route('deposits.store') }}" id="form-create-item"
                                  class="form-border">
                                @csrf
                                <input type="hidden" name="currency" value="{{ $currency }}">
                                <div class="wow fadeIn">
                                    <div class="field-set mb-4">
                                        <h5>{{ __('Replenishment amount (:amount :currency = 1 ART)', ['currency' => $currency, 'amount' => $exchangeRatioToART]) }}</h5>
                                        <x-text-input id="amount" name="amount" type="text"
                                                      :value="old('amount')" required autocomplete="username"
                                                      placeholder="{{ __('Amount (min. 5 ART)') }}" class="mb-0"/>
                                        <x-input-error :messages="$errors->get('amount')"/>
                                    </div>
                                    {{--
                                    <h5>{{ __('Personal data') }}</h5>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <x-text-input id="first_name" name="first_name" type="text"
                                                          :value="old('first_name') ?? $deposit?->first_name" required autocomplete="first_name"
                                                          placeholder="{{ __('First name') }}"/>
                                            <x-input-error class="mt-2" :messages="$errors->get('first_name')"/>
                                        </div>
                                        <div class="col-sm-6">
                                            <x-text-input id="last_name" name="last_name" type="text"
                                                          :value="old('last_name') ?? $deposit?->last_name" required autocomplete="last_name"
                                                          placeholder="{{ __('Last name') }}"/>
                                            <x-input-error class="mt-2" :messages="$errors->get('last_name')"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <x-text-input id="email" name="email" type="text"
                                                          :value="old('email') ?? auth()->user()->email" required
                                                          autocomplete="email" placeholder="{{ __('Email') }}"/>
                                            <x-input-error class="mt-2" :messages="$errors->get('email')"/>
                                        </div>
                                        <div class="col-sm-6">
                                            <x-text-input id="phone" name="phone" type="text"
                                                          :value="old('phone') ?? $deposit?->phone" required autocomplete="phone"
                                                          placeholder="{{ __('Phone') }}"/>
                                            <x-input-error class="mt-2" :messages="$errors->get('phone')"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <select name="country" id="" class="form-control" required>
                                                <option value="">{{ __('- Select country -') }}</option>
                                                @foreach($countries as $country)
                                                    <option value="{{ $country->country_code }}" @if(old('country') ?? $deposit?->country == $country->country_code) selected @endif>
                                                        {{ $country->country_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <x-input-error class="mt-2" :messages="$errors->get('country')"/>
                                        </div>
                                        <div class="col-sm-6">
                                            <x-text-input id="city" name="city" type="text"
                                                          :value="old('city') ?? $deposit?->city" required autocomplete="city"
                                                          placeholder="{{ __('City') }}"/>
                                            <x-input-error class="mt-2" :messages="$errors->get('city')"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <x-text-input id="address" name="address" type="text"
                                                          :value="old('address')  ?? $deposit?->address" required
                                                          autocomplete="address" placeholder="{{ __('Address') }}"/>
                                            <x-input-error class="mt-2" :messages="$errors->get('address')"/>
                                        </div>
                                        <div class="col-sm-6">
                                            <x-text-input id="zip" name="zip" type="text"
                                                          :value="old('zip') ?? $deposit?->zip" required autocomplete="zip"
                                                          placeholder="{{ __('Post code') }}"/>
                                            <x-input-error class="mt-2" :messages="$errors->get('zip')"/>
                                        </div>
                                    </div>
                                    --}}
                                </div>

                                <div>
                                    <div class="form-check">
                                        <input class="form-check-input border" type="checkbox" value=""
                                               id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            {!! __('I agree with <a href=":privacyPolicyUrl" target="_blank">privacy policy</a> and <a href=":termsConditionsUrl">terms and conditions</a>.', ['privacyPolicyUrl' => route('pages.show', 'privacy-policy'), 'termsConditionsUrl' => route('pages.show', 'terms-conditions')]) !!}
                                        </label>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <input type="submit" id="submit" class="btn-main" value="{{ __('Deposit') }}">
                                </div>

                                <div class="mt-3 pt-3 border-top">
                                    <div class="mb-2">
                                        <img src="{{ asset('assets/images/Visa_Brandmark_Blue_RGB_2021.png') }}" style="width: 3rem;">
                                        <img src="{{ asset('assets/images/ma_symbol_opt_73_2x.png') }}" style="width: 3rem;">
                                    </div>
                                    <div>
                                        {!! __('&copy; Copyright :year - :name', ['year' => now()->year, 'name' => env('COMPANY_ADDRESS')]) !!}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <a href="#" id="back-to-top"></a>
</x-app-layout>
