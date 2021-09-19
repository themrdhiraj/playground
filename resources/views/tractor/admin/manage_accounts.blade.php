@extends('tractor.layouts.app')
@section('content')
    <div class="grid grid-cols-1 gap-2 m-2">

        @for ($i = 0; $i < 5; $i++)
            <div class="flex justify-between items-center p-4 bg-white rounded shadow">
                <strong>Akipid</strong>
                <div class="flex items-center space-x-2 text-xs">
                    <a href="{{ route('edit_account', $i) }}"
                        class="bg-green-500 py-1 px-2 rounded flex items-center space-x-1">
                        <svg class="h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                            </path>
                        </svg>
                        <span class="text-white">Edit</span>
                    </a>

                    @if ($i % 3)
                        <form action="#" class="bg-yellow-500 py-1 px-2 m-0 rounded">
                            <button class="flex items-center space-x-1"
                                onclick="return confirm('Are your sure, you want to suspend this account?')">
                                <svg class="h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                    </path>
                                </svg>
                                <span class="text-white">Suspend</span>
                            </button>
                        </form>
                    @else
                        <form action="#" class="bg-blue-500 py-1 px-2 m-0 rounded">
                            <button class="flex items-center space-x-1"
                                onclick="return confirm('Are your sure, you want to suspend this account?')">
                                <svg class="h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z">
                                        </path>
                                </svg>
                                <span class="text-white">Re-active</span>
                            </button>
                        </form>
                    @endif

                    <form action="#" class="bg-red-500 py-1 px-2 m-0 rounded">
                        <button class="flex items-center space-x-1"
                            onclick="return confirm('Are your sure, you want to delete this account?')">
                            <svg class="h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                </path>
                            </svg>
                            <span class="text-white">Delete</span>
                        </button>
                    </form>

                </div>
            </div>
        @endfor

    </div>
@endsection
