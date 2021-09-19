@extends('tractor.layouts.app')
@section('content')
    <div class="flex flex-col bg-white rounded shadow p-4 m-2">
        <strong class="border-b-2">Create Account<small class="text-xs font-thin underline">(User will get Username &
                Password via
                Phone
                no.)</small></strong>
        <form action="{{ route('register_validation') }}" method="post" class="space-y-2">
            @csrf
            <div class="flex flex-col">
                <label for="name">Name<span class="text-red-500">*</span></label>
                <input type="text" name="name" id=""
                    class="outline-none border border-gray-300 @error('name') border-red-500 @enderror p-2 rounded shadow "
                    placeholder="John Wick" value="{{ old('name') }}">
                @error('name')
                    <small class="text-xs text-red-500">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="prof_img">Profile Image</label>
                <input accept="image/*" type="file" name="prof_img" id=""
                    class="outline-none border border-gray-300 @error('prof_img') border-red-500 @enderror p-2 rounded shadow"
                    value="{{ old('prof_img') }}">
                @error('prof_img')
                    <small class="text-xs text-red-500">{{ $message }}</small>
                @enderror
            </div>

            {{-- Send Username & Password via Phone no. --}}

            <div class="flex flex-col">
                <label for="phone">Phone no.<span class="text-red-500">*</span></label>
                <input type="text" name="phone" id=""
                    class="outline-none border border-gray-300 @error('phone') border-red-500 @enderror p-2 rounded shadow "
                    placeholder="98XXXXXXXX" value="{{ old('phone') }}">
                @error('phone')
                    <small class="text-xs text-red-500">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="address">Address<span class="text-red-500">*</span></label>
                <input type="text" name="address" id=""
                    class="outline-none border border-gray-300 @error('address') border-red-500 @enderror p-2 rounded shadow "
                    placeholder="Sanghutar-3, Thakle" value="{{ old('address') }}">
                @error('address')
                    <small class="text-xs text-red-500">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="bank">Bank Name</label>
                <input type="text" name="bank" id=""
                    class="outline-none border border-gray-300 @error('bank') border-red-500 @enderror p-2 rounded shadow "
                    placeholder="Sanima Bank Ltd." value="{{ old('bank') }}">
                @error('bank')
                    <small class="text-xs text-red-500">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="acc_no">Bank Account No.</label>
                <input type="text" name="acc_no" id=""
                    class="outline-none border border-gray-300 @error('acc_no') border-red-500 @enderror p-2 rounded shadow "
                    placeholder="14200XXXXXXXXXX" value="{{ old('acc_no') }}">
                @error('acc_no')
                    <small class="text-xs text-red-500">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="trac_no">Tractor no.<span class="text-red-500">*</span></label>
                <select name="trac_no" id=""
                    class="outline-none border border-gray-300 @error('trac_no') border-red-500 @enderror p-2 rounded shadow ">
                    <option selected disabled>
                        <---Select Tractor No.--->
                    </option>
                    <option value="1">4568</option>
                    <option value="1">4568</option>
                </select>
                @error('trac_no')
                    <small class="text-xs text-red-500">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex space-x-1">
                <input type="submit" name="submit" id=""
                    class="bg-blue-500 hover:bg-blue-400 text-white p-2 rounded shadow  w-full" value="Create Account">

                <input type="reset" name="reset" id=""
                    class="bg-yellow-500 hover:bg-yellow-400 text-white p-2 rounded shadow  w-full">
            </div>


        </form>
        <small><span class="text-red-500">*</span>Required</small>
    </div>
@endsection
