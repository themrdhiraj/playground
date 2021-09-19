@extends('tractor.layouts.app')
@section('content')
    <div class="flex items-center bg-white font-bold px-4 py-2 m-2 mb-0 rounded shadow">Provide Payments
        <small>({{ date('l jS \of F Y') }})</small>
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
                        <strong>Requested for</strong>
                        <span>Tyer Repair</span>
                    </li>

                    <li class="flex justify-between items-center py-2">
                        <strong>Requested Amount</strong>
                        <span class="bg-red-400 px-1 text-white rounded">NRS.5000</span>
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
                        <strong class="">Request Action</strong>
                        <div class="flex space-x-1">
                            <form action="#" class="m-0">
                                <button
                                    class="flex items-center space-x-1 bg-green-500 hover:bg-green-400 text-white p-1 rounded shadow">
                                    <svg class="h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-white">Provide</span>
                                </button>
                            </form>
                            <form action="#" class="m-0">
                                <button
                                    class="flex items-center space-x-1 bg-red-500 hover:bg-red-400 text-white p-1 rounded shadow"
                                    onclick="return confirm('Are your sure, you want to decline this request?')">
                                    <svg class="h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-white">Decline</span>
                                </button>
                            </form>
                        </div>
                    </li>

                </ul>
            </div>
        @endfor
    </div>
    {{-- Data End --}}

@endsection
