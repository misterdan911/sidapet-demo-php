<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::post('/login', [LoginController::class, 'login'])->name('post.login');
Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('show.dashboard');
