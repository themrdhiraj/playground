<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Tractor</title>
</head>

<body class="bg-blue-300 font-serif">
    <div
        class="flex justify-between items-center sticky top-0 text-white font-semibold px-2 py-1 to-blue-600 from-red-400 via-green-500 bg-gradient-to-l rounded-b-xl shadow z-50">
        <div class="flex space-x-2">
            <a href="{{ route('tractor') }}" class="">
                <svg class="h-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                    </path>
                </svg>
            </a>
            <button onclick="window.location.reload();">
                <svg class="h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                    </path>
                </svg>
            </button>
        </div>
        <a href="{{ route('profile') }}" class="flex items-center space-x-1 border p-1 rounded shadow">
            <img src="{{ asset('img/img2.png') }}" alt="" class="h-7 w-7 rounded shadow object-cover object-center">
            <strong class="">{{ auth()->user()->name }}</strong>
        </a>
    </div>

    @yield('content')

    <div class="flex items-center justify-center p-4 bg-gray-200 w-full rounded-t-xl">
        <a href="tel:9860298167" class="text-blue-500">©themrdhiraj</a>|{{ date('Y') }}
    </div>
</body>

</html>
