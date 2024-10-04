<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function showDashboard()
    {
        $data = [
            'nama_perusahaan' => session('nama_perusahaan')
        ];

        return view('dashboard');
    }
}
