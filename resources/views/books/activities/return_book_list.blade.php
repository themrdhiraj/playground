@extends('books.layouts.app')
@section('books')
    <label class="flex border-b text-gray-600 font-bold items-baseline">Return Book <small>(Total of 10)</small></label>
    <div class="grid grid-cols-2 gap-4 mt-4">
        @for ($i = 1; $i < 11; $i++)
            <form action="#" class="flex flex-col justify-between items-center bg-white rounded shadow m-0">
                <div class="flex justify-between w-full items-center">

                    <img src="{{ asset('img/img' . $i . '.png') }}" alt=""
                        class="w-1/2 h-96 object-center object-cover rounded-tl shadow">
                    <div class="flex flex-col divide-y text-gray-600 font-medium p-4 rounded">
                        <span>ISBN of 4563210</span>
                        <span class="font-bold">Chemistry For Engineering(Vol 5)</span>
                        <span>Written By Dr. Steven Strange</span>
                        <span>Published By Mikasha Printing Press Pvt. Ltd.</span>
                        <span>Published In 2007</span>
                        <span>Price of NRS.540|-</span>
                        <span>900 of Total Books</span>
                        <span>400 Books in Library</span>
                        <span>450 Books with Students</span>
                        <span>50 Books with Teachers</span>
                    </div>
                </div>
                <input type="submit" value="Return this Book"
                    class="btn btn-green w-full p-4 hover:opacity-80 rounded-t-none shadow-inner">
            </form>
        @endfor
    </div>
@endsection
