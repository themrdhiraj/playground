<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>eSchool</title>
</head>

<body class="bg-gray-200">
    <div class="h-screen  flex justify-center">
        <div class="m-auto bg-white rounded shadow">

            <form action="#" method="get">
                <div class="px-10 py-5 flex flex-col">
                    <label class="text-gray-700" for="">Mobile No.</label>
                    <input name="a" type="tel" placeholder="9XXXXXXXXX"
                        class="p-2 outline-none border-2 border-gray-400 focus:border-blue-500 rounded shadow">
                </div>
                <div class="px-10 py-5 pt-0 flex flex-col">
                    <label class="text-gray-700" for="">Password</label>
                    <input name="b" type="password" placeholder="P@$$w0rd!"
                        class="p-2 outline-none border-2 border-gray-400 focus:border-blue-500 rounded shadow">
                </div>
                <div class="px-10 py-5 pt-0 flex flex-col">
                    <input type="submit" placeholder="P@$$w0rd!"
                        class="p-2 hover:bg-green-400 bg-green-500 text-white rounded shadow">
                </div>
            </form>
        </div>
    </div>
</body>

</html>
