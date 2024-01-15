<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('/service', function (\Illuminate\Http\Request $request) {
//     // \Illuminate\Support\Facades\Storage::append("arduino-log.txt",
//     //     "Time: " . now()->format("Y-m-d H:i:s") . ', ' .
//     //     "Object: " . $request->get("object", "n/a") . '°C, ' .
//     //     "SOS: " . $request->get("sos", "n/a") . '%'
//     // );
//     $data = [
//         'time' => now()->format("Y-m-d H:i:s"),
//         'object' => $request->get("object", "n/a") . '%',
//         'sos' => $request->get("sos", "n/a") . '%',
//     ];

//     // Mengembalikan view dengan data
//     return view('service', $data);
// });

