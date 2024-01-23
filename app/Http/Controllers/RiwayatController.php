<?php

namespace App\Http\Controllers;

use App\Models\Riwayat;
use Illuminate\Http\Request;
use Illuminate\Encryption\Encrypter;

class RiwayatController extends Controller
{
    public function index(){
        $users = Riwayat::all();
        foreach ($users as $user){
            $user -> nama = decrypt($user -> nama);
        }
        return view('riwayat',['riwayat' => $users]);
    }

    public function saveLocation(Request $request)
    {

        // Simpan ke database
        $location = new Riwayat();
        $location->nama = encrypt($request->name);
        $location->latitude = encrypt($request->latitude);
        $location->longitude = encrypt($request->longitude);
        $location->emails = "hello";
        $location->save();

        return response()->json(['success' => true]);
    }

    function encrypt($dataToEncrypt)
    {
        $encryptionKey = "kuncienkripsi123";
        $cipher = "aes-256-cbc";

        $ivLength = openssl_cipher_iv_length($cipher);
        $iv = openssl_random_pseudo_bytes($ivLength);

        return openssl_encrypt($dataToEncrypt, $cipher, $encryptionKey, 0, $iv);
    }

    function decrypt($encryptedData)
    {
        $encryptionKey = "kuncienkripsi123";
        $cipher = "aes-256-cbc";

        $ivLength = openssl_cipher_iv_length($cipher);
        $iv = openssl_random_pseudo_bytes($ivLength);

        return openssl_decrypt($encryptedData, $cipher, $encryptionKey, 0, $iv);
    }
}
