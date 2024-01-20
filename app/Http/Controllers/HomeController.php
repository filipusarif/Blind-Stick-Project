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
        return view('Service');
    }

    public function bantuan()
    {
        return view('bantuan');
    }
    public function riwayat()
    {
        return view('riwayat');
    }
    public function navigasi()
    {
        return view('navigasi');
    }
    public function pengguna()
    {
        return view('pengguna');
    }
}