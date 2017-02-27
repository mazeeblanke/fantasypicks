<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Fantasy Picks! @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Show off your predicting skills for FREE and still win.">
    <meta name="author" content="Jadon Brown">
    <!-- FAVICON -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!--[if lt IE 9]>
    <script src="{{ asset('js/html5shiv.js') }}"></script>
    <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->

    <!-- Header scripts -->
    <script src="{{ asset('js/modernizr-2.8.3.min.js') }}"></script>
    <script src="{{ asset('js/queryloader2.min.js') }}"></script>

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    <!-- =========================
       Preloader
    ============================== -->
    <script>
        window.addEventListener('DOMContentLoaded', function () {
            "use strict";
            new QueryLoader2(document.querySelector("body"), {
                barColor: "#e64e3e",
                backgroundColor: "#fff",
                percentage: true,
                barHeight: 1,
                minimumTime: 200,
                fadeOutTime: 1000
            });
        });
    </script>
</head> <!-- head -->
<body>

<!-- ============== start wrapper  ============== -->
<div id="wrapper">

    @include('partials.header')
    @include('partials.flash_messages')
    @yield('content')

    @include('partials.footer')

</div> <!-- //end wrapper -->

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- animation effects -->
<script src="{{ asset('js/wow.min.js') }}"></script>
<!-- count-down -->
<script src="{{ asset('js/jquery.inview.min.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<!-- content slider -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!-- lightbox -->
<script src="{{ asset('js/lightbox.min.js') }}"></script>
<!-- smooth scrool -->
<script src="{{ asset('js/smoothscroll.js') }}"></script>
<!-- isotope -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.2/isotope.pkgd.min.js"></script>
<!-- custom js -->
<script src="{{ asset('js/app.js') }}"></script>

@yield('scripts')

</body>
</html>