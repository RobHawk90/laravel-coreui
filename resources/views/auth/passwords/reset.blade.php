@extends('layouts.login')

@section('title', __('Reset Password'))

@section('description', __('Enter a new password'))

@section('content')
<form method="POST" action="{{ route('password.update') }}">
    @csrf

    <input type="hidden" name="token" value="{{ $token }}">

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">
                <i class="c-icon fa fa-envelope"></i>
            </span>
        </div>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
            value="{{ $email ?? old('email') }}" placeholder="{{ __('E-Mail Address') }}">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="input-group mb-3">
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

    <div class="input-group mb-4">
        <div class="input-group-prepend">
            <span class="input-group-text">
                <i class="c-icon fa fa-lock"></i>
            </span>
        </div>
        <input type="password" name="password_confirmation" class="form-control"
            placeholder="{{__('Confirm Password') }}">
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Reset Password') }}
            </button>
        </div>
    </div>
</form>
@endsection