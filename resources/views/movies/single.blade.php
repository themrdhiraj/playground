@extends('movies.layouts.app')
@section('content')
    <div class="flex flex-col m-2 lg:my-2 lg:mx-auto space-y-2 items-center lg:w-1/2">
        <div class="flex flex-col space-y-2 bg-white rounded">
            <div class="relative">
                <div
                    class="absolute top-0 flex items-center bg-gray-500 text-white px-1 shadow-md text-xs font-light rounded-tl opacity-40">
                    Preview
                </div>
                <video src="{{ asset('video/video2.mp4') }}" class="rounded rounded-b-none shadow-md" muted autoplay loop
                    controls></video>
                <div
                    class="absolute top-1 -right-1 flex items-center bg-green-500 text-white rounded-l-full px-1 shadow-md text-xs font-medium border border-gray-300">
                    <a href="#WatchLater">Watch Later</a>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="flex flex-row justify-center">
                    @for ($j = 0; $j < 6; $j++)
                        <svg class="h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24" stroke="none">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                            </path>
                        </svg>
                    @endfor
                </div>
                <div class="p-2">
                    <form action="#" method="post" class="w-full flex flex-col space-y-2">
                        <div class="flex items-center space-x-2">
                            <span class="text-gray-700 font-semibold">Title:</span>
                            <strong class="text-gray-800 font-light md:font-bold font-mono underline">Thor</strong>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="text-gray-700 font-semibold">Genre:</span>
                            <a href="#"
                                class="text-gray-800 font-light md:font-bold font-mono bg-green-400 hover:bg-green-500 rounded-full px-2">Action</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- Recommended Start --}}
        <strong class="text-gray-600 underline font-mono">Recommended</strong>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-2">
            @for ($i = 0; $i < 5; $i++)
                <div class="relative hover:-translate-y-1.5 transition transform">
                    <a href="{{ route('movies.show', $i) }}">
                        <img src="{{ asset('img/img' . $i % 10 . '.png') }}"
                            class="object-cover object-center w-full h-64 rounded shadow hover:opacity-60" alt="image">
                        <div
                            class="absolute bottom-0 max-h-40 w-full bg-black bg-opacity-60 rounded-b border-t border-white px-2 py-1 space-y-1">
                            <div class="flex flex-col border-b border-white">
                                <span class="hover:text-white text-gray-300 text-sm font-bold leading-3 underline">Movie
                                    Title {{ $i }}</span>
                                <span class="hover:text-white text-gray-300 text-xs font-extralight">Movie
                                    Genere</span>
                            </div>
                            <div class="flex flex-row justify-center">
                                @for ($j = 0; $j < $i % 6; $j++)
                                    <svg class="h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24" stroke="none">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                        </path>
                                    </svg>
                                @endfor
                            </div>
                        </div>

                        @if ($i % 2 == 0)
                            <div
                                class="absolute top-1 -right-1 flex items-center bg-red-500 text-white rounded-l-full px-1 shadow-md text-xs font-medium border border-gray-300">
                                <a href="#watched">Watched</a>
                            </div>
                        @endif
                        @if ($i % 3 == 0)
                            <div
                                class="absolute top-6 -right-1 flex items-center bg-yellow-500  rounded-l-full px-1 shadow-md text-xs font-medium border border-gray-300">
                                <a href="#Favourite">Favourite</a>
                            </div>
                        @endif
                        @if ($i % 5 == 0)
                            <div
                                class="absolute top-11 -right-1 flex items-center bg-green-500 text-white rounded-l-full px-1 shadow-md text-xs font-medium border border-gray-300">
                                <a href="#WatchLater">Watch Later</a>
                            </div>
                        @endif
                    </a>
                </div>
            @endfor
        </div>
        {{-- Recommended End --}}
    </div>
@endsection
