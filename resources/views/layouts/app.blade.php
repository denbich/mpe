<!DOCTYPE html>
<html lang="{{ session('locale', 'pl') }}">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="{{ url('favicon.png') }}" type="image/x-icon">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="author" content="Budo Grucha">
  <meta name="apple-mobile-web-app-capable" content="yes" />

  <title>@yield('title') | MPE</title>

  <!--     Fonts and icons     -->
  {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" /> --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="{{ url('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ url('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ url('/vendor/fontawesome/css/all.min.css') }}" type="text/css">

  {{-- <link rel="stylesheet" href="{{ url('/assets/vendor/fontawesome/css/all.min.css') }}" type="text/css">
  <script src="{{ url('/vendor/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
   --}}
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ url('/assets/css/argon-dashboard.css?v=1.0.6') }}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ url('/assets/css/cookie.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ url('/assets/css/crop.css') }}">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="https://unpkg.com/dropzone/dist/dropzone.css" />
  <link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet"/>
  <script src="https://unpkg.com/dropzone"></script>
  <script src="https://unpkg.com/cropperjs"></script>

{!! NoCaptcha::renderJs(session('locale')) !!}
<script src="{{ url('/vendor/intltelinput/js/intlTelInput.js') }}" ></script>
<link rel="stylesheet" href="{{ url('/vendor/intltelinput/css/intlTelInput.css') }}"/>

  @yield('style')
  <style>
      .choices {
          width:100% !important;
      }

      .tox-statusbar__branding{
          display: none !important;
      }
      .iti{
        width: 100%;
    }
    .disabled {
        opacity:0.5;
    }
  </style>
</head>

<body class="g-sidenav-show @yield('body')">

    <main>
        @yield('content')
    </main>

    @include('home.include.cookies')

    <div class="modal fade" id="cropmodal" tabindex="-1" role="dialog" aria-labelledby="cropmodalLabel" aria-hidden="true"> <div class="modal-dialog modal-lg" role="document"> <div class="modal-content"> <div class="modal-header"> <h5 class="modal-title">@lang('Wytnij zdjęcie')</h5></div> <div class="modal-body"> <div class="img-container"> <div class="row"> <div class="col-md-8"> <img src="" id="sample_image" class="img-crop"/> </div> <div class="col-md-4"> <div class="preview"></div> </div> </div> </div> </div> <div class="modal-footer"> <button type="button" id="crop" class="btn btn-primary">@lang('Wytnij')</button> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('Anuluj')</button> </div> </div> </div> </div>

  <!--   Core JS Files   -->
  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>

  <script src="{{ url('/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('/assets/js/core/popper.min.js') }}"></script>
  <script src="{{ url('/assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ url('/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ url('/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script src="{{ url('/assets/js/argon-dashboard.js?v=1.0.2') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ url('/vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('volit.google.maps') }}&libraries=places&callback=initMap&channel=GMPSB_addressselection_v1_cABC" async defer></script>

  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="{{ url('/assets/js/choices/'.session('locale', 'pl').'.js') }}"></script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

@yield('script')
@stack('scripts')

</body>
</html>
