<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    @vite(["resources/css/app.css","resources/js/app.js"])
</head>
    <body>
    <div id="app">
        <!--<header>-->
            <header class="h-15vh bg-emerald-300 border-4 flex flex-row justify-between content-center">
            <img src="{{asset("images/logo.png")}}" alt="logo" />
            <h1>Página prueba Laravel 9</h1>
            @guest
                <!--<div>-->
                <div class="flex flex-row">
                    <form action="login" method="POST">
                        @method('POST')
                        @csrf
                        <input type="text" name="email" placeholder="Email" id="emailId" />
                        <input type="text" name="password" placeholder="Password" id="passId" />
                    </form>
                    <a href="register">Registrarse</a>
                </div>
            @endguest
            @auth
                Conectado como {{Auth::user()->name}}
                <form action="logout" method="POST">
                    @method('POST')
                    @csrf
                    <input type="submit" value="Logout" />
                </form>
            @endauth
        </header>
        <!--<nav>-->
        <nav class="h-10vh bg-emerald-500 border-4 flex flex-row justify-start content-center">
            <!--<a href="{{route("alumnos.index")}}">Alumnos</a>-->
            <a class="w-1/12 bg-gray-800 text-white" href="{{route("alumnos.index")}}">Alumnos</a>
        </nav>
        <!--<main>-->
        <main class="h-65vh bg-emerald-300 border-4 flex justify-between content-center">
            @yield('contenido')
        </main>
        <footer class="h-10vh bg-emerald-500 border-4 flex flex-row justify-between content-center">
        </footer>
    </div>

    </body>
</html>
