@extends('layouts.app')

@section('title') @lang('Panel urzędnika') @endsection

@section('body') bg-gray-100 @endsection

@section('content')
<div class="min-height-300 bg-primary position-absolute w-100" id="background-color-div"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header" style="min-height: 110px;">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      @include('official.include.logo')
    </div>
    <hr class="horizontal dark">
    <div class="collapse navbar-collapse w-auto h-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item ps-1 pt-1">
          <a class="nav-link active" href="{{ route('o.dashboard') }}">
            <i class="fa-solid fa-tv text-primary text-sm opacity-10"></i>
            <span class="nav-link-text ms-1">@lang('Panel')</span>
          </a>
        </li>
        <hr class="horizontal dark">
        @include('official.include.citizens')
        @include('official.include.cars')
        @include('official.include.bikes')
        @include('official.include.cups')
        @include('official.include.bottles')
        @include('official.include.store')
        <hr>
        @include('official.include.other')
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="{{ route('o.dashboard') }}"><i class="fa-solid fa-house"></i></a></li>
              <li class="breadcrumb-item text-sm text-white" aria-current="page">@lang('Urzędnik')</li>
              <li class="breadcrumb-item text-sm text-white active" aria-current="page">@lang('Panel')</li>
            </ol>
            <h6 class="font-weight-bolder text-white mb-0">@lang('Panel urzędnika')</h6>
          </nav>
          @include('official.include.nav')
        </div>
      </nav>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
              <div class="card">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-uppercase font-weight-bold">@lang('Twoje ID')</p>
                        <h5 class="font-weight-bolder">{{ 0 }}</h5>
                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-primary shadow-primary text-center rounded-circle">
                        <i class="fa-solid fa-user text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
              <div class="card">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-uppercase font-weight-bold">@lang('Liczba mieszkańców')</p>
                        <h5 class="font-weight-bolder">{{ 1234 }}</h5>
                        <p class="mb-0 d-none">
                            @if (1 > 0)
                            <span class="text-success text-sm font-weight-bolder"><i class="fa fa-arrow-up"></i>  {{ __('Od ostatniego miesiąca') }}</span>
                            @else
                            <span class="text-danger text-sm font-weight-bolder"> {{ __('Od ostatniego miesiąca') }}</span>
                            @endif
                        </p>
                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-secondary shadow-secondary text-center rounded-circle">
                        <i class="fa-solid fa-people-group text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
              <div class="card">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-uppercase font-weight-bold">@lang('Liczba nagród')</p>
                        <h5 class="font-weight-bolder">{{ 123 }}</h5>
                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-primary shadow-primary text-center rounded-circle">
                        <i class="fa-solid fa-award text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6">
              <div class="card">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-uppercase font-weight-bold">@lang('Liczba wolontariuszy')</p>
                        <h5 class="font-weight-bolder">{{ 0 }}</h5>
                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-secondary shadow-secondary text-center rounded-circle">
                        <i class="fa-solid fa-users text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
          <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent">
              <h6 class="text-capitalize">@lang('Statystyki rejestracji mieszkańców')</h6>
            </div>
            <div class="card-body p-3">
              <div class="chart d-flex" style="min-height: 300px">
                <canvas id="signinchart" class="chart-canvas" style="max-height: 100%;"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                  <div class="d-flex justify-content-between">
                    <h6 class="mb-2">@lang('Najnowsze zamówienia')</h6>
                  </div>
                </div>
                <div class="card-body pt-0">

                </div>
              </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0">@lang('Najnowsze zamówienia')</h6>
            </div>
            <div class="table-responsive">

            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="card h-100">
              <div class="card-header pb-0 p-3">
                <div class="d-flex justify-content-between">
                  <h6 class="mb-2">@lang('Aktualizacje')</h6>
                </div>
              </div>
              <div class="card-body pt-0">
                <ul>
                    <li>v. 1.0.0 - @lang('Utworzono system MPE')</li>
                  </ul>
              </div>
            </div>
          </div>
        <div class="col-lg-3">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                  <h6 class="mb-0">@lang('Pomoc')</h6>
                </div>
                <div class="card-body text-center">
                    <h6>@lang('Masz problem lub masz propozycję ulepszenia? napisz do nas na adres')
                        <a target="_blank" rel="nofollow" href="mailto:kontakt@budogrucha.tech"><b>kontakt@budogrucha.tech</b></a>
                    </h6>
                </div>
          </div>
    </div>
</div>
      @include('official.include.footer')
    </div>
  </main>

@endsection

@section('script')


@endsection
