<header class="position-sticky z-index-sticky top-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-white top-0 z-index-3 shadow position-absolute py-2 start-0 end-0"> <!-- mt-4 mx-4 -->
        <div class="container">
          <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="{{ route('h.index') }}">
            <img src="{{ url('/assets/home/img/logo.svg') }}" alt="" style="max-height: 45px;">
          </a>
          <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </span>
          </button>
          <div class="collapse navbar-collapse p-2" id="navigation">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center me-2 ctext" aria-current="page" href="{{ route('h.index') }}">@lang('Strona główna')</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-2 ctext" href="{{ route('h.index', '#') }}">@lang('O nas')</a>
              </li>
              @guest
              <li class="nav-item">
                <a class="nav-link me-2 ctext" href="{{ route('login') }}"> @lang('Moduły') </a>
              </li>
              @endguest

              <li class="nav-item">
                <a class="nav-link me-2 ctext" href="{{ route('h.index', '#contact') }}" >@lang('Kontakt')</a>
              </li>
            @auth
            <li class="nav-item">
              <a class="nav-link me-2 ctext" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">@lang('Wyloguj się')</a>
            </li>
             @endauth
            </ul>
            @auth
            <ul class="navbar-nav d-lg-block">
                <li class="nav-item">
                  <a href="{{ route('redirect') }}" class="btn mb-0 me-1 btn-primary">@lang('Przejdź do panelu')</a>
                </li>
              </ul>
            @endauth
            @guest
            <ul class="navbar-nav d-lg-block">
                <li class="nav-item">
                  <a href="{{ route('register') }}" class="btn mb-0 me-1 btn-primary">@lang('Zarejestruj się')</a>
                </li>
              </ul>
            @endguest
          </div>
        </div>
      </nav>
</header>
