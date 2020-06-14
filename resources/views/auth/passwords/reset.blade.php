@extends('layouts.app')

@section('title', __('auth.reset_password'))

@section('content')
<form method="POST" action="{{ route('password.update') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">

    <label for="email">{{ __('auth.email') }}</label>
    <input id="email" type="email" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
    @error('email')
    <strong>{{ $message }}</strong>
    @enderror

    <label for="password">{{ __('auth.password') }}</label>
    <input id="password" type="password" name="password" required autocomplete="new-password">
    @error('password')
    <strong>{{ $message }}</strong>
    @enderror

    <label for="password-confirm">{{ __('auth.confirm_password') }}</label>
    <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">

    <button type="submit">
        {{ __('auth.reset_password') }}
    </button>
</form>
@endsection
