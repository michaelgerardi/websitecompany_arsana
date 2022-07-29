<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\portofolio;

class layout_controller extends Controller
{
    public function indexlayout(){
        $content = Blog::where('status','1')->paginate(3);
        $portofolio = portofolio::all();
        return view('layout.index',compact('content','portofolio'));

    }

    // HALAMAN SERVICE
    public function serviceLay(){
        return view('layout.service');
    }

    


}
