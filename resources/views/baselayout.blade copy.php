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
        <h1 class="text-2xl font-bold">Dashboard</h1>

        <!-- 
        <div class="flex items-center space-x-4">
          <input type="text" placeholder="Search..." class="border p-2 rounded">
          <button class="bg-gray-800 text-white px-4 py-2 rounded">Logout</button>
        </div>

        -->
      </header>

      <!-- Dashboard Cards -->
      <main class="flex-1 p-6 grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Card 1 -->
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h3 class="text-lg font-semibold text-gray-700 mb-2">Total Users</h3>
          <p class="text-3xl font-bold">1,234</p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h3 class="text-lg font-semibold text-gray-700 mb-2">Total Sales</h3>
          <p class="text-3xl font-bold">$56,789</p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h3 class="text-lg font-semibold text-gray-700 mb-2">Active Subscriptions</h3>
          <p class="text-3xl font-bold">123</p>
        </div>
      </main>
    </div>
  </div>
</body>

</html>


