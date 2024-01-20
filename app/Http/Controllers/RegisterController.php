<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;

class RegisterController extends Controller
{
    public function register()
    {
        return view('signin');
    }
    
    public function actionregister(Request $request)
    {
        $user = User::create([
            'groups'=> $request -> emailPengguna,
            'email' => $request->emailPengguna,
            'username' => $request->usernamePengguna,
            'password' => Hash::make($request->passwordPengguna),
            'role' => $request->rolePengguna,
        ]);
        $user = User::create([
            'groups'=> $request -> emailPengguna,
            'email' => $request->emailPenjaga,
            'username' => $request->usernamePenjaga,
            'password' => Hash::make($request->passwordPenjaga),
            'role' => $request->rolePenjaga,
        ]);

        // Session::flash('message', 'Register Berhasil. Akun Anda sudah Aktif silahkan Login menggunakan username dan password.');
        return redirect('/');
    }
}