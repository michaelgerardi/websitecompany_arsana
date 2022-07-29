<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class layout_controller extends Controller
{
    public function indexlayout(){
        $content = Blog::where('status','1')->paginate(3);
        return view('layout.index',compact('content'));
    }

    // HALAMAN SERVICE
    public function serviceLay(){
        return view('layout.service');
    }
}
