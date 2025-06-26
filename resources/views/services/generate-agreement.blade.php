<x-app-layout>
    <div class="no-bottom" id="content">
        <div id="top"></div>

        <section id="subheader" data-bgimage="url({{ asset('assets/images/background/25.jpg') }}) bottom" data-bgimage-alt="url({{ asset('assets/images/background/25-alt.jpg') }}) bottom">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>{{ __('Agreement generation') }}</h1>
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
                    <div class="col-8">
                        <div class="nft__item p-5">
                            @livewire('agreement-generate')
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="nft__item p-5">
                            <h3>{{ __('Price') }}</h3>
                            <h4>{{ __('1 ART = 1 generation') }}</h4>
                            <div class="mt-3">{{ __('You will receive an archive containing an image and a prompt, with the selected size and format.') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
