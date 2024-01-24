<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Bantu;
use Illuminate\Support\Facades\Auth;

  
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

    public function bacaResponse(){
        if (Auth::check()) {
            $groups = Auth::user()->groups;
        }else{
            $groups = 'a@gmail.com';
        }
        $response = Bantu::where('groups',$groups)->get();
        return view('bacaResponse', ['nilaiResponse'=>$response]);
    }

    public function bantuan()
    {
        $sensor = Bantu::select('*')->get();
        return view('bantuan');
    }

    public function bantuan_signal(Request $request){

        if (Auth::check()) {
            $groups = Auth::user()->groups;
        }else{
            $groups = 'a@gmail.com';
        }
        Bantu::where('groups',$groups)->update(['bantuan'=>$request->signalName]);
        return redirect("/bantuan-penjaga");
    }

    public function bantuan_penjaga()
    {
        $sensor = Bantu::select('*')->get();
        return view('bantuanPenjaga');
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