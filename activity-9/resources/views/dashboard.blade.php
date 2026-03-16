<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<nav>

<a href="/">Home</a>

<a href="/dashboard">Dashboard</a>

<form method="POST" action="/logout">
@csrf
<button type="submit">Logout</button>
</form>

</nav>

<div class="container">

<h1>Dashboard</h1>

<p>Only authenticated users can see this page.</p>

</div>

</body>
</html>