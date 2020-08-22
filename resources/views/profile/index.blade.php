@extends('layouts.profile')

@section('title', 'Edo Freriks - profile')

@section('content')

<div class="w-full sm:w-1/2 mx-auto px-4 py-6">
    <div class="w-3/4 mx-auto sm:w-full md:flex bg-white rounded-lg p-6">
        <img class="h-24 w-24 border-solid border-2 border-green-500 rounded-full mx-auto md:mx-0 md:mr-6 object-cover" src="{{ asset('img/edo.png') }}">
        <div class="text-center mt-2 md:text-left">
            <h2 class="text-xl text-gray-700">Edo Freriks</h2>
            <div class="text-green-500">Software developer</div>
            <div class="text-gray-700 mt-2 md:mt-4 space-x-1">
                <a href="https://github.com/edofre" target="_blank"><i class="fab fa-github hover:text-green-500"></i></a>
                <a href="https://www.linkedin.com/in/edo-freriks/" target="_blank"><i class="fab fa-linkedin-in hover:text-green-500"></i></a>
                <a href="https://twitter.com/edofre" target="_blank"><i class="fab fa-twitter hover:text-green-500"></i></a>
                <a href="mailto:edofre@gmail.com"><i class="fas fa-at hover:text-green-500"></i></a>
                <a href="https://wa.me/31642110474" target="_blank"><i class="fab fa-whatsapp hover:text-green-500"></i></a>
            </div>
        </div>
    </div>

    <div class="flex mt-4 bg-white rounded-lg p-6">
        <div class="w-full">
            <h2 class="text-xl text-gray-700">About me</h2>
            <div class="text-gray-700 mt-2 md:mt-4">
                Not sure what to write
            </div>
        </div>
    </div>

    <div class="flex mt-4 bg-white rounded-lg p-6">
        <div class="w-1/3">
            <h2 class="text-xl text-gray-700">Languages</h2>
            <div class="text-gray-700 mt-2 md:mt-4">
                <ul class="list-disc list-inside text-green-500">
                    <li><span class="text-gray-700">PHP</span></li>
                    <li><span class="text-gray-700">SQL</span></li>
                    <li><span class="text-gray-700">Javascript</span></li>
                    <li><span class="text-gray-700">CSS</span></li>
                </ul>
            </div>
        </div>

        <div class="w-1/3">
            <h2 class="text-xl text-gray-700">Frameworks</h2>
            <div class="mt-2 md:mt-4">
                <ul class="list-disc list-inside text-green-500">
                    <li><span class="text-gray-700">Laravel</span></li>
                    <li><span class="text-gray-700">Symfony</span></li>
                    <li><span class="text-gray-700">Yii</span></li>
                    <li><span class="text-gray-700">VueJS</span></li>
                    <li><span class="text-gray-700">Nuxt</span></li>
                    <li><span class="text-gray-700">Tailwind</span></li>
                </ul>
            </div>
        </div>

        <div class="w-1/3">
            <h2 class="text-xl text-gray-700">Misc.</h2>
            <div class="mt-2 md:mt-4">
                <ul class="list-disc list-inside text-green-500">
                    <li><span class="text-gray-700">GIT</span></li>
                    <li><span class="text-gray-700">AFAS</span></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="flex mt-4 bg-white rounded-lg p-6">
        <div class="w-full">
            <h2 class="text-xl text-gray-700">Work experience</h2>
            <div class="text-gray-700 mt-2 md:mt-4">
                <div class="max-w rounded overflow-hidden shadow-md px-6 py-4">
                    <div class="w-full">
                        <div class="flex">
                            <a class="w-3/4 text-lg text-gray-700 mb-2 underline hover:text-green-500" href="https://lajos.nl/" target="_blank">
                                Lajos
                            </a>
                            <div class="w-1/4 text-right text-gray-500">
                                2016 - present
                            </div>
                        </div>
                        <div class="text-green-500">
                            Working on several Laravel, Symfony & VueJS projects.
                        </div>
                        <div class="text-gray-700 mt-1">
                            Worked on a lot of projects of which <a class="underline hover:text-green-500" href="https://stkkr.nl/" target="_blank">STKKR</a> is the biggest.
                        </div>
                    </div>
                </div>
                <div class="mt-4 max-w rounded overflow-hidden shadow-md px-6 py-4">
                    <div class="w-full">
                        <div class="flex">
                            <a class="w-3/4 text-lg text-gray-700 mb-2 underline hover:text-green-500" href="https://www.releaz.nl/" target="_blank">
                                Releaz
                            </a>
                            <div class="w-1/4 text-right text-gray-500">
                                2012 - 2016
                            </div>
                        </div>
                        <div class="text-green-500">
                            Developed a wide range of applications in the Yii framework.
                        </div>
                        <div class="text-gray-700 mt-1">
                            Most notably developed the API and backend for <a class="underline hover:text-green-500" href="https://www.bouw7.nl/" target="_blank">bouw7</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex mt-4 bg-white rounded-lg p-6">
        <div class="w-full">
            <h2 class="text-xl text-gray-700">Education & courses</h2>

            <div class="text-gray-700 mt-2 md:mt-4">
                <div class="max-w rounded overflow-hidden shadow-md px-6 py-4">
                    <div class="w-full">
                        <div class="flex">
                            <div class="w-3/4 text-lg text-gray-700 mb-2">
                                Hanzehogeschool Groningen
                            </div>
                            <div class="w-1/4 text-right text-gray-500">
                                2008 - 2012
                            </div>
                        </div>
                        <div class="text-green-500">
                            Bachelor of Information and Communication Technology
                        </div>
                    </div>
                </div>

                <div class="mt-4 max-w rounded overflow-hidden shadow-md px-6 py-4">
                    <div class="w-full">
                        <div class="flex">
                            <div class="w-3/4 text-lg text-gray-700 mb-2">
                                Udemy
                            </div>
                            <div class="w-1/4 text-right text-gray-500">
                                2019 - 2020
                            </div>
                        </div>
                        <ul class="list-disc list-inside text-green-500">
                            <li><span class="text-gray-700">Vue JS - The Complete Guide (incl. Vue Router & Vuex)</span></li>
                            <li><span class="text-gray-700">Understanding TypeScript</span></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

@endsection
