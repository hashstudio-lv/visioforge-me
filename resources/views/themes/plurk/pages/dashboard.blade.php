@extends('themes.plurk.layouts.app')

@section('content')
    <div class="-mt-[82px] flex-grow overflow-x-hidden lg:-mt-[106px]">
        @include('themes.plurk.partials.dashboard.hero')

        {{--
        <div id="deposit" style="display: none" class="w-[960px] max-w-full bg-white p-4 dark:bg-gray-dark"></div>
        <button type="button" data-fancybox data-src="#deposit"
                class="group flex items-center gap-2.5 mt-2">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                     fill="#47BDFF" class="size-6" width="30" height="30">
                    <path
                        d="M2.273 5.625A4.483 4.483 0 0 1 5.25 4.5h13.5c1.141 0 2.183.425 2.977 1.125A3 3 0 0 0 18.75 3H5.25a3 3 0 0 0-2.977 2.625ZM2.273 8.625A4.483 4.483 0 0 1 5.25 7.5h13.5c1.141 0 2.183.425 2.977 1.125A3 3 0 0 0 18.75 6H5.25a3 3 0 0 0-2.977 2.625ZM5.25 9a3 3 0 0 0-3 3v6a3 3 0 0 0 3 3h13.5a3 3 0 0 0 3-3v-6a3 3 0 0 0-3-3H15a.75.75 0 0 0-.75.75 2.25 2.25 0 0 1-4.5 0A.75.75 0 0 0 9 9H5.25Z"/>
                </svg>
            </span>
            <span class="uppercase text-gray/20 duration-200 group-hover:text-primary">
                {{ __('Deposit') }}
            </span>
        </button>
        --}}

        <div class="py-14 md:py-[100px]">
            <div class="container">
                @include('themes.plurk.partials.dashboard.nav-bar')
            </div>


            <div class="container space-y-8 mt-10">
                <div class="flex flex-col items-center justify-between sm:flex-row">
                    <div class="heading text-center ltr:sm:text-left rtl:sm:text-right mb-0">
                        @if (!$orders->isEmpty())
                            <h4>
                                {{ __('My creatives') }}
                            </h4>
                        @endif
                    </div>
                </div>
                <div class="space-y-4">
                    @foreach($orders as $order)
                        <div
                            class="rounded-3xl bg-white px-4 py-12 dark:bg-[#101626] lg:px-8" {{--type="button" data-fancybox data-src="#deposit-{{ $deposit->id }}"--}}>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center space-x-4">
                                    @if(in_array($order->product->type, [\App\Enums\ProductType::VIDEO_FROM_IMAGE, \App\Enums\ProductType::VIDEO_FROM_TEXT]))
                                        <video autoplay muted loop playsinline class="w-24 object-cover">
                                            <source src="{{ $order->url }}" type="video/mp4"/>
                                        </video>
                                    @else
                                        <img src="{{ $order->url }}" alt="" class="w-24 shadow">
                                    @endif
                                    <div>
                                        <h4 class="text-primary font-bold text-2xl mb-2">
                                            {{ $order->product->type->name() }}
                                        </h4>
                                        <div>{{ $order->created_at }}</div>
                                    </div>
                                </div>
                                <div class="">
                                    <a href="{{ $order->url }}" download target="_blank"
                                       class="btn bg-primary px-12 capitalize text-white dark:bg-white dark:text-black dark:hover:bg-secondary">
                                        {{ __('Download') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
