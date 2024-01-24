<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataIot;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
// use App\Http\Controllers\LayananController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
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
// Auth::routes();


// Home
Route::get('/', [HomeController::class, 'index'])->name('home');


// Iot
Route::get('/bacaSensor', [DataIot::class, 'bacaObj']);
Route::get('/bacaJarak', [DataIot::class, 'bacaJarak']);
Route::get('/api/{kode}/{object}/{jarak}/{sos}', [DataIot::class, 'simpanSensor']);
Route::post('/simpan-data', [RiwayatController::class, 'saveLocation']);
Route::post('/kritik', [HomeController::class, 'kritik']);
Route::get('/bacaBantuan', [HomeController::class, 'bacaBantuan']);
Route::post('/bantuan-oke', [HomeController::class, 'okeBantuan']);
Route::get('/bacaSOS', [HomeController::class, 'bacaSOS']);



// PAGE ROUTE
Route::group(['middleware' => ['guest']], function () {
    Route::get('daftar', [RegisterController::class, 'register'])->name('register');
    Route::post('daftar/action', [RegisterController::class, 'actionregister'])->name('actionregister');
    Route::get('/masuk', [LoginController::class, 'index'])->name('login');
    Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
});


Route::group(['middleware' => ['auth']], function () {
    Route::get('/navigasi', [HomeController::class, 'navigasi'])->name('navigasi');
    Route::get('/riwayat', [RiwayatController::class, 'index'])->name('riwayat');
    Route::get('/bantuan', [HomeController::class, 'bantuan'])->name('bantuan');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/layanan', [HomeController::class, 'layanan'])->name('layanan');
    Route::get('/pengguna', [HomeController::class, 'pengguna'])->name('pengguna');
});


Route::group(['middleware' => ['auth', 'cekAkun:penjaga']], function () {
    Route::get('/bantuan-penjaga', [HomeController::class, 'bantuan_penjaga'])->name('bantuan_penjaga');
    // Route::get('/bantuan-penjaga-response', [HomeController::class, 'bantuan_penjaga'])->name('bantuan_penjaga');
    Route::post('/bantuan-signal', [HomeController::class, 'bantuan_signal'])->name('bantuan_signal');

});


Route::group(['middleware' => ['auth']], function () {
    Route::get('/pengguna', [HomeController::class, 'pengguna'])->name('pengguna');
    Route::post('pengguna/action', [UserController::class, 'actionuser'])->name('actionuser');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::group(['middleware' => ['auth', 'cekAkun:pengguna']], function () {
    Route::get('/layanan', [HomeController::class, 'layanan'])->name('layanan');
    Route::get('/riwayat', [RiwayatController::class, 'index'])->name('riwayat');
    Route::get('/navigasi', [HomeController::class, 'navigasi'])->name('navigasi');
    Route::get('/bantuan-pengguna', [HomeController::class, 'bantuan'])->name('bantuan');
});

