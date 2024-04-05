@extends('layouts.app')

@section('title') @lang('Zarejestruj się') @endsection

@section('style')
<style>
    .ctext {
        font-size: 16px !important;
        color: #5b27a5 !important;
    }

    body {
        background-color: #f2ebfd !important;
    }
</style>
@endsection

@section('content')

@include('home.include.menu')

<main class="main-content mt-0">
    <div class="page-header align-items-start min-vh-60 pt-5 pb-11 mt-6 m-3 border-radius-lg" style="background-image: url('https://mosir.rybnik.pl/fileadmin/user_files/o-nas/wolontariat/72841164_2518600048193514_3649408641687093248_n.jpg'); background-position: center;">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">@lang('home.register.title')</h1>
            <h5 class="text-lead text-white">@lang('home.register.text')</h5>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-6 col-lg-6 col-md-8 mx-auto">
          <div class="card z-index-0">
            <div class="card-body">
              <form method="post" action="{{ route('register') }}" role="form" id="register_form">
                @csrf
                <input id="hidden" type="hidden" name="phone">
                @if($errors->any())
                                <div class="alert bg-danger text-white alert-dismissible fade show" role="alert">
                                    <div class="alert-text">
                                        <p>@lang('Formularz zawiera następujące błędy:')</p>
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @endif
                <div class="form-group">
                    <label for="firstname" class="text-sm ms-0">@lang('main.information.firstname')</label>
                    <input class="form-control @error('firstname') is-invalid @enderror" placeholder="@lang('home.register.firstname')" type="text" name="firstname" id="firstname" value="@old('firstname')" max="255" required >
                    @error('firstname')
                        <span class="text-danger text-sm" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="lastname" class="text-sm ms-0">@lang('main.information.lastname')</label>
                    <input class="form-control @error('lastname') is-invalid @enderror" placeholder="@lang('home.register.lastname')" type="text" name="lastname" id="lastname" value="@old('lastname')" max="255" required >
                    @error('lastname')
                        <span class="text-danger text-sm" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password" class="text-sm ms-0">@lang('main.information.password')</label>
                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" max="255" id="password" required >
                    <p class="text-xs m-0">@lang('home.register.passwordinfo')</p>
                    {{-- <div class="text-muted font-italic d-none">
                        <small>password strength: <span class="text-success font-weight-700">strong</span></small>
                    </div> --}}
                    @error('password')
                        <span class="text-danger text-sm" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password_confirmation" class="text-sm ms-0">@lang('home.register.repeatpassword')</label>
                    <input class="form-control" type="password" name="password_confirmation" max="255" id="password_confirmation" required >
                    @error('repeat_password')
                        <span class="text-danger text-sm" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="email" class="text-sm ms-0">@lang('main.information.email')</label>
                    <input class="form-control @error('email') is-invalid @enderror" placeholder="@lang('home.register.email')" type="email" name="email" value="@old('email')" max="255" id="email" required >
                    @error('email')
                        <span class="text-danger text-sm" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="telephone" class="text-sm ms-0">@lang('main.information.telephone')</label>
                    <input class="form-control @error('telephone') is-invalid @enderror @error('phone') is-invalid @enderror w-100" placeholder="@lang('np. 123 456 789')" type="tel" name="telephone" value="@old('telephone')" max="255" id="telephone" required >
                </div>
                <div class="form-group">
                    @error('telephone')
                        <span class="text-danger text-sm" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    @error('phone')
                        <span class="text-danger text-sm" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="Gender" class="text-sm ms-0">@lang('main.information.gender')</label>
                    <select class="form-control @error('gender') is-invalid @enderror w-100" id="gender" name="gender" required >
                        <option>@lang('main.select')</option>
                        <option value="m" @selected(old('gender') == "m")>@lang('main.information.male')</option>
                        <option value="f" @selected(old('gender') == "f")>@lang('main.information.female')</option>
                    </select>
                    @error('gender')
                        <span class="text-danger text-sm" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="birth" class="text-sm ms-0">@lang('main.information.birthdate')</label>
                    <input type="date" class="form-control @error('birth') is-invalid @enderror" name="birth" id="birth" value="@old('birth')" required >
                      @error('birth')
                        <span class="text-danger text-sm" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- <div class="form-group">
                    <label for="description" class="text-sm ms-0">@lang('Opisz siebie w paru zdaniach')</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" style="resize: none" cols="30" rows="4">@old('description')</textarea>
                    @error('description')
                        <span class="text-danger text-sm" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div> --}}

                <div class="form-group text-center">
                    {!! NoCaptcha::display() !!}
                    @error('g-recaptcha-response')
                        <span class="text-danger text-sm" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-check form-check-info text-start">
                    <input class="form-check-input" type="checkbox" type="checkbox" name="marketing" id="marketing" >
                    <label class="form-check-label" for="marketing">@lang('home.register.marketing')</a>
                    </label><br>
                    @error('marketing')
                          <span class="text-danger text-sm" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                <div class="form-check form-check-info text-start">
                    <input class="form-check-input" type="checkbox" type="checkbox" name="terms" id="terms" required >
                    <label class="form-check-label" for="terms">@lang('Akcceptuję regulamin serwisu i politykę prywatności')</span></a>
                    </label><br>
                    @error('terms')
                          <span class="text-danger text-sm" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary w-100 my-2" id="register_button" >@lang('main.signin')</button>
                </div>
                <p class="text-sm mt-3 mb-0">@lang('home.register.haveaccount') <a href="{{ route('login') }}" class="text-dark font-weight-bolder">@lang('main.login')</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('home.include.footer')
  </main>
@endsection

@push('scripts')
<script>
    var input = document.querySelector("#telephone");
    var iti = window.intlTelInput(input, {
    initialCountry: "auto",
    nationalMode: true,
    preferredCountries: ['pl', 'ua', 'cz'],
    formatOnDisplay:true,
    onlyCountries: ["al", "ad", "at", "by", "be", "ba", "bg", "hr", "cz", "dk",
    "ee", "fo", "fi", "fr", "de", "gi", "gr", "va", "hu", "is", "ie", "it", "lv",
    "li", "lt", "lu", "mk", "mt", "md", "mc", "me", "nl", "no", "pl", "pt", "ro",
    "ru", "sm", "rs", "sk", "si", "es", "se", "ch", "ua", "gb"],
    initialCountry: 'pl',
    utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });

    $("#register_form").submit(function() {$("#hidden").val(iti.getNumber());});

        let gender_choices = new Choices(document.getElementById("gender"), {
            searchEnabled:false,
            shouldSort: false,
            placeholder: true,
        });
</script>

{!! NoCaptcha::renderJs(session('locale')) !!}

@endpush
