<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\portofolio;
use App\Models\layanan;
use App\Models\user;

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
        $data_setuju = blog::selectraw("count(*) as total_setuju,DATE_FORMAT(tanggal_blog,'%M')as month ")
        ->where('status','1')->groupby('month')->orderBy('month','desc')->get();
        $data_tidaksetuju = blog::selectraw("count(*) as total_tidaksetuju,DATE_FORMAT(tanggal_blog,'%M')as month ")
        ->where('status','0')->groupby('month')->orderBy('month','desc')->get();
        $bulan = blog::selectraw("DATE_FORMAT(tanggal_blog,'%M')as month")->distinct()->orderBy('tanggal_blog','asc')->get();
        $data_konten = blog::selectraw("count(*) AS total_data, DATE_FORMAT(tanggal_blog,'%M')as month" )
        ->groupby('month')->orderBy('tanggal_blog','asc')->get();
        $data_grafikpie = blog::selectraw("nama_kategori, count(id_kategori) as jumlah")
        ->join('kategori','blog.id_kategori','=','kategori.id')->groupBy('nama_kategori')->get();
        $data_pengajar = user::where('role_id','3')->count('role_id');
        $data_peserta = user::where('role_id','1')->count('role_id');
        return view('layouts.admin',compact('bulan','data_setuju','data_tidaksetuju','data_konten','data_grafikpie','data_pengajar','data_peserta'));
        //return $data_pengajar;
    }
}
