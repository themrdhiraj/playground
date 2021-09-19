@extends('tractor.layouts.app')
@section('content')
    <div class="flex flex-col bg-white p-4 m-2  rounded shadow">
        <strong class="border-b-2">Add Work<small>({{ date('l jS \of F Y') }})</small></strong>
        <form action="#" class="space-y-2">
            <div class="flex flex-col">
                <label for="cust_name">Customer Name<span class="text-red-500">*</span></label>
                <input type="text" name="cust_name" id=""
                    class="p-2 border-2 border-gray-300 rounded h-10 bg-white text-gray-700" placeholder="Tony Stark">
            </div>

            <div class="flex flex-col">
                <label for="cust_phone">Customer Phone no.<span class="text-red-500">*</span></label>
                <input type="number" name="cust_phone" id=""
                    class="p-2 border-2 border-gray-300 rounded h-10 bg-white text-gray-700" placeholder="98XXXXXXXX">
            </div>

            <div class="flex flex-col">
                <label for="trip">Trip</label>
                <input type="number" name="trip" id=""
                    class="p-2 border-2 border-gray-300 rounded h-10 bg-white text-gray-700" placeholder="5">
            </div>

            <div class="flex flex-col">
                <label for="pay_offer">Payment Offer</label>
                <input type="number" name="pay_offer" id=""
                    class="p-2 border-2 border-gray-300 rounded h-10 bg-white text-gray-700" placeholder="5000">
            </div>

            {{-- <div class="flex flex-col">
            <label for="init_time">Starting Time</label>
            <input type="datetime-local" name="init_time" id=""
                class="p-2 w-full border-2 border-gray-300 rounded h-10 bg-white text-gray-700">
        </div> --}}

            <input type="submit" name="submit" id="" class="p-2 bg-tractor hover:bg-blue-400 text-white rounded h-10"
                value="Add Work">
        </form>
        <small><span class="text-red-500">*</span>Required</small>

    </div>
@endsection
