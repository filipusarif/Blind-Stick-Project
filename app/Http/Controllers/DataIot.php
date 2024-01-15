<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model_Iot;

class DataIot extends Controller
{
    public function bacaObj(){
        $sensor = Model_Iot::select('*')->get();
        return view('bacaSensor', ['nilaiSensor'=>$sensor]);
    }
    public function bacaJarak(){
        $sensor = Model_Iot::select('*')->get();
        return view('bacaJarak', ['nilaiSensor'=>$sensor]);
    }
    public function simpanSensor(){
        Model_Iot::where('id','1')->update(['object'=>request()->object, 'jarak'=>request()->jarak, 'sos'=>request()->sos]);
    }
}
