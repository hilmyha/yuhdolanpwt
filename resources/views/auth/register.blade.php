<form action="{{ route('register') }}" method="POST"> @csrf
    <label for="username">Username</label>
    <input type="username" name="username">

    <label for="email">Email</label>
    <input type="email" name="email">

    <label for="name">Name</label>
    <input type="name" name="name">

    <label for="password">Password</label>
    <input type="password" name="password">

    <label for="password_confirmation">Confirm Password</label>
    <input type="password" name="password_confirmation">

    <button type="submit">Register</button>
</form>