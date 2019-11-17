@extends('default')
@section('content')
@include('auth.loginstyle')

<div style="background-color: #666666;">
    <div class="limiter">
          <div class="container-login100">
            <div class="wrap-login100" {{ __('S\'enregistrer') }}>
                    <form method="POST" class="login100-form validate-form"{{ route('register') }}">
                        @csrf

                        <div class="wrap-input100 validate-input">
                            <input id="name" type="text" class="input100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            {{-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Prénom Nom') }}</label> --}}
                            <span class="focus-input100"></span>
                            <span class="label-input100"> {{ __('Prénom Nom') }}</span>

                            <div class="col-md-6">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                       <div class="wrap-input100 validate-input">
                            <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                           <span class="focus-input100"></span>
                            <span class="label-input100"> {{ __('Adresse mail') }}</span>
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse Mail') }}</label> --}}

                            <div class="col-md-6">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                               <div class="wrap-input100 validate-input">
                           <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
 <span class="focus-input100"></span>
                            <span class="label-input100"> {{ __('Mot de passe') }}</span>
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label> --}}

                            <div class="col-md-6">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                     <div class="wrap-input100 validate-input">
                                                         <input id="password-confirm" type="password" class="input100" name="password_confirmation" required autocomplete="new-password">

                         <span class="focus-input100"></span>
                            <span class="label-input100"> {{ __('Confirmer mot de passe') }}</span>
                            {{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmer mot de passe') }}</label> --}}

                            <div class="col-md-6">
                            </div>
                        </div>

                      <div class="container-login100-form-btn">
                                <button type="submit" class="login100-form-btn">
                                    {{ __('Enregistrer') }}
                                </button>
                            </div>




                </form>

                <div class="login100-more" style="background-image: url('loginpresta/images/bg-01.jpg');">
                </div>
            </div>
        </div>
    </div>

    @include('auth.scriptslogin')





@endsection
