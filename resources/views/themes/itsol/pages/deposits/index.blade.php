@extends("themes.itsol.layouts.dashboard.main")

@section("dashboard-title")
    {{ __("Deposits") }}
@endsection

@section("dashboard-under-content")
    <div class="flex justify-center">
        <a
            href="{{ route("deposits.create") }}"
            class="btn btn-primary px-10"
        >
            {{ __("Create Deposit") }}
        </a>
    </div>
@endsection

@section("dashboard-content")
    @if (!$user->deposits->count())
        <div class="bg-light sp30px rounded-2xl">
            <div
                class="alert alert-secondary text-[20px]"
                role="alert"
                style="background-size: cover;"
            >
                {{ __("You don't have any deposits yet.") }}
            </div>
        </div>
    @else
        <ul class="flex flex-col gap-6">
            @foreach ($user->deposits as $deposit)
                <li>
                    <div class="bg-light sp30px flex flex-wrap items-center gap-4 rounded-2xl sm:flex-nowrap md:gap-6">
                        <div
                            class="border-gray block w-full rounded-[10px] border p-[5px] duration-300 min-[440px]:w-auto min-[440px]:shrink-0">
                            <div class="bg-primary size-[80px] rounded-full p-3">
                                <img
                                    src="{{ asset("assets3/images/home-12-top-features-3.png") }}"
                                    class="max-[440px]:w-full"
                                    alt="Deposit Icon"
                                />
                            </div>
                        </div>
                        <div>
                            <ul class="divide-gray flex flex-wrap items-center divide-x">
                                <li>
                                    <span class="text-primary inline-block pr-4 text-sm font-medium md:text-lg">
                                        {{ __("Status") }}: {{ $deposit->status }}
                                    </span>
                                </li>
                                <li>
                                    <div class="flex items-center gap-2 pl-4">
                                        <i class="ti ti-alarm"></i>
                                        <span class="inline-block text-sm md:text-lg">
                                            {{ __("Date") }}: {{ $deposit->created_at->format("Y-m-d") }}
                                        </span>
                                    </div>
                                </li>
                            </ul>
                            <h5 class="mt-3">
                                <span class="h5 text-title block">
                                    {{ __(":amount SVT", ["amount" => $deposit->amount]) }}
                                    ({{ money(round($deposit->amount * $deposit->exchange_rate, 2), $deposit->currency) }})
                                </span>
                            </h5>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
