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
        <div class="flex flex-wrap sm:justify-center md:justify-start lg:justify-start">
            @foreach ($shows as $show)
            <!-- Column -->
            <div class="my-1 px-1 md:w-1/2 sm:w-1/3 md:w-1/3 lg:my-4 lg:w-1/4">

                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg bg-gray-800 text-gray-200 relative">

                    <a href="{{ route('film-view', $show->id) }}">
                        <img onerror="this.src='https://cloud.filmfed.com/defaults/movie-poster/m_movie_poster_default.png';" alt="Placeholder" class="block h-auto w-full" src="{{ $show->imgurl }}">
                    </a>
                    @if (Auth()->check())
                    @if (Auth::user()->role == 0 OR Auth::user()->role == 1)
                    <form method="post" action="{{ route('add-watchlist')}}">
                    <input type="hidden" name="filmId" value="{{$show->id}}"/>
                    <button class="text-gray-900 bg-yellow-400 hover:bg-yellow-300 w-1/10 inline-block text-sm font-medium text-white-200 bg-gray-800 hover:bg-gray-700 absolute bottom-16 right-0 px-2 py-2 rounded-lg">
                        @csrf
                        <span class="m-auto ml-1">
                            Add to
                        </span>
                        <svg class="inline md:w-5 sm:w-5 lg:w-5 md:h-5 sm:h-5 lg:h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
                        </svg>
                    </button>
                    </form>
                    @if (Auth::user()->role == 0)
                    <form method="GET" action="{{ route('edit.show', $show->id) }}">
                        @csrf
                        <button class="w-1/10 inline-block w-1/10 mt-4 inline-block px-4 py-2 text-sm font-medium text-gray-900 bg-yellow-400 hover:bg-yellow-300 absolute top-45 right-5 bottom-2 px-2 py-2 rounded-lg scale-200 lg:scale-90 sm:scale-60" type="submit">update</button>
                    </form>
                    <form method="POST" action="{{ route('show.delete', $show->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="w-1/10 inline-block text-sm font-medium text-gray-900 bg-gray-800 hover:bg-gray-700 absolute top-0 right-0 px-2 py-2 rounded-lg scale-200 lg:scale-90 sm:scale-60" type="submit">❌</button>
                    </form>
                    @endif
                    @endif
                    @endif

                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            <a class="no-underline hover:underline text-gray-200" href="{{ route('film-view', $show->id) }}">
                                {{ $show->title }}
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
    @endsection
</body>

</html>