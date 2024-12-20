@extends('layouts.auth-app')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-center">
            <span class="roboto-condensed-title">{{ __('LOGIN') }}</span>
        </div>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-dark">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
            </div>
        </form>
        <hr>
        <div class="row">
            <div class="d-flex justify-content-center text-center">
                <a href="#!" class="text-secondary me-2"><i class="bi bi-facebook" style="font-size: 30px;"></i></a>
                <a href="#!" class="text-secondary mx-2"><i class="bi bi-twitter" style="font-size: 30px;"></i></a>
                <a href="#!" class="text-secondary ms-2"><i class="bi bi-google" style="font-size: 30px;"></i></a>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="d-flex justify-content-center">
            <span class="small text-secondary">Copyright &copy; Laradmin 2027 : MIT</span>
        </div>
    </div>
</div>
@endsection