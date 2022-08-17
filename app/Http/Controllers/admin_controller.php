<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\user;

class admin_controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
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
        $konten_setuju = blog::where('status','1')->count('status');
        $konten_tidaksetuju = blog::where('status','0')->count('status');
         return view('layouts.admin',
         compact('bulan','data_setuju','data_tidaksetuju','data_konten','data_grafikpie','data_pengajar',
         'data_peserta','konten_setuju','konten_tidaksetuju'));
        //return $konten_tidaksetuju;
    }
}
