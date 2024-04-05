<!DOCTYPE html>
<html data-bs-theme="light" lang="{{ session('locale') }}" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>@yield('title') | MPE</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('/assets/home/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('/assets/home/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('/assets/home/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/assets/home/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ url('/assets/home/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ url('/assets/homeimg/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ url('/assets/home/js/config.js') }}"></script>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="stylesheet" href="vendors/swiper/swiper-bundle.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="{{ url('/assets/home/css/theme.css') }}" rel="stylesheet" id="style-default">
    <link href="{{ url('/assets/home/css/user-rtl.css') }}" rel="stylesheet" id="user-style-rtl">
    <link href="{{ url('/assets/home/css/user.css') }}" rel="stylesheet" id="user-style-default">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  </head>


  <body>

    @yield('content')

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/countup/countUp.umd.js"></script>
    <script src="vendors/swiper/swiper-bundle.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/list.js/list.min.js"></script>
    <script src="assets/js/theme.js"></script>

  </body>

</html>
