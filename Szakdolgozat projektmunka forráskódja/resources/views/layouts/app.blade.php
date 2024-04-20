<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Szakdolgozat</title>
  @vite('resources/css/app.css')
</head>
<body>
<header class="bg-blue-900 text-white py-4">
    <div class="container mx-auto flex justify-between items-center px-4">
        <h1 class="text-xl font-semibold">Online képzésmenedzsment rendszer</h1>
        <p class="mt-2 text-lg">Az informatika alapjai</p>
        <nav>
            <a href="/" class="text-white font-bold hover:text-gray-200 ">Főoldal</a>
            @auth
            <span class="font-bold py-2 px-4">
              Üdv {{auth()->user()->username}}
            </span>
            @if(auth()->user()->username=='admin')
            <a href="/manage" class="bg-white text-blue-900 hover:bg-gray-200 hover:text-blue-900 font-semibold py-2 px-4 rounded-full">Felhasználók</a>
            @endif
            <!--<a href="/userprogress" class="bg-white text-blue-900 hover:bg-gray-200 hover:text-blue-900 font-semibold py-2 px-4 rounded-full">Tesztek eredményei</a>-->
            <form class="inline" method="POST" action="/logout">
              @csrf
              <button type="submit" class="bg-white text-blue-900 hover:bg-gray-200 hover:text-blue-900 font-semibold py-2 px-4 rounded-full">Kijelentkezés</a>
              </button>
            </form>
            @else
            <a href="/login" class="bg-white text-blue-900 hover:bg-gray-200 hover:text-blue-900 font-semibold py-2 px-4 rounded-full">Bejelentkezés</a>
            <a href="/register" class="bg-white text-blue-900 hover:bg-gray-200 hover:text-blue-900 font-semibold py-2 px-4 rounded-full">Regisztráció</a>
            @endauth
        </nav>
    </div>
</header>

@yield('content')

<footer class="bg-blue-900 text-white py-4 fixed bottom-0 w-full">
      <p class="text-sm text-center">&copy; 2024 Online képzésmenedzsment rendszer. Készítette Csontos Dominik</p>
</footer>
</body>
</html>
