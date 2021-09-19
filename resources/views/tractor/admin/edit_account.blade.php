@extends('tractor.layouts.app')
@section('content')
    <div class="flex flex-col bg-white rounded shadow p-4 m-2">
        <strong class="border-b-2">Edit Account</strong>
        <form action="#" method="post" class="space-y-2">
            <div class="flex flex-col">
                <label for="name">Name</label>
                <input type="text" name="name" id="" class="outline-none border border-gray-300 px-2 rounded shadow h-10"
                    placeholder="John Wick">
            </div>

            <div class="flex flex-col">
                <label for="profile_image">Profile Image</label>
                <div class="flex space-x-1 items-center">
                    <input accept="image/*" type="file" name="profile_image" id=""
                        class="outline-none border border-gray-300 px-2 rounded shadow h-10">
                    <img src="{{ asset('img/img3.png') }}" alt=""
                        class="w-10 h-10 object-center object-cover rounded shadow">
                </div>
            </div>

            <div class="flex flex-col">
                <label for="phone">Phone no.</label>
                <input type="text" name="phone" id="" class="outline-none border border-gray-300 px-2 rounded shadow h-10"
                    placeholder="98XXXXXXXX">
            </div>

            <div class="flex flex-col">
                <label for="address">Address</label>
                <input type="text" name="address" id="" class="outline-none border border-gray-300 px-2 rounded shadow h-10"
                    placeholder="Sanghutar-3, Thakle">
            </div>

            <div class="flex flex-col">
                <label for="bank_name">Bank Name</label>
                <input type="text" name="bank_name" id=""
                    class="outline-none border border-gray-300 px-2 rounded shadow h-10" placeholder="Sanima Bank Ltd.">
            </div>

            <div class="flex flex-col">
                <label for="bank_acc_no">Bank Account No.</label>
                <input type="text" name="bank_acc_no" id=""
                    class="outline-none border border-gray-300 px-2 rounded shadow h-10" placeholder="14200XXXXXXXXXX">
            </div>

            <div class="flex flex-col">
                <label for="tractor_no">Tractor no.</label>
                <select name="tractor_no" id="" class="outline-none border border-gray-300 px-2 rounded shadow h-10">
                    <option selected disabled>
                        <---Select Tractor No.--->
                    </option>
                    <option value="1">4568</option>
                    <option value="1">4568</option>
                </select>
            </div>

            <div class="flex space-x-1">
                <input type="submit" name="submit" id=""
                    class="bg-blue-500 hover:bg-blue-400 text-white px-2 rounded shadow h-10 w-full" value="Update Account">

                <input type="reset" name="reset" id=""
                    class="bg-yellow-500 hover:bg-yellow-400 text-white px-2 rounded shadow h-10 w-full">
            </div>


        </form>
    </div>
@endsection
