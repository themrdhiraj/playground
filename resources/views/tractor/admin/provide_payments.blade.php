@extends('tractor.layouts.app')
@section('content')
    <div class="flex items-center bg-white font-bold px-4 py-2 m-2 mb-0 rounded shadow">Provide Payments
        <small>({{ date('l jS \of F Y') }})</small>
    </div>
    <div class="flex flex-col p-4 m-2 bg-white rounded shadow">
        <form action="#" method="post" class="space-y-2">
            <div class="flex flex-col">
                <label for="bill_photo">Driver Name<span class="text-red-500">*</span></label>
                <select name="tractor_no" id="" class="p-2 border-2 border-gray-300 rounded bg-white text-gray-700 shadow">
                    <option selected disabled>---Select Tractor No.---</option>
                    <option value="1">Natasha Romanaf</option>
                </select>
            </div>

            <div class="flex flex-col">
                <label for="payment_amount">Payment Amount<span class="text-red-500">*</span></label>
                <input type="number" class="p-2 border-2 border-gray-300 rounded bg-white text-gray-700 shadow"
                    placeholder="5000">
            </div>
            <div class="flex flex-col">
                <label for="payment_details">Details</label>
                <textarea name="bill_details" id="" placeholder="Money for Fuel"
                    class="p-2 border-2 border-gray-300 rounded bg-white text-gray-700 shadow"></textarea>
            </div>
            <button type="submit"
                class="h-10 p-2 bg-tractor hover:bg-blue-400 rounded shadow text-white w-full">Submit</button>
        </form>

        <small class="text-xs"><span class="text-red-500">*</span>Required</small>

    </div>
@endsection
