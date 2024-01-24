<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function actionuser(Request $request)
    {
        $user = auth()->user();
        $userid = $user->id;
        $user = User::find($user->id);
        $existingUser = User::where('email', $request->emailPengguna)->first();
        if($existingUser && $existingUser->id===$userid){
            return redirect('/layanan');
            //kasih msg error email sudah ada
        }
    
        if ($user && Hash::check($request->passwordPengguna, $user->password)) {
            if ($request->passwordbaruPenggunaID === $request->konfirpasswordbaruPenggunaID) {
                $user->update([
                    'password' => Hash::make($request->passwordbaruPenggunaID),
                    'email' => $request->emailPengguna,
                    'username' => $request->usernamePengguna,
                ]);
                return redirect('/');
            } else {
                return redirect()->back()->withInput()->withErrors(['konfirpasswordbaruPenggunaID' => 'Password confirmation does not match.']);
            }
        } else {
            return redirect()->back()->withInput()->withErrors(['passwordPengguna' => 'Old password is incorrect.']);
        }
    }
    
}
