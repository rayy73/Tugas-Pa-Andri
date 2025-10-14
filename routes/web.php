<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\KaryawanController;
use App\Models\Karyawan;
use Illuminate\Support\Facades\Route;

// route yang butuh login
Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

Route::resource('departemen', DepartemenController::class) ->middleware('inilogin');
Route::resource('karyawan',KaryawanController::class)->middleware('inilogin');
Route::get('/login', [SessionController::class, 'index'])->middleware('iniTamu');
Route::get('/sesi', [SessionController::class, 'index'])->middleware('iniTamu');
Route::post('/sesi/login', [SessionController::class, 'login'])->middleware('iniTamu');
Route::get('/sesi/logout', [SessionController::class, 'logout'])->name('logout');


    Route::get('/mpl', function () {
        return view('mpl');
    })->name('mpl');
});
