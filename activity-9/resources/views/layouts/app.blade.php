<!DOCTYPE html>
<html>
<head>
    <title>{{ $title ?? 'Activity 9' }}
    </title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<nav class="navbar">

    <div class="logo">Activity 9</div>

    <div class="nav-links">

        <a href="/">Landing</a>

        @auth
            <a href="/dashboard">Dashboard</a>

            <form method="POST" action="/logout">
                @csrf
                <button class="logout-btn">Logout</button>
            </form>
        @endauth

        @guest
            <a href="/login">Login</a>
            <a href="/register">Register</a>
        @endguest

    </div>

</nav>

<div class="page">
    @yield('content')
</div>

</body>
</html>