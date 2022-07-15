<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail_user;

class peserta_controller extends Controller
{
    public function konten_peserta(Request $request){
        $request->validate([
            'id_kategori' => 'required',
            'nama_blog' => 'required',
            'tanggal_blog' => 'required',
            'keterangan' => 'required',
            'gambar' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('gambar')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }
    
        blog::create($input);
        return $input;
        //return redirect()->with('success','Product created successfully.');
    }

    public function pengajar_blog(Request $request){
        $data_blog = Blog::select('blog.id','nama_blog','nama_kategori','tanggal_blog','keterangan','gambar','status')
        ->join('kategori','blog.id_kategori','=','kategori.id')->get();
        // if(strlen($request->kat)!=0){
        //     $data_blog = Blog::where('id_kategori',$request->kat)->select('blog.id','nama_blog','nama_kategori','tanggal_blog','keterangan','gambar','status')
        //     ->join('kategori','blog.id_kategori','=','kategori.id')->get();
        // }
        $data_kategori = Kategori::all();
        return view('pengajar.index',compact('data_kategori','data_blog'));
        //return $data_blog;
    }
    public function viewReqJdPengajar()
    {
        return view('ReqJdPengajar.formreq_jdpeng');
    }
    public function insertreq(Request $request)
    {
        $request->validate([
            'bidang' => 'required',
            'pengalaman' => 'required',
            'pdd_terakhir' => 'required',
        ]);
        Detail_user::create([
            'user_id' => $request->id,
            'bidang' => $request->bidang,
            'pengalaman' => $request->pengalaman,
            'pdd_terakhir' => $request->pdd_terakhir,
            'acc' => '0',
        ]);
        return redirect('/home');
    }

}
