@extends('layouts.app')

@section('content')
@if (session('status'))
{{ session('status') }}
@endif

<form method="POST" action="{{ route('password.email') }}">
    @csrf

    <label for="email">{{ __('E-Mail Address') }}</label>
    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    @error('email')
    <strong>{{ $message }}</strong>
    @enderror

    <button type="submit">
        {{ __('Send Password Reset Link') }}
    </button>
</form>
@endsection
