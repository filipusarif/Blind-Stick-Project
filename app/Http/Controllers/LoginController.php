<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login', [
            'title' => 'Login'
        ]);
    }

    public function login_proses(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $userRole = $request->user()->role;

            if ($userRole === 'pengguna') {
                dd([
                    'authenticated' => Auth::user(),
            ]);
            } elseif ($userRole === 'penjaga') {
                dd([
                    'authenticated' => Auth::user(),
            ]);
            }
        }

        return back()->with([
            'loginError' => 'Email and password do not match.',
        ])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
