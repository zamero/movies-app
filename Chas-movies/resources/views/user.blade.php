<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  @vite('resources/css/app.css')
</head>

<!DOCTYPE html>
<html lang="en">

<body class="bg-gray-900">
  @extends('sidenav')
  @section('content')
  <div class="flex items-center justify-center h-screen" style="margin-left: 100px;">
    <div class="w-400 mx-auto bg-gray-800 py-40 px-17 md:px-12 lg:px-14 rounded-lg shadow-lg">
      <div class="flex flex-col items-center justify-between">
        <div class="flex-shrink-0 mb-6">
          <img src="https://via.placeholder.com/150" alt="User Profile Image" class="w-32 h-32 rounded-full shadow-lg">
        </div>
        <div class="flex-1 ml-4 text-center md:text-left">
          <h2 class="text-lg font-medium mb-2 text-white">Username</h2>
          <p class="text-gray-300">Member since January 1, 2021</p>
        </div>
      </div>
      <div class="mt-6 grid gap-6 max-w-lg mx-auto lg:grid-cols-3">
        <div class="bg-gray-800 hover:bg-gray-700 rounded-lg p-6 text-center">
          <p class="text-gray-300">Followers</p>
          <p class="text-white font-medium">1,234</p>
        </div>
        <div class="bg-gray-800 hover:bg-gray-700 rounded-lg p-6 text-center">
          <p class="text-gray-300">Following</p>
          <p class="text-white font-medium">567</p>
        </div>
        <div class="bg-gray-800 hover:bg-gray-700 rounded-lg p-6 text-center">
          <p class="text-gray-300">Likes</p>
          <p class="text-white font-medium">8,901</p>
        </div>
      </div>
      <div class="flex items-center justify-center mt-6">
        <button class="bg-indigo-500 hover:bg-indigo-600 text-white font-medium py-2 px-4 rounded-full shadow-lg">
          Edit Profile
        </button>
      </div>
    </div>
  </div>


  @endsection
</body>

</html>