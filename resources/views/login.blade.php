<h2>Login</h2>

<form action="{{ route('post.login') }}" method="post">

    @csrf
    
    email:
    <input type="text" name="email">

    <br>
    <br>

    <input type="submit" value="Login">
</form>