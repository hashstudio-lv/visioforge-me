<!-- navbar start -->
<div
    class="transition-all duration-500 sticky-header z-medium dark:bg-whiteColor-dark lg:border-b border-borderColor dark:border-borderColor-dark"
>
    <nav>
        <div
            class="py-15px lg:py-0 px-15px container sm:container-fluid lg:container 3xl:container-secondary 4xl:container mx-auto relative"
        >
            <div class="grid grid-cols-2 lg:grid-cols-12 items-center gap-15px">
                <!-- navbar left -->
                <div class="lg:col-start-1 lg:col-span-2">
                    <a href="{{ route('home') }}" class="block">
                        Visio Forge
                    </a>
                </div>
                <!-- Main menu -->
                <div class="hidden lg:block lg:col-start-3 lg:col-span-7">
                    <ul class="nav-list flex justify-center">
                        @foreach([
                            ['title' => 'Generate Agreements', 'url' => route('home')],
                            ['title' => 'Generate Emails', 'url' => route('home')],
                            ['title' => 'Image Stock', 'url' => route('products.index')],
                        ] as $item)
                            <li class="nav-item group">
                                <a href="{{ $item['url'] }}"
                                   class="px-5 lg:px-10px 2xl:px-15px 3xl:px-5 py-10 lg:py-5 2xl:py-30px 3xl:py-10 leading-sm 2xl:leading-lg text-base lg:text-sm 2xl:text-base font-semibold block group-hover:text-primaryColor dark:text-whiteColor">
                                    {{ $item['title'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- navbar right -->
                <div class="lg:col-start-10 lg:col-span-3">
                    <ul class="relative nav-list flex justify-end items-center">
                        @if(auth()->check())
                            <li class="hidden lg:block">
                                <a href="{{ route('login') }}"
                                   class="text-size-12 2xl:text-size-15 px-15px py-2 text-blackColor hover:text-whiteColor bg-whiteColor block hover:bg-primaryColor border border-borderColor1 rounded-standard font-semibold mr-[7px] 2xl:mr-15px dark:text-blackColor-dark dark:bg-whiteColor-dark dark:hover:bg-primaryColor dark:hover:text-whiteColor dark:hover:border-primaryColor">
                                    <i class="icofont-user-alt-5"></i>
                                </a>
                            </li>
                        @else
                            <li class="hidden lg:block">
                                <a href="{{ route('login') }}"
                                   class="text-size-12 2xl:text-size-15 px-15px py-2 text-blackColor hover:text-whiteColor bg-whiteColor block hover:bg-primaryColor border border-borderColor1 rounded-standard font-semibold mr-[7px] 2xl:mr-15px dark:text-blackColor-dark dark:bg-whiteColor-dark dark:hover:bg-primaryColor dark:hover:text-whiteColor dark:hover:border-primaryColor">
                                    <i class="icofont-user-alt-5"></i>
                                </a>
                            </li>
                            <li class="hidden lg:block">
                                <a href="{{ route('register') }}"
                                   class="text-size-12 2xl:text-size-15 text-whiteColor bg-primaryColor block border-primaryColor border hover:text-primaryColor hover:bg-white px-15px py-2 rounded-standard dark:hover:bg-whiteColor-dark dark: dark:hover:text-whiteColor">
                                    {{ __('Get Start') }}
                                </a>
                            </li>
                            <li class="block lg:hidden">
                                <button
                                    class="open-mobile-menu text-3xl text-darkdeep1 hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">
                                    <i class="icofont-navigation-menu"></i>
                                </button>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- navbar end -->
