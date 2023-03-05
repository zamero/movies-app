<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="bg-gray-900">
    @extends('sidenav')
    @section('content')
    <div class="pl-0 sm:pl-0 md:pl-0 lg:pl-40">
        @if (Auth()->check())
        @if (Auth::user()->role == 1 OR Auth::user()->role == 0)
        <div class="flex justify-center flex-col bg-gray-900 py-10">
            <div class="flex justify-center my-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bookmark-plus-fill inline text-gray-200  w-10 h-10" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z" />
                </svg>
            </div>
            <h2 class="text-center font-bold text-xl text-gray-200">Watchlist</h2>
            <h2 class="text-center text-xl text-gray-200">Save shows and movies to keep track of what you want to watch.</h2>
        </div>
        @endif
        @endif
        <div class="flex flex-wrap sm:justify-center md:justify-start lg:justify-start">
            @foreach ($films as $film)
            <!-- Column -->
            <div class="my-1 px-1 md:w-1/2 sm:w-1/3 md:w-1/3 lg:my-4 lg:w-1/4">
                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg bg-gray-800 text-gray-200 relative">

                    <a href="{{ route('film-view', $film->id) }}">
                        <img onerror="this.src='https://cloud.filmfed.com/defaults/movie-poster/m_movie_poster_default.png';" alt="Placeholder" class="block h-auto w-full" src="{{ $film->imgurl }}">
                    </a>
                    @if (Auth()->check())
                    @if (Auth::user()->role == 1 OR Auth::user()->role == 0)
                    @endif
                    @if (Auth::user()->role == 0)
                    <form method="POST" action="{{ route('movie.delete', $film->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="w-1/10 inline-block text-sm font-medium text-gray-900 bg-gray-800 hover:bg-gray-700 absolute top-0 right-0 px-2 py-2 rounded-lg scale-200 lg:scale-90 sm:scale-60" type="submit">❌</button>
                    </form>
                    @endif
                    @endif
                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            <a class="no-underline hover:underline text-gray-200" href="{{ route('film-view', $film->id) }}">
                                {{ $film->title }}
                            </a>
                        </h1>
                    </header>

                </article>
                <!-- END Article -->

            </div>
            <!-- END Column -->
            @endforeach
        </div>
    </div>

    @if (Auth::user()->role == 1)
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
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">My Watchlists</h3>
                </div>
            </div>
        </div>
    </div>

    @endif
    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>
    @endsection
</body>

</html>