<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>(NoT) News of Thakle</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-gray-200">
    <nav class="flex items-center justify-between p-2 sticky top-0 z-50 bg-white shadow">
        <a href="#"
            class="flex font-serif hover:text-indigo-400 font-black items-center bg-indigo-500 text-white rounded-full shadow">
            <img src="{{ asset('img/img2.png') }}" alt=""
                class="h-10 w-auto rounded shadow object-cover object-center">
        </a>

        <div class="flex space-x-2 items-center">
            <form action="#" class="m-0">
                <input type="text" class="px-2 h-10 w-full border border-gray-300 text-gray-600 rounded shadow"
                    placeholder="Search">
            </form>

            <div class="flex items-center">
                <a href="#" class="text-sm font-light text-gray-500">Login </a>|
                <a href="#" class="text-sm font-light text-gray-500"> Signup</a>
            </div>
        </div>
    </nav>
    <div class="flex items-center py-2 sticky top-14 z-50 bg-white shadow">
        <span class="text-gray-600 p-1">Category:</span>
        <div class="flex mr-2 space-x-2 overflow-x-auto">
            @for ($i = 0; $i < 10; $i++)
                <a href="#" class="hover:text-gray-200 px-2 my-1 bg-blue-400 text-white rounded-full shadow">
                    Politics
                </a>
            @endfor
        </div>

    </div>
    @yield('content')

    <footer class="flex bg-white p-4 items-center justify-center">
        ©themrdhiraj | {{ date('Y') }}
    </footer>
</body>

</html>
