<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\layanan;
use File;

class layanan_controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index_layanan()
    {
        $data_layanan = layanan::paginate(4);
        return view('layanan.index',compact('data_layanan'));
    }

    public function tambah_layanan(Request $request)
    {
        $request->validate([
            'judul_layanan'=>'required',
            'deskripsi'=>'required',
            'jenis_layanan'=>'required',
            // 'gambar'=>'required|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $input = $request->all();
        $image = $request->file('gambar');
        $destinationPath = 'layanan/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $input['gambar'] = "$profileImage";
        $data=layanan::create($input);
        $nama =$data->id . "_" ."slider". "." . $image->getClientOriginalExtension();
        layanan::where('id', $data->id)->update(['gambar' => $nama]);
        $image->move($destinationPath, $nama);
        // return $input;
        return redirect('/data_layanan');
    }

    public function delete_layanan($id)
    {
        $data_layanan = layanan::find($id);
        $destinationPath = 'layanan';
        File::delete($destinationPath.'/'.$data_layanan->gambar);
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

    public function update_layanan(Request $request)
    {
        $request->validate([
            'judul_layanan'=>'required',
            'deskripsi'=>'required',
            'jenis_layanan'=>'required',
        ]);
        
        $post = layanan::find($request->id);
        if($image = $request->file('gambar')){
            $request->validate([
              'gambar' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $imgname = $request->id . "_" ."slider".".". $request->file('gambar')->getClientOriginalExtension();
            $destinationPath = 'layanan/';
            $image->move($destinationPath, $imgname);
            layanan::where('id',$request->id)->update([
                'judul_layanan' => $request->judul_layanan,
                'deskripsi' => $request->deskripsi,
                'jenis_layanan' => $request->jenis_layanan,
                'gambar' => $imgname,
            ]);
        }else {
            layanan::where('id',$request->id)->update([
                'judul_layanan' => $request->judul_layanan,
                'deskripsi' => $request->deskripsi,
                'jenis_layanan' => $request->jenis_layanan
            ]);
        }
        
        return redirect()->back();
    }
}
