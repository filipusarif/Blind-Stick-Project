<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
  
class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth')->only(['layanan', 'bantuan', 'riwayat', 'navigasi', 'pengguna']);
    // }

    public function index()
    {
        return view('home');
    }

    public function layanan()
    {
        $user = auth()->user();
        return view('Service');
    }

    public function bantuan()
    {
        $user = auth()->user();
        return view('bantuan');
    }
    public function riwayat()
    {
        $user = auth()->user();
        return view('riwayat');
    }
    public function navigasi()
    {
        $user = auth()->user();
        return view('navigasi');
    }
    public function pengguna()
    {
        $user = auth()->user();
        return view('user');
    }
}