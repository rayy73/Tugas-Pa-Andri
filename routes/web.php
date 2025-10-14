<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;

// =======================
// 🔹 ROUTE LOGIN / LOGOUT
// =======================
Route::get('/login', [SessionController::class, 'index'])->middleware('iniTamu')->name('login');
Route::get('/sesi', [SessionController::class, 'index'])->middleware('iniTamu');
Route::post('/sesi/login', [SessionController::class, 'login'])->middleware('iniTamu');
Route::get('/sesi/logout', [SessionController::class, 'logout'])->name('logout');

// ===========================
// 🔹 ROUTE YANG BUTUH LOGIN
// ===========================
Route::middleware(['auth', 'inilogin'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('departemen', DepartemenController::class);
    Route::resource('karyawan', KaryawanController::class);

    Route::get('/mpl', function () {
        return view('mpl');
    })->name('mpl');
});
