@extends('themes.new.layouts.dashboard.main')

@section('dashboard-title')
    {{ __('Dashboard') }}
@endsection

@section('dashboard-content')
    @foreach($orders as $order)
        <div class="block-style-eight mb-[30px] border pt-[22px] pb-[18px] px-[35px] rounded-[7px] border-solid border-[#EAEAEA] bg-white ">
            <div class="flex justify-between items-center">
                <div class="flex items-center gap-[15px]">
                    <img src="{{ $order->url }}" alt="" width="200px">

                    <div>
                        <div class="text-[15px] leading-6 text-[rgba(0,40,78,0.6)]">
                            {{ $order->product->type->name() }}
                        </div>
                        <div class="font-bold text-[20px]">
                            {{ $order->product->title }}
                        </div>
                    </div>
                </div>

                <div class="text-center">

                    <div class="text-[28px] details-btn font-bold text-black">
                        {{ $order->product->price }} SVT
                    </div>
                    <div class="text-[14px] leading-6 text-[rgba(0,40,78,0.6)]">
                        {{ $order->created_at->format('d.m.Y') }}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
