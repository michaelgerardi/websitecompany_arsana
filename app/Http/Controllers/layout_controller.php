<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\portofolio;
use App\Models\layanan;

class layout_controller extends Controller
{
    public function indexlayout(){
        $content = Blog::where('status','1')->paginate(3)->sortByDesc('created_at');
        $portofolio = portofolio::all();
        $layanan = layanan::paginate(3)->sortByDesc('id');
        return view('layout.index',compact('content','portofolio','layanan'));

    }

    // HALAMAN SERVICE
    public function serviceLay(){
        return view('layout.service');
    }

    //Halaman View berita
    public function viewdetailberita($id)
    {
       $data_portofolio = protofolio::where('id',$id)->get();
       return view('layout.viewberita',compact('data_portofolio'));
    }


}
