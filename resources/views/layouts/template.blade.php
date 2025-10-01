<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="josephajibodu">
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">


    <title>Kairos1925 | Joseph & Esther’s Wedding Celebration</title>
    <meta name="title" content="Kairos1925 | Joseph & Esther’s Wedding Celebration">
    <meta name="description"
        content="Join Joseph & Esther as we celebrate Kairos1925 — our wedding story, photos, and event details. In God’s perfect time, our forever begins.">
    <link rel="canonical" href="{{ url('/') }}" />

    {{-- Favico --}}
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://kairos1925.com/">
    <meta property="og:title" content="Kairos1925 | Joseph & Esther’s Wedding Celebration">
    <meta property="og:description"
        content="Join Joseph & Esther as we celebrate Kairos1925 — our wedding story, photos, and event details. In God’s perfect time, our forever begins.">
    <meta property="og:image" content="{{ asset('assets/images/og-image.png') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://kairos1925.com/">
    <meta name="twitter:title" content="Kairos1925 | Joseph & Esther’s Wedding Celebration">
    <meta name="twitter:description"
        content="Join Joseph & Esther as we celebrate Kairos1925 — our wedding story, photos, and event details. In God’s perfect time, our forever begins.">
    <meta name="twitter:image" content="{{ asset('assets/images/og-image.png') }}">

    {{-- Template CSS --}}
    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/odometer-theme-default.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery-ui.css') }}" rel="stylesheet">

    {{-- Main SASS-compiled CSS via Vite --}}
    @vite(['resources/sass/style.scss'])

    @stack('styles')
</head>

<body>
    <!-- start page-wrapper -->
    <div class="page-wrapper">
        @include('layouts.partials.preloader')
        @include('layouts.partials.header')

        @yield('content')

        @include('layouts.partials.footer')
        @if(!app()->isProduction())
            @include('layouts.partials.color-switcher')
        @endif

        {{-- Floating Gift Widget --}}
        @include('wedding.components.gift-widget')
    </div>
    <!-- end of page-wrapper -->

    {{-- Template JavaScript --}}
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.pointparallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-plugin-collection.js') }}"></script>
    <script src="{{ asset('assets/js/moving-animation.js') }}"></script>
    <script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    @stack('scripts')
</body>

</html>
