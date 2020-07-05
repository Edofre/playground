@extends('layouts.app')

@section('title', __('auth.send_password_reset_link'))

@section('content')


<div class="container mx-auto">
    <div class="flex flex-wrap justify-center">
        <div class="w-full max-w-sm">
            <div class="flex flex-col break-words bg-white border rounded shadow-md">

                <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                    {{ __('auth.send_password_reset_link') }}
                </div>

                @if (session('status'))
                    <div class="p-6">
                        <div class="border rounded shadow text-sm text-green-700 bg-green-100 p-2" role="alert">
                            {{ session('status') }}
                        </div>
                    </div>
                @else
                    <form class="w-full p-6" method="POST" action="{{ route('password.email') }}">
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

                        <div class="flex">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-gray-100 py-1 px-3 rounded focus:outline-none focus:shadow-outline ml-auto">
                                {{ __('auth.send_password_reset_link') }}
                            </button>
                        </div>
                    </form>
                @endif

                <div class="bg-gray-200 text-xs italic text-gray-700 mt-3 py-3 px-6 flex">
                    <a class="text-blue-500 hover:text-blue-700 mr-auto" href="{{ route('login') }}">
                        {{ __('auth.back_to_login') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
