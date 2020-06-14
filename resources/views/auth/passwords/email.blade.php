@extends('layouts.app')

@section('title', __('auth.send_password_reset_link'))

@section('content')
@if (session('status'))
{{ session('status') }}
@endif

<form method="POST" action="{{ route('password.email') }}">
    @csrf

    <label for="email">{{ __('auth.email') }}</label>
    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    @error('email')
    <strong>{{ $message }}</strong>
    @enderror

    <button type="submit">
        {{ __('auth.send_password_reset_link') }}
    </button>
</form>
@endsection
