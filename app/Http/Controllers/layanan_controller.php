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
        if ($image = $request->file('gambar')) {
            $destinationPath = 'layanan/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }

        slider::create($input);
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
            'jenis_layanan'=>'required'
        ]);
        
        $post = Post::find($id);
        if($request->hasFile('gambar')){
            $request->validate([
              'gambar' => 'required|gambar|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('gambar')->store('public/layanan');
            $post->image = $path;
        }
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
    
        return redirect()->route('layanan.index')
                        ->with('success','Post updated successfully');
    }
}
