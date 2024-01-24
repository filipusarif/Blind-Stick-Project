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
        $existingUser = User::where('email', $request->emailPengguna)->first();
        $existingUser1 = User::where('email', $request->emailPenjaga)->first();
        if(!$existingUser && !$existingUser1 && $request -> emailPengguna !== $request->emailPenjaga){
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
        }else{
            return redirect('/');
            // kasih msg email nya sudah ada
        }
    }
}