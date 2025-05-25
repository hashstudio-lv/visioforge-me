<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        @section('meta')
            @if(isset($meta))
                {{ $meta }}
            @else
                <title>{{ config('app.name', 'Laravel') }}</title>
            @endif
        @show
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="theme-color" content="#1d2b40" />
        <meta name="msapplication-navbutton-color" content="#1d2b40" />
        <meta name="apple-mobile-web-app-status-bar-style" content="#1d2b40" />

        <!-- Favicon -->
        <link
            rel="icon"
            type="image/png"
            sizes="56x56"
            href="{{ asset('/assets2/images/fav-icon/icon.png?t=1') }}"
        />
        <!-- Main style sheet -->
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('/assets2/fonts/recoleta/stylesheet.css') }}"
            media="all"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('/assets2/fonts/gordita/stylesheet.css') }}"
            media="all"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('/assets2/fonts/eustache/stylesheet.css') }}"
            media="all"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('/assets2/fonts/noteworthy/style.css') }}"
            media="all"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('/assets2/fonts/bootstrap-icons/font-css.css') }}"
            media="all"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('/assets2/fonts/font-awesome/css/all.min.css') }}"
            media="all"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('/assets2/vendor/fancybox/dist/jquery.fancybox.min.css') }}"
            media="all"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('/assets2/vendor/slick/slick.css') }}"
            media="all"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('/assets2/vendor/wow/animate.css') }}"
            media="all"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('/assets2/css/custom-animation.css') }}"
            media="all"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('/assets2/vendor/nice-select/nice-select.css') }}"
            media="all"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('/assets2/css/style.css') }}"
        />
        <!-- Fix Internet Explorer ______________________________________-->
        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script src="{{ asset('/assets2/vendor/html5shiv.js') }}"></script>
            <script src="{{ asset('/assets2/vendor/respond.js') }}"></script>
        <![endif]-->
    </head>

    <body>
        <div class="main-page-wrapper overflow-x-hidden">
            @include('themes.new.partials.header')

            @yield('content')

            @include('themes.new.partials.footer')

            <script src="{{ asset('/assets2/vendor/jquery.min.js') }}"></script>
            <script src="{{ asset('/assets2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('/assets2/vendor/wow/wow.min.js') }}"></script>
            <script src="{{ asset('/assets2/vendor/slick/slick.min.js') }}"></script>
            <script src="{{ asset('/assets2/vendor/fancybox/dist/jquery.fancybox.min.js') }}"></script>
            <script src="{{ asset('/assets2/vendor/jquery.lazy.min.js') }}"></script>
            <script src="{{ asset('/assets2/vendor/jquery.counterup.min.js') }}"></script>
            <script src="{{ asset('/assets2/vendor/jquery.waypoints.min.js') }}"></script>
            <script src="{{ asset('/assets2/vendor/isotope.pkgd.min.js') }}"></script>
            <script src="{{ asset('/assets2/vendor/nice-select/jquery.nice-select.min.js') }}"></script>
            <script src="{{ asset('/assets2/vendor/validator.js') }}"></script>
            <script src="{{ asset('/assets2/vendor/sweetalert.min.js') }}"></script>
            <script src="{{ asset('/assets2/js/theme.js') }}"></script>

            <!-- AlpineJS -->
            <script defer src="{{ asset('/assets2/vendor/alpine/persist.min.js') }}"></script>
            <script defer src="{{ asset('/assets2/vendor/alpine/alpine.min.js') }}"></script>
        </div>
    </body>
</html>
