@extends('layouts.app')

@section('content')
{{ __('Please confirm your password before continuing.') }}

<form method="POST" action="{{ route('password.confirm') }}">
    @csrf

    <label for="password">{{ __('Password') }}</label>
    <input id="password" type="password" name="password" required autocomplete="current-password">
    @error('password')
    <strong>{{ $message }}</strong>
    @enderror

    <button type="submit">
        {{ __('Confirm Password') }}
    </button>

    @if (Route::has('password.request'))
    <a href="{{ route('password.request') }}">
        {{ __('Forgot Your Password?') }}
    </a>
    @endif
</form>
@endsection
