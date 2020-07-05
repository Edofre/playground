@extends('layouts.app')

@section('title', __('auth.registration'))

@section('content')
<div class="container mx-auto">
    <div class="flex flex-wrap justify-center">
        <div class="w-full max-w-sm">
            <div class="flex flex-col break-words bg-white border rounded shadow-md">

                <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                    {{ __('auth.registration') }}
                </div>

                <form class="w-full p-6" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="flex flex-wrap mb-3">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sr-only">
                            {{ __('auth.name') }}
                        </label>
                        <input id="name" type="name" class="form-input w-full @error('name') border-red-500 @enderror" placeholder="{{ __('auth.name') }}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <p class="text-red-500 text-xs italic mt-1">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

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
                        <input id="password" type="password" class="form-input w-full @error('password') border-red-500 @enderror" placeholder="{{ __('auth.password') }}" name="password" required autocomplete="new-password" autofocus>
                        @error('password')
                        <p class="text-red-500 text-xs italic mt-1">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap mb-3">
                        <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2 sr-only">
                            {{ __('auth.password_confirmation') }}
                        </label>
                        <input id="password_confirmation" type="password" class="form-input w-full @error('password_confirmation') border-red-500 @enderror" placeholder="{{ __('auth.password_confirmation') }}" name="password_confirmation" required autocomplete="new-password" autofocus>
                        @error('password_confirmation')
                        <p class="text-red-500 text-xs italic mt-1">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-gray-100 py-1 px-3 rounded focus:outline-none focus:shadow-outline ml-auto">
                            {{ __('auth.register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
