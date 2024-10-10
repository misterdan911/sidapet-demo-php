<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> @vite('resources/css/app.css')
</head>

<body class="pl-2">
  <h2 class="text-3xl font-bold">Login</h2>

  <form action="{{ route('post.login') }}" method="post">

    @csrf

    Kode Vendor:
    <input type="text" name="kode_vendor">

    <br>
    <br>

    <input type="submit" value="Login" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
  </form>

</body>

</html>