<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataIot;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\RegisterController;
use GuzzleHttp\Middleware;
// use App\Http\Controllers\LayananController;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Route;

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

// Authentication Routes
Auth::routes();


// Home
Route::get('/', [HomeController::class, 'index'])->name('home');


// LOGIN
Route::get('/masuk', [LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


//REGISTER
Route::get('daftar', [RegisterController::class, 'register'])->name('register');
Route::post('daftar/action', [RegisterController::class, 'actionregister'])->name('actionregister');

// Iot
Route::get('/bacaSensor',[DataIot::class,'bacaObj']);
Route::get('/bacaJarak',[DataIot::class,'bacaJarak']);
Route::get('/api/{object}/{jarak}/{sos}', [DataIot::class, 'simpanSensor']);

// PAGE ROUTE
Route::get('/layanan', [HomeController::class, 'layanan'])->name('layanan');
Route::get('/bantuan', [HomeController::class, 'bantuan'])->name('bantuan');
Route::get('/riwayat', [HomeController::class, 'riwayat'])->name('riwayat');
Route::get('/navigasi', [HomeController::class, 'navigasi'])->name('navigasi');
Route::get('/pengguna', [HomeController::class, 'pengguna'])->name('pengguna');



