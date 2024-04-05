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
        
        <hr class="horizontal dark">
        <li class="nav-item ps-1 pt-1">
          <a class="nav-link active" href="{{ route('o.citizens.index') }}">
            <i class="fa-solid fa-award text-primary text-sm opacity-10"></i>
            <span class="nav-link-text ms-1">@lang('Mieszkańcy')</span>
          </a>
          </li>
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
              <li class="breadcrumb-item text-sm text-white active" aria-current="page">@lang('Stacje')</li>
            </ol>
            <h6 class="font-weight-bolder text-white mb-0">@lang('Lista stacji rowerowych')</h6>
          </nav>
          @include('official.include.nav')
        </div>
      </nav>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-6 col-12 d-flex ms-auto">
               <a href="{{ route('o.bikes.create') }}" class="btn btn-icon bg-gradient-dark ms-auto">
                <span class="btn-inner--icon me-2"><i class="fa-solid fa-plus"></i></span>
               <span class="btn-inner--text">@lang('Utwórz nową')</span>
               </a>
            </div>
         </div>
        <div class="card">
            <div class="card-header"><h5 class="mb-0">@lang('Lista Mieszkańców')</h5></div>
            <div class="table-responsive">
                <table class="table align-items-center mb-0 text-center">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">@lang('ID')</th>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">@lang('Nazwa')</th>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">@lang('Adres')</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">@lang('Opcje')</th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td class="text-center">1.</td>
                        <td class="text-center">
                          <div class="d-flex px-2 py-1 ms-auto">
                            <div class="d-flex flex-column justify-content-center">
                              <span class="mb-0 font-weight-bold">@lang('Mieszkaniec1')</span>
                              <span class="text-secondary text-xs mb-0">@lang('Adam Kowalski')</span>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle"><span class="badge bg-gradient-dark">Świerklańska 32</span></td>
                        <td class="align-middle text-center">
                          <a href="{{ route('o.citizens.show', [1]) }}"><i class="fa-solid fa-magnifying-glass fa-lg"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">2.</td>
                        <td class="text-center">
                          <div class="d-flex px-2 py-1 ms-auto">
                            <div class="d-flex flex-column justify-content-center">
                              <span class="mb-0 font-weight-bold">@lang('Mieszkaniec2')</span>
                              <span class="text-secondary text-xs mb-0">@lang('Andrzej Ikśiński')</span>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle"><span class="badge bg-gradient-dark">Budowlanych 116</span></td>
                        <td class="align-middle text-center">
                          <a href="{{ route('o.citizens.show', [2]) }}"><i class="fa-solid fa-magnifying-glass fa-lg"></i></a>
                        </td>
                      </tr>
                  </tbody>
                </table>
              </div>
          </div>
      @include('official.include.footer')
    </div>
  </main>

@endsection

@section('script')


@endsection
