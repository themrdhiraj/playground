@extends('tractor.layouts.app')
@section('content')
    <div class="flex flex-col bg-white p-4 m-2 rounded shadow">
        <strong class="border-b-2">Request for Payments</strong>
        <form action="#" method="post" class="space-y-2">
            <div class="flex flex-col">
                <label for="payment_for">Payment For<span class="text-red-500">*</span></label>
                <input type="text" name="payment_for" id=""
                    class="p-2 border-2 border-gray-300 rounded  bg-white text-gray-700" placeholder="Fuel">
            </div>

            <div class="flex flex-col">
                <label for="payment_amount">Payment Amount<span class="text-red-500">*</span></label>
                <input type="number" name="payment_amount" id=""
                    class="p-2 border-2 border-gray-300 rounded  bg-white text-gray-700" placeholder="5000">
            </div>

            <div class="flex flex-col">
                <label for="payment_description">Payment Description</label>
                <textarea name="payment_description" id=""
                    class="p-2 border-2 border-gray-300 rounded bg-white text-gray-700"
                    placeholder="50 l. fuel added."></textarea>
            </div>
            <button type="submit" class=" p-2 bg-tractor hover:bg-blue-400 rounded shadow text-white w-full">Request
                Payment</button>
        </form>

        <small><span class="text-red-500">*</span>Required</small>

    </div>
@endsection
