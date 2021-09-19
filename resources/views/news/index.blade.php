@extends('news.layouts.app')
@section('content')
    <div class="m-2 grid lg:grid-cols-3 gap-2">
        @for ($i = 1; $i < 10; $i++)
            <div class="flex flex-col bg-white rounded shadow relative">
                {{-- Info Start --}}
                <div class="py-2 px-4 flex justify-evenly space-x-2 border-b-2">

                    <a href="#" class="flex space-x-1 items-center">
                        <svg class="h-6 w-6 text-blue-500" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                        <span class="text-gray-500 text-base">Tony Stark</span>
                    </a>

                    <a href="#" class="flex space-x-1 items-center">
                        <svg class="h-6 w-6 text-green-500" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg>
                        <span class="text-gray-500 text-base">2d ago</span>
                    </a>

                    <a href="#" class="flex space-x-1 items-center">
                        <svg class="h-6 w-6 text-red-500" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-gray-500 text-base">5 min. read</span>
                    </a>

                </div>
                {{-- Info End --}}

                {{-- Content Start --}}
                <a href="/news/{{ $i }}" class="text-justify">
                    <img src="{{ asset('img/img' . $i . '.png') }}" alt=""
                        class="my-2 h-56 w-full object-center object-cover shadow">
                    <span class="p-4 text-gray-600 text-lg font-medium underline">Repellat nemo dolor dolorum.</span>
                    <p class="p-4 py-0 text-gray-600 text-sm font-light">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Inrem ipsum dolor sit amet consectetur adipisicing elit. In
                    </p>
                    <a href="#" class="p-4 pt-0 text-gray-600 text-sm underline hover:text-gray-400">Read more...</a>
                </a>
                {{-- Content End --}}

                {{-- Action Bar Start --}}
                {{-- <div class="py-2 px-4 flex justify-between border-t-2">

                    <div class="flex items-center divide-x-2 divide-white">
                        <a href="#"
                            class="flex space-x-1 px-2 py-1 bg-gray-200 hover:bg-gray-300 rounded-l items-center shadow">
                            <svg class="h-6 w-6 text-blue-500" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                    d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5">
                                </path>
                            </svg>
                            <span class="text-gray-600 font-light text-sm">548</span>
                        </a>
                        <a href="#"
                            class="flex space-x-1 px-2 py-1 bg-gray-200 hover:bg-gray-300 rounded-r items-center shadow">
                            <svg class="h-6 w-6 text-red-500" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                    d="M10 14H5.236a2 2 0 01-1.789-2.894l3.5-7A2 2 0 018.736 3h4.018a2 2 0 01.485.06l3.76.94m-7 10v5a2 2 0 002 2h.096c.5 0 .905-.405.905-.904 0-.715.211-1.413.608-2.008L17 13V4m-7 10h2m5-10h2a2 2 0 012 2v6a2 2 0 01-2 2h-2.5">
                                </path>
                            </svg>
                            <span class="text-gray-600 font-light text-sm">8</span>
                        </a>
                    </div>

                    <a href="#" class="flex space-x-1 items-center px-2 py-1 bg-gray-200 hover:bg-gray-300 rounded shadow">
                        <svg class="h-6 w-6 text-yellow-500" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                            </path>
                        </svg>
                        <span class="text-gray-600 font-light text-sm">Comment</span>
                    </a>

                    <a href="#" class="flex space-x-1 items-center px-2 py-1 bg-gray-200 hover:bg-gray-300 rounded shadow">
                        <svg class="h-6 w-6 text-indigo-500" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                            </path>
                        </svg>
                        <span class="text-gray-600 font-light text-sm">Share</span>
                    </a>


                </div> --}}
                {{-- Action Bar End --}}

                @if ($i % 4 == 0)
                    {{-- Trending Start --}}
                    <a href="#"
                        class="flex absolute items-center top-11 -right-1 text-white bg-red-500 ring-1 ring-white px-2 py-1 rounded-l-full shadow">

                        <svg class="h-6 w-6 text-yellow-400 animate-pulse" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"></path>
                        </svg>
                        Trending
                    </a>
                    {{-- Trending End --}}
                @endif

                {{-- Category Start --}}
                <a href="#"
                    class="flex absolute items-center top-11 -left-1 text-white bg-blue-400 ring-1 ring-white px-2 py-1 rounded-r-full shadow">

                    <svg class="h-6 w-6" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01">
                        </path>
                    </svg>
                    Movies
                </a>
                {{-- Category End --}}
            </div>
        @endfor
    </div>
@endsection
