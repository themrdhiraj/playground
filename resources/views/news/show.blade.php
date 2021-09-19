@extends('news.layouts.app')
@section('content')
    <div class="flex flex-col bg-white rounded shadow m-4 lg:m-10 p-4">
        @for ($i = 0; $i < 100; $i++)
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ex et deserunt maiores ducimus, blanditiis
            facilis!
            Cumque expedita dignissimos, fugit, fuga consectetur voluptates eveniet provident animi nesciunt tempora quidem
            iure!
        @endfor
    </div>
@endsection
