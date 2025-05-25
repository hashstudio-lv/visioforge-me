<x-app-layout>
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <section id="subheader">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>{{ __('My profile') }}</h1>
                            <div class="h3">
                                {{ __('Balance: :balance AET', ['balance' => auth()->user()->balance]) }}
                            </div>
                        </div>
                        <div class="mt-3">
                            <a href="{{ route('deposits.create') }}" class="btn-main btn-wallet">
                                {{ __('Make a deposit') }}
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>

        <section aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-4">
                            <a href="{{ route('dashboard') }}" class="btn-main">{{ __('Orders') }}</a>
                            <a href="{{ route('deposits.index') }}" class="btn-main">{{ __('Deposits') }}</a>
                        </div>
                        <div>
                            @if(!$user->deposits->count())
                                <div class="alert alert-secondary" role="alert" style="background-size: cover;">
                                    {{ __("You don't have any deposits yet.") }}
                                </div>
                            @else
                                @foreach($user->deposits as $deposit)
                                    <div class="nft__item" role="button" data-bs-toggle="modal"
                                         data-bs-target="{{ "#deposit-{$deposit->id}" }}">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h4>{{ __('Deposit') }}</h4>
                                                <div>{{ __('Status') }}: {{ $deposit->status }}</div>
                                                <span class="act_list_date">
                                                            {{ $deposit->created_at->diffForHumans() }}
                                                        </span>
                                            </div>
                                            <div class="h2 text-right mb-0">
                                                {{ __(':amount AET', ['amount' => $deposit->amount]) }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="{{ "deposit-{$deposit->id}" }}" tabindex="-1"
                                         aria-labelledby="{{ "deposit-{$deposit->id}" }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered de-modal">
                                            <div class="modal-content">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                <div class="modal-body">
                                                    <div class="p-3 form-border">
                                                        <h3>{{ __('Deposit') }}</h3>
                                                        <div class="h1 text-center">
                                                            {{ __(':amount AET', ['amount' => $deposit->amount]) }}
                                                        </div>
                                                        @foreach([
                                                            __('First Name') => $deposit->first_name,
                                                            __('Last Name') => $deposit->last_name,
                                                            __('Email') => $deposit->email,
                                                            __('Date') => $deposit->created_at->format('d.m.Y'),
                                                            __('Status') => $deposit->status,
                                                        ] as $title => $value)
                                                            <div class="de-flex">
                                                                <div>{{ $title }}</div>
                                                                <div>
                                                                    <b>{{ $value }}</b>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <a href="#" id="back-to-top"></a>
</x-app-layout>
