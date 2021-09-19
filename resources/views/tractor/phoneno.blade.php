@extends('tractor.layouts.app')
@section('content')

    <div class="grid grid-cols-1 gap-1 m-2">
        @for ($i = 0; $i < 10; $i++)
            <div class="flex items-center justify-between p-4 bg-white rounded">
                <strong>Bill Gates</strong>
                <div class="flex space-x-1 border p-1 rounded shadow">
                    <span>9568432170</span>
                    <a href="tel:9860298167" class="flex justify-center px-1 items-center bg-green-500 rounded text-white">
                        <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg>
                        Call
                    </a>
                </div>
            </div>
        @endfor
    </div>
@endsection
