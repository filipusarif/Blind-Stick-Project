<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataIot;

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
    return view('home');
});

Route::get('/masuk', function () {
    return view('login');
});

Route::get('/daftar', function () {
    return view('signin');
});

Route::get('/layanan', function () {
    return view('service');
});
Route::get('/bantuan', function () {
    return view('bantuan');
});
Route::get('/riwayat', function () {
    return view('riwayat');
});
Route::get('/navigasi', function () {
    return view('navigasi');
});
Route::get('/pengguna', function () {
    return view('user');
});
// Route::get('/bacaSensor', function () {
//     return view('bacaSensor');
// });

Route::get('/bacaSensor',[DataIot::class,'bacaObj']);
Route::get('/bacaJarak',[DataIot::class,'bacaJarak']);

Route::get('/api/{object}/{jarak}/{sos}', [DataIot::class, 'simpanSensor']);


