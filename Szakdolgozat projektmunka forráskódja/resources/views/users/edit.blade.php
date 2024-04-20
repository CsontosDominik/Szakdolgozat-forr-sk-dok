@extends('layouts.app')
@section('content')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <form action="/users/edit/{{$user['id']}}" method="POST">
        @csrf
        @method('PUT')
        <div class="flex flex-wrap p-2 mb-2 mr-2">
            <input class="border rounded-md p-2 mb-2 mr-2" type="text" name="username" value="{{$user['username']}}">
            @error('username')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
            <input class="border rounded-md p-2 mb-2 mr-2" type="text" name="firstname" value="{{$user['firstname']}}">
            @error('firstname')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
            <input class="border rounded-md p-2 mb-2 mr-2" type="text" name="lastname" value="{{$user['lastname']}}">
            @error('lastname')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
            <input class="border rounded-md p-2 mb-2 mr-2" type="text" name="type" value="{{$user['type']}}">
            @error('type')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
            <input class="border rounded-md p-2 mb-2" type="text" name="email" value="{{$user['email']}}">
            @error('email')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        <div class="flex justify-center">
            <button class="bg-blue-900 text-white px-4 py-2 rounded-md" name="save">Mentés</button>
        </div>
    </form>
</body>
</html>

@endsection