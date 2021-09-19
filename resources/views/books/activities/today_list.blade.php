@extends('books.layouts.app')
@section('books')
    <label class="flex border-b text-gray-600 font-bold items-baseline">Students to return Books <small>(Total of
            10)</small></label>
    <div class="grid grid-cols-2 gap-4 mt-4">
        @for ($i = 1; $i < 11; $i++)
            <div action="#"
                class="flex flex-col from-red-500 via-purple-400 to-blue-300 bg-gradient-to-br rounded shadow m-0 space-y-4 p-4 relative">
                <div class="flex justify-between ">
                    <span class="font-medium text-gray-700">0 days remaining</span>
                    <img src="{{ asset('img/img' . $i . '.png') }}" alt=""
                        class="h-28 w-28 rounded-full object-cover object-center ring ring-white shadow-2xl">
                </div>
                <div class="flex flex-col leading-tight ">
                    <span class="font-medium text-gray-700">#{{ $i * 9644 }} </span>
                    <span class="font-bold italic text-gray-700 uppercase">Bruce Wayne </span>
                    <span class="font-bold  text-gray-700 uppercase">Student </span>
                    <div class="flex justify-between">
                        <span class="font-medium text-gray-500">Grade XI</span>
                        <span class="font-bold text-gray-700">{{ $i * 3 }} Books Collected</span>
                    </div>
                </div>
                <a href="{{ route('returnBookList', $i) }}"
                    class="h-10 w-10 p-1 bg-blue-500 text-white rounded-full absolute -right-3 bottom-9 shadow hover:bg-green-400">
                    <svg class="h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                        </path>
                    </svg>
                </a>
            </div>
        @endfor
    </div>
@endsection
