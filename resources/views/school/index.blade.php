@extends('school.layouts.app')
@section('content')

    <div class="flex flex-col m-2 p-3 gap-5 bg-gray-300 rounded">
        <div class="p-5 flex justify-center bg-purple-500 rounded shadow text-white font-medium">
            {{ date('l jS \of F Y') }}
        </div>
        <div class="flex flex-row gap-5">
            <div
                class="flex-1 flex flex-col justify-center items-center p-5 bg-green-500 rounded shadow text-white font-medium">
                <h3>{{ rand(5, 99) }}</h3>
                <small>Students</small>
            </div>
            <div
                class="flex-1 flex flex-col justify-center items-center p-5 bg-green-500 rounded shadow text-white font-medium">
                <h3>{{ rand(5, 99) }}</h3>
                <small>Staffs</small>
            </div>
        </div>

        <a href="#"
            class="p-5 flex justify-center gap-2 items-center bg-blue-400 hover:bg-blue-600 rounded shadow text-white font-medium">
            <svg class="h-7 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                </path>
            </svg>
            <span>
                Diary
            </span>
        </a>

    </div>

    <div class="grid grid-cols-3 m-2 gap-5 bg-gray-100 py-5 rounded-2xl shadow">

        <a href="#" class="flex flex-col items-center">
            <svg class="h-10 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z">
                </path>
            </svg>
            <small class="text-gray-800 font-bold text-xs">Fees</small>
        </a>

        <a href="#" class="flex flex-col items-center">
            <svg class="h-10 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z">
                </path>
            </svg>
            <small class="text-gray-800 font-bold text-xs">Notices</small>
        </a>

        <a href="#" class="flex flex-col items-center">
            <svg class="h-10 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
            </svg>
            <small class="text-gray-800 font-bold text-xs">Marksheets</small>
        </a>

        <a href="#" class="flex flex-col items-center">
            <svg class="h-10 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0">
                </path>
            </svg>
            <small class="text-gray-800 font-bold text-xs">Bus</small>
        </a>

        <a href="#" class="flex flex-col items-center">
            <svg class="h-10 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                </path>
            </svg>
            <small class="text-gray-800 font-bold text-xs">New Admission</small>
        </a>

        <a href="#" class="flex flex-col items-center">
            <svg class="h-10 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <small class="text-gray-800 font-bold text-xs">Leave Request</small>
        </a>

        <a href="#" class="flex flex-col items-center">
            <svg class="h-10 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                </path>
            </svg>
            <small class="text-gray-800 font-bold text-xs">Events</small>
        </a>

        <a href="#" class="flex flex-col items-center">
            <svg class="h-10 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z">
                </path>
            </svg>
            <small class="text-gray-800 font-bold text-xs">Announcements</small>
        </a>

        <a href="#" class="flex flex-col items-center">
            <svg class="h-10 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
            <small class="text-gray-800 font-bold text-xs">Reports</small>
        </a>

        <a href="#" class="flex flex-col items-center">
            <svg class="h-10 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
            <small class="text-gray-800 font-bold text-xs">Book Logs</small>
        </a>


    </div>

@endsection
