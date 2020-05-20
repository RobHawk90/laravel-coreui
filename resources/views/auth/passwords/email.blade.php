@extends('layouts.login')

@section('title', __('Reset Password'))

@section('description', __('Enter your e-mail for a reset link'))

@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif

<form method="POST" action="{{ route('password.email') }}">
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

    <div class="form-group row mb-0">
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Send') }}
            </button>
        </div>
        <div class="col-md-8 text-right">
            <a href="{{ route('login') }}" class="btn btn-link">
                {{ __('Back to login') }}
            </a>
        </div>
    </div>
</form>
@endsection