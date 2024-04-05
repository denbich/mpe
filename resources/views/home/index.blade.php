@extends('layouts.home')

@section('title') @lang('Strona główna') @endsection

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
          {{-- baner --}}
        </div>
        <nav class="navbar navbar-expand-lg py-1" id="navbar-top" data-navbar-soft-on-scroll="data-navbar-soft-on-scroll">
          <div class="container"><a class="navbar-brand me-lg-auto cursor-pointer" href="">
          <img src="/assets/home/assets/img/MPE_2.svg" alt="" />
            <button class="navbar-toggler border-0 pe-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent" data-navbar-collapse="data-navbar-collapse">
              <div class="container d-lg-flex justify-content-lg-end pe-lg-0 w-lg-100">
                <ul class="navbar-nav mt-2 mt-lg-1 ms-lg-4 ms-xl-8 ms-2xl-9 gap-lg-x1" data-navbar-nav="data-navbar-nav">
                <li class="nav-item"> <a class="nav-link nav-bar-item px-0" href="#home" title="reviews">@lang(' ')</a></li>
                  <li class="nav-item"> <a class="nav-link nav-bar-item px-0" href="#home" title="reviews">@lang('Strona Główna')</a></li>
                  <li class="nav-item"> <a class="nav-link nav-bar-item px-0" href="#about" title="about">@lang('O nas')</a></li>
                  <li class="nav-item"> <a class="nav-link nav-bar-item px-0" href="#products" title="catalog">@lang('Nagrody')</a></li>
                  {{-- <li class="nav-item"> <a class="nav-link nav-bar-item px-0" href="#support" title="support">@lang('Kontakt')</a></li> --}}
                </ul>
              </div>
            </div>
          </div>
        </nav>
        <div class="container" data-bs-target="#navbar-top" data-bs-spy="scroll" tabindex="0">
          <section class="mb-9 mb-lg-10 mb-xxl-11 text-center text-lg-start mt-9" id="home">
            <div>
            {{-- 1 sekcja --}}
              <div class="row g-4 g-lg-6 g-xl-7 mb-6 mb-lg-7 mb-xl-10 align-items-center">
                <div class="col-12 col-lg-6"><img class="img-fluid w-50 w-lg-100" src="/assets/home/assets/img/Hero/man_watering.png" alt="" /></div>
                <div class="col-12 col-lg-6">
                  <h1 class="fs-5 fs-md-3 fs-xxl-2 text-black fw-light mb-4">Miejski Portal Ekologiczny<span class="fw-bold"></span><br class="d-sm-none d-md-block d-xxl-none" /> <span class="text-gradient fw-bold">Zielone myśli, zielone działanie</span></h1>
                  <p class="fs-8 fs-md-11 fs-xxl-7 text-primary mb-5 mb-lg-6 mb-xl-7 fw-light">
Portal MPE to miejsce, gdzie ludzie mogą zdobywać punkty za proekologiczne działania. Dzięki temu portalowi, użytkownicy angażują się w ekologiczne inicjatywy,
takie jak recykling butelek, więcej jazdy na rowerze, ekologiczne używanie kubków. To świetny sposób na kształtowanie świadomości ekologicznej i
dbanie o zdrowie naszej planety                  </p>
                  
                </div>
              </div>
              {{-- 2 sekcja --}}
              <div class="row g-4 g-lg-6 g-xl-7 align-items-center">
                <div class="col-12 col-lg-6 order-1 order-lg-0">
                  <p class="fs-8 fs-md-7 fs-xxl-6 text-success fw-bold mb-x1 text-capitalize">Jesteśmy z tobą </p>
                  <h1 class="fs-5 fs-md-3 fs-xxl-2 text-secondary text-capitalize fw-light mb-4">Nieważne jak <br class="d-none d-md-block d-lg-none" /><span class="fw-bold">Ważne </span><br class="d-none d-xl-block d-xxl-none" /><br class="d-sm-none" />by pomagać</h1>
                  <p class="fs-8 fs-md-11 fs-xxl-7 text-primary mb-5 mb-lg-6 mb-xl-7 fw-light">

                    Punkty za Działania Ekologiczne: Użytkownicy mogą zdobywać coinsy za codzienne proekologiczne działania, takie jak:
                    Aktywna Jazda na Rowerze: Wybierając rower zamiast samochodu, zbierasz punkty.
                    Ponowne Wykorzystanie Kubków: Przynosząc swój wielorazowy kubek, wspierasz środowisko i otrzymujesz nagrody.
                    Recykling Butelek: Oddając butelki do recyklingu, zyskujesz punkty.
                  </p>

                </div>
                <div class="col-12 col-lg-6 order-0 order-lg-1"><img class="img-fluid w-50 w-lg-100" src="/assets/home/assets/img/Hero/planting.png" alt="" /></div>
              </div>
            </div>
            {{-- statystyki --}}
          </section>
          <section class="mb-9 mb-lg-10 mb-xxl-11">
            <div class="row g-4">
              <div class="col-12 col-lg-4 text-center"><img class="mb-3" src="assets/img/icons/Counter_1.png" alt="" />
                <h1 class="text-secondary fs-4 fs-lg-3 fs-xl-2 counter-delivared" data-countup='{"endValue":9124201,"autoIncreasing":true}' style="font-variant-numeric: lining-nums proportional-nums;">+400</h1>
                <p class="text-success fs-7 fs-xl-6 fw-bold mb-0">
                  Wypożyczonych <br class="d-none d-xl-block d-xxl-none" />Rowerów</p>
              </div>
              <div class="col-12 col-lg-4 text-center"><img class="mb-3" src="assets/img/icons/Counter_2.png" alt="" />
                <h1 class="text-secondary fs-4 fs-lg-3 fs-xl-2" data-countup='{"endValue":36487}' style="font-variant-numeric: lining-nums proportional-nums;">+100 tyś</h1>
                <p class="text-success fs-7 fs-xl-6 fw-bold mb-0">
                  Wykorzystanych ponownie <br class="d-none d-xl-block d-xxl-none" />kubków </p>
              </div>
              <div class="col-12 col-lg-4 text-center"><img class="mb-3" src="assets/img/icons/Counter_3.png" alt="" />
                <h1 class="text-secondary fs-4 fs-lg-3 fs-xl-2" data-countup='{"endValue":400,"suffix":"+"}' style="font-variant-numeric: lining-nums proportional-nums;">10 tyś</h1>
                <p class="text-success fs-7 fs-xl-6 fw-bold mb-0">
                  Litrów paliwa <br class="d-none d-xl-block d-xxl-none" />Zaoszczędzone </p>
              </div>
            </div>
            {{-- sekcja o nas --}}
          </section>
          <section class="mb-9 mb-lg-10 mb-xxl-11 text-center text-lg-start" id="about">
            <h4 class="mb-x1 fs-8 fs-md-7 fs-xxl-6 text-success fw-bold pt-6 text-capitalize">O nas </h4>
            <h1 class="fs-5 fs-lg-3 fs-xl-2 text-secondary text-capitalize fw-light mb-x1">Nasz <span class="fw-bold">Cel </span>oraz<br />nasza <span class="fw-bold">(eco) misja</span></h1>
            <div class="row mb-7 mb-lg-8 mb-xl-9 gap-3">
              <div class="col-12 col-lg">
                <p class="text-black fs-10 fs-md-9 fs-xxl-8 lh-xl mb-0 line-clamp-5">
                    Nasz portal prowadzi akcje, które mają na celu polepszenie jakości życia na naszej cudownej Ziemi. Wspieramy inicjatywy ekologiczne, promujemy zdrowy styl życia i inspirujemy do działań na rzecz środowiska. Każdy ma wpływ, a proste kroki prowadzą do wielkich zmian! 🌿🌎.
                </p>
              </div>
              <div class="col-12 col-lg">
                <p class="text-black fs-10 fs-md-9 fs-xxl-8 lh-xl mb-0 line-clamp-5"> Jesteśmy zespołem pasjonatów, którzy kochają odkrywanie nowych rzeczy i dzielenie się nimi z innymi. Nasza misja to dostarczanie wartościowych treści, inspirujących historii i praktycznych wskazówek. Dzięki naszemu doświadczeniu i zaangażowaniu, staramy się być Twoim niezawodnym przewodnikiem w świecie wiedzy i rozrywki.</p>
              </div>
            </div>
            {{-- prezentacja naszego super zespołu --}}
            <div>
              <p class="text-secondary text-capitalize fw-light mb-0 fs-5 fs-lg-4 text-center mb-7 mb-lg-8">
                Poznaj <span class="fw-bold">nas</span></p>
              <div class="row mb-13 w-lg-75 mb-lg-5 mx-auto gy-2 gy-lg-5 h-100 justify-content-center">
                <div class="col-12 col-md-6 col-lg-4 px-3 text-center mb-5 mb-lg-0">
                  <div class="position-relative w-75 w-md-100 mx-auto mb-2"><img class="w-100 team-hero-image" src="{{ url('/assets/home/assets/img/1.png') }}" alt="" />
                  </div>
                  <h3 class="fs-9 fs-md-8 text-success fw-bold mb-1">Denis Bichler</h3>
                  <h5 class="text-black fs-10 fs-md-9 fw-medium text-capitalize mb-3">Leader Projektu i backend</h5>
                  <p class="fs-10 fs-md-9 fs-xxl-8 text-primary lh-xl mb-0 line-clamp-2">Tegoroczny maturzysta z ponad 4 letnim doświadczeniem w komercyjnym programowaniu.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4 px-3 text-center mb-5 mb-lg-0">
                  <div class="position-relative w-75 w-md-100 mx-auto mb-2"><img class="w-100 team-hero-image" src="{{url('assets/home/assets/img/5.png')}}" alt="" />
                  </div>
                  <h3 class="fs-9 fs-md-8 text-success fw-bold mb-1">Dawid Szolc</h3>
                  <h5 class="text-black fs-10 fs-md-9 fw-medium text-capitalize mb-3">Pomysłodawca i frontend</h5>
                  <p class="fs-10 fs-md-9 fs-xxl-8 text-primary lh-xl mb-0 line-clamp-2">Freelancer bazujący na cms wordress, seo i innych częściach webwritingu</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4 px-3 text-center mb-5 mb-lg-0">
                  <div class="position-relative w-75 w-md-100 mx-auto mb-2"><img class="w-100 team-hero-image" src="{{url('assets/home/assets/img/2.png')}}" alt="" />
                  </div>
                  <h3 class="fs-9 fs-md-8 text-success fw-bold mb-1">Daniel Mietelski</h3>
                  <h5 class="text-black fs-10 fs-md-9 fw-medium text-capitalize mb-3">Grafik</h5>
                  <p class="fs-10 fs-md-9 fs-xxl-8 text-primary lh-xl mb-0 line-clamp-2">Czwartoklasista który pasjonuje się w tworzeniu grafik</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4 px-3 text-center mb-5 mb-lg-0">
                  <div class="position-relative w-75 w-md-100 mx-auto mb-2"><img class="w-100 team-hero-image" src="{{ url('assets/home/assets/img/4.png') }}" alt="" />
                  </div>
                  <h3 class="fs-9 fs-md-8 text-success fw-bold mb-1">Kuba Lizak</h3>
                  <h5 class="text-black fs-10 fs-md-9 fw-medium text-capitalize mb-3">Backend</h5>
                  <p class="fs-10 fs-md-9 fs-xxl-8 text-primary lh-xl mb-0 line-clamp-2">Pasjonat backendu i grafiki komputerowej </p>
                </div>
                <div class="col-12 col-md-6 col-lg-4 px-3 text-center mb-5 mb-lg-0">
                  <div class="position-relative w-75 w-md-100 mx-auto mb-2"><img class="w-100 team-hero-image" src="{{url('assets/home/assets/img/3.png')}}" alt="" />
                  </div>
                  <h3 class="fs-9 fs-md-8 text-success fw-bold mb-1">Robert Wawrzyńczyk</h3>
                  <h5 class="text-black fs-10 fs-md-9 fw-medium text-capitalize mb-3">Backend</h5>
                  <p class="fs-10 fs-md-9 fs-xxl-8 text-primary lh-xl mb-0 line-clamp-2">Pasjonat frontendu i backendu</p>
                </div>
                
              </div>
            </div>
          </section>
          <section class="mb-9 mb-lg-10 mb-xxl-11 text-center text-md-start" id="products">
            <h3 class="mb-x1 fs-8 fs-md-7 fs-xxl-6 text-success fw-bold pt-6">Nagroda za punkty </h3>
            <div class="mb-6 mb-lg-7 mb-xl-10" id="slider-1">
              <div class="mb-4 mb-lg-0">
                <div class="swiper-theme-container position-relative">
                  <div class="swiper-container theme-slider" data-swiper='{"spaceBetween":32,"loop":true,"loopedSlides":5,"breakpoints":{"0":{"slidesPerView":1},"768":{"slidesPerView":2},"1024":{"slidesPerView":3}}}'>
                    <div class="swiper-wrapper">
                      <div class="product-card swiper-slide">
                        <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                          <h3 class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">Najlepsza nagroda</h3>
                          <p class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">
                              Najlepszą nagrodą jest bilet do opery.
                          </p>
                        </div>
                      </div>
                      
                      
                    </div>
                  </div>
              
                </div>
              </div>
            </div>
            
            
          </section>
          
          
          
        </div>
        <button class="btn scroll-to-top" data-scroll-top="data-scroll-top"><span class="uil uil-angle-up text-white"></span></button>
        
      </div>
    </div>
  </main>
@endsection
