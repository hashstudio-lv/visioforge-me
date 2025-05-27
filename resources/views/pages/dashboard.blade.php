@extends('layouts.dashboard')

@section('dashboard-content')
    <div
        class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-5">
        <div class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark">
            <h2 class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                {{ __('Dashboard') }}
            </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-x-30px gap-y-5">
            @foreach([
                ['title' =>  __('Generate Agreements'), 'url' => route('services.show', 'generate-agreement')],
                ['title' =>  __('Generate Emails'), 'url' => route('services.show', 'generate-email')],
                ['title' =>  __('Image Stock'), 'url' => route('products.index')],
            ] as $link)
                <a href="{{ $link['url'] }}"
                   class="p-5 md:px-10 md:py-50px bg-lightGrey5 dark:bg-whiteColor-dark rounded-lg2 shadow-accordion-dark flex items-center justify-center hover:bg-secondaryColor">
                    <p class="text-blackColor font-medium leading-[18px] dark:text-blackColor-dark text-center">
                        {{ $link['title'] }}
                    </p>
                </a>
            @endforeach
        </div>
    </div>
    <div
        class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-5">
        <div class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark">
            <h2 class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                {{ __('Orders') }}
            </h2>
        </div>

        <div class="gap-y-5">
            @if(!$orders->count())
                {{ __("You don't have any orders yet.") }}
            @else
                @foreach($orders as $order)
                    <div class="xl:w-4/12 lg:w-6/12 w-full flex-[0_0_auto] px-[15px] max-w-full mb-[30px] wow fadeInUp">
                        <div
                            class="card-style-fourteen rounded-2xl bg-white p-8 shadow-[0px_10px_30px_rgba(0,0,0,0.05)] hover:shadow-[0px_20px_40px_rgba(0,0,0,0.1)] transition-all duration-300">
                            <div class="flex items-center gap-6 mb-6">
                                @if(in_array($order->product->type, [\App\Enums\ProductType::VIDEO_FROM_IMAGE, \App\Enums\ProductType::VIDEO_FROM_TEXT]))
                                    <video autoplay muted loop playsinline class="w-24 h-24 object-cover rounded-lg">
                                        <source src="{{ $order->url }}" type="video/mp4"/>
                                    </video>
                                @else
                                    <img src="{{ $order->url }}" alt=""
                                         class="w-24 h-24 object-cover rounded-lg shadow">
                                @endif
                                <div>
                                    <h4 class="text-[20px] font-medium text-black mb-1">
                                        {{ $order->product->type->name() }}
                                    </h4>
                                    <div
                                        class="text-[14px] text-gray-400">{{ $order->created_at->format('M d, Y') }}</div>
                                </div>
                            </div>
                            <a href="{{ $order->url }}" download target="_blank"
                               class="btn-twentyOne font-medium tran3s leading-[50px] text-white tracking-[-0.36px] p-[0_35px] rounded-[30px] bg-[var(--prime-ten)] hover:bg-black hover:text-white w-full text-center block">
                                {{ __('Download') }}
                            </a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
