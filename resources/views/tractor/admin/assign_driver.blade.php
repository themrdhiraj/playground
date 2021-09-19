@extends('tractor.layouts.app')
@section('content')
    <div class="flex flex-col bg-white rounded shadow p-4 m-2">
        <strong class="border-b-2">Assign Driver</strong>
        <form action="{{ route('register_validation') }}" method="post" class="space-y-2">
            @csrf
            @include('tractor.layouts.notification')
            <div class="flex flex-col">
                <label for="driver_name">Driver Name<span class="text-red-500">*</span></label>
                <select name="driver_name" id=""
                    class="outline-none border border-gray-300 @error('driver_name') border-red-500 @enderror p-2 rounded shadow ">
                    @foreach ($drivers as $driver)
                        <option value="{{ $driver->id }}">{{ $driver->name }}</option>
                    @endforeach
                </select>
            </div>


            <div class="flex flex-col">
                <label for="trac_no">Tractor No.<span class="text-red-500">*</span></label>
                <input type="text" name="trac_no" id=""
                    class="outline-none border border-gray-300 @error('name') border-red-500 @enderror p-2 rounded shadow "
                    placeholder="John Wick" value="{{ old('name') }}">
                @error('name')
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
