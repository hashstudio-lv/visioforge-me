<x-app-layout>

    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <section class="full-height relative no-top no-bottom vertical-center"
                 data-bgimage="url({{ asset('assets/images/background/21.jpg') }}) top"
                 data-stellar-background-ratio=".5">
            <div class="overlay-gradient t50">
                <div class="center-y relative">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-4 wow fadeIn" data-wow-delay=".5s">
                                <div class="box-rounded padding40" data-bgcolor="#ffffff">
                                    <x-auth-session-status class="mb-4" :status="session('status')"/>

                                    <h3 class="mb10">{{ __('Register') }}</h3>
                                    <p>{!! __('Login using an existing account or create a new account <a href=":url">here', ['url' => route('login')]) !!}</a>.
                                    </p>
                                    <form method="POST" action="{{ route('register') }}" class="form-border">
                                        @csrf

                                        <div class="field-set">
                                            <x-text-input id="email" class="block mt-1 w-full" type="text" name="email"
                                                          :value="old('email')" required autofocus
                                                          autocomplete="username" placeholder="{{ __('email') }}"/>
                                            <x-input-error :messages="$errors->get('email')"/>
                                        </div>

                                        <div class="field-set">
                                            <x-text-input id="password" class="block mt-1 w-full"
                                                          type="password"
                                                          name="password"
                                                          placeholder="{{ __('password') }}"
                                                          required autocomplete="current-password"/>
                                            <x-input-error :messages="$errors->get('password')"/>
                                        </div>

                                        <div class="field-set">
                                            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                                          type="password"
                                                          placeholder="{{ __('password confirmation') }}"
                                                          name="password_confirmation" required autocomplete="new-password"/>
                                            <x-input-error :messages="$errors->get('password_confirmation')" />
                                        </div>

                                        <div class="field-set">
                                            <input type='submit' id='send_message' value='{{ __('Register') }}'
                                                   class="btn btn-main btn-fullwidth color-2">
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-5 offset-lg-2 wow fadeInRight" data-wow-delay=".5s">
                                <div class="spacer-10"></div>
                                <h1>{{ __('Your AI Hub for Creativity, Communication, and Contracts.') }}</h1>
                                <p class="lead">
                                    {{ __('Generate stunning image prompts, persuasive emails, and legally sound agreements with AI. Secure, original, and designed for your success.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
