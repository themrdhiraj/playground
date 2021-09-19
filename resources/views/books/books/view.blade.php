@extends('books.layouts.app')
@section('books')

    <div class="flex space-x-2 items-center border-b border-gray-500 text-gray-600 font-bold">
        <svg class="h-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <label>{{ $id }}</label>
    </div>

    <div class="flex justify-evenly items-center space-x-4 mt-4">
        <img src="{{ asset('img/img1.png') }}" alt="" class="w-1/4 h-96 rounded shadow object-cover object-center ">

        <div class="flex flex-col items-center text-gray-600 font-medium border border-gray-700 p-4 rounded">
            <span>ISBN of {{ $id }}</span>
            <span>Chemistry For Engineering(Vol 5)</span>
            <span>Written By Dr. Steven Strange</span>
            <span>Published By Mikasha Printing Press Pvt. Ltd.</span>
            <span>Published In 2007</span>
            <span>Price of NRS.540|-</span>
            <span>900 of Total Books</span>
            <span>400 Books in Library</span>
            <span>450 Books with Students</span>
            <span>50 Books with Teachers</span>
        </div>

        <div class="flex space-x-2 text-white font-normal border border-gray-700 p-4 rounded">

            <form action="#" class="m-0">
                <input type="submit" name="" id=""
                    class="bg-red-500 hover:opacity-70 py-2 px-3 shadow rounded cursor-pointer" value="Delete Book"
                    onclick="return confirm('Are you sure, you want to delete this book?')">
            </form>

            <a href="{{ route('editBook', $id) }}"
                class="bg-yellow-500 hover:opacity-70 py-2 px-3 shadow rounded cursor-pointer">Edit
                Book Details</a>

        </div>
    </div>
@endsection
