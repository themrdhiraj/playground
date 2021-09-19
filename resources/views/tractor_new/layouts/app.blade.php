<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Tractor</title>
</head>

<body>
    <div class="h-screen overflow-y-auto bg-blue-200">
        @include('tractor_new.layouts.nav')
        @yield('content')
    </div>
</body>

</html>
