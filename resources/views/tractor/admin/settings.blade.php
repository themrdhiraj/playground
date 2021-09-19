@extends('tractor.layouts.app')
@section('content')
    <div class="grid grid-cols-2 gap-2 m-2">
        <a href='{{ route('manage_accounts') }}'>
            <div
                class="flex flex-col justify-center items-center p-2 bg-tractor hover:bg-blue-500 text-white rounded shadow">
                <svg class="h-20 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                    </path>
                </svg>
                <span>Manage Accounts</span>
            </div>
        </a>

        <a href='{{ route('register') }}'>
            <div
                class="flex flex-col justify-center items-center p-2 bg-tractor hover:bg-blue-500 text-white rounded shadow">
                <svg class="h-20 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                </svg>
                <span>Create Account</span>
            </div>
        </a>

        <a href='{{ route('add_tractor') }}'>
            <div
                class="flex flex-col justify-center items-center p-2 bg-tractor hover:bg-blue-500 text-white rounded shadow">
                <svg class="h-20 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">

                    <path stroke-linecap=" round" stroke-linejoin="round" stroke-width="1"
                        d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0">
                    </path>
                </svg>
                <span>Add New Tractor</span>
            </div>
        </a>

        <a href='{{ route('assign_driver') }}'>
            <div
                class="flex flex-col justify-center items-center p-2 bg-tractor hover:bg-blue-500 text-white rounded shadow">
                <svg class="h-20 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                    </path>
                </svg>
                <span>Assign Drivers</span>
            </div>
        </a>

        <a href='{{ route('profile') }}'>
            <div
                class="flex flex-col justify-center items-center p-2 bg-tractor hover:bg-blue-500 text-white rounded shadow">
                <img src="{{ asset('img/img3.png') }}" alt="" class="h-20 w-20 rounded object-cover object-center">
                <span>Manage Profile</span>
            </div>
        </a>
    </div>
@endsection
