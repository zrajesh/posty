<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posty</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li class="p-3">
                <a href="{{route('home')}}">Home</a>
            </li>
            <li class="p-3">
                <a href="{{route('dashboard')}}">Dashboard</a>
            </li>
            <li class="p-3">
                <a href="#">Post</a>
            </li>
        </ul>
        <ul class="flex items-center">
            @auth
                <li class="p-3">
                    <a href="#">Rajesh</a>
                </li>  
                <li class="p-3">
                    <form class="inline" action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>     
            @endauth
            @guest                
                <li class="p-3">
                    <a href="{{route('login')}}">Login</a>
                </li>
                <li class="p-3">
                    <a href="{{route('register')}}">Register</a>
                </li>
            @endguest
        </ul>
    </nav>
    @yield('content')
</body>
</html>
