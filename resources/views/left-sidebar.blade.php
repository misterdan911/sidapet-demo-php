<!-- Sidebar -->
<aside class="w-64 bg-gray-800 text-white flex flex-col p-4">
    <h2 class="text-2xl font-semibold mb-8">{{ $nama_perusahaan }}</h2>
    <ul class="space-y-4">
        <li>
            <a href="{{ route('show.dashboard') }}" class="block p-3 hover:bg-gray-700 rounded">Dashboard</a>
        </li>
        <li>
            <a href="{{ route('show.isidata', 1) }}" class="block p-3 hover:bg-gray-700 rounded">Isi Data</a>
        </li>
        <li>
            <a href="#" class="block p-3 hover:bg-gray-700 rounded">Reports</a>
        </li>
        <li>
            <a href="#" class="block p-3 hover:bg-gray-700 rounded">Settings</a>
        </li>
    </ul>
</aside>