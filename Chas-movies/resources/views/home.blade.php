<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chas movies</title>
    @vite('resources/css/app.css')
    <script defer src="https://unpkg.com/tailwindcss-jit-cdn"></script>
</head>

<body class="bg-gray-800">
    <header class="text-gray-700 bg-gray-900 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-200 mb-4 md:mb-0" href="https://mertjf.github.io/tailblocks/" target="_blank">
                <img class="h-9" src="https://chasacademy.se/wp-content/uploads/2020/12/ca-emblem-white.svg" alt="">
                <span class="ml-3 text-xl">Chas Movies</span>
            </a>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                <a class="flex items-center h-12 rounded hover:bg-gray-700 mr-5 text-gray-200 hover:text-gray-300" href="{{ url('/movie') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus-fill inline w-5 h-5" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z" />
                    </svg>
                    <span class="ml-2 text-l font-medium">Discover</span>
                </a>
                <a class="flex items-center h-12 rounded hover:bg-gray-700 mr-5 text-gray-200 hover:text-gray-300" href="{{ url('/trending') }}">
                    <span class="text-xl w-5 h-5 mb-3 mr-1 stroke-current">🔥</span>
                    <span class="ml-1 text-l font-medium">Trending</span>
                </a>
            </nav>
                
            <a href="{{ url('/login') }}">
                <button class="inline-flex items-center bg-yellow-400 text-gray-900 font-bold border-0 py-1 px-3 focus:outline-none hover:bg-yellow-300 rounded text-base ml-5 mt-4 md:mt-0">Login
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </button>
            </a>

            <a href="{{ url('/register') }}">
                <button class="inline-flex items-center bg-yellow-400 text-gray-900 font-bold border-0 py-1 px-3 focus:outline-none hover:bg-yellow-300 rounded text-base ml-5 mt-4 md:mt-0">Sign up
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </button>
            </a>

        </div>
        
    </header>
    <section class="max-w-3xl md:max-w-5xl sm:max-w-lg lg:max-w-4xl mx-auto mt-4">
        <div id="indicators-carousel" class="relative" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="https://hbomax-images.warnermediacdn.com/images/GYGP7pwQv_ojDXAEAAAFc/tileburnedin?size=1280x720&partner=hbomaxcom&v=bd4e8b8745a1fcccbb19d76012ae572e&host=art-gallery.api.hbo.com&language=sv-se&w=1280" class="object-scale-down absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div class="absolute z-20 bg-gradient-to-t from-black container h-full md:max-w-5xl sm:max-w-lg mx-auto relative h-56 overflow-hidden md:h-96"></div>
                    <div class="absolute z-40 flex space-x-3 bottom-5 right-1/4">
                        <h2 class="text-gray-200 text-3xl md:text-5xl sm:text-4xl">"Interstellar"</h2>
                        <h3 class="text-gray-400 md:text-lg sm:text-md">2h 49m</h3>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="">
                    <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/merle-dandridge-the-last-of-us-1673260744.jpg?resize=768:*" class="object-fill absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div class="absolute z-20 bg-gradient-to-t from-black container h-full md:max-w-5xl sm:max-w-lg mx-auto relative h-56 overflow-hidden md:h-96"></div>
                    <div class="absolute z-40 flex space-x-3 bottom-5 right-1/4">
                        <h2 class="text-gray-200 text-3xl md:text-5xl sm:text-4xl">"The Last of Us"</h2>
                        <h3 class="text-gray-400 md:text-lg sm:text-md">Show</h3>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="">
                    <img src="https://m.media-amazon.com/images/M/MV5BMTQ1ZmIzOTAtNDcwZi00NDVkLWE4NWItYWNhZGY1MmVlZGU0XkEyXkFqcGdeQWRvb2xpbmhk._V1_QL75_UY563_CR0,0,1000,563_.jpg" class="object-scale-down absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div class="absolute z-20 bg-gradient-to-t from-black container h-full md:max-w-5xl sm:max-w-lg mx-auto relative h-56 overflow-hidden md:h-96"></div>
                    <div class="absolute z-40 flex space-x-3 bottom-5 right-1/4">
                        <h2 class="text-gray-200 text-3xl md:text-5xl sm:text-4xl">"Inception"</h2>
                        <h3 class="text-gray-400 md:text-lg sm:text-md">2h 28m</h3>
                    </div>
                </div>
                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-gray-900 group-hover:bg-gray-900 group-hover:bg-gray-900/60 group-focus:ring-4 group-focus:ring-white group-focus:ring-gray-900/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-gray-900 group-hover:bg-gray-900 group-hover:bg-gray-900/60 group-focus:ring-4 group-focus:ring-white group-focus:ring-gray-900/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

    </section>
    <div class="flex justify-center">
        <h2 class="text-4xl font-medium text-yellow-400 py-5">Featured Today</h2>
    </div>
    <section class="flex flex-wrap justify-center">
        @foreach ($films as $film)
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-4">
            <div class="bg-gray-900 shadow-lg rounded-lg overflow-hidden">
                <img onerror="this.src='https://cloud.filmfed.com/defaults/movie-poster/m_movie_poster_default.png';" class="w-full h-48 object-cover object-center" src="{{ $film->imgurl }}" alt="Card Image">
                <div class="p-6 flex flex-col">
                    <a class="" href="{{ route('film-view', $film->id) }}">
                    <h2 class="text-lg font-medium text-gray-200">{{ $film->title }}</h2>
                </a>
                    <p class="text-gray-300">{{ $film->genre }}</p>
                    <div class="flex justify-center mt-4">
                        <a href="#" class="w-1/10 mt-4 inline-block px-4 py-2 text-sm font-medium text-gray-900 bg-yellow-400 rounded-full hover:bg-yellow-300">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>

    </section>
    <div class="flex justify-center">
        <h2 class="text-4xl font-medium text-yellow-400 py-5">What to watch</h2>
    </div>
    <section class="flex flex-wrap justify-center">
        @foreach ($shows as $show)
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-4">
            <div class="bg-gray-900 shadow-lg rounded-lg overflow-hidden">
                <img onerror="this.src='https://cloud.filmfed.com/defaults/movie-poster/m_movie_poster_default.png';" class="w-full h-48 object-cover object-center" src="{{ $show->imgurl }}" alt="Card Image">
                <div class="p-6 flex flex-col">
                    <a class="" href="{{ route('film-view', $show->id) }}">
                    <h2 class="text-lg font-medium text-gray-200">{{ $show->title }}</h2>
                </a>
                    <p class="text-gray-300">{{ $show->genre }}</p>
                    <div class="flex justify-center mt-4">
                        <a href="#" class="w-1/10 mt-4 inline-block px-4 py-2 text-sm font-medium text-gray-900 bg-yellow-400 rounded-full hover:bg-yellow-300">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>

    </section>
    <div class="flex justify-center">
        <h2 class="text-4xl font-medium text-yellow-400 py-5">From your Watchlist</h2>
    </div>
    <div class="flex justify-center flex-col bg-gray-900 py-10">
        <div class="flex justify-center my-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bookmark-plus-fill inline text-gray-200  w-10 h-10" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z" />
            </svg>
        </div>
        <h2 class="text-center font-bold text-xl text-gray-200">Sign in to access your Watchlist</h2>
        <h2 class="text-center text-xl text-gray-200">Save shows and movies to keep track of what you want to watch.</h2>
        <div class="flex justify-center mt-4">
            <a href="http://localhost:8000/login" class="w-1/10 mt-4 inline-block px-4 py-2 text-sm font-medium text-gray-900 bg-yellow-400 hover:bg-yellow-300">Sign in to Chas Movies</a>
        </div>
    </div>

    <div class="flex justify-center">
        <h2 class="text-4xl font-medium text-yellow-400 py-5">Fan favorites</h2>
    </div>

    <section class="flex flex-wrap justify-center">
        @foreach ($films as $film)
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-4">
            <div class="bg-gray-900 shadow-lg rounded-lg overflow-hidden">
                <img onerror="this.src='https://cloud.filmfed.com/defaults/movie-poster/m_movie_poster_default.png';" class="w-full h-48 object-cover object-center" src="{{ $film->imgurl }}" alt="Card Image">
                <div class="p-6 flex flex-col">
                    <a class="" href="{{ route('film-view', $film->id) }}">
                    <h2 class="text-lg font-medium text-gray-200">{{ $film->title }}</h2>
                </a>
                    <p class="text-gray-300">{{ $film->genre }}</p>
                    <div class="flex justify-center mt-4">
                        <a href="#" class="w-1/10 mt-4 inline-block px-4 py-2 text-sm font-medium text-gray-900 bg-yellow-400 rounded-full hover:bg-yellow-300">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
</body>

</html>