@extends('tractor.layouts.app')
@section('content')
    <div class="flex items-center bg-white font-bold px-4 py-2 m-2 mb-0 rounded shadow">Receive
        Payments<small>({{ date('l jS \of F Y') }})</small>
    </div>
    {{-- Data Start --}}
    <div class="grid grid-rows-2 gap-2 m-2">
        @for ($i = 0; $i < 3; $i++)
            <div class="bg-red-200 px-4 py-2 rounded shadow">
                <ul class="divide-y-2 divide-white divide-dotted">

                    <li class="flex justify-between py-2">
                        <strong>Date</strong>
                        <span>{{ date('l jS \of F Y') }}</span>
                    </li>

                    <li class="flex justify-between py-2">
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

                    <li class="flex justify-between items-center py-2">
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

                    <li class="flex justify-between py-2">
                        <strong>Total Work Time</strong>
                        <span>({{ $a = date('h:i') . '-' . ($b = date('h:i')) }})5 Hrs.</span>
                    </li>

                    <li class="flex justify-between py-2">
                        <strong>Payment</strong>
                        <span class="bg-blue-400 px-1 text-white rounded">NRS. 5000</span>
                    </li>

                    <li class="flex justify-between py-2">
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

                    <li class="flex flex-col justify-between py-2">
                        <strong class="">Description</strong>
                        <div class="flex space-x-1 items-center bg-blue-400 px-1 text-white rounded shadow">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident repudiandae expedita
                                ipsam sequi nesciunt deleniti nemo exercitationem dolorem quod hic at libero earum
                                veritatis, perferendis beatae laborum ex quibusdam quae.</p>
                        </div>
                    </li>

                    <li class="flex py-2 justify-between">
                        <strong class="">Payment Action</strong>
                        <form action="#" method="get">
                            <input type="hidden" name="payment" value="#payment">
                            <button type="submit"
                                class="bg-green-500 hover:bg-green-400 text-white p-1 rounded shadow">Receive
                                Payment</button>
                        </form>
                    </li>

                </ul>
            </div>
        @endfor
    </div>
    {{-- Data End --}}
@endsection
