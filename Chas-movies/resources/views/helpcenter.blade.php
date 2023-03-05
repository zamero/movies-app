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
<!--New chas helpcenter-->
<div class="flex justify-center">
  <h1 class="block rounded-lg shadow-lg max-w-sm text-center text-white text-2xl">Chas Helpcenter</h1>
</div>

<!-- New Cards start here -->

<div class="flex flex-wrap justify-center mt-8 gap-8 sm:gap-4 md:gap-6 lg:gap-8">
  <div class="flex justify-center mb-8">
    <div class="flex items-center">
      <div class="block rounded-lg shadow-lg bg-white w-full max-w-sm text-center">
        <div class="mr-4">
          <div class="p-4">
            <h5 class="text-gray-100 text-xl font-medium mb-2">Ta bort konto</h5>
            <p class="text-gray-700 text-base mb-4">
              Kontakta oss så hjälper vi dig
            </p>
            <button type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Dive in</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="flex justify-center mb-8">
    <div class="flex items-center">
      <div class="block rounded-lg shadow-lg bg-white w-full max-w-sm text-center">
        <div class="mr-4">
          <div class="p-4">
            <h5 class="text-gray-900 text-xl font-medium mb-2">mitt konto är fryst</h5>
            <p class="text-gray-700 text-base mb-4">
             Kontakta oss så hjälper vi dig
            </p>
            <button type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Dive in</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="flex justify-center mb-8">
    <div class="flex items-center">
      <div class="block rounded-lg shadow-lg bg-white w-full max-w-sm text-center">
        <div class="mr-4">
          <div class="p-4">
            <h5 class="text-gray-900 text-xl font-medium mb-2">hur når jag er</h5>
            <p class="text-gray-700 text-base mb-4">
              du når oss via mail eller telefon
            </p>
            <button type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Dive in</button>
          </div>
        </div>
      </div>
     </div>
    </div>
   </div>
     @endsection
</body>

</html>