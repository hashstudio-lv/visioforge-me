@extends('themes.itsol.layouts.app')

@section('content')
<div class="flex justify-center mt-15 mb-10">
    <div class="login-container">
        <div class="login-header">
            <h1>{{ __('Welcome Back') }}</h1>
            <p>{{ __('Please login to your account') }}</p>
        </div>

        <form
            method="POST"
            action="{{ route('login') }}"
        >
            @csrf

            <div class="input-group mb-7">
                <div class="input-group__inner">
                    <i class="fas fa-envelope input-icon"></i>
                    <input
                        value="{{ old('email', request()->input('email')) }}"
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
                        name="password"
                        type="password"
                        id="password"
                        placeholder="{{ __('Enter Password') }}"
                    >
                    <i class="fas fa-eye toggle-password" id="togglePassword"></i>
                </div>
                @error('password')
                    <p class="text-sm font-normal mt-2">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary w-full">
                {{ __('Login') }}
            </button>

            <div class="signup-link">
                {{ __("Don't have an account?") }} <a href="{{ route('register') }}">{{ __('Sign up') }}</a>
            </div>
        </form>
    </div>
</div>
@endsection
