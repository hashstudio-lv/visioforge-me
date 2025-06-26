<header
    class="theme-main-menu sticky-menu theme-menu-two pt-[50px] absolute z-[99] transition-all duration-[0.4s] ease-[ease-out] p-[20px_60px] top-0 inset-x-0 2xl:px-[35px] lg:px-5 md:px-[12px] sm:px-[12px] xsm:px-[12px]"
>
    <div class="inner-content relative">
        <div class="flex items-center justify-between">
            <div class="logo xl:min-w-[300px] min-h-[50px] flex items-center xl:order-none lg:order-none">
                <a href="{{ route('home') }}" class="block font-bold font-Recoleta text-[35px] text-black">
                    SHORTSY.ART
                </a>
            </div>

            <div class="right-widget !ml-auto xl:!ml-0 lg:!ml-0 flex items-center xl:order-3 lg:order-3">
                @if(auth()->check())
                    <a
                        href="{{ route('dashboard') }}"
                        class="contact-btn-two text-[17px] lg:text-[15px] md:text-[15px] sm:text-[15px] xsm:text-[15px] font-medium tran3s mr-[1rem] hidden xl:block lg:block leading-[48px] border border-[color:var(--prime-two)] text-[color:var(--prime-two)] p-[0_35px] rounded-[30px] border-solid hover:text-white hover:bg-[var(--prime-two)] lg:leading-[45px] lg:p-[0_25px] md:leading-[45px] md:p-[0_25px] sm:leading-[45px] sm:p-[0_25px] xsm:leading-[45px] xsm:p-[0_25px]">

                        {{ __('Dashboard') }}
                    </a>
                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>

                        <a
                            href="<?php echo e(route('logout')); ?>"
                            onclick="event.preventDefault(); this.closest('form').submit();"
                            class="login-btn-one text-[17px] lg:text-[15px] md:text-[15px] sm:text-[15px] xsm:text-[15px] font-medium tran3s leading-[48px] border text-black p-[0_35px] rounded-[30px] border-solid border-[#E4E4E4] hover:text-white hover:bg-[var(--prime-two)] lg:p-[0_25px] lg:leading-[45px] md:p-[0_25px] md:leading-[45px] sm:p-[0_25px] sm:leading-[45px] xsm:p-[0_25px] xsm:leading-[45px]"
                        >
                            {{ __('Logout') }}

                        </a>
                    </form>

                @else
                    @if(request()->route()->getName() == 'login')
                        <a
                            href="{{ route('register') }}"
                            class="contact-btn-two text-[17px] lg:text-[15px] md:text-[15px] sm:text-[15px] xsm:text-[15px] font-medium tran3s hidden xl:block lg:block leading-[48px] border border-[color:var(--prime-two)] text-[color:var(--prime-two)] p-[0_35px] rounded-[30px] border-solid hover:text-white hover:bg-[var(--prime-two)] lg:leading-[45px] lg:p-[0_25px] md:leading-[45px] md:p-[0_25px] sm:leading-[45px] sm:p-[0_25px] xsm:leading-[45px] xsm:p-[0_25px]">

                            {{ __('Register') }}
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="contact-btn-two text-[17px] lg:text-[15px] md:text-[15px] sm:text-[15px] xsm:text-[15px] font-medium tran3s hidden xl:block lg:block leading-[48px] border border-[color:var(--prime-two)] text-[color:var(--prime-two)] p-[0_35px] rounded-[30px] border-solid hover:text-white hover:bg-[var(--prime-two)] lg:leading-[45px] lg:p-[0_25px] md:leading-[45px] md:p-[0_25px] sm:leading-[45px] sm:p-[0_25px] xsm:leading-[45px] xsm:p-[0_25px]">

                            {{ __('Login') }}
                        </a>
                    @endif
                @endif
            </div>

            <nav
                class="ml-2.5 navbar navbar-expand-lg md:p-0 sm:p-0 xsm:p-0 flex items-center py-2 xl:flex-nowrap xl:justify-start lg:flex-nowrap lg:justify-start xl:order-2 lg:order-2 static flex-wrap justify-between"
            >
                <button
                    class="navbar-toggler text-[1.25rem] leading-none transition-shadow duration-[0.15s] ease-[ease-in-out] w-11 h-[38px] relative z-[99] block xl:hidden lg:hidden shadow-[0_15px_20px_0px_rgba(0,0,0,0.05)] p-0 border-0 rounded-[.25rem] focus:shadow-none bg-[var(--prime-two)] before:content-[''] before:absolute before:w-[26px] before:h-0.5 before:pointer-events-none before:transition-transform before:duration-[0.25s] before:origin-[50%_50%] before:left-[9px] before:top-2/4 before:bg-white after:content-[''] after:absolute after:w-[26px] after:h-0.5 after:pointer-events-none after:transition-transform after:duration-[0.25s] after:origin-[50%_50%] after:left-[9px] after:top-2/4 after:bg-white"
                    type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span
                        class="absolute overflow-hidden w-[26px] h-0.5 indent-[200%] transition-opacity duration-[0.25s] -mt-px left-[9px] bg-white"></span>
                </button>
                <div
                    class="collapse navbar-collapse basis-full grow items-center md:fixed md:bg-white md:h-screen md:max-h-screen md:overflow-y-auto md:clear-both md:w-80 md:max-w-[calc(100vw_-_60px)] md:z-[9999] md:-translate-x-full md:block md:transition-all md:duration-[0.3s] md:ease-[ease-in-out] md:p-[32px_15px_20px] md:left-0 md:top-0 md:visible sm:fixed sm:bg-white sm:h-screen sm:max-h-screen sm:overflow-y-auto sm:clear-both sm:w-80 sm:max-w-[calc(100vw_-_60px)] sm:z-[9999] sm:-translate-x-full sm:block sm:transition-all sm:duration-[0.3s] sm:ease-[ease-in-out] sm:p-[32px_15px_20px] sm:left-0 sm:top-0 sm:visible xsm:fixed xsm:bg-white xsm:h-screen xsm:max-h-screen xsm:overflow-y-auto xsm:clear-both xsm:w-80 xsm:max-w-[calc(100vw_-_60px)] xsm:z-[9999] xsm:-translate-x-full xsm:block xsm:transition-all xsm:duration-[0.3s] xsm:ease-[ease-in-out] xsm:p-[32px_15px_20px] xsm:left-0 xsm:top-0 xsm:visible"
                    id="navbarNav">
                    <ul class="navbar-nav xl:flex-row lg:flex-row flex flex-col mb-0 pl-0">
                        <li class="block xl:hidden lg:hidden">
                            <div
                                class="logo xl:min-w-[226px] min-h-[50px] flex items-center md:mb-[8vh] sm:mb-[8vh] xsm:mb-[8vh]">
                                <a href="{{ route('home') }}" class="block font-bold font-Recoleta text-[28px] text-black">
                                    SHORTSY.ART
                                </a>
                            </div>
                        </li>
                        <li
                            class="nav-item static md:relative sm:relative xsm:relative  @if(request()->route()->getName() == 'home') active @endif">
                            <a class="nav-link visible block font-medium text-[18px] lg:text-[17px] leading-[initial] text-black relative transition-all duration-[0.3s] ease-[ease-in-out] m-[0_26px] p-[13px_0] md:text-[16px] md:m-0 md:p-[13px_0] sm:text-[16px] sm:m-0 sm:p-[13px_0] xsm:text-[16px] xsm:m-0 xsm:p-[13px_0] dropdown-toggle whitespace-nowrap"
                               href="{{ route('home') }}">
                                {{ __('Home') }}
                            </a>
                        </li>
                        <li
                            class="nav-item static md:relative sm:relative xsm:relative @if(in_array(request()->route()->getName(), ['products.index', 'products.show'])) active @endif">
                            <a class="nav-link visible block font-medium text-[18px] lg:text-[17px] leading-[initial] text-black relative transition-all duration-[0.3s] ease-[ease-in-out] m-[0_26px] p-[13px_0] md:text-[16px] md:m-0 md:p-[13px_0] sm:text-[16px] sm:m-0 sm:p-[13px_0] xsm:text-[16px] xsm:m-0 xsm:p-[13px_0] dropdown-toggle whitespace-nowrap"
                               href="{{ route('products.index') }}">
                                {{ __('Creatives') }}
                            </a>
                        </li>
                        <li
                            class="nav-item static md:relative sm:relative xsm:relative @if(request()->route()->getName() == 'pages.image-generation') active @endif">
                            <a class="nav-link visible block font-medium text-[18px] lg:text-[17px] leading-[initial] text-black relative transition-all duration-[0.3s] ease-[ease-in-out] m-[0_26px] p-[13px_0] md:text-[16px] md:m-0 md:p-[13px_0] sm:text-[16px] sm:m-0 sm:p-[13px_0] xsm:text-[16px] xsm:m-0 xsm:p-[13px_0] dropdown-toggle whitespace-nowrap"
                               href="{{ route('pages.image-generation') }}">
                                {{ __('Image Generation') }}
                            </a>
                        </li>
                        <li
                            class="nav-item static md:relative sm:relative xsm:relative @if(request()->route()->getName() == 'pages.image-editing') active @endif">
                            <a class="nav-link visible block font-medium text-[18px] lg:text-[17px] leading-[initial] text-black relative transition-all duration-[0.3s] ease-[ease-in-out] m-[0_26px] p-[13px_0] md:text-[16px] md:m-0 md:p-[13px_0] sm:text-[16px] sm:m-0 sm:p-[13px_0] xsm:text-[16px] xsm:m-0 xsm:p-[13px_0] dropdown-toggle whitespace-nowrap"
                               href="{{ route('pages.image-editing') }}">
                                {{ __('Image Editing') }}
                            </a>
                        </li>
                    </ul>
                    <div class="mobile-content block xl:hidden lg:hidden">
                        <div class="flex flex-col items-center justify-center mt-[70px]">
                            <a href="{{ route('pages.show', 'contact-us') }}"
                               class="contact-btn-two text-[17px] lg:text-[15px] md:text-[15px] sm:text-[15px] xsm:text-[15px] font-medium tran3s leading-[48px] border border-[color:var(--prime-two)] text-[color:var(--prime-two)] p-[0_35px] rounded-[30px] border-solid hover:text-white hover:bg-[var(--prime-two)] lg:leading-[45px] lg:p-[0_25px] md:leading-[45px] md:p-[0_25px] sm:leading-[45px] sm:p-[0_25px] xsm:leading-[45px] xsm:p-[0_25px]">Contact
                                us</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
