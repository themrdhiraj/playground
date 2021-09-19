@extends('books.layouts.app')
@section('books')
    <div class="space-y-4">

        <label
            class="flex bg-gradient-to-r from-blue-400 via-green-300 text-gray-100 font-semibold rounded px-4 py-4 mb-4">Books</label>
        <div class="grid grid-cols-2 gap-4">
            {{-- Items --}}
            <a href="{{ route('addBook') }}"
                class="flex flex-col justify-between items-center rounded bg-white hover:opacity-70 select-none shadow">

                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-48 text-green-500 mx-auto">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <div class="flex justify-center bg-green-400 py-8 w-full text-white font-medium rounded-b shadow-inner">
                    Add Book
                </div>
            </a>
            {{-- Items --}}


            {{-- Items --}}
            <a href="{{ route('listBook') }}"
                class="flex flex-col justify-between items-center rounded bg-white hover:opacity-70 select-none shadow">

                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-48 text-yellow-500 mx-auto">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                </svg>
                <div class="flex justify-center bg-yellow-400 py-8 w-full text-white font-medium rounded-b shadow-inner">
                    List Books
                </div>
            </a>
            {{-- Items --}}
        </div>

        <label
            class="flex bg-gradient-to-r from-blue-400 via-green-300 text-gray-100 font-semibold rounded px-4 py-4 mb-4">Students</label>
        <div class="grid grid-cols-2 gap-4">
            {{-- Items --}}
            <a href="#"
                class="flex flex-col justify-between items-center rounded bg-white hover:opacity-70 select-none shadow">

                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-48 text-green-500 mx-auto">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <div class="flex justify-center bg-green-400 py-8 w-full text-white font-medium rounded-b shadow-inner">
                    Add Student
                </div>
            </a>
            {{-- Items --}}


            {{-- Items --}}
            <a href="#allBooks"
                class="flex flex-col justify-between items-center rounded bg-white hover:opacity-70 select-none shadow">

                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-48 text-yellow-500 mx-auto">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                </svg>
                <div class="flex justify-center bg-yellow-400 py-8 w-full text-white font-medium rounded-b shadow-inner">
                    List Students
                </div>
            </a>
            {{-- Items --}}

        </div>

        <label
            class="flex bg-gradient-to-r from-blue-400 via-green-300 text-gray-100 font-semibold rounded px-4 py-4 mb-4">Teachers</label>
        <div class="grid grid-cols-2 gap-4">
            {{-- Items --}}
            <a href="#allBooks"
                class="flex flex-col justify-between items-center rounded bg-white hover:opacity-70 select-none shadow">

                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-48 text-green-500 mx-auto">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <div class="flex justify-center bg-green-400 py-8 w-full text-white font-medium rounded-b shadow-inner">
                    Add Teacher
                </div>
            </a>
            {{-- Items --}}


            {{-- Items --}}
            <a href="#allBooks"
                class="flex flex-col justify-between items-center rounded bg-white hover:opacity-70 select-none shadow">

                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-48 text-yellow-500 mx-auto">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                </svg>
                <div class="flex justify-center bg-yellow-400 py-8 w-full text-white font-medium rounded-b shadow-inner">
                    List Teachers
                </div>
            </a>
            {{-- Items --}}

        </div>
    </div>
@endsection
