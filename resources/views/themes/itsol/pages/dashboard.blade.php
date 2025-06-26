@extends("themes.itsol.layouts.dashboard.main")

@section("dashboard-title")
    {{ __("Dashboard") }}
@endsection

@section("dashboard-content")
    <div
        id="content"
        class="no-bottom no-top"
    >
        <div id="top"></div>

        <section aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-8">
                            @if (!$orders->count())
                                <div class="bg-light sp30px rounded-2xl">
                                    <div
                                        class="alert alert-secondary text-[20px]"
                                        role="alert"
                                    >
                                        {{ __("You don't have any orders yet.") }}
                                    </div>
                                </div>
                            @else
                                <ul class="flex flex-col gap-6">
                                    @foreach ($orders as $order)
                                        <li>
                                            <div
                                                class="bg-light sp30px flex flex-wrap items-center justify-between gap-4 rounded-2xl sm:flex-nowrap md:gap-6">
                                                <div class="flex items-center gap-4 md:gap-6">
                                                    <div
                                                        class="border-gray block rounded-[10px] border p-[5px] duration-300">
                                                        @if ($order->product)
                                                            <img
                                                                src="{{ $order->url }}"
                                                                class="size-[80px] rounded-lg object-cover"
                                                                alt="{{ $order->product->title ?? "Product" }}"
                                                            >
                                                        @else
                                                            <div
                                                                class="bg-primary flex size-[80px] items-center justify-center rounded-full">
                                                                <i class="ti ti-shopping-cart text-2xl text-white"></i>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div>
                                                        <ul class="divide-gray flex flex-wrap items-center divide-x">
                                                            @isset($order->product)
                                                                @if($order->product->category)
                                                                    <li class="pr-4">
                                                                        <span
                                                                            class="text-primary inline-block pr-4 text-sm font-medium md:text-lg"
                                                                        >
                                                                            {{ __("Category") }}:
                                                                            {{ $order->product ? $order->product->category : __("No Category") }}
                                                                        </span>
                                                                    </li>
                                                                @endif
                                                            @endisset
                                                            <li>
                                                                <div class="flex items-center gap-2">
                                                                    <i class="ti ti-clock"></i>
                                                                    <span class="inline-block text-sm md:text-lg">
                                                                        {{ $order->created_at->diffForHumans() }}
                                                                    </span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <h5 class="mt-3">
                                                            <span class="h5 text-title block">
                                                                {{ $order->product ? $order->product->title : __("Product not found") }}
                                                            </span>
                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="text-primary min-w-[100px] text-right text-2xl font-bold">
                                                    {{ __(":amount SVT", ["amount" => $order->product ? $order->product->price : "N/A"]) }}
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
