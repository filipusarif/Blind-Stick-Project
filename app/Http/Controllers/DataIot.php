<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model_Iot;
use App\Models\Bantu;


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
        Model_Iot::where('kode',request()->kode)->update(['object'=>request()->object, 'jarak'=>request()->jarak, 'sos'=>request()->sos]);
        if(request()->sos == 1){
            Bantu::where('kode',request()->kode)->update(['bantuan'=>request()->sos]);
        }
    }

    public function sendToESP32(Request $request)
    {
            
        $myObj = (object)array();
        
        
        $myObj->id = $request -> id;
        $myObj->signal = $request -> signalName;
        
        
        $myJSON = json_encode($myObj);
        
        echo $myJSON;
        return view('kirimData');
        // return redirect('/bantuan');
    }
}
