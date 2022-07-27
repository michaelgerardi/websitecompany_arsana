<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\portofolio;

class portofolio_controller extends Controller
{
    public function index_portofolio()
    {
        $data_portofolio = portofolio:: all();
        return view('portofolio.index',compact('data_portofolio'));
    }

    public function tambah_portofolio(Request $request)
    {
        $request->validate([
            'nama_slider'=>'required',
            'tanggal_slider'=>'required',
            'gambar'=>'required|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $input = $request->all();
        $image = $request->file('gambar');
        $destinationPath = 'portofolio/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $input['gambar'] = "$profileImage";
        $data=slider::create($input);
        $nama =$data->id . "_" ."portofolio". "." . $image->getClientOriginalExtension();
        slider::where('id', $data->id)->update(['gambar' => $nama]);
        $image->move($destinationPath, $nama);
        return $input;
    }

    public function delete_portofolio($id)
    {
        $data_portofolio = portofolio::find($id);
        $data_portofolio->delete();
        return redirect()->back();
    }


    public function update_portofolio(Request $request, $id)
    {
        $request->validate([
            'nama_perusahaan'=>'required',
            'tanggal_input'=>'required',
        ]);
        
        $post = slider::find($request->id);
        if($image = $request->file('gambar')){
            $request->validate([
              'gambar' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $imgname = $request->id . "_" ."slider".".". $request->file('gambar')->getClientOriginalExtension();
            $destinationPath = 'portofolio/';
            $image->move($destinationPath, $imgname);
            $post->gambar = $imgname;
        }
        $post->nama_slider = $request->nama_slider;
        $post->tanggal_slider = $request->tanggal_slider;
        $post->save();
        return $imgname;
      }

    public function findidportofolio($id){
        $data_portofolio = portofolio::find($id);
        $data = [
            'title' => 'portofolio',
            'data_portofolio' => $data_portofolio
        ];
        return view ('portofolio.edit', compact('data'));
    }

}
