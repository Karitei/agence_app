@extends('layouts.auth.login')

@section ('container')

    <div class="auth-layout-wrap" style="background-image: url(../../dist-assets/images/photo-wide-4.jpg)">
        <div class="auth-content">
            <div class="card o-hidden">
                <div class="row">
                    <div class="col-md-12">
                        <div class="p-4">
                            <div class="auth-logo text-center mb-4"><img src="../../dist-assets/images/logo.png" alt=""></div>
                            <h1 class="mb-3 text-18">Se connecter à votre compte</h1>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email" class="col-form-label text-md-right">{{ __('Adress email') }}</label>


                                        <input id="email" type="email" class="form-control form-control-rounded @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror

                                </div>
                                <div class="form-group">

                                    <label for="password" >{{ __('Mot de passe') }}</label>
                                    <input id="password" type="password" class="form-control form-control-rounded @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Se rappeler de moi') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-rounded btn-primary btn-block mt-2">Connexion</button>
                            </form>
                            <!--div class="mt-3 text-center">
                                @if (Route::has('password.request'))
                                    <a class="mt-3 text-center" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div-->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf








        </form>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection