@extends('tractor.layouts.app')
@section('content')
    <div class="flex items-center bg-white font-bold px-4 py-2 m-2 mb-0 rounded shadow">Request Payments
        <small>({{ date('l jS \of F Y') }})</small>
    </div>
    {{-- Data Start --}}
    <div class="grid grid-rows-2 gap-2 m-2">
        @for ($i = 0; $i < 30; $i++)
            <div class="bg-red-200 px-4 py-2 rounded shadow">
                <ul class="divide-y-2 divide-white divide-dotted">

                    <li class="flex justify-between py-2">
                        <strong>Date</strong>
                        <span>{{ date('l jS \of F Y') }}</span>
                    </li>

                    <li class="flex justify-between items-center py-2">
                        <strong>Request for</strong>
                        <span>Tyer Repair</span>
                    </li>

                    <li class="flex justify-between items-center py-2">
                        <strong>Request Amount</strong>
                        <span class="bg-red-400 px-1 text-white rounded">NRS.5000</span>
                    </li>

                    <li class="flex justify-between py-2">
                        <strong>Request Status</strong>

                        @if ($i % 5 == 0)
                            <div class="flex space-x-1 items-center bg-green-400 px-1 text-white rounded">
                                <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>Paid</span>
                            </div>
                        @else
                            <div class="flex space-x-1 items-center bg-red-400 px-1 text-white rounded">
                                <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                                    </path>
                                </svg>
                                <span>Pending</span>
                            </div>
                        @endif
                    </li>

                    <li class="flex flex-col justify-between py-2">
                        <strong class="">Description</strong>
                        <div class="flex space-x-1 items-center bg-blue-400 px-1 text-white rounded shadow">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident repudiandae expedita
                                ipsam sequi nesciunt deleniti nemo exercitationem dolorem quod hic at libero earum
                                veritatis, perferendis beatae laborum ex quibusdam quae.</p>
                        </div>
                    </li>

                    @if ($i % 5)
                        <li class="flex py-2 justify-between">
                            <strong class="">Request Action</strong>
                            <form action="#" class="m-0">
                                <button
                                    class="flex items-center space-x-1 bg-red-500 hover:bg-red-400 text-white p-1 rounded shadow"
                                    onclick="return confirm('Are your sure, you want to cancel this request?')">
                                    <svg class="h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-white">Cancel Request</span>
                                </button>
                            </form>
                        </li>
                    @endif

                </ul>
            </div>
        @endfor
    </div>
    {{-- Data End --}}
@endsection
