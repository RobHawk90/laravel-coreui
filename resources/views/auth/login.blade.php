@extends('layouts.login')

@section('title', __('Login'))

@section('description', __('Sign In to your account'))

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">
                <i class="c-icon fa fa-envelope"></i>
            </span>
        </div>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
            value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="input-group mb-4">
        <div class="input-group-prepend">
            <span class="input-group-text">
                <i class="c-icon fa fa-lock"></i>
            </span>
        </div>
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
            placeholder="{{ __('Password') }}">
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="row">
        <div class="col-4">
            <button class="btn btn-primary px-4" type="submit">
                {{ __('Login') }}
            </button>
        </div>
        @if (Route::has('password.request'))
        <div class="col-8 text-right">
            <a class="btn btn-link px-0" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        </div>
        @endif
    </div>
</form>
@endsection