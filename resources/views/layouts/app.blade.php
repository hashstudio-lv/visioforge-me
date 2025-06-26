<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @section('meta')
        @if(isset($meta))
            {{ $meta }}
        @else
            <title>{{ config('app.name', 'Laravel') }}</title>
        @endif
    @show
    <meta content="{{ __('Discover, Buy, and Own Unique AI Prompts.') }}" name="description"/>
    <meta content="" name="keywords"/>
    <meta content="" name="author"/>

    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>

    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
    <link rel="icon" href="{{ asset('favicon.png') }}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ asset('favicon.png') }}" sizes="16x16" type="image/png">
    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/de-modern.css') }}" rel="stylesheet" type="text/css"/>
    <!-- color scheme -->
    <link id="colors" href="{{ asset('assets/css/colors/scheme-12.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/coloring-gradient.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/custom-font-3.css') }}" rel="stylesheet" type="text/css"/>


    {{--        <link href="css/plugins.css" rel="stylesheet" type="text/css" />--}}
    {{--        <link href="css/style.css" rel="stylesheet" type="text/css" />--}}
    {{--        <!-- color scheme -->--}}
    {{--        <link id="colors" href="css/colors/scheme-12.css" rel="stylesheet" type="text/css" />--}}
    {{--        <link href="css/de-modern.css" rel="stylesheet" type="text/css" />--}}
    {{--        <link href="css/coloring-gradient.css" rel="stylesheet" type="text/css" />--}}
    {{--        <!-- custom font -->--}}
    {{--        <link href="css/custom-font-3.css" rel="stylesheet" type="text/css" />--}}

    @cookieconsentscripts

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-V5SWD3R5C7"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-V5SWD3R5C7');
        </script>
</head>

<body class="de-retro">
<div id="wrapper">
    <!-- header begin -->
    <header
        class="header-light scroll-light @if(request()->route()->getName() == 'home') transparent @elseif(request()->route()->getName() == 'pages.show') transparent border-bottom clone @else border-bottom clone @endif">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="de-flex sm-pt10">
                        <div class="de-flex-col">
                            <div class="de-flex-col">
                                <!-- logo begin -->
                                <div id="logo">
                                    <a href="{{ route('home') }}" class="font-weight-bold h2">
                                        AssistantEdit
                                    </a>
                                </div>
                                <!-- logo close -->
                            </div>
                            <div class="de-flex-col">
                                {{-- <form action="{{ route('products.index') }}">
                                    <input id="quick_search" class="xs-hide" name="search"
                                           placeholder="{{ __('search item here...') }}" type="text"/>
                                </form> --}}
                            </div>
                        </div>
                        <div class="de-flex-col header-col-mid">
                            <!-- mainmenu begin -->
                            <ul id="mainmenu">
                                <li>
                                    <a href="{{ route('home') }}">
                                        {{ __('Home') }}
                                    </a>
                                </li>

{{--                                <li>--}}
{{--                                    <a href="{{ route('products.index') }}">{{ __('Explore by category') }}<span></span></a>--}}
{{--                                    <ul>--}}
{{--                                        @foreach(\App\Enums\ProductCategory::cases() as $category)--}}
{{--                                            <li>--}}
{{--                                                <a href="{{ route('products.index', ['category' => [$category->value]]) }}">--}}
{{--                                                    {{ $category->translatedValue() }}--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        @endforeach--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="{{ route('products.index') }}">{{ __('Explore by style') }}--}}
{{--                                        <span></span></a>--}}
{{--                                    <ul>--}}
{{--                                        @foreach(\App\Enums\ProductStyle::cases() as $style)--}}
{{--                                            <li>--}}
{{--                                                <a href="{{ route('products.index', ['style' => [$style->value]]) }}">--}}
{{--                                                    {{ $style->translatedValue() }}--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        @endforeach--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
                                @guest
                                    <li>
                                        <a href="{{ route('login') }}">
                                            {{ __('Login') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('register') }}">
                                            {{ __('Register') }}
                                        </a>
                                    </li>
                                @endguest
                            </ul>

                            <div class="menu_side_area">
                                <a href="{{ route('products.generate') }}" class="btn-main btn-wallet"><i
                                        class="icon_wallet_alt"></i><span>{{ __('Generate image') }}</span></a>
                                <span id="menu-btn"></span>
                            </div>

                            @auth
                                <div class="menu_side_area">
                                    <div class="de-login-menu">
                                        <span id="de-click-menu-profile" class="de-menu-notification">
                                            <i class="fa fa-user"></i>
                                        </span>

                                        <div id="de-submenu-profile" class="de-submenu">
                                            <div class="d-name">
                                                <h4>{{ __('Email') }}</h4>
                                                {{ auth()->user()->email }}
                                            </div>
                                            <div class="spacer-10"></div>
                                            <div class="d-balance">
                                                <h4>{{ __('Balance') }}</h4>
                                                {{ auth()->user()->balance }} ART
                                                <a href="{{ route('deposits.create') }}" title="{{ __('Deposit') }}"
                                                   class="ml-2 uppercase text-sm">{{ __('Deposit') }}</a>
                                            </div>

                                            <div class="d-line"></div>

                                            <ul class="de-submenu-profile">
                                                <li>
                                                    <a href="{{ route('dashboard') }}">
                                                        <i class="fa fa-user"></i> {{ __('My profile') }}
                                                    </a>
                                                <li>
                                                    <a href="{{ route('profile.edit') }}">
                                                        <i class="fa fa-pencil"></i> {{ __('Edit profile') }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf

                                                        <a href="{{ route('logout') }}"
                                                           onclick="event.preventDefault(); this.closest('form').submit();">
                                                            <i class="fa fa-sign-out"></i> {{ __('Sign out') }}
                                                        </a>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                        <span id="menu-btn"></span>
                                    </div>
                                </div>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header close -->
    <!-- content begin -->

    <!-- Page Content -->
    {{ $slot }}
    <!-- content close -->
    <a href="#" id="back-to-top"></a>
    <!-- footer begin -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-1">
                    <div class="widget">
                        <h5>{{ __('Explore') }}</h5>
                        <ul>
                            @foreach(Arr::take(\App\Enums\ProductCategory::cases(), 6) as $category)
                                <li>
                                    {{-- <a href="{{ route('products.index', ['category' => [$category->value]]) }}">
                                        {{ $category->translatedValue() }}
                                    </a> --}}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-1">
                    <div class="widget">
                        <h5>{{ __('Resources') }}</h5>
                        <ul>
                            @foreach(\App\Models\Page::get() as $page)
                                <li>
                                    <a href="{{ route('pages.show', $page->slug) }}" title="{{ $page->title }}">
                                        {{ $page->title }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-1">
                    <div class="widget">
                        <h5>{{ __('Languages') }}</h5>
                        <ul>
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                       class="text-capitalize">
                                        {{ $properties['native'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget">
                        <h5>{{ __('Contacts') }}</h5>
                        <ul>
                            <li>
                                <a href="mailto:info@assistantedit.com">
                                    info@assistantedit.com
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-1">
                    <div class="widget">
                        <h5>{{ __('Newsletter') }}</h5>
                        <p>{{ __('Signup for our newsletter to get the latest news in your inbox.') }}</p>
                        <form action="blank.php" class="row form-dark" id="form_subscribe" method="post"
                              name="form_subscribe">
                            <div class="col text-center">
                                <input class="form-control" id="txt_subscribe" name="txt_subscribe"
                                       placeholder="{{ __('enter your email') }}" type="text"/> <a href="#"
                                                                                                   id="btn-subscribe"><i
                                        class="arrow_right bg-color-secondary"></i></a>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                        <div class="spacer-10"></div>
                        <small>{{ __("Your email is safe with us. We don't spam.") }}</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="subfooter">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex">
                            <div class="de-flex-col">
                                <img src="{{ asset('assets/images/Visa_Brandmark_Blue_RGB_2021.png') }}" alt=""
                                     width="50px" style="margin-right: .8rem;">
                                <img src="{{ asset('assets/images/ma_symbol_opt_73_2x.png') }}" alt="" width="50px">
                            </div>
                            <div class="de-flex-col">
                                <span
                                    class="copy">{!! env('COMPANY_NAME') . ' ' . env('COMPANY_ADDRESS') !!}</span>
                            </div>
                            <div class="de-flex-col">
                                <div class="social-icons">
                                    <a href="https://instagram.com/assistantedit_com/" target="_blank"><i
                                            class="fa fa-instagram fa-lg"></i></a>
                                    <a href="https://x.com/assistantedit_" target="_blank"><i
                                            class="fa fa-twitter fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer close -->

    @cookieconsentview
</div>
<!-- Javascript Files
================================================== -->
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/designesia.js?t=2') }}"></script>
</body>
</html>
