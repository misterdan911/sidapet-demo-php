<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> @vite('resources/css/app.css')
</head>

<body>
  <h1 class="text-3xl font-bold underline">
    Hello world!
  </h1>

  <h2>Login</h2>

  <form action="{{ route('post.login') }}" method="post">

    @csrf

    Kode Vendor:
    <input type="text" name="kode_vendor">

    <br>
    <br>

    <input type="submit" value="Login">
  </form>

</body>

</html>