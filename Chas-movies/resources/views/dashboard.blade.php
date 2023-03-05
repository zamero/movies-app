@if (Auth::user()->role == 1)
<script>
    window.location = "{{ url('/movie') }}";
</script>
@endif
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (Auth::user()->role == 0)
                    {{ __("You're logged in as:") }}
                    <h2>Admin</h2>

                    <a class="flex items-center h-12 rounded hover:bg-gray-700 mr-5 text-gray-200 hover:text-gray-300" href="{{ url('/movie') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus-fill inline w-5 h-5" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z" />
                    </svg>
                    <span class="ml-2 text-l font-medium">Movies</span>
                </a>
                <a class="flex items-center h-12 rounded hover:bg-gray-700 mr-5 text-gray-200 hover:text-gray-300" href="{{ url('/show') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus-fill inline w-5 h-5" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z" />
                    </svg>
                    <span class="ml-2 text-l font-medium">Shows</span>
                </a>

                </div>
            </div>
        </div>
    </div>
    <div class="overflow-x-auto max-w-7xl mx-auto sm:px-6 lg:px-8">
        @foreach ($users as $user)
        <table class="table w-full border-collapse border border-gray-700 rounded-lg">
            <thead class="bg-gray-900">
                <tr>
                    <th class="px-2 md:px-6 py-3 text-left text-xs md:text-lg font-medium text-gray-200 uppercase tracking-wider">ID</th>
                    <th class="px-2 md:px-6 py-3 text-left text-xs md:text-lg font-medium text-gray-200 uppercase tracking-wider">Name</th>
                    <th class="px-2 md:px-6 py-3 text-left text-xs md:text-lg font-medium text-gray-200 uppercase tracking-wider">Role</th>
                    <th class="px-2 md:px-6 py-3 text-left text-xs md:text-lg font-medium text-gray-200 uppercase tracking-wider">Created At</th>
                </tr>
            </thead>
            <tbody class="bg-gray-800 divide-y divide-gray-900">
                <tr>
                    <td class="px-2 md:px-6 py-4 md:py-2 whitespace-nowrap text-xs md:text-lg font-medium text-gray-200">{{ $user->id }}</td>
                    <td class="px-2 md:px-6 py-4 md:py-2 whitespace-nowrap text-xs md:text-lg font-medium text-gray-200">{{ $user->name }}
                    <td class="px-2 md:px-6 py-4 md:py-2 whitespace-nowrap text-xs md:text-lg text-gray-200">{{ $user->role }}</td>
                    <td class="px-2 md:px-6 py-4 md:py-2 whitespace-nowrap text-xs md:text-lg text-gray-200">{{ $user->created_at }}</td>
                </tr>
            </tbody>
        </table>
        <section class="flex flex-wrap justify-center mb-5 py-5 bg-gray-800">
            <form method="POST" action="{{ route('user.delete', $user->id) }}">
                @csrf
                @method('DELETE')
                <button class="mr-3 bg-blue-700 hover:bg-blue-600 px-2 md:px-6 py-4 md:py-2 whitespace-nowrap text-xs md:text-lg text-gray-200" type="submit">Delete user</button>
            </form>
            <form method="POST" action="{{ route('user.admin', $user->id) }}">
                @csrf
                @method('PUT')
                <button class="mr-3 bg-blue-700 hover:bg-blue-600 px-2 md:px-6 py-4 md:py-2 whitespace-nowrap text-xs md:text-lg text-gray-200" type="submit">Make Admin</button>
            </form>
        
            <button class="mr-3 bg-blue-700 hover:bg-blue-600 px-2 md:px-6 py-4 md:py-2 whitespace-nowrap text-xs md:text-lg text-gray-200">See Reviews</button>
        </td>
        </section>
        @endforeach
        @endif
    </div> 
  

</x-app-layout>