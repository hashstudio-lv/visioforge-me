@extends('layouts.dashboard')

@section('dashboard-content')
    <div class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-5 max-h-137.5 overflow-auto">
        <div class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark flex items-center justify-between gap-2 flex-wrap">
            <h2 class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                {{ __('Deposits') }}
            </h2>
            <a href="{{ route('deposits.create') }}" class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8">
                {{ __('Top-up Balance') }}
            </a>
        </div>

        @if(!$user->deposits->count())
            <div class="text-[20px] alert alert-secondary" role="alert">
                {{ __("You don't have any deposits yet.") }}
            </div>
        @else
            <div class="overflow-auto">
            <table class="w-full text-left text-nowrap">
                <thead class="text-sm md:text-base text-blackColor dark:text-blackColor-dark bg-lightGrey5 dark:bg-whiteColor-dark leading-1.8 md:leading-1.8">
                <tr>
                    <th class="px-5px py-10px md:px-5">{{ __('Date') }}</th>
                    <th class="px-5px py-10px md:px-5">{{ __('Tokens') }}</th>
                    <th class="px-5px py-10px md:px-5">{{ __('Status') }}</th>
                    <th class="px-5px py-10px md:px-5">{{ __('Price') }}</th>
                </tr>
                </thead>
                <tbody class="text-size-13 md:text-base text-contentColor dark:text-contentColor-dark font-normal">
                @foreach($user->deposits as $deposit)
                <tr class="leading-1.8 md:leading-1.8">
                    <th class="px-5px py-10px md:px-5 font-normal">
                        {{ $deposit->created_at->format('Y-m-d') }}
                    </th>
                    <td class="px-5px py-10px md:px-5">
                        {{ __(':amount VFT', ['amount' => $deposit->amount]) }}
                    </td>
                    <td class="px-5px py-10px md:px-5">
                        {{ $deposit->status }}
                    </td>
                    <td class="px-5px py-10px md:px-5">
                        {{ money(round($deposit->amount * $deposit->exchange_rate, 2), $deposit->currency) }}
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
@endsection
