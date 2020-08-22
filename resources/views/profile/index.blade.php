@extends('layouts.profile')

@section('title', 'Edo Freriks')

@section('content')

<div class="w-full sm:w-1/2 mx-auto px-4 py-6">
    <div class="md:flex bg-white rounded-lg p-6">
        <img class="h-24 w-24 border-solid border-2 border-green-500 rounded-full mx-auto md:mx-0 md:mr-6 object-cover" src="{{ asset('img/edo.png') }}">
        <div class="text-center md:text-left">
            <h2 class="text-xl text-gray-700">Edo Freriks</h2>
            <div class="text-green-500">Software developer</div>

            <div class="text-gray-700 mt-2 md:mt-4 space-x-1">
                <a href="https://github.com/edofre"><i class="fab fa-github hover:text-green-500"></i></a>
                <a href="https://www.linkedin.com/in/edo-freriks/"><i class="fab fa-linkedin-in hover:text-green-500"></i></a>
                <a href="https://twitter.com/edofre"><i class="fab fa-twitter hover:text-green-500"></i></a>

                <a href="mailto:edofre@gmail.com"><i class="fas fa-at hover:text-green-500"></i></a>
            </div>
        </div>
    </div>

    <div class="flex mt-4 bg-white rounded-lg p-6">
        <div class="w-1/2">
            <h2 class="text-xl text-gray-700">Skills</h2>

            <div class="text-gray-700 mt-2 md:mt-4">
                <ul class="list-disc list-inside">
                    <li>Laravel</li>
                </ul>
            </div>
        </div>

        <div class="w-1/2">
            <h2 class="text-xl text-gray-700">Ook</h2>

            <div class="mt-2 md:mt-4">
                <ul class="list-disc list-inside text-green-500">
                    <li class=""><span class="text-gray-700">VueJS</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
