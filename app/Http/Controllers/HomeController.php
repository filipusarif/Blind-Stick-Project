<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Bantu;
use Illuminate\Support\Facades\Auth;
use App\Models\Model_Iot;
use App\Models\Kritik;


  
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
        if (Auth::check()) {
            $groups = Auth::user()->groups;
        }else{
            $groups = 'a@gmail.com';
        }
        $status = Bantu::where('groups',$groups)->get();
        return view('bantuan');
    }

    public function bacaBantuan(){
        if (Auth::check()) {
            $groups = Auth::user()->groups;
        }else{
            $groups = 'a@gmail.com';
        }
        $bantuan = Bantu::where('groups',$groups)->get();
        return view('bacaBantuan', ['nilaiBantuan'=>$bantuan]);
    }

    public function okeBantuan(Request $request){
        if (Auth::check()) {
            $groups = Auth::user()->groups;
        }else{
            $groups = 'a@gmail.com';
        }
        Bantu::where('groups',$groups)->update(['bantuan'=>0, 'feedback'=>0]);
        return redirect("/bantuan-pengguna");
    }



    // penjaga
    public function bantuan_signal(Request $request){

        if (Auth::check()) {
            $groups = Auth::user()->groups;
        }else{
            $groups = 'a@gmail.com';
        }
        Bantu::where('groups',$groups)->update(['feedback'=>$request->signalName, 'bantuan'=>1]);
        return redirect("/bantuan-penjaga");
    }

    public function bantuan_penjaga()
    {
        $sensor = Bantu::select('*')->get();
        return view('bantuanPenjaga');
    }

    public function bacaSOS(){
        if (Auth::check()) {
            $kode = Auth::user()->kode;
        }else{
            $kode = 'a@gmail.com';
        }
        $SOS = Model_Iot::where('kode',$kode)->get();
        return view('bacaSOS', ['nilaiSOS'=>$SOS]);
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


        return view('user',[
            'user' => $user,
        ]);
    }

    public function kritik(Request $request){
        $user = Kritik::create([
            'email'=> $request -> inputEmailKritik,
            'kritik' => $request->inputKritik,
        ]);
        return redirect("/");
    }
}