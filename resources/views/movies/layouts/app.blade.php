<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Book of Movies</title>
</head>

<body class="bg-gray-200">
    <nav class="w-full bg-white sticky top-0 z-50 flex space-x-2 py-2.5 px-2 justify-between shadow">
        <a href="{{ route('movies.index') }}"
            class="flex-shrink-0 h-10 w-10 bg-red-600 rounded-full text-center shadow">
            <span class="text-4xl font-extrabold text-white font-serif">M</span>
        </a>
        <div class="w-full">
            <form action="#" method="get" class="w-full">
                <input type="text"
                    class="w-full h-full px-2 rounded border border-gray-300 outline-none focus:ring-indigo-500 focus:ring-2"
                    placeholder="Search for movies...">
            </form>
        </div>
        <div class="hidden lg:flex space-x-2">
            @for ($i = 0; $i < 5; $i++)
                <a href="{{ route('category') }}">
                    <svg class="h-10 text-indigo-500 hover:text-yellow-400" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                        </path>
                    </svg>
                </a>
            @endfor
        </div>
    </nav>

    <div class="flex flex-row">
        @yield('content')
    </div>

</body>

</html>
