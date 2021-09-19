@extends('tractor.layouts.app')
@section('content')
    {{-- Search Start --}}
    <form action="#" class="flex mx-2 mt-2">
        <input type="text" class="rounded rounded-r-none border-r-0 border outline-none px-4 h-auto w-full shadow"
            placeholder="Search" list="list">
        <datalist id="list">
            <option value="Apple">
            <option value="Banana">
            <option value="Rat">
            <option value="Dog">
        </datalist>
        <button class="bg-gray-200 rounded rounded-l-none p-1 shadow">
            <svg class="h-10 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </button>
    </form>
    {{-- Search End --}}

    {{-- Total Earnings Start --}}
    <div class="flex justify-between items-center mx-2 mb-0 px-4 py-2 bg-white rounded">
        <ul class="divide-y-2 divide-dotted w-full">
            <li class="py-2 flex justify-between items-center">
                <div class="flex flex-col">
                    <strong>Total Earnings</strong>
                    <div class="text-xs">
                        <select class="bg-white border-gray-300 border rounded" name="money" id="">
                            <option value="1">(Excluding Selfwork)</option>
                            <option value="1">(Including Selfwork)</option>
                        </select>
                    </div>
                </div>
                <span class="underline flex-shrink-0">NRS.5,00,000/-</span>
            </li>

            <li class="py-2 flex justify-between items-center">
                <strong>Pending Payments</strong>
                <span>3</span>
            </li>

            <li class="py-2 flex justify-between items-center">
                <strong>Received Payments<small class="text-xs">(Including selfwork)</small></strong>
                <span>10</span>
            </li>
        </ul>
    </div>
    {{-- Total Earnings End --}}

    {{-- Pending Payments --}}
    <div class="m-2 p-1.5 bg-white rounded">
        <div class="flex justify-between">
            <strong class="underline text-gray-500">Pending Payments</strong>
            <a href="{{ route('receive_payments') }}"
                class="flex mb-1 px-1 bg-green-500 hover:bg-green-400 text-white rounded shadow animate-pulse">Receive
                Payments
                <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" \>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                </svg>
            </a>
        </div>
        {{-- Data Start --}}
        <div class="grid grid-rows-2 gap-2">
            @for ($i = 0; $i < 3; $i++)
                <div class="bg-red-200 px-4 py-2 rounded shadow">
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
                            <strong>Customer</strong>
                            <div class="flex space-x-1">
                                <span>Hira Kumar</span>
                                <a href="tel:9860298167"
                                    class="flex justify-center px-1 items-center bg-indigo-500 rounded text-white">
                                    <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                        </path>
                                    </svg>
                                    Call
                                </a>
                            </div>
                        </li>

                        <li class="py-2 flex justify-between">
                            <strong>Total Work Time</strong>
                            <span>({{ $a = date('h:i') . '-' . ($b = date('h:i')) }})5 Hrs.</span>
                        </li>

                        <li class="py-2 flex justify-between">
                            <strong>Payment</strong>
                            <span class="bg-blue-400 px-1 text-white rounded">NRS. 5000</span>
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
        </div>
        {{-- Data End --}}
    </div>
    {{-- Pending Payments --}}

    {{-- Pending Payments --}}
    <div class="m-2 p-1.5 bg-white rounded">
        <strong class="underline text-gray-500">Received Payments</strong>
        {{-- Data Start --}}
        <div class="grid grid-rows-2 gap-2">
            @for ($i = 0; $i < 10; $i++)
                <div class="@if ($i % 4) bg-green-200 @else bg-yellow-200 @endif px-4 py-2 rounded shadow"> {{-- Not an error --}}
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
                            <strong>Customer</strong>
                            <div class="flex space-x-1">
                                <span>Hira Kumar</span>
                                <a href="tel:9860298167"
                                    class="flex justify-center px-1 items-center bg-indigo-500 rounded text-white">
                                    <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                        </path>
                                    </svg>
                                    Call
                                </a>
                            </div>
                        </li>

                        <li class="py-2 flex justify-between">
                            <strong>Total Work Time</strong>
                            <span>({{ date('h:i') . '-' . date('h:i') }})5 Hrs.</span>
                        </li>

                        <li class="py-2 flex justify-between">
                            <strong>Payment</strong>
                            <span class="bg-blue-400 px-1 text-white rounded">NRS. 5000</span>
                        </li>

                        <li class="py-2 flex justify-between">
                            <strong>Payment Status</strong>
                            @if ($i % 4)
                                <div class="flex space-x-1 items-center bg-green-400 px-1 text-white rounded">
                                    <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span>Received</span>
                                </div>
                            @else
                                <div class="flex space-x-1 items-center bg-yellow-400 px-1 text-white rounded">
                                    <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                                        </path>
                                    </svg>
                                    <span>Selfwork</span>
                                </div>
                            @endif
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
        </div>
        {{-- Data End --}}
    </div>
    {{-- Pending Payments --}}
@endsection
