<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="form-container">

<h2>Create Account</h2>

<form method="POST" action="/register">

@csrf

<input type="text" name="name" placeholder="Name">

<input type="email" name="email" placeholder="Email">

<input type="password" name="password" placeholder="Password">

<button type="submit">Register</button>

</form>

</div>  