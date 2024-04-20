
@extends('layouts.app')
@section('content')

<div class="bg-blue-900 py-6 text-white text-center">
    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold">{{$heading}}</h1>
</div>
<br>
@auth
@csrf
@foreach($courses as $course)
<div class="max-w-md rounded shadow-lg bg-blue-100">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2 text-blue-800"><a href="{{ url('/courses/' . $course['platform'] . '/index.html') }}">{{ $course['title'] }}</a></div>
        <p class="text-gray-700 text-base">
            {{$course['description']}}
        </p>
    </div>
</div>
<br>
@endforeach
@else
<p class="font-bold text-xl mb-2 text-blue-800 text-center">A kurzusok megtekintéséhez jelentkezz be!</p>
@foreach($courses as $course)
<div class="max-w-md rounded shadow-lg bg-blue-100">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2 text-blue-800"><a>{{ $course['title'] }}</a></div>
        <p class="text-gray-700 text-base">
            {{$course['description']}}
        </p>
    </div>
</div>
<br>
@endforeach
@endauth
@endsection
