@extends('layouts.app')

@section('content')
    <main class="bg-transparent">
        <section>
            <div class="container lg:container 3xl:container-secondary 4xl:container pt-30px">
                <div
                    class="bg-primaryColor p-5 md:p-10 rounded-5 flex justify-center md:justify-between items-center flex-wrap gap-2">
                    <div class="flex items-center flex-wrap justify-center sm:justify-start">
                        <div class="text-whiteColor font-bold text-center sm:text-start">
                            <h5 class="text-xl leading-1.2 mb-5px">{{ __('Hello') }}</h5>
                            <h2 class="text-2xl leading-1.24">{{ auth()->user()->email }}</h2>
                        </div>
                    </div>
                    <a href="{{ route('deposits.create') }}" class="text-whiteColor">
                        <span class="uppercase text-xs">{{ __('Balance') }}</span><br>
                        <span class="font-bold text-2xl">{{ __(':amount VFT', ['amount' => auth()->user()->balance]) }}</span>
                    </a>
                </div>
            </div>
        </section>

        <section>
            <div class="container lg:container 3xl:container-secondary 4xl:container">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-30px pt-30px pb-100px">
                    <div class="lg:col-start-1 lg:col-span-3">
                        <div
                            class="p-30px pt-5 lg:p-5 2xl:p-30px 2xl:pt-5 rounded-lg2 shadow-accordion dark:shadow-accordion-dark bg-whiteColor dark:bg-whiteColor-dark"
                        >
                            <h5
                                class="text-sm leading-1 font-semibold uppercase text-contentColor dark:text-contentColor-dark bg-lightGrey5 dark:bg-whiteColor-dark p-10px pb-7px mt-5 mb-10px"
                            >
                                {{ __('Welcome, :name', ['name' => auth()->user()->email]) }}
                            </h5>
                            <ul>
                                @foreach([
                                    ['url' => route('dashboard'), 'title' => __('Dashboard'), 'is_active' => request()->route()->getName() == 'dashboard'],
                                    ['url' => route('services.show', 'generate-agreement'), 'title' =>  __('Generate Agreements'), 'is_active' => false],
                                    ['url' => route('services.show', 'generate-email'), 'title' =>  __('Generate Emails'), 'is_active' => false],
                                    ['url' => route('products.index'), 'title' =>  __('Image Stock'), 'is_active' => false],
                                ] as $link)
                                    <li class="py-10px @if(!$loop->last) border-b border-borderColor dark:border-borderColor-dark @endif">
                                        <a href="{{ $link['url'] }}"
                                           class="@if($link['is_active']) text-primaryColor hover:text-primaryColor dark:hover:text-primaryColor @else text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor @endif leading-1.8 flex gap-3 text-nowrap ">
                                            {{ $link['title'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                            <h5 class="text-sm leading-1 font-semibold uppercase text-contentColor dark:text-contentColor-dark bg-lightGrey5 dark:bg-whiteColor-dark p-10px pb-7px mt-5 mb-10px">
                                {{ __('Deposits') }}
                            </h5>

                            <ul>
                                @foreach([
                                    ['url' => route('deposits.index'), 'title' => __('My Deposits'), 'is_active' => in_array(request()->route()->getName(), ['deposits.index'])],
                                    ['url' => route('deposits.create'), 'title' => __('Top-Up Balance'), 'is_active' => in_array(request()->route()->getName(), ['deposits.create'])],
                                ] as $link)
                                    <li class="py-10px @if(!$loop->last) border-b border-borderColor dark:border-borderColor-dark @endif">
                                        <a href="{{ $link['url'] }}"
                                           class="@if($link['is_active']) text-primaryColor hover:text-primaryColor dark:hover:text-primaryColor @else text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor @endif leading-1.8 flex gap-3 text-nowrap ">
                                            {{ $link['title'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                            <h5 class="text-sm leading-1 font-semibold uppercase text-contentColor dark:text-contentColor-dark bg-lightGrey5 dark:bg-whiteColor-dark p-10px pb-7px mt-5 mb-10px">
                                {{ __('User') }}
                            </h5>
                            <ul>
                                <li class="py-10px">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); this.closest('form').submit();"
                                           class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap">
                                            {{ __('Logout') }}
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="lg:col-start-4 lg:col-span-9">
                        @yield('dashboard-content')
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
