<header id="top-header" class="sticky top-0 z-50 bg-black/10 transition duration-300">
    <div class="container">
        <div class="relative flex items-center justify-between py-5 lg:py-0">
            <a href="{{ route('home') }}" class="text-primary font-bold uppercase text-2xl">
                Video Creator <span class="text-white text-sm">PRO</span>
            </a>
            <div class="flex items-center">
                <div onclick="toggleMenu()" class="overlay fixed inset-0 z-[51] hidden bg-black/60 lg:hidden"></div>
                <div class="menus">
                    <div class="border-b border-gray/10 ltr:text-right rtl:text-left lg:hidden">
                        <button onclick="toggleMenu()" type="button" class="p-4">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="h-6 w-6 text-black dark:text-white"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">
                                {{ __('Home') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pages.show', 'about-us') }}">
                                {{ __('About us') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('orders.image-to-video') }}">
                                {{ __('Image to Video') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('orders.text-to-video') }}">
                                {{ __('Text to Video') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pages.show', 'photo') }}">
                                {{ __('Photo Tools') }}
                            </a>
                        </li>
                        @if(auth()->check())
                            <li class="relative hidden items-center before:absolute before:top-1/2 before:h-[30px] before:w-[2px] before:-translate-y-1/2 before:bg-gray/30 ltr:pl-9 ltr:before:-left-[2px] rtl:pr-9 rtl:before:-right-[2px] lg:inline-flex">
                                <a href="{{ route('login') }}">
                                    {{ __('Dashboard') }}
                                </a>
                            </li>
                        @else
                            <li class="relative hidden items-center before:absolute before:top-1/2 before:h-[30px] before:w-[2px] before:-translate-y-1/2 before:bg-gray/30 ltr:pl-9 ltr:before:-left-[2px] rtl:pr-9 rtl:before:-right-[2px] lg:inline-flex">
                                <a href="{{ route('login') }}">
                                    {{ __('Login') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}">
                                    {{ __('Register') }}
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
                <button type="button"
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-primary lg:hidden"
                        onclick="toggleMenu()">
                    <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg"
                         class="text-white">
                        <path
                            d="M2 15H11C11.552 15 12 15.447 12 16C12 16.553 11.552 17 11 17H2C1.448 17 1 16.553 1 16C1 15.447 1.448 15 2 15Z"
                            fill="currentColor"
                        />
                        <path
                            d="M2 8H20C20.552 8 21 8.447 21 9C21 9.553 20.552 10 20 10H2C1.448 10 1 9.553 1 9C1 8.447 1.448 8 2 8Z"
                            fill="currentColor"
                        />
                        <path
                            d="M21 2C21 1.447 20.552 1 20 1H7C6.448 1 6 1.447 6 2C6 2.553 6.448 3 7 3H20C20.552 3 21 2.553 21 2Z"
                            fill="currentColor"
                        />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>
