<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\DepartemenController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [SessionController::class, 'index']);
Route::get('/sesi', [SessionController::class, 'index'])->name('login');
Route::post('/sesi/login', [SessionController::class, 'login']);
Route::get('/sesi/logout', [SessionController::class, 'logout'])->name('logout');



// route yang butuh login
Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('departemen', DepartemenController::class);

    Route::get('/mpl', function () {
        return view('mpl');
    })->name('mpl');
});
