<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div>
        @if (Route::has('login'))
        <div>
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a class="bg-red" href="{{ route('login') }}">Login</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
        @endif

        <div>
            <div class="bg-black text-cyan">
                Laravel
            </div>
            <div class="md:flex bg-white rounded-lg p-6">
                <img class="h-16 w-16 md:h-24 md:w-24 rounded-full mx-auto md:mx-0 md:mr-6" src="https://via.placeholder.com/24">
                <div class="text-center md:text-left">
                    <h2 class="text-lg">Erin Lindford</h2>
                    <div class="text-purple-500">Customer Support</div>
                    <div class="text-gray-600">erinlindford@example.com</div>
                    <div class="text-gray-600">(555) 765-4321</div>
                    </div>
                </div>
        </div>
    </div>
</body>

</html>
