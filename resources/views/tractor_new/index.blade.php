@extends('tractor_new.layouts.app')
@section('content')
    <img src="{{ asset('img/img6.png') }}" alt="" class="h-1/3 w-full object-center object-cover shadow mt-1">

    <div class="flex flex-col m-4 px-4 divide-y-2 bg-white rounded shadow">

        <div class="flex justify-between py-2 text-gray-700">
            <span class="font-bold">Tractor No.</span>
            <span class="font-semibold">Lu 4 Ta 4140</span>
        </div>

        <div class="flex justify-between py-2 text-gray-700">
            <span class="font-bold">Tractor Driver</span>
            <span class="font-semibold">Manish Shrestha</span>
        </div>

        <div class="flex justify-between py-2 text-gray-700">
            <span class="font-bold">Phone No.</span>
            <span class="font-semibold">98XXXXXXXX</span>
        </div>

    </div>

    <div class="flex flex-col m-4 p-4 divide-y-2 bg-white rounded shadow">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quia sed inventore qui quam velit nemo amet,
        eligendi dolorem placeat laborum ex corporis quaerat pariatur tenetur adipisci! Iusto, exercitationem possimus.
    </div>
@endsection
