<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class=bg-gray-100>
    <nav x-data="{ profile: false, menu: false }" class="bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <!-- <img class="h-8 w-8" src="/img/logos/workflow-mark-on-dark.svg" alt="Workflow logo" /> -->
                        <a href="/" class="text-white underline">{{ config('app.name', 'Laravel') }}</a>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline">
                            <a href="/" 
                                class="px-3 py-2 rounded-md text-sm font-medium focus:outline-none {{ request()->routeIs('dashboard.*') ? 'text-white bg-gray-900 focus:text-white focus:bg-gray-700' : 'hover:text-white hover:bg-gray-700 text-gray-300 focus:text-white focus:bg-gray-700' }}">
                                Dashboard
                            </a>
                            <a href="{{ route('activities.index') }}" 
                                class="ml-4 px-3 py-2 rounded-md text-sm font-medium focus:outline-none {{ request()->routeIs('activities.*') ? 'text-white bg-gray-900 focus:text-white focus:bg-gray-700' : 'hover:text-white hover:bg-gray-700 text-gray-300 focus:text-white focus:bg-gray-700' }} ">
                                {{ __('activity.activities') }}
                            </a>
                            <a href="{{ route('categories.index') }}" 
                                class="ml-4 px-3 py-2 rounded-md text-sm font-medium focus:outline-none {{ request()->routeIs('categories.*') ? 'text-white bg-gray-900 focus:text-white focus:bg-gray-700' : 'hover:text-white hover:bg-gray-700 text-gray-300 focus:text-white focus:bg-gray-700' }} ">
                                {{ __('category.categories') }}
                            </a>
                            <a href="{{ route('tags.index') }}" 
                                class="ml-4 px-3 py-2 rounded-md text-sm font-medium focus:outline-none {{ request()->routeIs('tags.*') ? 'text-white bg-gray-900 focus:text-white focus:bg-gray-700' : 'hover:text-white hover:bg-gray-700 text-gray-300 focus:text-white focus:bg-gray-700' }} ">
                                {{ __('tag.tags') }}
                            </a>
                        </div>
                    </div>
                </div>

                @auth
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <!-- <button class="p-1 border-2 border-transparent text-gray-400 rounded-full hover:text-white focus:outline-none focus:text-white focus:bg-gray-700" aria-label="Notifications">
                                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                    </svg>
                                </button> -->

                        <!-- Profile dropdown -->
                        <div class="ml-3 relative">
                            <div>
                                <button @click="profile = !profile" class="max-w-xs flex items-center text-sm rounded-full text-white focus:outline-none focus:shadow-solid" id="user-menu" aria-label="User menu" aria-haspopup="true">
                                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                                </button>
                            </div>
                            <!--
                                    Profile dropdown panel, show/hide based on dropdown state.
                                    Entering: "transition ease-out duration-100"
                                    From: "transform opacity-0 scale-95"
                                    To: "transform opacity-100 scale-100"
                                    Leaving: "transition ease-in duration-75"
                                    From: "transform opacity-100 scale-100"
                                    To: "transform opacity-0 scale-95"
                                    -->
                            <div x-show="profile" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-95" @click.away="profile = false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
                                <div class="py-1 rounded-md bg-white shadow-xs" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                                        Your Profile
                                    </a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                                        Settings
                                    </a>
                                    <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endauth

                <div class="-mr-2 flex md:hidden">
                    <!-- Mobile menu button -->
                    <button @click="menu = !menu" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white">
                        <!-- Menu open: "hidden", Menu closed: "block" -->
                        <svg class="block h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!-- Menu open: "block", Menu closed: "hidden" -->
                        <svg class="hidden h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div :class="{ hidden: menu === false, 'md:hidden': menu === false, block: menu === true }" class="hidden md:hidden">
            <div class="px-2 pt-2 pb-3 sm:px-3">
                <a href="/" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('dashboard.*') ? 'text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700' : 'text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700'}}">
                    Dashboard
                </a>
                <a href="{{ route('activities.index') }}" class="mt-1 block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('activities.*') ? 'text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700' : 'text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700'}}">
                    {{ __('activity.activities') }}
                </a>
                <a href="{{ route('categories.index') }}" class="mt-1 block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('categories.*') ? 'text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700' : 'text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700'}}">
                    {{ __('category.categories') }}
                </a>
                <a href="{{ route('tags.index') }}" class="mt-1 block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('tags.*') ? 'text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700' : 'text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700'}}">
                    {{ __('tag.tags') }}
                </a>
            </div>
            <div class="pt-4 pb-3 border-t border-gray-700">
                <div class="flex items-center px-5">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium leading-none text-white">
                            Tom Cook
                        </div>
                        <div class="mt-1 text-sm font-medium leading-none text-gray-400">
                            tom@example.com
                        </div>
                    </div>
                </div>
                <div class="mt-3 px-2">
                    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">
                        Your Profile
                    </a>
                    <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">
                        Settings
                    </a>
                    <a href="{{ route('logout') }}" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700" role="menuitem" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <header class="bg-white shadow">
        @yield('header')
    </header>
    <main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            @yield('content')
        </div>
    </main>
</body>

</html>
