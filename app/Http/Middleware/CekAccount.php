<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CekAccount
{
    public function handle($request, Closure $next, ...$roles)
    {
        // Periksa apakah pengguna masuk
        if (!Auth::check()) {
            return redirect('/login');
        }

        // Periksa peran pengguna
        $user = Auth::user();
        
        if (in_array($user->role, $roles)) {
            return $next($request);
        }

        // Tindakan jika peran tidak sesuai
        return redirect('/')->with('error', 'Anda tidak memiliki izin untuk mengakses halaman ini.');
    }
}

