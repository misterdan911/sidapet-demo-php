<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> @vite('resources/css/app.css')
  <title>@yield('title')</title>
</head>

<body class="bg-gray-100">
  <!-- Container for Sidebar and Main Content -->
  <div class="flex h-screen">

    @include('left-sidebar')

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
      <!-- Navbar -->
      <header class="bg-white shadow p-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold">SI-Dapet</h1>
      </header>

      @yield('maincontent')

  </div>
</body>

</html>


