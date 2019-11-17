
@include('auth.loginstyle')

<div style="background-color: #666666;">

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100" {{ __('Login') }}>
                <div>

                    <form method="POST" class="login100-form" action="{{ route('login') }}">
                        @csrf
                        <a class="login100-form-title p-b-43">
                            <img src="{{asset('assets/dist/img/sygdap.png')}}" alt=""
                            style="opacity: .8">
                        </a>

                        <span class="login100-form-title p-b-43">
                            SyGDAP Connexion
                        </span>


                        <div class="wrap-input100">
                            <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <span class="focus-input100"></span>
                            <span class="label-input100"> {{ __('E-Mail') }}</span>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="wrap-input100">
                            <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            <span class="focus-input100"></span>
                            <span class="label-input100">{{ __('Mot de passe') }}</span>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="flex-sb-m w-full p-t-3 p-b-32">
                            <div class="contact100-form-checkbox">
                                <input class="input-checkbox100" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="label-checkbox100" for="ckb1">
                                    {{ __('Se souvenir de moi') }}
                                </label>
                            </div>

                            <div>

                                @if (Route::has('password.request'))
                                <a class="txt1" href="{{ route('password.request') }}">
                                    {{ __('Mot de passe oublié?') }}
                                </a>
                                @endif
                            </div>
                        </div>

                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn">
                                {{ __('Se connecter') }}
                            </button>
                        </div>

                        <div class="login100-form-social flex-c-m">
                            <a href="{{ route('register') }}" class="nav-link active">
                                <span class="txt2">
                                    Créer votre compte
                                    <i class="right fa fa-angle-left"></i>
                                </span>
                            </a>
                        </div>
                    </form>
                </div>
                <div class="login100-more" style="background-image: url('loginpresta/images/bg-01.jpg');">
                </div>
            </div>
        </div>
    </div>

    @include('auth.scriptslogin')
