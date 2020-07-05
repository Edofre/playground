@extends('layouts.auth')

@section('title', __('auth.confirm_password'))

@section('content')

{{ __('auth.confirm_password_to_continue') }}

<form method="POST" action="{{ route('password.confirm') }}">
    @csrf

    <label for="password">{{ __('auth.password') }}</label>
    <input id="password" type="password" name="password" required autocomplete="current-password">
    @error('password')
        <strong>{{ $message }}</strong>
    @enderror

    <button type="submit">
        {{ __('auth.confirm_password') }}
    </button>

    @if (Route::has('password.request'))
    <a href="{{ route('password.request') }}">
        {{ __('auth.forgot_password') }}
    </a>
    @endif
</form>
@endsection
