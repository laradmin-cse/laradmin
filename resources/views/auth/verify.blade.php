@extends('layouts.auth-app')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-center">
            <span class="roboto-condensed-title">{{ __('VERIFY EMAIL ADDRESS') }}</span>
        </div>
    </div>
    <div class="card-body">
        @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
        @endif

        {{ __('Before proceeding, please check your email for a verification link.') }}
        {{ __('If you did not receive the email') }},
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
        </form>
    </div>
    <div class="card-footer">
        <div class="d-flex justify-content-center">
            <span class="small text-secondary">Copyright &copy; Laradmin 2027 : MIT</span>
        </div>
    </div>
</div>
@endsection