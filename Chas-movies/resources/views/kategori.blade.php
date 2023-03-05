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
 <!-- Category Start -->
 <section class="flex flex-col md:ml-0 lg:ml-40 sm:ml-0 ml-0">
    <section class="text-gray-400 bg-gray-900 body-font px-2 py-2 flex-col justify-center m-auto">
    <div class="flex justify-center">
      <h1 class="title-font sm:text3xl text-3xl mb-4 font-medium text-white">Viking wolf
      </h1>
    </div>
    <div class="flex md:w-1/2 w-5/6 justify-center m-auto">
        <img class="object-cover object-center  mr-4 rounded-xl " alt="hero" src="https://static1.colliderimages.com/wordpress/wp-content/uploads/2023/02/viking-wolf-poster.jpeg?q=50&fit=contain&w=1140&h=&dpr=1.5">
    </div>
    <div class="flex justify-center">
      <p class="mb-8 leading-relaxed w-5/6 ">Thale (17) has just moved with her parents to a small town after her mother has a new job in the local police. After a student is killed brutally at a party Thale attends, she becomes a key witness. Was the killer an animal? A wolf?</p>
    </div>
    <div class="flex justify-center ">
        <button class="ml-3 inline-flex  px-4 py-2 text-sm font-medium text-gray-900 bg-yellow-400  hover:bg-yellow-300">Horror</button>
        <button class="ml-4 inline-flex px-4 py-2 text-sm font-medium text-gray-900 bg-yellow-400  hover:bg-yellow-300">Thriller</button>
    </div>
</section>
</section>
  <!-- Category L -->
<section class="flex flex-col flex-wrap md:ml-0 lg:ml-40 sm:ml-0 ml-0 ">
                <!--  Category -->
                <div class="justify-center m-auto scale-125 my-24">
                    <form id="category-form" method="GET" action="{{ url('/kategori') }}">
                        <select id="category" class="mt-4 mr-4 appearance-none border-none bg-transparent py-2 pl-3 pr-9  font-semibold  px-4 text-1.5xl font-medium text-white  hover:text-yellow-300" name="id" onchange="this.form.submit()">
                            <option class="bg-gray-800">Genre</option>
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
                    </form>
                </div>
             </section>
            </header> 
  
           
           
            <!-- List movies -->
            <div class="flex justify-center">
                <h1 class="title-font sm:text3xl text-3xl mb-4 font-medium text-white md:ml-0 lg:ml-40 sm:ml-0 ml-0">Movies
                </h1>
            </div>
        <article class="m-auto items-center flex flex-col sm:flex-row md:flex-row lg:flex-row justify-center md:ml-0 lg:ml-40 sm:ml-0 ml-0 my-10">
                <!-- Article -->
                @foreach ($films as $film)
                @if ($film->genre == $genre)
                <div class="overflow-hidden rounded-lg shadow-lg bg-gray-800 text-gray-200 mx-2 max-w-xs relative">
                    <a href="{{ route('film-view', $film->id) }}">
                        <img onerror="this.src='https://cloud.filmfed.com/defaults/movie-poster/m_movie_poster_default.png';" alt="Placeholder" class="block h-96 w-full object-fit: cover" src="{{ $film->imgurl }}">
                    </a>
                    @if (Auth()->check())
                    @if (Auth::user()->role == 1 OR Auth::user()->role == 0)
                    <form method="post" action="{{ route('add-watchlist')}}">
                        <input type="hidden" name="filmId" value="{{$film->id}}"/>
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
                </div>
                @endif
                @endforeach
        </article> 
        @if ($films->where('genre', $genre)->count() === 0)
        <div class="flex justify-center">
            <h1 class=" bg-slate-800 p-16 text-center title-font sm:textlg text-lg mb-4 font-medium text-white md:ml-0 lg:ml-40 sm:ml-0 ml-0 mb-16">No movies in this genre
            </h1>
        </div>
        @endif
        <div class="flex justify-center">
            <h1 class="title-font sm:text3xl text-3xl mb-4 font-medium text-white md:ml-0 lg:ml-40 sm:ml-0 ml-0">Shows
            </h1>
        </div>
        <article class="m-auto items-center flex flex-col sm:flex-row md:flex-row lg:flex-row justify-center md:ml-0 lg:ml-40 sm:ml-0 ml-0 my-10">
            <!-- Article -->
            
            @foreach ($shows as $show)
            @if ($show->genre == $genre)
            <div class="overflow-hidden rounded-lg shadow-lg bg-gray-800 text-gray-200 mx-2 max-w-xs relative">
                <a href="{{ route('film-view', $show->id) }}">
                    <img onerror="this.src='https://cloud.filmfed.com/defaults/movie-poster/m_movie_poster_default.png';" alt="Placeholder" class="block h-96 w-full object-fit: cover" src="{{ $show->imgurl }}">
                </a>
                @if (Auth()->check())
                @if (Auth::user()->role == 1 OR Auth::user()->role == 0)
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
                @endif
                @if (Auth::user()->role == 0)
                <form method="POST" action="{{ route('movie.delete', $show->id) }}">
                    @csrf
                    @method('DELETE')
                    <button class="w-1/10 inline-block text-sm font-medium text-gray-900 bg-gray-800 hover:bg-gray-700 absolute top-0 right-0 px-2 py-2 rounded-lg scale-200 lg:scale-90 sm:scale-60" type="submit">❌</button>
                </form>
                @endif
                @endif
                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <h1 class="text-lg">
                        <a class="no-underline hover:underline text-gray-200" href="{{ route('film-view', $show->id) }}">
                            {{ $show->title }}
                        </a>
                    </h1>
                </header>
            </div>
            @endif
        @endforeach
    </article>
    @if ($shows->where('genre', $genre)->count() === 0)
        <div class="flex justify-center">
            <h1 class=" bg-slate-800 p-16 text-center title-font sm:textlg text-lg mb-4 font-medium text-white md:ml-0 lg:ml-40 sm:ml-0 ml-0">No shows in this genre
            </h1>
        </div>
        @endif
        



                  <!-- Footer -->   
<footer class= " md:ml-0 lg:ml-40 sm:ml-0 ml-0">
<div class=" flex justify-center my-24 "> 
    
<!-- Previous Button -->
<a href="#" class="inline-flex items-center px-4 py-2 mr-3 text-sm text-sm font-medium text-gray-900 bg-yellow-400 rounded-lg hover:bg-yellow-300">
  <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
  Previous
</a>
<a href="#" class="inline-flex items-center px-4 py-2 mr-3 text-sm text-sm font-medium text-gray-900 bg-yellow-400 rounded-lg hover:bg-yellow-300">
  Next
  <svg aria-hidden="true" class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
</a>

   
 </div>                         

<footer class=" rounded-xl text-center py-10">
    <h1 class="mb-4 text-xl font-extrabold text-white-900 text-white md:text-2xl lg:text-x"><span class="text-transparent bg-clip-text bg-yellow-400 rounded-full hover:bg-yellow-300">Chas-movies</span> The best quality </h1>
        <p class="text-lg font-normal text-gray-500 lg:text-x dark:text-gray-400">Here at Chas-movies we focus on good quality, with different languages and free for the public.</p>
          <div class="my-10 mx-2">
            <div class=" relative inline-block mx-auto lg:bg-gray-200 rounded-full">
                <form method="POST" action="#" class="lg:flex text-sm">
                    <div class="lg:py-3 lg:px-5 flex items-center">
                        <input id="email" type="text" placeholder="Your email address"class="lg:bg-transparent border-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                    </div>
                    <button type="submit" class=" transition-colors duration-300 bg-yellow-400 hover:bg-yellow-300 mt-4 lg:mt-0 lg:ml-3 rounded-full  font-medium text-gray-900 bg uppercase py-3 px-8"
                       >Subscribe
                     </button>
                </form>
            </div>
          </div>
       
      <div class="md:flex md:justify-between my-10">
         <div class="my-10">
             <a href="https://flowbite.com/" class="flex items-center">
                <img src="https://chasacademy.se/wp-content/uploads/2020/12/ca-emblem-white.svg" class="h-9 mr-3 bg-black" alt="Chas-movies Logo" />
                <span class="self-center text-1xl font-semibold whitespace-nowrap text-white">Chas-movies</span>
             </a>
         </div>
       
    <div class=" grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
       <div>
          <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
            <ul class="text-gray-600 dark:text-gray-400">
                <li class="mb-4">
                  <a href="https://flowbite.com/" class="hover:underline">Chas-movies</a>
                </li>
                <li>
                   <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                </li>
             </ul>
        </div>
        <div>
           <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
              <ul class="text-gray-600 dark:text-gray-400">
                <li class="mb-4">
                  <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                </li>
                <li>
                   <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                </li>
              </ul>
         </div>
      <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                <ul class="text-gray-600 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Privacy Policy</a>
                    </li>
                    <li>
                     <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
   
   
    <hr class="my-1 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
       <div class="sm:flex sm:items-center sm:justify-between">
           <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Chas-movies</a>. All Rights Reserved.
           </span>
          <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
             <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                <span class="sr-only">Facebook page</span>
             </a>
             <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                <span class="sr-only">Instagram page</span>
             </a>
             <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                <span class="sr-only">Twitter page</span>
             </a>
             <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                <span class="sr-only">GitHub account</span>
             </a>
             <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
                <span class="sr-only">Dribbbel account</span>
             </a>
           </div>
         </div>
      </footer>
      @endsection
  </body>
</html>