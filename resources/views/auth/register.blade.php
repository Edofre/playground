@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf

    <label for="name">{{ __('auth.name') }}</label>
    <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    @error('name')
    <strong>{{ $message }}</strong>
    @enderror

    <label for="email">{{ __('auth.email') }}</label>
    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
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
        {{ __('auth.register') }}
    </button>
</form>
@endsection
