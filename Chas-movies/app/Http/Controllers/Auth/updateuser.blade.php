<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-900">
    <!-- Component Start -->
    <nav class="flex items-start justify-start bg-gray-900 fixed">
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
                    <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="{{ url('/trending') }}">
                        <span class="w-0 h-0 md:w-5 sm:w-5 lg:w-5 md:h-5 sm:h-5 lg:h-5 invisible md:visible lg:visible sm:visible">🔥</span>
                        <span class="ml-2 text-sm font-medium">Trending</span>
                    </a>
                </div>
                <div class="flex flex-col items-center w-full mt-2 border-t border-gray-700">
                    <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="{{ url('/watchlist') }}">
                        <svg class="w-0 h-0 md:w-5 sm:w-5 lg:w-5 md:h-5 sm:h-5 lg:h-5 invisible md:visible lg:visible sm:visible" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                        </svg>
                        <span class="ml-2 text-sm font-medium">Watchlist</span>
                    </a>
                    <a class="relative flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="{{ url('/helpcenter') }}">
                        <svg class="w-0 h-0 md:w-5 sm:w-5 lg:w-5 md:h-5 sm:h-5 lg:h-5 invisible md:visible lg:visible sm:visible stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                        </svg>
                        <span class="ml-2 text-sm font-medium">Help Center</span>
                    </a>
                </div>
            </div>
            @if (Auth::user()->role == 0)
            <div class="flex flex-col items-center w-full mt-3 border-t border-gray-700">
                <H2>Welcome</H2>{{ Auth::user()->name }}
                <button data-modal-target="authentication-modal-2" data-modal-toggle="authentication-modal-2" class="w-1/10 mt-4 inline-block px-4 py-2 text-sm font-medium text-gray-900 bg-yellow-400 hover:bg-yellow-300" type="button">
                    Add Movie
                </button>
                <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="w-1/10 mt-4 inline-block px-4 py-2 text-sm font-medium text-gray-900 bg-yellow-400 hover:bg-yellow-300" type="button">
                    Add Show
                </button>

            </div>
            <a class="flex items-center justify-center w-full h-16 mt-auto bg-gray-800 hover:bg-gray-700 hover:text-gray-300" href="{{ url('/user') }}">
                <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="ml-2 text-sm font-medium">Profile</span>
            </a>
            @endif

            @if (Auth::user()->role == 1)
            <div class="flex flex-col items-center w-full mt-3 border-t border-gray-700">
                <H2>Welcome</H2>{{ Auth::user()->name }}
                <button data-modal-target="authentication-modal-2" data-modal-toggle="authentication-modal-2" class="w-1/10 mt-4 inline-block px-4 py-2 text-sm font-medium text-gray-900 bg-yellow-400 hover:bg-yellow-300" type="button">
                    My Watchlists
                </button>

            </div>
            <a class="flex items-center justify-center w-full h-16 mt-auto bg-gray-800 hover:bg-gray-700 hover:text-gray-300" href="{{ url('/user') }}">
                <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="ml-2 text-sm font-medium">Profile</span>
            </a>
            @endif
        </div>


    </nav>

            </body>

</html>