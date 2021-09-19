@extends('tractor.layouts.app')
@section('content')
    <div class="flex flex-col p-4 m-2 bg-white rounded shadow">
        <form action="#" method="post" class="space-y-2">
            <div class="flex flex-col">
                <label for="spend_title">Spend on<span class="text-red-500">*</span></label>
                <input type="text" name="spend_title" id=""
                    class="p-2 border-2 border-gray-300 rounded bg-white text-gray-700 shadow" placeholder="Fuel">
            </div>
            <div class="flex flex-col">
                <label for="bill_photo">Capture the Photo of bill</label>
                <input type="file" name="bill_photo" id="" accept="image/*"
                    class="p-2 border-2 border-gray-300 rounded bg-white text-gray-700 shadow" capture>
            </div>
            <div class="flex flex-col">
                <label for="bill_details">Details</label>
                <textarea name="bill_details" id="" placeholder="This bill takes extra charge of Rs.254"
                    class="p-2 border-2 border-gray-300 rounded bg-white text-gray-700 shadow"></textarea>
            </div>
            <button type="submit" class="h-10 p-2 bg-tractor hover:bg-blue-400 rounded shadow text-white w-full">Upload
                Photo</button>
        </form>

        <small class="text-xs"><span class="text-red-500">*</span>Required</small>
        <small class="text-red-400 text-xs">Note: You can't delete information after upload.</small>

    </div>

    <div class="flex flex-col p-2 m-2 bg-gray-200 rounded shadow">
        <strong class="border-b-2 border-white mb-1">Spending Information</strong>
        <div class="grid grid-cols-1 gap-2">
            @for ($i = 0; $i < 5; $i++)
                <div class="flex flex-col p-4 bg-white rounded shadow">
                    <div class="flex justify-between">
                        <div class="flex items-center justify-center">
                            <span class="text-sm font-semibold">Fuel</span>
                            <small class="text-xs font-medium underline">(3 days ago)</small>
                        </div>
                        <div class="flex items-center space-x-2 text-xs">
                            <a href="{{ route('single_bill') }}"
                                class="bg-green-500 py-1 px-2 rounded flex items-center space-x-1">
                                <svg class="h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                    </path>
                                </svg>
                                <span class="text-white">View Bill</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
