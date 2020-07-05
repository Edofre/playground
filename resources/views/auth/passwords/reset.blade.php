@extends('layouts.app')

@section('title', __('auth.reset_password'))

@section('content')

<div class="container mx-auto">
    <div class="flex flex-wrap justify-center">
        <div class="w-full max-w-sm">
            <div class="flex flex-col break-words bg-white border rounded shadow-md">

                <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                    {{ __('auth.reset_password') }}
                </div>

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

            </div>
        </div>
    </div>
</div>

@endsection
