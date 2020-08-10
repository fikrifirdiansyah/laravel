<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function create(){
        return view('create');
    }

    public function questions(Request $request){
        // dd($request->all());
        $request->validate([
            'judul' => 'required|unique:pertanyaan',
            'isi' => 'required'

        ]);

        $query = DB::table('pertanyaan')->insert([
                "judul"=> $request["judul"],
                "isi"=> $request["isi"]

        ]);

        // return redirect('/pertanyaan/create');
        return redirect('/pertanyaan')->with('succes', 'Data Berhasil Disimpan!');
    }

    public function index(){
        $pertanyaan = DB::table('pertanyaan')->get();
        // dd($pertanyaan);
        // return view('index');
        return view('index', compact('pertanyaan'));
    }

    public function show($id){
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->first();
        // dd($post);
        return view('show', compact('pertanyaan'));
    }

    public function edit($id){
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->first();
        // dd($post);
        return view('edit', compact('pertanyaan'));
    }

    public function update($id, Request $request){
        $request->validate([
            'judul' => 'required|unique:pertanyaan',
            'isi' => 'required'

        ]);

        $query = DB::table('pertanyaan')
            ->where('id', $id)
            ->update([
                'judul' => $request['judul'],
                'isi' => $request['isi'],
            ]);
        
        return redirect('/pertanyaan')->with('succes', 'Update berhasil Disimpan!');
    }

    public function destroy($id) {
        $query = DB::table('pertanyaan') -> where('id', $id)->delete();
        return redirect('/pertanyaan')->with('succes', 'Delete berhasil');
    }
}
