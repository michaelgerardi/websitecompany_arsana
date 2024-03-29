<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\portofolio;

class portofolio_controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index_portofolio()
    {
        $data_portofolio = portofolio::paginate(4);
        return view('portofolio.index',compact('data_portofolio'));
    }

    public function tambah_portofolio(Request $request)
    {
        $request->validate([
            'nama_perusahaan'=>'required',
            'tanggal_input'=>'required',
            'gambar'=>'required|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $input = $request->all();
        $image = $request->file('gambar');
        $destinationPath = 'portofolio/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $input['gambar'] = "$profileImage";
        $data=portofolio::create($input);
        $nama =$data->id . "_" ."portofolio". "." . $image->getClientOriginalExtension();
        portofolio::where('id', $data->id)->update(['gambar' => $nama]);
        $image->move($destinationPath, $nama);
        return redirect()->back();
    }

    public function delete_portofolio($id)
    {
        $data_portofolio = portofolio::find($id);
        $data_portofolio->delete();
        return redirect()->back();
    }


    public function update_portofolio(Request $request)
    {
        $request->validate([
            'nama_perusahaan'=>'required',
            'tanggal_input'=>'required',
        ]);
        
        $post = portofolio::find($request->id);
        if($image = $request->file('gambar')){
            $request->validate([
              'gambar' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $imgname = $request->id . "_" ."slider".".". $request->file('gambar')->getClientOriginalExtension();
            $destinationPath = 'portofolio/';
            $image->move($destinationPath, $imgname);
            portofolio::where('id',$request->id)->update([
                'nama_perusahaan' => $request->nama_perusahaan,
                'tanggal_input' => $request->tanggal_input,
                'gambar' => $imgname,
             ]);
        }
        portofolio::where('id',$request->id)->update([
            'nama_perusahaan' => $request->nama_perusahaan,
            'tanggal_input' => $request->tanggal_input
         ]);
        return redirect()->back();
      }

    public function findidportofolio($id){
        $data_portofolio = portofolio::find($id);
        $data = [
            'title' => 'portofolio',
            'data_portofolio' => $data_portofolio
        ];
        return view ('portofolio.edit', compact('data','id'));
    }


}
