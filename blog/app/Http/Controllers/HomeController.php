<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function register(){
        return view('register');
    }

    public function helo(Request $request){
        // dd($request->all());
        $first_name = $request["first_name"];
        $last_name = $request["last_name"];
        return view('helo', ['first_name'=>$first_name], ['last_name'=>$last_name]);
    }
}
