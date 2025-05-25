<x-app-layout>
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>{{ __('Edit Profile') }}</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section id="section-main" aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                            @csrf
                        </form>

                        <form method="post" action="{{ route('profile.update') }}" id="form-create-item"
                              class="form-border">
                            @csrf
                            @method('patch')
                            <div class="wow fadeIn">
                                <div class="field-set">
                                    <h5>{{ __('Profile Information') }}</h5>
                                    <p>{{ __("Update your account's profile information and email address.") }}</p>

                                    <x-text-input id="email" name="email" type="text"
                                                  :value="old('email', $user->email)" required autocomplete="username"/>
                                    <x-input-error class="mt-2" :messages="$errors->get('email')"/>

                                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                        <div>
                                            <p class="text-sm mt-2 text-gray-800">
                                                {{ __('Your email address is unverified.') }}

                                                <button form="send-verification"
                                                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                    {{ __('Click here to re-send the verification email.') }}
                                                </button>
                                            </p>

                                            @if (session('status') === 'verification-link-sent')
                                                <p class="mt-2 font-medium text-sm text-green-600">
                                                    {{ __('A new verification link has been sent to your email address.') }}
                                                </p>
                                            @endif
                                        </div>
                                    @endif

                                    @if (session('status') === 'profile-updated')
                                        <p
                                            x-data="{ show: true }"
                                            x-show="show"
                                            x-transition
                                            x-init="setTimeout(() => show = false, 2000)"
                                            class="text-sm text-gray-600"
                                        >{{ __('Saved.') }}</p>
                                    @endif
                                </div>
                            </div>

                            <input type="button" id="submit" class="btn-main" value="{{ __('Save') }}">
                        </form>

                        <form method="post" action="{{ route('profile.update') }}" id="form-create-item"
                              class="form-border mt-5">
                            @csrf
                            @method('patch')
                            <div class="wow fadeIn">
                                <div class="field-set">
                                    <h5>{{ __('Update Password') }}</h5>
                                    <p>{{ __('Ensure your account is using a long, random password to stay secure.') }}</p>

                                    <x-text-input id="update_password_current_password" name="current_password"
                                                  type="password" autocomplete="current-password"
                                                  placeholder="{{ __('Current password') }}"/>
                                    <x-input-error :messages="$errors->updatePassword->get('current_password')"
                                                   class="mt-2"/>
                                </div>
                                <div class="field-set">
                                    <x-text-input id="update_password_password" name="password" type="password"
                                                  class="mt-1 block w-full" autocomplete="new-password"
                                                  placeholder="{{ __('New password') }}"/>
                                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2"/>
                                </div>
                                <div class="field-set">
                                    <x-text-input id="update_password_password_confirmation"
                                                  name="password_confirmation" type="password" class="mt-1 block w-full"
                                                  autocomplete="new-password"
                                                  placeholder="{{ __('Password confirmation') }}"/>
                                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')"
                                                   class="mt-2"/>
                                </div>

                                <div>
                                    @if (session('status') === 'password-updated')
                                        <p
                                            x-data="{ show: true }"
                                            x-show="show"
                                            x-transition
                                            x-init="setTimeout(() => show = false, 2000)"
                                            class="text-sm text-gray-600"
                                        >{{ __('Saved.') }}</p>
                                    @endif
                                </div>
                            </div>

                            <input type="button" id="submit" class="btn-main" value="{{ __('Save') }}">
                        </form>

                        <div class="mt-5">
                            <h5>{{ __('Delete Account') }}</h5>
                            <p>{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}</p>

                            <x-danger-button
                                x-data=""
                                x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                            >{{ __('Delete Account') }}</x-danger-button>

                            <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                                <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                                    @csrf
                                    @method('delete')

                                    <h2 class="text-lg font-medium text-gray-900">
                                        {{ __('Are you sure you want to delete your account?') }}
                                    </h2>

                                    <p class="mt-1 text-sm text-gray-600">
                                        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                                    </p>

                                    <div class="mt-6">
                                        <x-input-label for="password" value="{{ __('Password') }}" class="sr-only"/>

                                        <x-text-input
                                            id="password"
                                            name="password"
                                            type="password"
                                            class="mt-1 block w-3/4"
                                            placeholder="{{ __('Password') }}"
                                        />

                                        <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2"/>
                                    </div>

                                    <div class="mt-6 flex justify-end">
                                        <x-secondary-button x-on:click="$dispatch('close')">
                                            {{ __('Cancel') }}
                                        </x-secondary-button>

                                        <x-danger-button class="ms-3">
                                            {{ __('Delete Account') }}
                                        </x-danger-button>
                                    </div>
                                </form>
                            </x-modal>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <a href="#" id="back-to-top"></a>
</x-app-layout>
