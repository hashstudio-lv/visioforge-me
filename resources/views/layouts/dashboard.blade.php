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
                    <div class="text-center">
                        <div class="text-yellow">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-star inline-block"
                            >
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"
                                ></polygon>
                            </svg>
                        </div>
                        <p class="text-whiteColor">4.0 (120 Reviews)</p>
                    </div>
                    <div>
                        <a
                            href="create-course.html"
                            class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px border border-whiteColor hover:text-primaryColor hover:bg-whiteColor rounded group text-nowrap flex gap-1 items-center"
                        >
                            Create a New Course
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-arrow-right"
                            >
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                    </div>
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
                                    ['url' => route('services.show', 'generate-agreements'), 'title' =>  __('Generate Agreements'), 'is_active' => false],
                                    ['url' => route('services.show', 'generate-emails'), 'title' =>  __('Generate Emails'), 'is_active' => false],
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
