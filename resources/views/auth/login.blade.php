@extends('layouts.auth')

@section('title', __('auth.login'))

@section('content')
<div class="container mx-auto">
    <div class="flex flex-wrap justify-center">
        <div class="w-full max-w-sm">
            <div class="flex flex-col break-words bg-white border rounded shadow-md">

                <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                    {{ __('auth.login') }}
                </div>

                <form class="w-full p-6" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="flex flex-wrap mb-3">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sr-only">
                            {{ __('auth.email') }}
                        </label>
                        <input id="email" type="email" class="form-input w-full @error('email') border-red-500 @enderror" placeholder="{{ __('auth.email') }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <p class="text-red-500 text-xs italic mt-1">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap mb-3">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sr-only">
                            {{ __('auth.password') }}
                        </label>
                        <input id="password" type="password" class="form-input w-full @error('password') border-red-500 @enderror" placeholder="{{ __('auth.password') }}" name="password" required>
                        @error('password')
                        <p class="text-red-500 text-xs italic mt-1">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex">
                        <label class="inline-flex items-center text-sm text-gray-700" for="remember">
                            <input type="checkbox" name="remember" id="remember" class="form-checkbox" {{ old('remember') ? 'checked' : '' }}>
                            <span class="ml-2">{{ __('auth.remember_me') }}</span>
                        </label>

                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-gray-100 py-1 px-3 rounded focus:outline-none focus:shadow-outline ml-auto">
                            {{ __('Login') }}
                        </button>
                    </div>
                </form>

                <div class="bg-gray-200 text-xs italic text-gray-700 py-3 px-6 flex">
                    @if (Route::has('password.request'))
                        <a class="text-blue-500 hover:text-blue-700 mr-auto" href="{{ route('password.request') }}">
                            {{ __('auth.forgot_your_password') }}
                        </a>
                    @endif
                    @if (Route::has('register'))
                        <a class="text-blue-500 hover:text-blue-700 ml-auto" href="{{ route('register') }}">
                            {{ __('auth.register') }}
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
