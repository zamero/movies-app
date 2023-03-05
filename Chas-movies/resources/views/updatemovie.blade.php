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
 <section class="flex justify-center -mx-1 lg:-mx-4">
<!-- Column -->
<div class="my-1 px-1 w-full md:w-1/2 sm:w-1/3 md:w-1/3 lg:my-4 lg:w-1/5  flex flex-col">
@if (Auth::user()->role == 0)
<h1 class=" ml-3 text-xl dark:text-gray-300 self-center">Update movie</h1>
                    <form method="POST" action="/editmovie" class="py-8 space-y-2 flex flex-col">
                        @csrf
                        <input type="hidden" name="id" value="{{ $data->id}}">
                        <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="title">Title</label>
                        <input class="" type="text" name="title" value="{{ $data->title}}">
                        <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="genre">Genre</label>
                        <input type="text" name="genre" value="{{ $data->genre}}">
                        <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="director">Director</label>
                        <input type="text" name="director" value="{{ $data->director}}">
                        <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="maincast">Main cast</label>
                        <input type="text" name="maincast" value="{{ $data->maincast}}">
                        <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="imgurl">URL</label>
                        <input type="text" name="imgurl" value="{{ $data->imgurl}}">
                        <button class="w-1/10 mt-4 inline-block px-4 py-2 text-sm font-medium text-gray-900 bg-yellow-400 hover:bg-yellow-300" submit">Update</button>
                    </form>
                    @endif

</div>
<!-- END Column -->
</div>
</div>
</section>
@endsection

<script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js%22%3E</script>