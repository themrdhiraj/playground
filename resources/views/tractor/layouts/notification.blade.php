@if (session('status'))
    <div class="flex flex-col text-white text-center bg-blue-500 p-4 rounded shadow animate-pulse">
        {{ session('status') }}
    </div>
@endif
@if (session('error'))
    <div class="flex flex-col text-white text-center bg-red-500 p-4 rounded shadow animate-pulse">
        {{ session('error') }}
    </div>
@endif
@if (session('success'))
    <div class="flex flex-col text-white text-center bg-green-500 p-4 rounded shadow animate-pulse">
        {{ session('success') }}
    </div>
@endif
