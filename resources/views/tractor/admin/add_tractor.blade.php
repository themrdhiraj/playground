@extends('tractor.layouts.app')
@section('content')
    <div class="flex flex-col bg-white rounded shadow p-4 m-2">
        <strong class="border-b-2">Add Tractor</strong>
        <form action="{{ route('add_tractor_validation') }}" method="post" class="space-y-2">
            @csrf
            @include('tractor.layouts.notification')
            <div class="flex flex-col">
                <label for="trac_no">Tractor No.<span class="text-red-500">*</span></label>
                <input type="text" name="trac_no" id=""
                    class="outline-none border border-gray-300 @error('name') border-red-500 @enderror p-2 rounded shadow "
                    placeholder="Lu 4 Ta 4140" value="{{ old('trac_no') }}">
                @error('trac_no')
                    <small class="text-xs text-red-500">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="trac_model">Tractor Model<span class="text-red-500">*</span></label>
                <input type="text" name="trac_model" id=""
                    class="outline-none border border-gray-300 @error('name') border-red-500 @enderror p-2 rounded shadow "
                    placeholder="New Holland" value="{{ old('trac_model') }}">
                @error('trac_model')
                    <small class="text-xs text-red-500">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="trac_dist">Tractor Distance<span class="text-red-500">*</span></label>
                <input type="number" name="trac_dist" id=""
                    class="outline-none border border-gray-300 @error('name') border-red-500 @enderror p-2 rounded shadow "
                    placeholder="5214" value="{{ old('trac_dist') }}">
                @error('trac_dist')
                    <small class="text-xs text-red-500">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="trac_fuel">Tractor Fuel<span class="text-red-500">*</span></label>
                <select name="trac_fuel" id="" class="outline-none border border-gray-300 p-2 rounded shadow ">
                    <option value="1">Full</option>
                    <option value="2">Quarter</option>
                    <option value="3">Half</option>
                    <option value="4">Half Quarter</option>
                    <option value="5">Empty</option>
                </select>
            </div>

            <div class="flex space-x-1">
                <input type="submit" name="submit" id=""
                    class="bg-blue-500 hover:bg-blue-400 text-white p-2 rounded shadow  w-full" value="Submit">

                <input type="reset" name="reset" id=""
                    class="bg-yellow-500 hover:bg-yellow-400 text-white p-2 rounded shadow  w-full">
            </div>


        </form>
        <small><span class="text-red-500">*</span>Required</small>
    </div>
    <div class="flex flex-col bg-white rounded shadow p-4 m-2">
        <strong class="border-b-2">All Tractor(s)</strong>
        <table class="border">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Tractor No.</th>
                    <th>Tractor Model</th>
                    <th>Tractor Fuel</th>
                    <th>Tractor Distance</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($tractors as $tractor)
                    <tr class="border @if ($tractor->id % 2) bg-gray-300 @endif">
                        <td>{{ $tractor->id }}</td>
                        <td>{{ $tractor->trac_no }}</td>
                        <td>{{ $tractor->trac_model }}</td>
                        <td>{{ $tractor->trac_fuel }}</td>
                        <td>{{ $tractor->trac_dist }}</td>
                        <td>Delete</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
