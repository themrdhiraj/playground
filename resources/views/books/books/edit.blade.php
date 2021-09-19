@extends('books.layouts.app')
@section('books')


    <label class="flex border-b text-gray-600 font-bold">Edit Book</label>
    <form action="#">

        <div class="flex flex-col py-2">
            <label for="" class="text-gray-600 font-semibold">ISBN:
                <span class="text-red-500 ">*</span></label>
            <input type="text"
                class="border border-gray-300 outline-none focus:ring focus:ring-blue-500 rounded shadow py-2 px-4"
                placeholder="458996">
            {{-- Value and placeholder must be same --}}
        </div>

        <div class="flex flex-col py-2">
            <label for="" class="text-gray-600 font-semibold">Book Name: <span class="text-red-500 ">*</span></label>
            <input type="text"
                class="border border-gray-300 outline-none focus:ring focus:ring-blue-500 rounded shadow py-2 px-4"
                placeholder="Harry Potter">
        </div>


        <div class="flex flex-col py-2">
            <label for="" class="text-gray-600 font-semibold">Book Author:
                <span class="text-red-500 ">*</span></label>
            <div class="flex space-x-4">
                <input type="text"
                    class="border border-gray-300 outline-none focus:ring focus:ring-blue-500 rounded shadow py-2 px-4 w-full"
                    placeholder="J.K. Rowling">
                <input type="submit" name="" id=""
                    class="bg-blue-500 text-white font-medium hover:bg-blue-400 cursor-pointer rounded shadow px-4"
                    value="+">
            </div>
        </div>

        <div class="flex flex-col py-2">
            <label for="" class="text-gray-600 font-semibold">Book Publisher:
                <span class="text-red-500 ">*</span></label>
            <input type="text"
                class="border border-gray-300 outline-none focus:ring focus:ring-blue-500 rounded shadow py-2 px-4"
                placeholder="Thakle Press Pvt. Ltd.">
        </div>

        <div class="flex flex-col py-2">
            <label for="" class="text-gray-600 font-semibold">Book Published Year:</label>
            <input type="number"
                class="border border-gray-300 outline-none focus:ring focus:ring-blue-500 rounded shadow py-2 px-4"
                placeholder="2007">
        </div>


        <div class="flex flex-col py-2">
            <label for="" class="text-gray-600 font-semibold">Book Quantity:
                <span class="text-red-500 ">*</span></label>
            <input type="number"
                class="border border-gray-300 outline-none focus:ring focus:ring-blue-500 rounded shadow py-2 px-4"
                placeholder="120">
        </div>

        <div class="flex flex-col py-2">
            <label for="" class="text-gray-600 font-semibold">Book Price <small>(In NRS)</small>:</label>
            <input type="number"
                class="border border-gray-300 outline-none focus:ring focus:ring-blue-500 rounded shadow py-2 px-4"
                placeholder="540">
        </div>

        <div class="flex flex-col py-2">
            <label for="" class="text-gray-600 font-semibold">Book Image:
                <span class="text-red-500 ">*</span></label>
            <div class="flex space-x-4">
                <a href="{{ asset('img/img8.png') }}" class="hover:opacity-80">
                    <img src="{{ asset('img/img8.png') }}" alt=""
                        class="h-14 w-10 rounded shadow object-center object-cover">
                </a>
                <input type="file"
                    class="border border-gray-300 outline-none focus:ring focus:ring-blue-500 rounded shadow py-2 px-4 w-full"
                    accept="image/*">
            </div>
        </div>

        <div class="flex flex-col pt-4">
            <input type="submit" class="bg-green-500 text-white hover:bg-green-400 cursor-pointer rounded shadow py-2 px-4"
                placeholder="120" value="Update Book">
        </div>

    </form>
    <div class="flex font-semibold">
        <span class="text-red-500 ">*</span>
        <span class="text-gray-500">Required</span>
    </div>
@endsection
