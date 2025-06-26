<x-app-layout>

    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <section class="full-height relative no-top no-bottom vertical-center" data-bgimage="url({{ asset('assets/images/background/21.jpg') }}) top" data-stellar-background-ratio=".5">
            <div class="overlay-gradient t50">
                <div class="center-y relative">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-5 wow fadeInRight" data-wow-delay=".5s">
                                <div class="spacer-10"></div>
                                <h1>{{ __('Your AI Hub for Creativity, Communication, and Contracts.') }}</h1>
                                <p class="lead">
                                    {{ __('Generate stunning image prompts, persuasive emails, and legally sound agreements with AI. Secure, original, and designed for your success.') }}
                                </p>
                            </div>

                            <div class="col-lg-4 offset-lg-2 wow fadeIn" data-wow-delay=".5s">
                                <div class="box-rounded padding40" data-bgcolor="#ffffff">
                                    <x-auth-session-status class="mb-4" :status="session('status')" />

                                    <h3 class="mb10">{{ __('Sign In') }}</h3>
                                    <p>{!! __('Login using an existing account or create a new account <a href=":url">here', ['url' => route('register')]) !!}</a>.</p>
                                    <form class="form-border" method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="field-set">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="{{ __('email') }}" />
                                        </div>

                                        <div class="field-set">
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            <x-text-input id="password" class="block mt-1 w-full"
                                                          type="password"
                                                          name="password"
                                                          placeholder="{{ __('password') }}"
                                                          required autocomplete="current-password" />
                                        </div>

                                        <div class="field-set">
                                            <input type='submit' id='send_message' value='{{ __('Submit') }}' class="btn btn-main btn-fullwidth color-2">
                                        </div>

                                        @if (Route::has('password.request'))
                                            <div class="field-set pt-3">
                                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            </div>
                                        @endif

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>