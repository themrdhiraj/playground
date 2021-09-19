@extends('books.layouts.app')
@section('books')

    <label class="flex border-b text-gray-600 font-bold">Provide Book</label>
    <form action="#">

        <div class="flex flex-col py-2">
            <label for="" class="text-gray-600 font-semibold">Scan ISBN:
                <span class="text-red-500 ">*</span></label>
            <input type="text"
                class="border border-gray-300 outline-none focus:ring focus:ring-blue-500 rounded shadow py-2 px-4"
                placeholder="Scan for ISBN">
        </div>

        <div class="flex flex-col py-2">
            <label for="" class="text-gray-600 font-semibold">Scan Student/Teacher QR: <span
                    class="text-red-500 ">*</span></label>
            <input type="text"
                class="border border-gray-300 outline-none focus:ring focus:ring-blue-500 rounded shadow py-2 px-4"
                placeholder="Scan Student/Teacher QR">
        </div>

        <div class="flex flex-col py-2">
            <label for="" class="text-gray-600 font-semibold">Book Return Date: <span
                    class="text-red-500 ">*</span><small>(Today: {{ date('m/d/Y') }})</small></label>
            <input type="date"
                class="border border-gray-300 outline-none focus:ring focus:ring-blue-500 rounded shadow py-2 px-4">
        </div>

        <div class="flex flex-col pt-4">
            <input type="submit" class="btn btn-green" placeholder="120" value="Provide Book">
        </div>

    </form>
    <div class="flex font-semibold">
        <span class="text-red-500 ">*</span>
        <span class="text-gray-500">Required</span>
    </div>
@endsection
