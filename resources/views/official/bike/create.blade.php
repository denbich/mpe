@extends('layouts.app')

@section('title') @lang('Tworzenie stacji rowerowych') @endsection

@section('body') bg-gray-100 @endsection

@section('content')
<div class="min-height-300 bg-primary position-absolute w-100" id="background-color-div"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header" style="min-height: 135px;">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      @include('official.include.logo')
    </div>
    <hr class="horizontal dark">
    <div class="collapse navbar-collapse w-auto h-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        @include('official.include.dashboard')
        <hr class="horizontal dark">
        @include('official.include.citizens')
        @include('official.include.cars')
        <li class="nav-item ps-1 pt-1">
            <a class="nav-link active" href="{{ route('o.bikes.index') }}">
              <i class="fa-solid fa-bicycle text-primary text-sm opacity-10"></i>
              <span class="nav-link-text ms-1">@lang('Rowery miejskie')</span>
            </a>
          </li>
        
        @include('official.include.cups')
        @include('official.include.bottles')
        @include('official.include.store')
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
            <h6 class="font-weight-bolder text-white mb-0">@lang('Tworzenie stacji rowerowych')</h6>
          </nav>
          @include('official.include.nav')
        </div>
      </nav>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-6 col-12 d-flex">
               <a href="{{ route('o.bikes.index') }}" class="btn btn-icon bg-gradient-dark">
                <span class="btn-inner--icon me-2"><i class="fa-solid fa-arrow-left"></i></span>
               <span class="btn-inner--text">@lang('Powrót')</span>
               </a>
            </div>
         </div>
      @include('official.include.footer')
    </div>
  </main>

@endsection
