@extends('tractor.layouts.app')
@section('content')
    @if (auth()->user()->id != 1)
        {{-- Tractor Details Start --}}
        <div class="flex flex-col bg-white rounded shadow p-4 m-2">
            <strong class="border-b-2">Tractor details</strong>
            <form action="#">
                <ul class="divide-y-2 divide-dotted">
                    <li class="py-2 flex justify-between items-center ">
                        <strong>Today</strong>
                        <span class="text-sm">
                            {{ date('l jS \of F Y') }}
                        </span>
                    </li>

                    <li class="py-2 flex justify-between items-center ">
                        <strong>Remaining Amount</strong>
                        <span class="text-sm bg-green-300 px-2 py-1 rounded">NRS.-5000
                            <form action="" class="m-0">
                                <input type="hidden" name="amount">
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-400 text-white px-2 py-1 rounded shadow">Return/Take
                                    Money</button>
                            </form>
                        </span>
                    </li>

                    <li class="py-2 flex justify-between items-center ">
                        <strong>Fuel</strong>
                        <select name="fuel" id=""
                            class="border-2 border-gray-300 rounded max-w-full bg-white text-gray-700">
                            <option value="1">Full</option>
                            <option value="2">Quarter</option>
                            <option value="3">Half</option>
                            <option value="4">Half Quarter</option>
                            <option value="5">Empty</option>
                        </select>
                    </li>

                    <li class="py-2 flex justify-between items-center ">
                        <strong>Total Distance</strong>
                        <span class="bg-yellow-400 px-1 rounded"><input type="number" name="tractor_meter" id=""
                                class="border-2 border-gray-300 w-24 text-center text-gray-700" value="2564"> Km</span>
                    </li>
                </ul>
                <button type="submit" class="bg-blue-500 hover:bg-blue-300 p-2 text-white rounded shadow w-full">Update
                    Details</button>
            </form>
        </div>
        {{-- Tractor Details End --}}

        {{-- Work Progress Start --}}
        <div class="flex flex-col bg-white mx-2 p-4 rounded shadow">
            <div class="flex justify-between items-center pb-2 border-b-2">
                <strong class="">Ongoing Work</strong>
                {{-- If no work available --}}
                <a href="{{ route('add_work') }}"
                    class="flex space-x-1 bg-tractor hover:bg-blue-400 text-white px-2 py-1 rounded shadow">
                    <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z">
                        </path>
                    </svg>
                    <span>Add Work</span>
                </a>
                {{-- If no work available --}}
            </div>
            <form action="#">
                <ul class="divide-y-2 divide-dotted">
                    <li class="py-2 flex justify-between items-center ">
                        <strong>Customer Name</strong>
                        <span class="text-sm">Steve Rogers</span>
                    </li>

                    <li class="py-2 flex justify-between items-center ">
                        <strong>Starting Time</strong>
                        <span class="text-sm">{{ date('Y/m/d, h:iA') }}</span>
                    </li>

                    <li class="py-2 flex justify-between items-center ">
                        <strong>Total Trips<span class="text-red-500">*</span></strong>
                        <span class="text-sm">
                            <input type="number" name="trip" id=""
                                class="p-2 text-center border-2 border-gray-300 rounded h-10 bg-white text-gray-700"
                                placeholder="5" value="5">
                        </span>
                    </li>

                    <li class="py-2 flex justify-between items-center ">
                        <strong>Payment offer<span class="text-red-500">*</span></strong>
                        <span class="text-sm">
                            <input type="number" name="trip" id=""
                                class="p-2 text-center border-2 border-gray-300 rounded h-10 bg-white text-gray-700"
                                placeholder="5000" value="5000">
                        </span>
                    </li>

                </ul>
                <button type="submit"
                    class="flex space-x-1 justify-center bg-green-500 hover:bg-green-300 p-2 text-white rounded shadow w-full">
                    <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>Work
                        Complete</span></button>
            </form>
            <small><span class="text-red-500">*</span>Required</small>
        </div>
        {{-- Work Progress End --}}
    @endif
    <div class="grid grid-cols-2 gap-2 m-2">
        @if (auth()->user()->id != 1)

            <a href='{{ route('request_payments') }}'>
                <div
                    class="flex flex-col justify-center items-center p-2 bg-tractor hover:bg-blue-500 text-white rounded shadow">
                    <svg class="h-20 text-green-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                    <span>Request Payment *</span>
                </div>
            </a>

            <a href='{{ route('spend_money') }}'>
                <div
                    class="flex flex-col justify-center items-center p-2 bg-tractor hover:bg-blue-500 text-white rounded shadow">
                    <svg class="h-20 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                    </svg>
                    <span>Spend Money</span>
                </div>
            </a>

            <a href='{{ route('all_requests') }}'>
                <div
                    class="flex flex-col justify-center items-center p-2 bg-tractor hover:bg-blue-500 text-white rounded shadow">
                    <svg class="h-20 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                        </path>
                    </svg>
                    <span>All Requests *</span>
                </div>
            </a>

            <a href='{{ route('phone') }}'>
                <div
                    class="flex flex-col justify-center items-center p-2 bg-tractor hover:bg-blue-500 text-white rounded shadow">
                    <svg class="h-20 text-green-300 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                        </path>
                    </svg>
                    <span class="flex-shrink-0">Important Phone No.</span>
                </div>
            </a>
        @endif

        @if (auth()->user()->id == 1)
            {{-- Items Start --}}
            <a href='{{ route('tractor_earnings') }}'>
                <div
                    class="flex flex-col justify-center items-center p-2 bg-tractor hover:bg-blue-500 text-white rounded shadow">
                    <svg class="h-20 text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                    <span>Total Earnings</span>
                </div>
            </a>

            <a href='{{ route('tractor_spendings') }}'>
                <div
                    class="flex flex-col justify-center items-center p-2 bg-tractor hover:bg-blue-500 text-white rounded shadow">
                    <svg class="h-20 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                    <span>Total Spending</span>
                </div>
            </a>

            <a href='{{ route('receive_payments') }}'>
                <div
                    class="flex flex-col justify-center items-center p-2 bg-tractor hover:bg-blue-500 text-white rounded shadow">
                    <svg class="h-20 text-green-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                    <span>Receive Payment</span>
                </div>
            </a>

            <a href='{{ route('provide_payments') }}'>
                <div
                    class="flex flex-col justify-center items-center p-2 bg-tractor hover:bg-blue-500 text-white rounded shadow">
                    <svg class="h-20 text-red-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2zM10 8.5a.5.5 0 11-1 0 .5.5 0 011 0zm5 5a.5.5 0 11-1 0 .5.5 0 011 0z">
                        </path>
                    </svg>
                    <span>Provide Payment</span>
                </div>
            </a>

            <a href='{{ route('requested_payments') }}'>
                <div
                    class="flex flex-col justify-center items-center p-2 bg-tractor hover:bg-blue-500 text-white rounded shadow">
                    <svg class="h-20 text-purple-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3">
                        </path>
                    </svg>
                    <span>Requested Payment *</span>
                </div>
            </a>

            <a href='{{ route('tractor_details') }}'>
                <div
                    class="flex flex-col justify-center items-center p-2 bg-tractor hover:bg-blue-500 text-white rounded shadow">
                    <svg class="h-20 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0">
                        </path>
                    </svg>
                    <span>Tractor Details</span>
                </div>
            </a>

            <a href='{{ route('settings') }}'>
                <div
                    class="flex flex-col justify-center items-center p-2 bg-tractor hover:bg-blue-500 text-white rounded shadow">
                    <svg class="h-20 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span>Settings</span>
                </div>
            </a>


            {{-- Items End --}}

        @endif
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button
                class="flex flex-col w-full justify-center items-center p-2 bg-tractor hover:bg-blue-500 text-white rounded shadow"
                onclick="return confirm('Are you sure?')">
                <svg class="h-20 text-red-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                    </path>
                </svg>
                <span>Logout</span>
            </button>
        </form>
    </div>
@endsection
