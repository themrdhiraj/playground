<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Login</title>
</head>

<body class="bg-tractor font-serif">
    <div class="flex flex-col justify-center items-center h-full space-y-1">
        <span class="font-medium text-white">Login</span>
        <div class="p-4 w-11/12 bg-white rounded shadow">
            <form class="flex flex-col space-y-2 m-0" action="/login" method="post">
                @csrf
                @include('tractor.layouts.notification')
                <div class="flex flex-col">
                    <label for="username" class="font-medium">Username</label>
                    <input type="text" name="username" id=""
                        class="p-2 border-2 border-gray-300 @error('username') border-red-500 @enderror rounded h-10 bg-white text-gray-700"
                        placeholder="Username">
                </div>
                @error('username')
                    <small class="text-xs text-red-500">{{ $message }}</small>
                @enderror

                <div class="flex flex-col">
                    <label for="password" class="font-medium">Password</label>
                    <input name="password" id="password" type="password"
                        class="p-2 border-2 border-gray-300 @error('password') border-red-500 @enderror rounded h-10 bg-white text-gray-700"
                        placeholder="Password">
                </div>
                @error('password')
                    <small class="text-xs text-red-500">{{ $message }}</small>
                @enderror

                <div class="flex flex-row items-center space-x-1">
                    <input name="remember" id="remember" type="checkbox"
                        class="focus:ring-indigo-600 text-indigo-600 form-checkbox rounded border-gray-300 placeholder-gray-500">
                    <label for="remember" class="font-medium">Remember me</label>
                </div>

                <button type="submit"
                    class="bg-indigo-600 hover:bg-indigo-700 px-4 py-2 rounded text-white shadow">Login</button>
            </form>
        </div>
    </div>

</body>

</html>
