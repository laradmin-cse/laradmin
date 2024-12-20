@extends('layouts.auth-app')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-center">
            <span class="roboto-condensed-title">{{ __('REGISTER') }}</span>
        </div>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-dark">
                        {{ __('Register') }}
                    </button>
                    @if (Route::has('login'))
                    <a class="btn btn-link" href="{{ route('login') }}">
                        {{ __('Already have an account?') }}
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