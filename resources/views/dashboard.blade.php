@extends('themes.plurk.layouts.app')

@section('content')
<div class="main-page-wrapper overflow-x-hidden">
    <!-- Dashboard Hero Section -->
    @include('themes.plurk.partials.dashboard.hero')

    <!-- Dashboard Content -->
    <div class="fancy-feature-thirtyOne bg-white relative z-[2] pt-[140px] pb-[100px] lg:pt-[100px] lg:pb-[50px]">
        <div class="container">
            <!-- Dashboard Navigation -->
            @include('themes.plurk.partials.dashboard.nav-bar')

            <!-- My Creatives Section -->
            <div class="mt-[70px]">
                @if (!$orders->isEmpty())
                <div class="title-style-ten text-center pb-10 lg:pb-5 wow fadeInUp">
                    <h2 class="main-title font-Recoleta font-normal text-black tracking-[0] leading-[1.17em] 2xl:text-[54px] md:text-[35px]">
                        My <span class="relative">Creatives<img class="absolute z-[-1] left-0 bottom-[9px]" src="/images/shape/shape_122.svg" alt=""></span>
                    </h2>
                    <p class="text-[20px] lg:text-[18px] mt-5">Your generated content and designs</p>
                </div>
                @endif

                <!-- Orders Grid -->
                <div class="flex flex-wrap mx-[-15px]">
                    @foreach($orders as $order)
                    <div class="xl:w-4/12 lg:w-6/12 w-full flex-[0_0_auto] px-[15px] max-w-full mb-[30px] wow fadeInUp">
                        <div class="card-style-fourteen rounded-2xl bg-white p-8 shadow-[0px_10px_30px_rgba(0,0,0,0.05)] hover:shadow-[0px_20px_40px_rgba(0,0,0,0.1)] transition-all duration-300">
                            <div class="flex items-center gap-6 mb-6">
                                @if(in_array($order->product->type, [\App\Enums\ProductType::VIDEO_FROM_IMAGE, \App\Enums\ProductType::VIDEO_FROM_TEXT]))
                                <video autoplay muted loop playsinline class="w-24 h-24 object-cover rounded-lg">
                                    <source src="{{ $order->url }}" type="video/mp4"/>
                                </video>
                                @else
                                <img src="{{ $order->url }}" alt="" class="w-24 h-24 object-cover rounded-lg shadow">
                                @endif
                                <div>
                                    <h4 class="text-[20px] font-medium text-black mb-1">
                                        {{ $order->product->type->name() }}
                                    </h4>
                                    <div class="text-[14px] text-gray-400">{{ $order->created_at->format('M d, Y') }}</div>
                                </div>
                            </div>
                            <a href="{{ $order->url }}" download target="_blank"
                               class="btn-twentyOne font-medium tran3s leading-[50px] text-white tracking-[-0.36px] p-[0_35px] rounded-[30px] bg-[var(--prime-ten)] hover:bg-black hover:text-white w-full text-center block">
                                {{ __('Download') }}
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>

                @if($orders->isEmpty())
                <div class="text-center py-20 wow fadeInUp">
                    <div class="max-w-[500px] mx-auto">
                        <img src="/images/icon/empty_state.svg" alt="No creatives" class="mx-auto mb-8 w-[120px]">
                        <h3 class="text-[24px] font-medium text-black mb-3">No creatives yet</h3>
                        <p class="text-[16px] text-gray-500 mb-6">You haven't generated any creatives yet. Get started by creating your first design.</p>
                        <a href="#" class="btn-twentyOne font-medium tran3s leading-[50px] text-white tracking-[-0.36px] p-[0_35px] rounded-[30px] bg-[var(--prime-ten)] hover:bg-black hover:text-white inline-block">
                            Create Now
                        </a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .card-style-fourteen {
        transition: all 0.3s ease;
        border: 1px solid rgba(0,0,0,0.05);
    }
    .card-style-fourteen:hover {
        transform: translateY(-5px);
    }
</style>
@endpush