@extends('tractor.layouts.app')
@section('content')
    <div class="flex flex-col divide-y-2 divide-dashed m-2 px-4 py-2 bg-white rounded shadow">
        <div class="flex flex-col space-y-1 justify-between py-2">
            <span class="text-sm font-semibold underline">Spend on</span>
            <span class="text-sm font-medium">Fuel</span>
        </div>

        <div class="flex flex-col space-y-1 justify-between py-2">
            <span class="text-sm font-semibold underline">Spend Amount</span>
            <span class="text-sm font-medium">NRS.5000</span>
        </div>

        <div class="flex flex-col space-y-1 justify-between py-2">
            <span class="text-sm font-semibold underline">Details</span>
            <span class="text-sm font-medium">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat unde vitae
                voluptas velit? Maiores nobis, officia fugit ipsum neque ratione nulla vero eveniet, laboriosam laborum
                debitis doloribus laudantium temporibus doloremque.</span>
        </div>

        <div class="flex flex-col space-y-1 justify-between py-2">
            <span class="text-sm font-semibold underline">Bill Photo</span>
            <a href="{{ asset('img/img7.png') }}" class="py-2">
                <img src="{{ asset('img/img7.png') }}" alt="img" class="rounded shadow w-full h-auto">
            </a>
        </div>


        {{-- @auth --}}
        <form action="#" class="py-2">
            <button class="flex justify-center text-center space-x-1 bg-red-500 py-1 px-2 w-full rounded"
                onclick="return confirm('Are your sure, you want to delete this account?')">
                <svg class="h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                    </path>
                </svg>
                <span class="text-white">Delete</span>
            </button>
        </form>
        {{-- @endauth --}}
    </div>
@endsection
