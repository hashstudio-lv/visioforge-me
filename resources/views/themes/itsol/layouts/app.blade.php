<!doctype html>
<html dir="ltr" lang="{{ App::getLocale() }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('/assets3/css/swiper.min.css') }}" />
    <link href="{{ asset('/assets3/css/odometer.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets3/css/aos.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets3/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets3//images/favicon.ico') }}" type="image/x-icon" rel="shortcut icon" />
    <link href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    @section('meta')
        @if(isset($meta))
            {{ $meta }}
        @else
            <title>{{ config('app.name', 'Laravel') }}</title>
        @endif
    @show

    <script defer src="{{ asset('/assets3/js/app.js') }}"></script>
    <link href="{{ asset('/assets3/css/index.css') }}" rel="stylesheet">
</head>

<body class="relative text-base lg:text-lg">
    @include('themes.itsol.partials.header')

    @yield('content')

    @include('themes.itsol.partials.footer')

    <script src="{{ asset('/assets3/js/swiper.min.js') }}"></script>
    <script src="{{ asset('/assets3/js/glightbox.js') }}"></script>
    <script src="{{ asset('/assets3/js/aos.js') }}"></script>
    <script src="{{ asset('/assets3/js/email.js') }}"></script>
    <script src="{{ asset('/assets3/js/odometer.js') }}"></script>
    <script src="{{ asset('/assets3/js/alpine.min.js') }}"></script>

    <script src="{{ asset('/assets3//js/main.js') }}"></script>
    <script src="{{ asset('/assets3/js/homeOne.js') }}"></script>
</body>

</html>
