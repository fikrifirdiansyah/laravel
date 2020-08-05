<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerkenalanController extends Controller
{
    //
    public function halo($depan, $belakang) {
        $nama_lengkap = "$depan $belakang";

        return view('perkenalan', compact('nama_lengkap'));
    }

    public function form(){
        return view('form');
    }

    public function selamat_datang(Request $request){
        // dd($request->all());
        $email = $request["email"];
        return "Selamat datang $email";
    }
}
