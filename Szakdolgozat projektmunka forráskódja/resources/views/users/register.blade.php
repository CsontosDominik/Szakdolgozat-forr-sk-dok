@extends('layouts.app')
@section('content')
    <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-4">
                Regisztráció
            </h2>
        </header>

        <form method="POST" action="/users">
            @csrf
            <div class="mb-6">
                <label for="username" class="inline-block text-lg mb-2">Felhasználó név</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="username" value="{{old('username')}}" />
                @error('username')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="firstname" class="inline-block text-lg mb-2">Keresztnév</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="firstname" value="{{old('firstname')}}" />
                @error('firstname')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="lastname" class="inline-block text-lg mb-2">Vezetéknév</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="lastname" value="{{old('lastname')}}" />
                @error('lastname')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Email cím</label>
                <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="password" class="inline-block text-lg mb-2">Jelszó</label>
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"/>
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="password2" class="inline-block text-lg mb-2">Jelszó mégegyszer</label>
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation"/>
                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <button type="submit" class="bg-laravel text-white rounded py-2 px-4 bg-blue-900">Regisztráció</button>
            </div>
                <p>Már van fiókja? <a href="login" class="text-laravel">Bejelentkezés</a></p>
        </form>
    </div>
<br>
@endsection