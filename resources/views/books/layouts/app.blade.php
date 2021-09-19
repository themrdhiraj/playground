<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Library</title>
</head>

<body>
    <div class="flex flex-row h-screen bg-primary">
        @include('books.layouts.nav')
        <div class="p-4 w-full overflow-y-auto">
            <div class="p-4 bg-gray-100 rounded shadow">
                @yield('books')
            </div>
        </div>
    </div>
</body>

</html>
