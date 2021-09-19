@extends('tractor.layouts.app')
@section('content')

    {{-- show this in index --}}
    {{-- Tractor Details Start --}}
    <div class="bg-white rounded shadow p-4 m-2">
        <form action="#">
            <ul class="divide-y-2 divide-dotted">
                <li class="py-2 flex justify-between items-center ">
                    <strong>Today</strong>
                    <span class="text-sm">
                        {{ date('l jS \of F Y h:ia') }}
                    </span>
                </li>

                <li class="py-2 flex justify-between items-center ">
                    <strong>Fuel</strong>
                    <span class="bg-green-400 px-1 rounded"><input type="number" name="tractor_meter" id=""
                            class="border-2 border-gray-300" max="65"> Liter</span>
                </li>

                <li class="py-2 flex justify-between items-center ">
                    <strong>Total Distance</strong>
                    <span class="bg-yellow-400 px-1 rounded"><input type="number" name="tractor_meter" id=""
                            class="border-2 border-gray-300"> Km</span>
                </li>
            </ul>
            <button type="submit" class="bg-blue-500 hover:bg-blue-400 p-2 text-white rounded shadow w-full">Update
                Details</button>
        </form>
    </div>
    {{-- Tractor Details End --}}
@endsection
