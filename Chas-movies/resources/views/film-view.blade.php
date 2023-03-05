<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chas filmss</title>
    <script defer src="https://unpkg.com/tailwindcss-jit-cdn"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="bg-gray-900">
    <div class="max-md:w-full max-md:m-0">
        @extends('sidenav')
        @section('content')
        <div class="flex flex-col md:flex-row items-center md:items-start mt-8 mb-16 mx-4 md:mx-8 pl-0 sm:pl-0 md:pl-0 lg:pl-40">
            <div class="w-full md:w-2/5">
              <img onerror="this.src='https://cloud.filmfed.com/defaults/films-poster/m_films_poster_default.png';" src="{{ $films->imgurl }}" alt="{{ $films->title }}" class="object-cover w-full h-full rounded-lg shadow-md max-w-xl" text-amber-300>
            </div>
            <div class="w-full md:w-3/5 px-4 md:px-8 pt-4 md:pt-0">
              <h2 class="text-3xl font-bold text-center md:text-left text-gray-200">{{ $films->title }}</h2>
              <p class="mt-4 text-lg leading-relaxed text-gray-200">{{ $films->description }}</p>
              <div class="mt-8 flex flex-col flex-wrap">
                <div class="mr-4 mb-4">
                  <span class="text-amber-300 font-semibold mr-2">Genre:</span>
                  <span class="text-gray-200">{{ $films->genre }}</span>
                </div>
                <div class="mr-4 mb-4">
                  <span class="text-amber-300 font-semibold mr-2">Director:</span>
                  <span class="text-gray-200">{{ $films->director }}</span>
                </div>
                <div class="mr-4 mb-4">
                  <span class="text-amber-300 font-semibold mr-2">Cast:</span>
                  <span class="text-gray-200">{{ $films->maincast }}</span>
                </div>
              </div>
              <p class="text-lg leading-relaxed mb-6 text-gray-200">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin blandit dui quis nisl malesuada hendrerit. Sed sit amet aliquet libero, vitae bibendum turpis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed eget eros malesuada, congue lacus vitae, dictum justo. Sed sit amet mauris in sapien gravida convallis. Nam at magna non leo aliquam pharetra non a dolor.
              </p>
              <div class="mt-8 flex justify-center md:justify-start">
                <button data-modal-target="trailerModal" data-modal-toggle="trailerModal" class="py-1 pr-2 mr-4 bg-amber-300 rounded-lg text-black" type="button">
                    <img src="https://cdn-icons-png.flaticon.com/512/3024/3024584.png" alt="Play button" class="w-8 p-1 inline">
                    <span class="m-auto ml-1">
                        Play trailer
                    </span>
                </button>
                @if (Auth()->check())
                                        @if (Auth::user()->role == 1 OR Auth::user()->role == 0)
                                        <form method="post" action="{{ route('add-watchlist')}}">
                                            <input type="hidden" name="filmId" value="{{$id}}" />
                                            <button class="py-1 pr-2 mr-4 bg-amber-300 rounded-lg text-black">
                                                @csrf
                                                <svg class="inline-flex w-9 ml-2" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
                                                </svg>
                                                <span class="inline-flex ml-1">
                                                    Add to
                                                </span>
                                            </button>
                                        </form>
                                        @endif
                                        @endif
              </div>
              <div onclick="reload()" id="trailerModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                <div>
                    <div class="relative bg-gray-700 rounded-lg shadow dark:bg-black">
                        <div class="w-fit h-fit">
                            <button onClick="reload()" type="button" class="absolute top-0 right-0 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1 float-right items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="trailerModal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <iframe width="966" height="543" src="{{$films->trailer}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            </div>
          </div>
    <!--comment start -->
    <div class="bg-gray-900 rounded-lg m-5 p-6 sm:pl-6 md:pl-0 lg:pl-40">
        <h2 class="text-xl font-medium text-white mb-4">Comments</h2>
        @foreach ($comments as $comment)
        <div class="bg-gray-800 rounded-lg p-4 mb-4 relative">
            <div class="flex items-center mb-4">
                <img class="h-10 w-10 rounded-full mr-4" src="https://via.placeholder.com/150" alt="User Avatar">
                <div>
                    <p class="text-white font-medium">{{$comment->name}}</p>
                    <p class="text-gray-400 text-sm">2 hours ago</p>
                </div>
            </div>
            <p class="text-white">{{$comment->comment}}</p>
            @if (Auth()->check())
                @if (Auth::user()->role == 0)
                <form method="POST" action="{{ route('comment.delete', $comment->id) }}">
                    @csrf
                    @method('DELETE')
                    <button class="w-1/10 inline-block text-sm font-medium text-gray-900 bg-gray-900 hover:bg-gray-800 absolute top-0 right-0 px-2 py-2 rounded-lg scale-200 lg:scale-90 sm:scale-60" type="submit">❌</button>
                </form>
                @endif
                @endif
        </div>
        @endforeach
        @if (Auth()->check())
        @if (Auth::user()->role == 1 OR Auth::user()->role == 0)
        <form class="mt-4" action="{{ route('add-comment', ['id' => $films->id]) }}" method="POST">
            @csrf
            <div class="flex items-center mb-4">
                <img class="h-10 w-10 rounded-full mr-4" src="https://via.placeholder.com/150" alt="User Avatar">
                <div class="w-full">
                    <label for="comment" class="sr-only">Comment</label>
                    <textarea id="comment" name="comment" rows="3" placeholder="Add a comment" class="bg-gray-800 border border-gray-700 rounded-lg w-full px-3 py-2 text-white placeholder-gray-400 focus:outline-none focus:border-blue-500"></textarea>
                </div>
            </div>
            <button type="submit" value="submit" class="bg-amber-300 rounded-lg text-black hover:bg-amber-400 font-medium py-2 px-4 rounded-lg">Post</button>
        </form>
        @endif
        @endif
    </div>

        <footer>


        </footer>
        @endsection
        @if(session('status'))
        <div id="alert-border-1" class="fixed z-50 top-0 right-0" role="alert">
  <div class="w-full sm:w-96 px-4">
    <div class="flex max-w-sm w-full mx-auto bg-white shadow-md rounded-lg
      overflow-hidden mt-4 dark:bg-dark-900 dark:shadow-dark-md">
      <div class="flex justify-center items-center w-16 border rounded-l-lg bg-green-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white"
          viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000
            16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1
            1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
        </svg>
      </div>
      <div class="flex justify-between p-2 pl-4 w-full border border-gray-100
        dark:border-dark-700">
        <div class="flex flex-col justify-center mr-4">
            <div class="font-semibold">Success!</div>
            <div class="text-sm">{{ session('status') }}</div>
        </div>
        <div>
            <button duration data-dismiss-target="#alert-border-1" aria-label="Close" type="button" class="p-0.5 rounded-md bg-opacity-10 over:bg-opacity-25
            dark:text-dark-500 dark:bg-black dark:bg-opacity-20 dark:hover:text-dark-400
            dark:hover:bg-opacity-30" data-dismiss-target="#alert-5" aria-label="Close">
                <span class="sr-only">Dismiss</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414
                        0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414
                        10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293
                        4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1
                        1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
              </button>
        </div>
      </div>
    </div>
  </div>
</div>
@endif
</body>

</html>