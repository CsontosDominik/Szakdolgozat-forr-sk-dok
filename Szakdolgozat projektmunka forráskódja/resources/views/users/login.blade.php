@extends('layouts.app')
@section('content')
    <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-4">
                Bejelentkezés
            </h2>
        </header>

        <form method="POST" action="/users/authenticate">
            @csrf
            <div class="mb-6">
                <label for="username" class="inline-block text-lg mb-2">Felhasználó név</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="username" value="{{old('username')}}"/>
                @error('username')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="password" class="inline-block text-lg mb-2">Jelszó</label>
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password" value="{{old('password')}}"/>
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <button type="submit" class="bg-laravel text-white rounded py-2 px-4 bg-blue-900">Bejelentkezés</button>
            </div>
                <p>Nincs még fiókja? <a href="/register" class="text-laravel">Regisztráció</a></p>
        </form>
    </div>
<br>
@endsection