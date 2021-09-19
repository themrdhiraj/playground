@extends('books.layouts.app')
@section('books')
    <div class="grid grid-cols-2 gap-4">
        {{-- Items --}}
        <a href="{{ route('listBook') }}"
            class="flex flex-col justify-between items-center rounded bg-white hover:opacity-70 select-none shadow">

            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-48 text-red-500 mx-auto">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                </path>
            </svg>
            <div class="flex justify-evenly bg-red-400 py-8 w-full rounded-b shadow-inner">
                <span class="text-white font-medium">Total Books</span>
                <span class="text-white font-bold">500</span>
            </div>
        </a>
        {{-- Items --}}

        {{-- Items --}}
        <a href="#" class="flex flex-col justify-between items-center rounded bg-white hover:opacity-70 select-none shadow">

            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-48 text-yellow-500 mx-auto">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
            </svg>
            <div class="flex justify-evenly bg-yellow-400 py-8 w-full rounded-b shadow-inner">
                <span class="text-white font-medium">Books in Library</span>
                <span class="text-white font-bold">500</span>
            </div>
        </a>
        {{-- Items --}}

        {{-- Items --}}
        <a href="#allBooks"
            class="flex flex-col justify-between items-center rounded bg-white hover:opacity-70 select-none shadow">

            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-48 text-indigo-500 mx-auto">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                </path>
            </svg>
            <div class="flex justify-evenly bg-indigo-400 py-8 w-full rounded-b shadow-inner">
                <span class="text-white font-medium">Books with Students</span>
                <span class="text-white font-bold">500</span>
            </div>
        </a>
        {{-- Items --}}

        {{-- Items --}}
        <a href="#allBooks"
            class="flex flex-col justify-between items-center rounded bg-white hover:opacity-70 select-none shadow">

            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-48 text-green-500 mx-auto">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2">
                </path>
            </svg>
            <div class="flex justify-evenly bg-green-400 py-8 w-full rounded-b shadow-inner">
                <span class="text-white font-medium">Books with Teachers</span>
                <span class="text-white font-bold">500</span>
            </div>
        </a>
        {{-- Items --}}
    </div>
@endsection
