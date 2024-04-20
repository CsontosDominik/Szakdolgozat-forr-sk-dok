@extends('layouts.app')
@section('content')


    <div class="min-h-screen flex items-center justify-center bg-blue-100">
        <div class="px-6 py-4">
            <table class="min-w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-4 text-gray-500">Felhasználónév</th>
                        <th class="px-6 py-4 text-gray-500">Keresztnév</th>
                        <th class="px-6 py-4 text-gray-500">Vezetéknév</th>
                        <th class="px-6 py-4 text-gray-500">Típus</th>
                        <th class="px-6 py-4 text-gray-500">Email-cím</th>
                        <th class="px-6 py-4 text-gray-500">Készítés időpontja</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach($users as $user)
                    <tr>
                        <td class="px-6 py-4">{{ $user['username'] }}</td>
                        <td class="px-6 py-4">{{ $user['firstname'] }}</td>
                        <td class="px-6 py-4">{{ $user['lastname'] }}</td>
                        <td class="px-6 py-4">{{ $user['type'] }}</td>
                        <td class="px-6 py-4">{{ $user['email'] }}</td>
                        <td class="px-6 py-4">{{ $user['created_at'] }}</td>
                        <td class="px-6 py-4">
                            <p><a href="/users/edit/{{$user['id']}}" class="text-blue-600 hover:text-blue-900">Módosítás</a></p>
                        </td>
                        <td class="px-6 py-4">
                            <form action="/delete/{{$user['id']}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="text-blue-600 hover:text-blue-900">Törlés</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection