@extends('layouts.auth-app')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-center">
            <span class="roboto-condensed-title">{{ __('CONFIRM PASSWORD') }}</span>
        </div>
    </div>
    <div class="card-body">
        {{ __('Please confirm your password before continuing.') }}
        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf
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
            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Confirm Password') }}
                    </button>

                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
    <div class="card-footer">
        <div class="d-flex justify-content-center">
            <span class="small text-secondary">Copyright &copy; Laradmin 2027 : MIT</span>
        </div>
    </div>
</div>
@endsection