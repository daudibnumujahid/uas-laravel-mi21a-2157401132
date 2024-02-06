<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\daftarController;
use App\Http\Controllers\homeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/daftar', [daftarController::class, 'index'])->name('daftar.index');
Route::post('/daftar-success', [daftarController::class, 'store'])->name('daftar.store');

Route::get('/login', [loginController::class, 'login'])->name('login.index');
Route::post('/login', [loginController::class, 'authenticate'])->name('auth.authenticate');

Route::get('home', [homeController::class, 'index'])->name('home');
