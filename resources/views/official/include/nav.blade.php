<div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
      <div class="input-group">
        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
        <input type="text" class="form-control" placeholder="Szukaj..." disabled>
      </div>
    </div>
    <ul class="navbar-nav  justify-content-end">
      <li class="nav-item d-xl-none ps-3 d-flex align-items-center pe-2">
        <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
          <div class="sidenav-toggler-inner">
            <i class="sidenav-toggler-line bg-white"></i>
            <i class="sidenav-toggler-line bg-white"></i>
            <i class="sidenav-toggler-line bg-white"></i>
          </div>
        </a>
      </li>
      <li class="nav-item px-3 d-flex align-items-center d-none">
        <a href="javascript:;" class="nav-link text-white p-0">
          <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
        </a>
      </li>
      <li class="nav-item dropdown pe-2 d-flex align-items-center">
        <a href="javascript:;" class="nav-link text-white p-0" id="dropdownLanguageButton" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid fa-language cursor-pointer text-lg me-2"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-end px-4 py-3 me-sm-n4 w-auto" aria-labelledby="dropdownLanguageButton">
          <li class="w-100 d-flex"><h4 class="text-center d-flex w-100">@lang('Wybierz język')</h4></li>
          <li class="mb-2">
            <a class="dropdown-item border-radius-md @if (session('locale') == 'pl') bg-gray-200 @endif" href="#"> {{-- {{ route('language', ['pl']) }} --}}
              <div class="d-flex py-1">
                <div class="my-auto">
                  <img src="https://cdn.jsdelivr.net/npm/round-flag-icons/flags/pl.svg" class="avatar me-3">
                </div>
                <div class="d-flex flex-column justify-content-center">
                  <p class="font-weight-normal mb-1 h6"><span>@lang('Polski')</span></p>
                  <p class="text-xs text-secondary mb-0">@lang('Polski')</p>
                </div>
              </div>
            </a>
          </li>
            {{-- <li class="w-100 d-flex text-center"><a class="h6 text-center w-100">@lang('Więcej języków')...</a></li> --}}
        </ul>
      </li>

      {{-- <li class="nav-item dropdown pe-2 d-flex align-items-center d-none">
          <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-bell cursor-pointer text-lg me-2"></i>
          </a>
          <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
            <li class="mb-2">
              <a class="dropdown-item border-radius-md" href="javascript:;">
                <div class="d-flex py-1">
                  <div class="my-auto">
                    <img src="./assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                  </div>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="text-sm font-weight-normal mb-1">
                      <span class="font-weight-bold">New message</span> from Laur
                    </h6>
                    <p class="text-xs text-secondary mb-0">
                      <i class="fa fa-clock me-1"></i>
                      13 minutes ago
                    </p>
                  </div>
                </div>
              </a>
            </li>
            <li class="mb-2">
              <a class="dropdown-item border-radius-md" href="javascript:;">
                <div class="d-flex py-1">
                  <div class="my-auto">
                    <img src="./assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                  </div>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="text-sm font-weight-normal mb-1">
                      <span class="font-weight-bold">New album</span> by Travis Scott
                    </h6>
                    <p class="text-xs text-secondary mb-0">
                      <i class="fa fa-clock me-1"></i>
                      1 day
                    </p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a class="dropdown-item border-radius-md" href="javascript:;">
                <div class="d-flex py-1">
                  <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                  </div>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="text-sm font-weight-normal mb-1">
                      Payment successfully completed
                    </h6>
                    <p class="text-xs text-secondary mb-0">
                      <i class="fa fa-clock me-1"></i>
                      2 days
                    </p>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </li> --}}

        <li class="nav-item dropdown pe-2 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-white p-0" id="dropdownProfileButton" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://st4.depositphotos.com/1017228/20160/i/450/depositphotos_201608550-stock-photo-image-amazing-young-pretty-woman.jpg" class="avatar avatar-sm me-1">
              <span class="d-sm-inline d-none">{{ "Imię i nazwisko" }}</span>
          </a>
          <ul class="dropdown-menu  dropdown-menu-end px-4 py-3 me-sm-n4 w-auto" aria-labelledby="dropdownProfileButton">
              <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">{{ "Witaj" }}</h6>
                </div>
            <li class="mb-2">
              <a class="dropdown-item border-radius-md" href="{{ route('o.profile') }}">
                  <i class="fa-solid fa-user text-primary text-sm opacity-10"></i>
                <span class="nav-link-text ms-1">@lang('Profil')</span>
              </a>
            </li>
            <li class="mb-2">
              <a class="dropdown-item border-radius-md" href="{{ route('o.settings') }}">
                  <i class="fa-solid fa-gear text-primary text-sm opacity-10"></i>
                <span class="nav-link-text ms-1">@lang('Ustawienia')</span>
              </a>
            </li>
            <li class="mb-2">
              <a class="dropdown-item border-radius-md disabled" href="#">
                  <i class="fa-solid fa-id-card text-primary text-sm opacity-10"></i>
                <span class="nav-link-text ms-1">@lang('Sprawdź kartę mieszkańca')</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item border-radius-md" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="fa-solid fa-arrow-right-from-bracket text-primary text-sm opacity-10"></i>
                <span class="nav-link-text ms-1">@lang('Wyloguj się')</span>
              </a>
              </li>
          </ul>
        </li>
      <li class="nav-item d-flex align-items-center d-none">
          <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
            <i class="fa-solid fa-user text-lg me-sm-1"></i>
            <span class="d-sm-inline d-none">{{ "Imię i nazwisko" }}</span>
          </a>
        </li>
    </ul>
  </div>
