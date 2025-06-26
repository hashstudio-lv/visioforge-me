@extends('themes.itsol.layouts.app')

@section('content')
<div class="flex justify-center mt-15 mb-10">
    <div class="login-container">
        <div class="login-header">
            <h1>{{ __('Registration') }}</h1>
            <p>{{ __('Please create your account') }}</p>
        </div>

        <form
            method="POST"
            action="{{ route('register') }}"
        >
            @csrf

            <div class="input-group mb-7">
                <div class="input-group__inner">
                    <i class="fas fa-envelope input-icon"></i>
                    <input
                        value="{{ old('email', request()->input('email')) }}"
                        type="email"
                        name="email"
                        placeholder="{{ __('Enter Email') }}"
                    >
                </div>
                @error('email')
                    <p class="text-sm font-normal mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="input-group mb-7">
                <div class="input-group__inner">
                    <i class="fas fa-lock input-icon"></i>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="{{ __('Enter Password') }}"
                        required
                    >
                    <i class="fas fa-eye toggle-password" id="togglePassword"></i>
                </div>
                @error('password')
                    <p class="text-sm font-normal mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="input-group mb-7">
                <div class="input-group__inner">
                    <i class="fas fa-lock input-icon"></i>
                    <input
                        type="password"
                        id="confirmPassword"
                        name="password_confirmation"
                        placeholder="{{ __('Confirm Password') }}"
                        required
                    >
                    <i class="fas fa-eye toggle-password" id="toggleConfirmPassword"></i>
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-full">
                {{ __('Register') }}
            </button>

            <div class="signup-link">
                {{ __("Already have an account?") }} <a href="{{ route('login') }}">{{ __('Login here') }}</a>
            </div>
        </form>
    </div>
</div>
@endsection
