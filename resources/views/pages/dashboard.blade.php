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
                <ul>

                    @foreach($orders as $order)
                        <li class="flex items-center flex-wrap py-5 border-b border-borderColor dark:border-borderColor-dark">
                            <!-- avatar -->
                            <div class="w-full md:w-30% md:pr-5">
                                <div class="w-full">
                                    @if(in_array($order->product->type, [\App\Enums\ProductType::VIDEO_FROM_IMAGE, \App\Enums\ProductType::VIDEO_FROM_TEXT]))
                                        <video autoplay muted loop playsinline
                                               class="w-24 h-24 object-cover rounded-lg">
                                            <source src="{{ $order->url }}" type="video/mp4"/>
                                        </video>
                                    @elseif(in_array($order->product->type, [\App\Enums\ProductType::AGREEMENT, \App\Enums\ProductType::EMAIL]))

                                    @else
                                        <img src="{{ $order->url }}" alt=""
                                             class="w-24 h-24 object-cover rounded-lg shadow">
                                    @endif
                                </div>
                            </div>
                            <!-- details -->
                            <div class="w-full md:w-70% md:pr-5">
                                <div>
                                    <h5 class="text-lg leading-1.5 font-medium text-contentColor dark:text-contentColor-dark mb-5px">
                                        <div class="flex justify-between items-center mb-2">
                                            <div>
                                                {{ $order->created_at->format('M d, Y') }}
                                            </div>
                                            <div class="text-primaryColor font-bold text-3xl">
                                                {{ __(':amount VFT', ['amount' => $order->price]) }}
                                            </div>
                                        </div>
                                        <div class="hover:text-primaryColor">
                                            {{ \Illuminate\Support\Str::limit($order->product->prompt, 150) }}
                                        </div>
                                    </h5>
                                </div>

                                <div class="mt-2">
                                    @if($order->product->type == \App\Enums\ProductType::IMAGE)
                                        <div x-data="{ showForm: false }">
                                            <!-- Prepare Button -->
                                            <button
                                                type="button"
                                                @click="showForm = true"
                                                x-show="!showForm"
                                                class="text-sm md:text-size-15 text-whiteColor bg-primaryColor border border-primaryColor px-25px py-15px hover:text-primaryColor hover:bg-whiteColor rounded inline-block dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor"
                                            >
                                                {{ __('Prepare for download') }}
                                            </button>

                                            <!-- Download Form -->
                                            <form
                                                action="{{ route('orders.download', $order->id) }}"
                                                method="post"
                                                x-show="showForm"
                                                x-transition
                                                class="mt-4"
                                            >
                                                @csrf

                                                <p class="mb-3">
                                                    {{ __('The English prompt will be automatically downloaded together with the image in a .txt format.') }}
                                                </p>

                                                <div class="mb-25px">
                                                    <label
                                                        class="text-contentColor dark:text-contentColor-dark mb-10px block"
                                                        id="input-format">
                                                        {{ __('Format') }}
                                                    </label>
                                                    <select name="format" id="input-format" class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded">
                                                        @foreach(\App\Services\ImageService::AVAILABLE_FORMATS as $format)
                                                            <option value="{{ $format }}">{{ ".{$format}" }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="mb-25px">
                                                    <label
                                                        class="text-contentColor dark:text-contentColor-dark mb-10px block"
                                                        id="input-format">
                                                        {{ __('Size') }}
                                                    </label>
                                                    <select name="size" id="input-size" class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded">
                                                        @foreach(\App\Services\ImageService::AVAILABLE_SIZES as $key => $size)
                                                            <option value="{{ $key }}">{{ "{$size['width']}x{$size['height']}" }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <button
                                                    type="submit"
                                                    class="text-sm md:text-size-15 text-whiteColor bg-primaryColor border border-primaryColor px-25px py-15px hover:text-primaryColor hover:bg-whiteColor rounded inline-block dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor"
                                                >
                                                    {{ __('Download') }}
                                                </button>
                                            </form>
                                        </div>

                                    @else
                                        <a href="{{ $order->url }}" download target="_blank"
                                           class="text-sm md:text-size-15 text-whiteColor bg-primaryColor border border-primaryColor px-25px py-15px hover:text-primaryColor hover:bg-whiteColor rounded inline-block dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor">
                                            {{ __('Download') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </li>
                    @endforeach

                </ul>
            @endif
        </div>
    </div>
@endsection
