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

Route::get('/login', function () {
    return view('login');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/service', function () {
    return view('service');
});
// Route::get('/bacaSensor', function () {
//     return view('bacaSensor');
// });

Route::get('/bacaSensor',[DataIot::class,'bacaObj']);
Route::get('/bacaJarak',[DataIot::class,'bacaJarak']);

Route::get('/api/{object}/{jarak}/{sos}', [DataIot::class, 'simpanSensor']);


