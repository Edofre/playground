@extends('layouts.profile')

@section('title', 'Edo Freriks')

@section('content')

<div class="md:w-1/2 mx-auto px-4 py-6">
    <div class="md:flex bg-white rounded-lg p-6">
        <img class="h-24 w-24 rounded-full mx-auto md:mx-0 md:mr-6 object-cover" src="{{ asset('img/edo.png') }}">
        <div class="text-center md:text-left">
            <h2 class="text-xl text-gray-700">Edo Freriks</h2>
            <div class="text-green-500">Software developer</div>

            <div class="text-gray-700 mt-0 md:mt-4 space-x-1">
                <a href="https://github.com/edofre"><i class="fab fa-github hover:text-green-500"></i></a>
                <a href="https://www.linkedin.com/in/edo-freriks/"><i class="fab fa-linkedin-in hover:text-green-500"></i></a>
                <a href="https://twitter.com/edofre"><i class="fab fa-twitter hover:text-green-500"></i></a>

                <a href="mailto:edofre@gmail.com"><i class="fas fa-at hover:text-green-500"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection
