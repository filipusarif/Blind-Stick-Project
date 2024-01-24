<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bantu;
use App\Models\Model_Iot;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function register()
    {
        return view('signin');
    }

    public function actionregister(Request $request)
    {
        $existingUser = User::where('email', $request->emailPengguna)->first();
        $existingUser1 = User::where('email', $request->emailPenjaga)->first();
        if(!$existingUser && !$existingUser1 && $request -> emailPengguna !== $request->emailPenjaga){
            $user = User::create([
                'groups'=> $request -> emailPengguna,
                'email' => $request->emailPengguna,
                'username' => $request->usernamePengguna,
                'password' => Hash::make($request->passwordPengguna),
                'role' => $request->rolePengguna,
                'kode' => $request->kode,
            ]);
            $user = User::create([
                'groups'=> $request -> emailPengguna,
                'email' => $request->emailPenjaga,
                'username' => $request->usernamePenjaga,
                'password' => Hash::make($request->passwordPenjaga),
                'role' => $request->rolePenjaga,
                'kode' => $request->kode,
            ]);
            $user = Bantu::create([
                'groups'=> $request -> emailPengguna,
                'bantuan' => 0,
                'feedback' => 0,
                'pengguna' => $request -> emailPengguna,
                'penjaga' => $request->emailPenjaga,
            ]);
            $user = Model_Iot::create([
                'kode' => $request->kode,
                'object' => 'Aman',
                'jarak' => 0,
                'password' => 0,
                'sos'=> 0,
            ]);
    
            // Session::flash('message', 'Register Berhasil. Akun Anda sudah Aktif silahkan Login menggunakan username dan password.');
            return redirect('/masuk');
        }else{
            return redirect('/');
            // kasih msg email nya sudah ada
        }
    }
}
