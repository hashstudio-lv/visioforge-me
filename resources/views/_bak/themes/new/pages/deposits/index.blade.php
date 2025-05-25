@extends('themes.new.layouts.dashboard.main')

@section('dashboard-title')
    {{ __('List of deposits') }}
@endsection

@section('dashboard-title-addition')
    <a
        href="{{ route('deposits.create') }}"
        class="tran3s text-[20px] font-medium btn-three text-white leading-[52px] relative transition-all duration-[0.3s] ease-[ease-in-out] p-[0_40px] rounded-[28px] bg-[var(--prime-two)] hover:bg-[#090F32] md:p-[0_35px] md:leading-[48px] sm:p-[0_35px] sm:leading-[48px] xsm:p-[0_35px] xsm:leading-[48px] lg:text-[15px] md:text-[15px] sm:text-[15px] xsm:text-[15px]"
    >
        Create Deposit
    </a>
@endsection

@section('dashboard-content')
<div class="flex-grow overflow-x-hidden lg:-mt-[150px]">
    <div class="py-14 md:py-[100px]">
        <div class="container">
            @if(!$user->deposits->count())
                <div class="text-[20px] alert alert-secondary mb-4" role="alert" style="background-size: cover;">
                    {{ __("You don't have any deposits yet.") }}
                </div>
            @else
                <div class="space-y-4">
                @foreach($user->deposits as $deposit)
                    <div class="block-style-eight mb-[30px] border pt-[22px] pb-[18px] px-[35px] rounded-[7px] border-solid border-[#EAEAEA] bg-white ">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-[15px]">
                                <div>
                                    <div style="background: #ffd338;" class="icon flex items-center justify-center relative rounded-[50%] w-[65px] h-[65px] lg:w-[60px] lg:h-[60px] md:w-[60px] md:h-[60px] sm:w-[60px] sm:h-[60px] xsm:w-[60px] xsm:h-[60px] border-[3px] border-solid border-black before:content-[''] before:absolute before:w-[calc(100%_+_6px)] before:h-[calc(100%_+_6px)] before:top-[-3px] before:z-[-1] before:rounded-[50%] before:left-[5px] md:m-[0_auto] sm:m-[0_auto] xsm:m-[0_auto] before:bg-[var(--prime-six)]">
                                        <img
                                            src="{{ asset('/assets2/images/lazy.svg') }}"
                                            data-src="{{ asset('/assets2/images/icon/coin-stack.png') }}"
                                            alt=""
                                            class="lazy-img"
                                        >
                                    </div>
                                </div>

                                <div>
                                    <h6 class="font-bold text-[20px] mb-2">{{ __('Deposit') }}</h6>

                                    <p class="text-[15px] leading-6 text-[rgba(0,40,78,0.6)] mb-1">
                                        {{ __('Status') }}: {{ $deposit->status }}
                                    </p>
                                    <p class="text-[15px] leading-6 text-[rgba(0,40,78,0.6)] mb-1">
                                        {{ __('Date') }}: {{ $deposit->created_at->format('Y-m-d') }}
                                    </p>
                                </div>
                            </div>

                            <div>
                                <p class="details-btn font-bold text-[15px] text-black mb-1">
                                    {{ __(':amount SAT', ['amount' => $deposit->amount]) }}
                                </p>
                                <p class="details-btn font-bold text-[15px] text-black mb-1">
                                    {{ money(round($deposit->amount * $deposit->exchange_rate, 2), $deposit->currency) }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
