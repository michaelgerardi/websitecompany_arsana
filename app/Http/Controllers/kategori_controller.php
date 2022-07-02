<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;

class kategori_controller extends Controller
{
    public function index_kategori(){
        $data_kategori = kategori::all();
        return view('kategori.index',compact('data_kategori'));
    }

    public function tambah_kategori(Request $request){
        kategori::create($request->all());
        //return view();
        return $request;
    }

    public function findidkategori($id_kategori){
        $data_kategori = kategori::find($id_kategori);
        $data = [
            'title' => 'kategori',
            'data_kategori' => $data_kategori
        ];
        return view ('kategori.edit', $data);
    }

    public function edit_kategori(Request $request){
        kategori::where('id',$request->id)->update([
            'nama_kategori' => $request->nama_kategori
        ]);
        return redirect()->route('kategori');
    }

    public function delete_kategori($id_kategori){
        $data_kategori =  kategori::find($id_kategori);
        $data_kategori->delete();
        return redirect()->back();
    }

}
