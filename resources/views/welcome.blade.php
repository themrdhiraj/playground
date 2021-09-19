<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body class="bg-gray-200">
    <div class="m-2 bg-green-500 rounded">
        <ul class="p-2 divide-y-2 w-auto text-center">

            <li class="hover:text-gray-300 text-white">
                <a href="{{ route('movies.index') }}">Movies</a>
            </li>


            <li class="hover:text-gray-300 text-white">
                <a href="{{ route('tractor') }}">Tractor</a>
            </li>

            <li class="hover:text-gray-300 text-white">
                <a href="/news">News</a>
            </li>
        </ul>
    </div>
</body>

</html>
