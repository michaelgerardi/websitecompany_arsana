<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail_user;
use App\Models\Blog;
use App\Models\kategori;
use Auth;

class peserta_controller extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:web,pengajar');
    }
    public function userindex()
    {
        if (Auth::guard('pengajar')->check()) {
            $role='pengajar';
        } else if (Auth::guard('web')->check()) {
            $role='web';
        }
        $data_setuju = blog::where('blog.user_id',Auth::guard($role)->user()->id)->selectraw("count(*) as total_setuju,DATE_FORMAT(tanggal_blog,'%M')as month ")
        ->where('status','1')->groupby('month')->orderBy('month','desc')->get();
        $data_tidaksetuju = blog::where('blog.user_id',Auth::guard($role)->user()->id)->selectraw("count(*) as total_tidaksetuju,DATE_FORMAT(tanggal_blog,'%M')as month ")
        ->where('status','0')->groupby('month')->orderBy('month','desc')->get();
        $bulan = blog::where('blog.user_id',Auth::guard($role)->user()->id)->selectraw("DATE_FORMAT(tanggal_blog,'%M') as month")->distinct()->orderBy('month','asc')->get();
        $data_konten = blog::where('blog.user_id',Auth::guard($role)->user()->id)->selectraw("count(*) AS total_data, DATE_FORMAT(tanggal_blog,'%M') as month" )
        ->groupby('month')->orderBy('month','asc')->get();
        $data_grafikpie = blog::where('blog.user_id',Auth::guard($role)->user()->id)->selectraw("nama_kategori, count(id_kategori) as jumlah")
        ->join('kategori','blog.id_kategori','=','kategori.id')->groupBy('nama_kategori')->get();
        return view('layouts.userindex',compact('bulan','data_setuju','data_tidaksetuju','data_konten','data_grafikpie'));
        //return $bulan;
    }
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
    
        Blog::create($input);
        //return $input;
        return redirect()->with('success','Product created successfully.');
    }

    public function peserta_blog(Request $request){
        $data_blog = Blog::select('blog.id','nama_blog','nama_kategori','tanggal_blog','keterangan','gambar','status')
        ->join('kategori','blog.id_kategori','=','kategori.id')->get();
         if(strlen($request->kat)!=0){
             $data_blog = Blog::where('id_kategori',$request->kat)->select('blog.id','nama_blog','nama_kategori','tanggal_blog','keterangan','gambar','status')
             ->join('kategori','blog.id_kategori','=','kategori.id')->get();
         }
        $data_kategori = Kategori::all();
        return view('peserta.index',compact('data_kategori','data_blog'));
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
        return redirect()->back()->with('successreq', 'IT WORKS!');
    }

}
