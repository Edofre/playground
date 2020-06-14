@extends('layouts.app')

@section('title', __('auth.register'))

@section('header')
<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold leading-tight text-gray-900">
        {{ __('auth.register') }}
    </h1>
</div>
@endsection

@section('content')
<div class="container mx-auto">
    <div class="flex flex-wrap justify-center">
        <div class="w-full max-w-sm">
            <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                    {{ __('auth.register') }}
                </div>

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
            </div>
        </div>
    </div>
</div>
@endsection
