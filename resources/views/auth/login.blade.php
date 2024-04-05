@extends('layouts.home')

@section('title') @lang('Zaloguj się') @endsection

@section('content')
<main class="main" id="top">
    <div class="bg-white">
      <div class="content">
        <div class="bg-white p-1 p-lg-2">
          <div class="container">
            <div class="d-flex justify-content-end align-items-center">
                <a class="ms-2 ms-md-3 submenu" href="{{ route('login') }}">
                    <span class="uil uil-user-circle"></span>
                    <span class="ms-1 fs-10 fs-sm-9">@lang('Zaloguj się')</span>
                </a>
                <a class="ms-2 ms-md-3 submenu" href="{{ route('register') }}">
                    <span class="ms-1 fs-10 fs-sm-9">@lang('Zarejestruj się')</span>
                </a>
            </div>
          </div>
        </div>
        <nav class="navbar navbar-expand-lg py-1" id="navbar-top" data-navbar-soft-on-scroll="data-navbar-soft-on-scroll">
          <div class="container"><a class="navbar-brand me-lg-auto cursor-pointer" href=""><img class="w-50 w-md-100 img-fluid" src="assets/img/logos/logo.png" alt="" /></a>
            <button class="navbar-toggler border-0 pe-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" data-navbar-collapse="data-navbar-collapse">
              <div class="container d-lg-flex justify-content-lg-end pe-lg-0 w-lg-100">
                <ul class="navbar-nav mt-2 mt-lg-1 ms-lg-4 ms-xl-8 ms-2xl-9 gap-lg-x1" data-navbar-nav="data-navbar-nav">
                  <li class="nav-item"> <a class="nav-link nav-bar-item px-0" href="#home" title="home">@lang('Strona główna')</a></li>
                  <li class="nav-item"> <a class="nav-link nav-bar-item px-0" href="#about" title="about">@lang('O nas')</a></li>
                  <li class="nav-item"> <a class="nav-link nav-bar-item px-0" href="#products" title="catalog">@lang('Możliwości')</a></li>
                  <li class="nav-item"> <a class="nav-link nav-bar-item px-0" href="#support" title="support">@lang('Kontakt')</a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav>

        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card">
                <div class="card-header pb-0 text-start">
                <div class="w-100 text-center">
                  <h4 class="font-weight-bolder mb-1">@lang('Zaloguj się - Wygląd')</h4>
                </div>
                </div>
                <div class="card-body pt-2">
                  <form role="form" method="POST" action="#"  id="login_form">
                    @csrf
                    <div class="mb-3">
                      <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="@lang('Adres email')" autofocus required >
                      @error('email')
                        <span class="text-danger small" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                      <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="@lang('Hasło')" aria-label="Password" required >
                      <div class="text-xs mt-2">
                        <a href="{{ route('password.request') }}" class="mx-2">@lang('Zapomniałeś hasła? Zresetuj je!')</a>
                      </div>
                      @error('password')
                        <span class="text-danger small" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" @checked(old('remember') == 'checked') >
                      <label class="form-check-label" for="remember">@lang('Zapamiętaj mnie')</label>
                    </div>
                    <div class="text-center">
                      <button type="submit" id="login_button" class="btn btn-lg btn-primary w-100 mt-3 mb-0" >@lang('Zaloguj się')</button>
                    </div>
                    {{-- Logowanie za pomocą google w przyszłości
                        <hr>
                    <div class="btn-wrapper text-center mb-2">
                        <a href="#" class="btn btn-default w-100 mt-2 mb-0 disabled" style="font-family: roboto;">
                            <span class="btn-inner--icon mx-1"><img src="{{ url('/assets/img/google.svg') }}" style="width: 18px;" alt="google icon"> </span>
                            <span class="btn-inner--text"> @lang('Logowanie za pomocą google - wkrótce!')</span>
                          </a>
                      </div> --}}
                  </form>
                  <hr>
                  <p class="mb-4 text-sm mx-auto text-center">
                    <a href="{{ route('register') }}" class="text-primary text-gradient font-weight-bold">@lang('Nie masz konta? Zarejestruj się!')</a>
                  </p>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <a href="{{ route('o.dashboard') }}" class="btn btn-primary">@lang('Zaloguj się jako Urzędnik')</a>
                        </div>
                        <div class="col-lg-6">
                            <a href="{{ route('c.dashboard') }}" class="btn btn-primary">@lang('Zaloguj się jako obywatel')</a>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>

        <button class="btn scroll-to-top" data-scroll-top="data-scroll-top"><span class="uil uil-angle-up text-white"></span></button>
        <footer class="Footer">
          <div class="bg-success py-2 py-md-3 position-relative terms-condition">
            <div class="overley-background"></div>
            <div class="container py-12 text-div text-md-end"><a class="links ms-md-4" href="#!" title="F.A.Q"> F.A.Q </a><a class="links ms-3 ms-md-4" href="#!" title="Cookies Policy"> Cookies Policy</a><a class="links ms-3 ms-md-4" href="#!" title="Legal Terms"> Legal Terms </a><a class="links ms-3 ms-md-4" href="#!" title="Privacy Policy"> Privacy Policy</a></div>
          </div>
        </footer>
  </main>
@endsection
