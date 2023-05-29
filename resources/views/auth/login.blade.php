<form action="{{ route('login') }}" method="POST"> @csrf
    <label for="username">Username</label>
    <input type="username" name="username">

    <label for="password">Password</label>
    <input type="password" name="password">

    <label for="remember">Remember Me</label>
    <input type="checkbox" name="remember">

    <button type="submit">Login</button>
</form>