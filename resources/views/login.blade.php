<h2>Login</h2>

<form action="{{ route('post.login') }}" method="post">

    @csrf
    
    Kode Vendor:
    <input type="text" name="kode_vendor">

    <br>
    <br>

    <input type="submit" value="Login">
</form>