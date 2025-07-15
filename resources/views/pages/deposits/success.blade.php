@extends('layouts.dashboard')

@section('content')
    <div class="flex-grow overflow-x-hidden">
        <div class="py-14 md:py-[100px]">
            <div class="container">
                <div class="bg-white dark:bg-[#101626] rounded-3xl p-8 text-center">
                    <div class="text-green-500 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold mb-4">{{ __('Payment Completed Successfully!') }}</h2>
                    <p class="mb-6 text-gray-600 dark:text-gray-300">
                        {{ __('Thank you for your payment. Your transaction has been completed successfully.') }}
                    </p>
                    <div class="flex justify-center gap-4">
                        <a href="{{ route('dashboard') }}" class="btn bg-primary text-white hover:bg-primary-dark">
                            {{ __('Go to Dashboard') }}
                        </a>
                        <a href="{{ route('deposits.create') }}" class="btn bg-gray-200 text-gray-800 hover:bg-gray-300 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600">
                            {{ __('Make Another Deposit') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
