@extends('tractor.layouts.app')
@section('content')
    <div class="bg-white rounded shadow px-4 py-2 m-2">
        <ul class="divide-y-2 divide-dotted">
            <li class="py-2 flex justify-between items-center ">
                <strong>Today</strong>
                <span class="text-sm">
                    {{ date('l jS \of F Y h:ia') }}
                </span>
            </li>

            <li class="py-2 flex justify-between items-center ">
                <strong>Fuel</strong>

                <span class="">
                    <div class="h-4 relative max-w-xl rounded-full overflow-hidden">
                        <div class="w-full h-full bg-gray-200 absolute"></div>
                        <div class="h-full bg-green-500 absolute w-11/12"></div>
                    </div>
                    <small class="text-xs text-gray-500">Empty to Full in Liters (approx 15 li.)</small>
                </span>
            </li>

            <li class="py-2 flex justify-between items-center ">
                <strong>Total Distance</strong>
                <span class="bg-yellow-400 px-1 rounded text-white">1597 Km</span>
            </li>

            <li class="py-2 flex justify-between items-center ">
                <strong>Tractor no.</strong>
                <span class="bg-red-400 px-1 rounded text-white">15987</span>
            </li>

            <li class="py-2 flex justify-between items-center ">
                <strong>Tractor Driver</strong>
                <span class="flex flex-col space-y-1">
                    <span class="px-1 bg-blue-400 rounded text-white">Ram Shah</span>
                    <a href="tel:9860298167"
                        class="flex justify-center px-1 items-center bg-green-500 rounded text-white shadow">
                        <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg>
                        Call
                    </a>
                </span>
            </li>

            <li class="py-2 flex flex-col ">
                <strong class="border-b-2">Ongoing Work</strong>
                <span class="p-1 text-sm text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
                    deserunt
                    voluptatum unde aliquam aliquid quas tenetur doloremque quisquam laboriosam. Aspernatur autem laudantium
                    impedit velit eligendi dolores dolorum non eum excepturi!</span>
            </li>

        </ul>
    </div>
@endsection
