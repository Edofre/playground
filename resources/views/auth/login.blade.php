@extends('layouts.app')

@section('title')
    {{ __('auth.login') }}
@endsection

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf

    <label for="email">{{ __('auth.email') }}</label>
    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    @error('email')
    <span>
        <strong>{{ $message }}</strong>
    </span>
    @enderror

    <label for="password">{{ __('auth.password') }}</label>
    <input id="password" type="password" name="password" required autocomplete="current-password">
    @error('password')
    <span>
        <strong>{{ $message }}</strong>
    </span>
    @enderror

    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    <label for="remember">
        {{ __('auth.remember_me') }}
    </label>

    <button type="submit">
        {{ __('auth.login') }}
    </button>

    @if (Route::has('password.request'))
    <a href="{{ route('password.request') }}">
        {{ __('auth.forgot_your_password') }}
    </a>
    @endif
</form>
@endsection