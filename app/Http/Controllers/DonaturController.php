<?php

namespace App\Http\Controllers;

use App\Models\Donatur;
use Illuminate\Http\Request;

class DonaturController extends Controller
{

    public function regristasi(Request $request){

        $cek_email = Donatur::where('email', $request->email)->count();
        $cek_no_hp = Donatur::where('no_telepon', $request->no_telepon)->count();

        if($cek_email){
            return redirect()->route('beranda')->with('error', 'Email yang digunakan sudah pernah didaftarkan, silahkan coba email yang lain');
        }else if($cek_no_hp){
            return redirect()->route('beranda')->with('error', 'Nomor HP yang digunakan sudah pernah didaftarkan, silahkan coba nomor HP yang lain');
        }else{
            $data = Donatur::create($request->all());
            return redirect()->route('beranda')->with('success', 'Regristasi berhasil');    
        }

    }

}
