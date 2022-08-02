<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\portofolio;
use App\Models\layanan;

class layout_controller extends Controller
{
    public function indexlayout(){
        $content = Blog::where('status','1')->latest()->paginate(9);
        $portofolio = portofolio::all();
        $layanan = layanan::latest()->paginate(9);
        $Cpg = ceil(count($content)/3);
        $Citem = count($content);
        $CpgL = ceil(count($layanan)/3);
        $CitemL = count($layanan);
        return view('layout.index',compact('content','portofolio','layanan','Cpg','Citem','CpgL','CitemL'));
        //return $layanan;
    }

    // HALAMAN SERVICE
    public function serviceLay(){
        return view('layout.service');
    }

    //Halaman View berita
    public function viewdetailberita($id)
    {
       $data_blog = Blog::where('id',$id)->first();
       //return $data_blog;
       return view('layout.viewberita',compact('data_blog'));
    }
    public function viewdetaillayanan($id)
    {
       $data_layanan = layanan::where('id',$id)->first();
       //return $data_blog;
       return view('consulting.consulting',compact('data_layanan'));
    }

    public function admin()
    {
        return view('layouts.admin');
    }
}
