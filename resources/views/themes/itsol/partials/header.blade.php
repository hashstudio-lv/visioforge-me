<!-- scroll top -->
<button
    class="scroll-top border-danger text-n8 hover:border-primary hover:text-title group fixed bottom-8 right-5 z-50 flex size-12 translate-y-20 items-center justify-center rounded-full border-2 bg-white opacity-0 duration-300 sm:bottom-10 sm:right-10"
>
    <div class="bg-danger group-hover:bg-primary flex size-9 items-center justify-center rounded-full duration-300">
        <i class="ti ti-chevrons-up text-2xl text-white duration-300"></i>
    </div>
</button>
<!-- Header Top -->
<nav class="relative hidden bg-[#DFDAFF]/20 xl:block ">
    <div class="container flex items-center justify-between px-3 py-3 md:py-5">
        <!-- Info List -->
        <ul class="divide-gray xxl:text-lg hidden divide-x text-base xl:flex">
            <li>
                <div class="xxl:px-5 flex items-center gap-2 px-4">
                    <div class="text-primary flex items-center justify-center rounded-full bg-[#DFDAFF] p-1">
                        <i class="ti ti-mail-filled text-[24px]"></i>
                    </div>
                    <span class="flex flex-col gap-1">
                        <a
                            href="mailto:{{ __(env("COMPANY_EMAIL")) }}"
                            class=""
                        > {{ __(env("COMPANY_EMAIL")) }} </a>
                    </span>
                </div>
            </li>
            <li>
                <div class="xxl:px-5 flex items-center gap-2 px-4">
                    <div class="text-primary flex items-center justify-center rounded-full bg-[#DFDAFF] p-1">
                        <i class="ti ti-phone-call text-[24px]"></i>
                    </div>
                    <span class="flex flex-col gap-1">
                        <a
                            href="tel:{{ __(env('COMPANY_PHONE')) }}"
                            class=""
                        > {{ __(env('COMPANY_PHONE')) }} </a>
                    </span>
                </div>
            </li>

            <li>
                <div class="xxl:px-5 flex items-center gap-2 px-4">
                    <div class="text-primary flex items-center justify-center rounded-full bg-[#DFDAFF] p-1">
                        <i class="ti ti-map-pin text-[24px]"></i>
                    </div>
                    <span class="flex flex-col gap-1">
                        <span>{{ __(env("COMPANY_ADDRESS")) }}</span>
                    </span>
                </div>
            </li>
        </ul>
        <div class="divide-gray flex divide-x">
            <ul class="flex gap-2">
                <li>
                    <a
                        aria-label="facebook link"
                        href="{{ env('SOCIAL_NETWORK_FACEBOOK') }}"
                        class="text-primary hover:bg-primary hover:text-n8 inline-flex rounded-full p-1 duration-300"
                    >
                        <i class="ti ti-brand-facebook text-[24px]"></i>
                    </a>
                </li>
                <li>
                    <a
                        aria-label="twitter link"
                        href="{{ env('SOCIAL_NETWORK_X') }}"
                        class="text-primary hover:bg-primary hover:text-n8 inline-flex rounded-full p-1 duration-300"
                    >
                        <i class="ti ti-brand-x text-[24px]"></i>
                    </a>
                </li>
                <li>
                    <a
                        aria-label="instagram link"
                        href="{{ env('SOCIAL_NETWORK_INSTAGRAM') }}"
                        class="text-primary hover:bg-primary hover:text-n8 inline-flex rounded-full p-1 duration-300"
                    >
                        <i class="ti ti-brand-instagram text-[24px]"></i>
                    </a>
                </li>
                <li>
                    <a
                        aria-label="Linkedin link"
                        href="{{ env('SOCIAL_NETWORK_YOUTUBE') }}"
                        class="text-primary hover:bg-primary hover:text-n8 inline-flex rounded-full p-1 duration-300"
                    >
                        <i class="ti ti-brand-youtube text-[24px]"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Mobile Menu -->
<div class="relative w-full xl:hidden">
    <div
        id="overlay"
        class="invisible fixed right-0 top-0 z-[32] h-screen w-0 bg-black bg-opacity-60 duration-700 ease-in-out"
    ></div>
    <nav class="fixed top-0 z-[31] w-full bg-white shadow-lg xl:hidden">
        <div class="container relative flex items-center justify-between px-3 py-3 md:py-5">
            <a href="{{ route("home") }}">
                <h2 class="h4">
                    {{ __(env("COMPANY_NAME")) }}
                </h2>
            </a>

            <button
                id="menuToggle"
                class="cursor-pointer bg-white p-2 xl:hidden"
            >
                <i
                    class="ti ti-menu-2 text-primary text-[24px]"
                    style="font-size: 30px"
                ></i>
            </button>
        </div>
    </nav>
    <!-- Mobile Menu -->
    <div
        id="mobileMenu"
        class="bg-light fixed left-0 top-0 z-[33] h-screen w-full max-w-[350px] -translate-x-[120%] overflow-y-auto pb-4 shadow-2xl duration-700 ease-in-out xl:hidden"
    >
        <div class="flex items-center justify-between px-6 py-4">
            <h2 class="h4">{{ __(env("COMPANY_NAME")) }}</h2>
            <button
                id="closeMenu"
                aria-label="mobile menu close"
                class="text-n2 cursor-pointer"
            >
                <i class="ti ti-x text-[24px]"></i>
            </button>
        </div>
        <ul class="px-3">
            <li class="w-full">
                <a
                    @class([
                        "inline-flex px-3 py-2 text-n2",
                        "text-secondary underline opacity-90 pointer-events-none" => request()->routeIs(
                            "home"),
                    ])
                    href="{{ route("home") }}"
                >
                    {{ __("Home") }}
                </a>
            </li>
            <li class="w-full">
                <a
                    @class([
                        "inline-flex px-3 py-2 text-n2",
                        "text-secondary underline opacity-90 pointer-events-none" => request()->routeIs(
                            "dashboard"),
                    ])
                    href="{{ route("dashboard") }}"
                >
                    {{ __("Dashboard") }}
                </a>
            </li>
            <li class="w-full">
                <a
                    @class([
                        "inline-flex px-3 py-2 text-n2",
                        "text-secondary underline opacity-90 pointer-events-none" => request()->routeIs(
                            "products.index"),
                    ])
                    href="{{ route("products.index") }}"
                >
                    {{ __("Creatives") }}
                </a>
            </li>
            <li>
                <a
                    @class([
                        "inline-flex px-3 py-2 text-n2",
                        "text-secondary underline opacity-90 pointer-events-none" => request()->routeIs(
                            "pages.image-generation"),
                    ])
                    href="{{ route("pages.image-generation") }}"
                >
                    {{ __("Image Generation") }}
                </a>
            </li>
            <li>
                <a
                    @class([
                        "inline-flex px-3 py-2 text-n2",
                        "text-secondary underline opacity-90 pointer-events-none" => request()->routeIs(
                            "pages.image-editing"),
                    ])
                    href="{{ route("pages.image-generation") }}"
                >
                    {{ __("Image Editing") }}
                </a>
            </li>
        </ul>
    </div>
</div>

<!-- ==================== DesktopNav Start ==================== -->
<div class="bg-n8 sticky top-0 z-30 hidden py-2.5 shadow-xl xl:block">
    <div class="container flex items-center justify-between">
        <a href="{{ route("home") }}">
            <h2 class="h4">{{ __(env("APP_NAME")) }}</h2>
        </a>
        <div class="hidden items-center gap-3 xl:flex">
            <ul class="relative flex gap-2">
                <li class="group relative px-5 py-2.5">
                    <a
                        @class([
                            "font-medium duration-300 hover:text-secondary",
                            "text-secondary underline opacity-90 pointer-events-none" => request()->routeIs(
                                "home"),
                        ])
                        href="{{ route("home") }}"
                    >
                        {{ __("Home") }}
                    </a>
                </li>
                <li class="group relative px-5 py-2.5">
                    <a
                        @class([
                            "font-medium duration-300 hover:text-secondary",
                            "text-secondary underline opacity-90 pointer-events-none" => request()->routeIs(
                                "products.index"),
                        ])
                        href="{{ route("products.index") }}"
                    >
                        {{ __("Creatives") }}
                    </a>
                </li>
                <li class="group relative cursor-pointer px-5 py-2.5">
                    <a
                        @class([
                            "font-medium duration-300 hover:text-secondary",
                            "text-secondary underline opacity-90 pointer-events-none" => request()->routeIs(
                                "pages.image-generation"),
                        ])
                        href="{{ route("pages.image-generation") }}"
                    >
                        {{ __("Image Generation") }}
                    </a>
                </li>
                <li class="group relative cursor-pointer px-5 py-2.5">
                    <a
                        @class([
                            "font-medium duration-300 hover:text-secondary",
                            "text-secondary underline opacity-90 pointer-events-none" => request()->routeIs(
                                "pages.image-editing"),
                        ])
                        href="{{ route("pages.image-editing") }}"
                    >
                        {{ __("Image Editing") }}
                    </a>
                </li>
            </ul>
            <div class="hidden items-center gap-5 xl:flex">
                @guest
                    <a
                        href="{{ route("login") }}"
                        class="btn-primary border-none"
                    >
                        {{ __("Login") }}
                    </a>
                @endguest

                @auth
                    <a
                        href="{{ route("dashboard") }}"
                        class="btn-primary border-none"
                    >
                        {{ __("Dashboard") }}
                    </a>

                    <form
                        method="POST"
                        action="{{ route("logout") }}"
                    >
                        @csrf

                        <a
                            href="{{ route("logout") }}"
                            onclick="event.preventDefault(); this.closest('form').submit();"
                            class="btn-white border-none"
                        >
                            {{ __("Logout") }}
                        </a>
                    </form>
                @endauth
            </div>
        </div>
    </div>
</div>
