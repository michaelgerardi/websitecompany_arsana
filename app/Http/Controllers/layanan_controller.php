<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\layanan;

class layanan_controller extends Controller
{
    public function index_layanan()
    {
        $data_layanan = layanan::all();
        return view('layanan.index',compact('data_layanan'));
    }

    public function tambah_layanan(Request $request)
    {
        $request->validate([
            'judul_layanan'=>'required',
            'deskripsi'=>'required',
            'jenis_layanan'=>'required',
            'gambar'=>'required|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $input = $request->all();
        $image = $request->file('gambar');
        $destinationPath = 'slider/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $input['gambar'] = "$profileImage";
        $data=slider::create($input);
        $nama =$data->id . "_" ."slider". "." . $image->getClientOriginalExtension();
        slider::where('id', $data->id)->update(['gambar' => $nama]);
        $image->move($destinationPath, $nama);
        return $input;
    }

    public function delete_layanan($id)
    {
        $data_layanan = layanan::find($id);
        $data_layanan->delete();
        return redirect()->back();
    }

    public function findidlayanan($id){
        $data_layanan = layanan::find($id);
        $data = [
            'title' => 'layanan',
            'data_layanan' => $data_layanan
        ];
        return view ('layanan.edit', compact('data'));
    }

    public function update_layanan(Request $request, $id)
    {
        $request->validate([
            'judul_layanan'=>'required',
            'deskripsi'=>'required',
            'jenis_layanan'=>'required',
        ]);
        
        $post = slider::find($request->id);
        if($image = $request->file('gambar')){
            $request->validate([
              'gambar' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $imgname = $request->id . "_" ."slider".".". $request->file('gambar')->getClientOriginalExtension();
            $destinationPath = 'slider/';
            $image->move($destinationPath, $imgname);
            $post->gambar = $imgname;
        }
        $post->nama_slider = $request->nama_slider;
        $post->tanggal_slider = $request->tanggal_slider;
        $post->save();
        return $imgname;
    }
}
