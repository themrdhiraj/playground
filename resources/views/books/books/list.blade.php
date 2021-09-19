@extends('books.layouts.app')
@section('books')

    <div class="flex justify-between items-center border-b border-gray-500 text-gray-600 font-bold">
        <label>List of Books</label>
        <form action="#">
            <input type="text"
                class="border border-gray-300 outline-none focus:ring focus:ring-blue-500 rounded shadow py-1 px-4"
                placeholder="Search Book ...">
        </form>
    </div>

    <div class="grid grid-cols-2 gap-4 mt-4">

        @for ($i = 1; $i < 11; $i++)
            <div class="flex justify-between bg-white rounded shadow items-center relative">
                <div class="flex space-x-2 items-center">
                    <img src="{{ asset('img/img' . $i . '.png') }}" alt=""
                        class="h-36 w-24 object-cover object-center rounded-l shadow">
                    <div class="flex flex-col text-gray-600 font-light leading-4">
                        <div class="flex items-center space-x-2">
                            <svg class="h-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path>
                            </svg>
                            <span>{{ $i * rand(8, 98) }}</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="h-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>Chemistry for Engineering</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="h-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                            <span>Dr. Tony Stark</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="h-5 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            <span>2007</span>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col space-y-2 items-end -right-1 absolute  text-white font-normal">
                    <a href="{{ route('viewBook', $i) }}"
                        class="bg-blue-500 hover:opacity-70 py-2 px-3 shadow rounded-l-full">View
                        Details</a>

                    <form action="#" class="m-0">
                        <input type="submit" name="" id=""
                            class="bg-red-500 hover:opacity-70 py-2 px-3 shadow rounded-l-full cursor-pointer"
                            value="Delete Book" onclick="return confirm('Are you sure, you want to delete this book?')">
                    </form>

                    <a href="{{ route('editBook', $i) }}"
                        class="bg-yellow-500 hover:opacity-70 py-2 px-3 shadow rounded-l-full cursor-pointer">Edit
                        Book Details</a>

                </div>
            </div>
        @endfor

    </div>
@endsection
