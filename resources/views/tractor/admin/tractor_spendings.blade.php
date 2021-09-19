@extends('tractor.layouts.app')
@section('content')
    {{-- Search Start --}}
    <form action="#" method="GET" class="flex mx-2 mt-2">
        <input name="search" type="date"
            class="rounded rounded-r-none border-r-0 border p-2 w-full bg-white text-gray-700 shadow" placeholder="Search">
        <button class="bg-gray-200 rounded rounded-l-none p-1 shadow">
            <svg class="h-10 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </button>
    </form>
    {{-- Search End --}}

    {{-- Total Spendings Start --}}
    <div class="flex justify-between items-center mx-2 mb-0 px-4 py-2 bg-white rounded">
        <ul class="divide-y-2 divide-dotted">
            <li class="py-2 flex justify-between items-center">
                <div class="">
                    <strong>Total Spendings</strong>
                    <small class="text-xs">
                        <select class="bg-white border-gray-300 border rounded" name="money" id="">
                            <option value="1">(Excluding Selfwork)</option>
                            <option value="1">(Including Selfwork)</option>
                        </select>
                    </small>
                </div>
                <span class="underline flex-shrink-0">NRS.1,00,000/-</span>
            </li>

            {{-- Option B --}}
            {{-- <li class="py-2 flex justify-between items-center">
                <strong>Pending Payments</strong>
                <span>3</span>
            </li>

            <li class="py-2 flex justify-between items-center">
                <strong>Paid Payments</strong>
                <span>10</span>
            </li> --}}
        </ul>
    </div>
    {{-- Total Spendings End --}}

    {{-- Pending Start --}}
    {{-- Option B --}}
    {{-- <div class="m-2 p-1.5 bg-white rounded">
        <div class="flex justify-between">
            <strong class="underline text-gray-500">Pending Payments</strong>
            <a href="{{ route('provide_payments') }}"
                class="flex mb-1 px-1 bg-green-500 hover:bg-green-400 text-white rounded shadow animate-pulse">Provide
                Payments
                <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" \>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                </svg>
            </a>
        </div> --}}

    {{-- Data Start --}}
    {{-- <div class="grid grid-rows-2 gap-2">
            @for ($i = 0; $i < 3; $i++)
                <div class=" bg-red-200 px-4 py-2 rounded shadow">
                    <ul class="divide-y-2 divide-white divide-dotted">

                        <li class="py-2 flex justify-between">
                            <strong>Date</strong>
                            <span>{{ date('l jS \of F Y') }}</span>
                        </li>

                        <li class="py-2 flex justify-between">
                            <strong>Driver</strong>
                            <div class="flex space-x-1">
                                <a href="tel:9860298167"
                                    class="flex justify-center px-1 items-center bg-purple-500 rounded text-white">
                                    <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                        </path>
                                    </svg>
                                    Call
                                </a>
                                <span>Ne Zha</span>
                            </div>
                        </li>

                        <li class="py-2 flex justify-between items-center">
                            <strong>Payment for</strong>
                            <span>Fuel</span>
                        </li>

                        <li class="py-2 flex justify-between">
                            <strong>Payment Amount</strong>
                            <span class="bg-red-400 px-1 text-white rounded">NRS.5000</span>
                        </li>

                        <li class="py-2 flex justify-between">
                            <strong>Payment Status</strong>
                            <div class="flex space-x-1 items-center bg-red-400 px-1 text-white rounded">
                                <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                                    </path>
                                </svg>
                                <span>Pending</span>
                            </div>
                        </li>

                        <li class="py-2 flex flex-col justify-between">
                            <strong class="">Description</strong>
                            <div class="flex space-x-1 items-center bg-blue-400 px-1 text-white rounded shadow">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident repudiandae expedita
                                    ipsam sequi nesciunt deleniti nemo exercitationem dolorem quod hic at libero earum
                                    veritatis, perferendis beatae laborum ex quibusdam quae.</p>
                            </div>
                        </li>

                    </ul>
                </div>
            @endfor
        </div> --}}

    {{-- Data End --}}
    {{-- </div> --}}
    {{-- Pending End --}}

    {{-- Data Start --}}
    <div class="m-2 rounded grid grid-rows-2 gap-2">
        @for ($i = 0; $i < 10; $i++)
            <div class=" bg-white px-4 py-2 rounded shadow">
                <ul class="divide-y-2 divide-dotted">

                    <li class="py-2 flex justify-between">
                        <strong>Date</strong>
                        <span>{{ date('l jS \of F Y') }}</span>
                    </li>

                    <li class="py-2 flex justify-between">
                        <strong>Driver</strong>
                        <div class="flex space-x-1">
                            <a href="tel:9860298167"
                                class="flex justify-center px-1 items-center bg-purple-500 rounded text-white">
                                <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                                Call
                            </a>
                            <span>Ne Zha</span>
                        </div>
                    </li>

                    <li class="py-2 flex justify-between items-center">
                        <strong>Spend on</strong>
                        <span>Fuel</span>
                    </li>

                    <li class="py-2 flex justify-between">
                        <strong>Amount</strong>
                        <span class="bg-red-400 px-1 text-white rounded">NRS.5000</span>
                    </li>

                    <li class="py-2 flex justify-between">
                        <strong>Payment By</strong>
                        <span class="bg-blue-400 px-1 text-white rounded">Bruce Wyane</span>
                    </li>

                    <li class="py-2 flex flex-col justify-between">
                        <strong class="">Description</strong>
                        <div class="flex space-x-1 items-center bg-blue-400 px-1 text-white rounded shadow">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident repudiandae expedita
                                ipsam sequi nesciunt deleniti nemo exercitationem dolorem quod hic at libero earum
                                veritatis, perferendis beatae laborum ex quibusdam quae.</p>
                        </div>
                    </li>

                    {{-- @auth --}}
                    <li class="flex py-2 justify-between">
                        <strong class="">Payment Action</strong>
                        <div class="flex space-x-1">
                            <a href="#"
                                class="flex items-center space-x-1 bg-green-500 hover:bg-green-400 text-white p-1 rounded shadow">
                                <svg class="h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                    </path>
                                </svg>
                                <span>Edit</span>
                            </a>
                            <form action="#" class="bg-red-500 py-1 px-2 m-0 rounded">
                                <button class="flex items-center space-x-1"
                                    onclick="return confirm('Are your sure, you want to delete this account?')">
                                    <svg class="h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                        </path>
                                    </svg>
                                    <span class="text-white">Delete</span>
                                </button>
                            </form>
                        </div>
                    </li>
                    {{-- @endauth --}}

                </ul>
            </div>
        @endfor
    </div>

    {{-- Data End --}}
@endsection
