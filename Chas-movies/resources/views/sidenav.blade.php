<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Chasmovies') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>

    </style>
</head>

<!-- Responsive navbar -->

<nav class="lg:hidden p-3 border-gray-200 rounded bg-gray-900 dark:bg-gray-800 dark:border-gray-700 sticky w-full z-50 top-0" id="navbar">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="{{ url('/') }}" class="flex items-center">
            <img src="https://chasacademy.se/wp-content/uploads/2020/12/ca-emblem-white.svg" class="h-6 mr-3 sm:h-10" alt="Flowbite Logo" />
            <span class="font-bold text-gray-400">Chas Movies</span>
        </a>
        <button data-collapse-toggle="navbar-hamburger" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 bg-gray-900 rounded-lg hover:bg-gray-700 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-hamburger" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="hidden w-full" id="navbar-hamburger">
            <ul class="flex flex-col mt-4 rounded-lg bg-gray-900 dark:bg-gray-800 dark:border-gray-700">
            @if (Auth()->check())
            @if (Auth::user()->role == 0 OR Auth::user()->role == 1)
                <li>
                    <H2 class="text-center text-gray-400 font-large">Welcome <br>{{ Auth::user()->name }}</H2>
                </li>
                @endif
                @endif
                <li>
                    <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="{{ url('/movie') }}">
                        <svg class="w-0 h-0 md:w-5 sm:w-5 lg:w-5 md:h-5 sm:h-5 lg:h-5 invisible md:visible lg:visible sm:visible" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                            <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z" fill="white"></path>
                        </svg>
                        <span class="ml-2 font-medium text-gray-400">Movie</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="{{ url('/show') }}">
                        <svg class="w-0 h-0 md:w-5 sm:w-5 lg:w-5 md:h-5 sm:h-5 lg:h-5 invisible md:visible lg:visible sm:visible" style="color: white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                            <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z" fill="white"></path>
                        </svg>
                        <span class="ml-2 font-medium text-gray-400">TV-show</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="{{ url('/kategori') }}">
                        <svg class="w-0 h-0 md:w-5 sm:w-5 lg:w-5 md:h-5 sm:h-5 lg:h-5 invisible md:visible lg:visible sm:visible" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                            <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z" fill="white"></path>
                        </svg>
                        <span class="ml-2 font-medium text-gray-400">Categories</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
                        <span class="w-0 h-0 md:w-5 sm:w-5 lg:w-5 md:h-5 sm:h-5 lg:h-5 invisible md:visible lg:visible sm:visible">🔥</span>
                        <span class="ml-2 font-medium text-gray-700">Trending</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center w-full h-12 px-3 mt-2 rounded text-gray-400 hover:bg-gray-700 hover:text-gray-300" href="{{ url('/helpcenter') }}">
                        <svg class="w-0 h-0 md:w-5 sm:w-5 lg:w-5 md:h-5 sm:h-5 lg:h-5 invisible md:visible lg:visible sm:visible" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                        </svg>
                        <span class="ml-2 font-medium text-gray-400">Help Center</span>
                    </a>
                </li>
            </ul>
            @if (Auth()->check())
            @if (Auth::user()->role == 0)
            <ul>
                <li>
                    <div class="flex flex-col mt-1">
                        <div class="flex flex-col items-center w-full">
                            <form method="get" action="{{ route('watchlist', $user_id) }}" class="w-full p-0 m-0">
                                <button class="text-gray-400 flex items-center w-full h-12 px-3 rounded hover:bg-gray-700 hover:text-gray-300">
                                    <svg class="inline w-0 h-0 md:w-5 sm:w-5 lg:w-5 md:h-5 sm:h-5 lg:h-5 invisible md:visible lg:visible sm:visible" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                    </svg>
                                    <span class="ml-2 font-medium text-gray-400">Watchlist</span>
                                </button type="submit">
                            </form>
                        </div>
                        <div>
                        <button data-modal-target="authentication-modal-2" data-modal-toggle="authentication-modal-2" class="w-1/10 mt-2 ml-2.5 inline-block px-4 py-2 text-sm font-medium text-gray-900 bg-yellow-400 hover:bg-yellow-300 rounded-lg" type="button">
                            Add Movie
                        </button>
                        <br>
                        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="w-1/10 mt-7 ml-2.5 inline-block px-4 py-2 text-sm font-medium text-gray-900 bg-yellow-400 hover:bg-yellow-300 rounded-lg" type="button">
                            Add Show
                        </button>
                        </div>
                    </div>
                </li>
                @endif
                @endif
                @if (Auth()->check())
                @if (Auth::user()->role == 0)
                <li>
                    <a class="text-gray-400 flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="{{ url('/dashboard') }}">
                        <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="ml-2 font-medium text-gray-400">Dashboard</span>
                    </a>
                </li>
                @endif
                @endif
                @if (Auth()->check())
                @if (Auth::user()->role == 1)
                <li class="list-none">
                    <div class="flex flex-col items-center w-full">
                        <div class="flex flex-col items-center w-full">
                            <form method="get" action="{{ route('watchlist', $user_id) }}" class="w-full p-0 m-0">
                                <button class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300">
                                    <svg class="text-gray-400 inline w-0 h-0 md:w-5 sm:w-5 lg:w-5 md:h-5 sm:h-5 lg:h-5 invisible md:visible lg:visible sm:visible" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                    </svg>
                                    <span class="ml-2 font-medium text-gray-400">Watchlist</span>
                                </button type="submit">
                            </form>
                        </div>
                    </div>
                </li>
                <li class="list-none">
                    <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="{{ url('/user') }}">
                        <svg class="text-gray-400 w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="ml-2 font-medium text-gray-400">Profile</span>
                    </a>
                </li>
                @endif
                @endif
                @if (Auth()->check())
                @if (Auth::user()->role == 1 || Auth::user()->role == 0)
                <li class="list-none">
                    <div class="text-center">
                        <form method="POST" action="{{ route('logout') }}" class="w-1/10 ml-2.5 mt-4 inline-block px-4 py-2 text-sm font-medium text-gray-900 bg-yellow-400 hover:bg-yellow-300 rounded-lg mb-2 float-left">
                            @csrf
                            <button type="submit">Log out
                            </button>
                        </form>
                    </div>
                </li>
                @endif
                @endif
            </ul>
        </div>
    </div>
</nav>

<!-- navbar -->


<nav class="max-lg:hidden flex items-start justify-start bg-gray-900 fixed" id="desktop-navbar">
    <div class="h-screen flex flex-col items-center md:w-40 lg:w-40 sm:w-40 w-28 overflow-hidden text-gray-400 bg-gray-800">
        <a class="flex items-center w-full px-3 mt-3" href="{{ url('/') }}">
            <img class="h-9" src="https://chasacademy.se/wp-content/uploads/2020/12/ca-emblem-white.svg" alt="">
            <span class="ml-2 text-sm font-bold">Chas Movies</span>
        </a>
        <div class="w-full px-2">
            <div class="flex flex-col items-center w-full mt-3 border-t border-gray-700">
                <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="{{ url('/movie') }}">
                    <svg class="w-0 h-0 md:w-5 sm:w-5 lg:w-5 md:h-5 sm:h-5 lg:h-5 invisible md:visible lg:visible sm:visible" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                        <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z" fill="white"></path>
                    </svg>
                    <span class="ml-2 text-sm font-medium">Movie</span>
                </a>

                <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="{{ url('/show') }}">
                    <svg class="w-0 h-0 md:w-5 sm:w-5 lg:w-5 md:h-5 sm:h-5 lg:h-5 invisible md:visible lg:visible sm:visible" style="color: white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                        <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z" fill="white"></path>
                    </svg>
                    <span class="ml-2 text-sm font-medium">TV-show</span>
                </a>
                <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="{{ url('/kategori') }}">
                    <svg class="w-0 h-0 md:w-5 sm:w-5 lg:w-5 md:h-5 sm:h-5 lg:h-5 invisible md:visible lg:visible sm:visible" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                        <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z" fill="white"></path>
                    </svg>
                    <span class="ml-2 text-sm font-medium">Categories</span>
                </a>
                <a class="flex items-center w-full h-12 px-3 mt-2 rounded" href="" onclick="return false;">
                    <span class="w-0 h-0 md:w-5 sm:w-5 lg:w-5 md:h-5 sm:h-5 lg:h-5 invisible md:visible lg:visible sm:visible">🔥</span>
                    <span class="ml-2 text-sm font-medium text-gray-600">Trending <br> <span class="text-xs">&#40;coming soon&#41;</span></span>
                </a>
                <a class="relative flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="{{ url('/helpcenter') }}">
                    <svg class="w-0 h-0 md:w-5 sm:w-5 lg:w-5 md:h-5 sm:h-5 lg:h-5 invisible md:visible lg:visible sm:visible stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                    </svg>
                    <span class="ml-2 text-sm font-medium">Help Center</span>
                </a>
            </div>
            @if (Auth()->check())
            @if (Auth::user()->role == 0)
            <div class="flex flex-col items-center w-full mt-3 border-t border-gray-700">
                <H2>Welcome</H2>{{ Auth::user()->name }}
                <div class="flex flex-col items-center w-full mt-2 border-t border-gray-700">
                    <form method="get" action="{{ route('watchlist', $user_id) }}" class="w-full p-0 m-0">
                        <button class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300">
                            <svg class="inline w-0 h-0 md:w-5 sm:w-5 lg:w-5 md:h-5 sm:h-5 lg:h-5 invisible md:visible lg:visible sm:visible" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                            </svg>
                            <span class="ml-2 text-sm font-medium">Watchlist</span>
                        </button type="submit">
                    </form>
                </div>
                <button data-modal-target="authentication-modal-2" data-modal-toggle="authentication-modal-2" class="w-1/10 mt-4 inline-block px-4 py-2 text-sm font-medium text-gray-900 bg-yellow-400 hover:bg-yellow-300" type="button">
                    Add Movie
                </button>
                <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="w-1/10 mt-4 inline-block px-4 py-2 text-sm font-medium text-gray-900 bg-yellow-400 hover:bg-yellow-300" type="button">
                    Add Show
                </button>

            </div>
            @if (Auth()->check())
            @if (Auth::user()->role == 1)
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="{{ url('/user') }}">
                <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="ml-2 text-sm font-medium">Profile</span>
            </a>
            @endif
            @endif
            @if (Auth()->check())
            @if (Auth::user()->role == 0)
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="{{ url('/dashboard') }}">
                <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="ml-2 text-sm font-medium">Dashboard</span>
            </a>
            @endif
            @endif
            @endif
            @endif
            @if (Auth()->check())
            @if (Auth::user()->role == 1)
            <div class="flex flex-col items-center w-full mt-3 border-t border-gray-700 mt-10">
                <H2>Welcome</H2>{{ Auth::user()->name }}
                <div class="flex flex-col items-center w-full mt-2 border-t border-gray-700">
                    <form method="get" action="{{ route('watchlist', $user_id) }}" class="w-full p-0 m-0">
                        <button class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300">
                            <svg class="inline w-0 h-0 md:w-5 sm:w-5 lg:w-5 md:h-5 sm:h-5 lg:h-5 invisible md:visible lg:visible sm:visible" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                            </svg>
                            <span class="ml-2 text-sm font-medium">Watchlist</span>
                        </button type="submit">
                    </form>
                </div>
            </div>
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="{{ url('/user') }}">
                <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="ml-2 text-sm font-medium">Profile</span>
            </a>
            @endif
            @endif
            @if (Auth()->check())
            @if (Auth::user()->role == 1 || Auth::user()->role == 0)
            <div class="text-center">
                <form method="POST" action="{{ route('logout') }}" class="w-1/10 mt-4 inline-block px-4 py-2 text-sm font-medium text-gray-900 bg-yellow-400 hover:bg-yellow-300">
                    @csrf
                    <button type="submit">Log out
                    </button>
                </form>
            </div>
            @endif
            @endif
        </div>
</nav>
@yield('content')
@if (Auth()->check())
@if (Auth::user()->role == 0)
<div id="authentication-modal-2" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div class="relative w-full h-full max-w-md md:h-auto">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal-2">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add movie</h3>
                <form method="post" class="space-y-6" action="{{ route('add.movie') }}">
                    @csrf
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Title" name="title" required="true">
                    <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Genre" name="genre" required="true">
                        <option class="bg-gray-800" value="Horror">Horror</option>
                        <option class="bg-gray-800" value="Fantasy">Fantasy</option>
                        <option class="bg-gray-800" value="Adventure">Adventure</option>
                        <option class="bg-gray-800" value="Action">Action</option>
                        <option class="bg-gray-800" value="Anime">Anime</option>
                        <option class="bg-gray-800" value="Family">Family</option>
                        <option class="bg-gray-800" value="History">History</option>
                        <option class="bg-gray-800" value="Comedy">Comedy</option>
                        <option class="bg-gray-800" value="Romantic">Romantic</option>
                        <option class="bg-gray-800" value="Mystery">Mystery</option>
                        <option class="bg-gray-800" value="Crime">Crime</option>
                        <option class="bg-gray-800" value="Documentary">Documentary</option>
                        <option class="bg-gray-800" value="Romantic">Romantic </option>
                        <option class="bg-gray-800" value="Sci-fi">Sci-fi</option>
                        <!-- Add more options for your categories -->
                    </select>
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="director" name="director" required="true">
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Main cast" name="maincast" required="true">
                    <input type="hidden" name="showormovie" value="0">
                    <input type="url" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Image (URL)" name="imgurl" required="true">
                    <input type="trailer" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Trailer (YT URL) " name="trailer">
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div class="relative w-full h-full max-w-md md:h-auto">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 ">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add Show</h3>
                <form method="post" class="space-y-6" action="{{ route('add.show') }}">
                    @csrf
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Title" name="title" required="true">
                    <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Genre" name="genre" required="true">
                        <option class="bg-gray-800" value="Horror">Horror</option>
                        <option class="bg-gray-800" value="Fantasy">Fantasy</option>
                        <option class="bg-gray-800" value="Adventure">Adventure</option>
                        <option class="bg-gray-800" value="Action">Action</option>
                        <option class="bg-gray-800" value="Anime">Anime</option>
                        <option class="bg-gray-800" value="Family">Family</option>
                        <option class="bg-gray-800" value="History">History</option>
                        <option class="bg-gray-800" value="Comedy">Comedy</option>
                        <option class="bg-gray-800" value="Romantic">Romantic</option>
                        <option class="bg-gray-800" value="Mystery">Mystery</option>
                        <option class="bg-gray-800" value="Crime">Crime</option>
                        <option class="bg-gray-800" value="Documentary">Documentary</option>
                        <option class="bg-gray-800" value="Romantic">Romantic </option>
                        <option class="bg-gray-800" value="Sci-fi">Sci-fi</option>
                        <!-- Add more options for your categories -->
                    </select>
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="director" name="director" required="true">
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Main cast" name="maincast" required="true">
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Seasons" name="seasons" required="true">
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Episodes" name="episodes" required="true">
                    <input type="hidden" name="showormovie" value="1">
                    <input type="url" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Image (URL)" name="imgurl" required="true">
                    <input type="trailer" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Trailer (YT URL) " name="trailer">
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endif
@endif
<script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>

</html>