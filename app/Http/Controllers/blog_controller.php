<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\kategori;
use Validator;

class blog_controller extends Controller
{
    public function index_blog(){
        $data_kategori = kategori::all();
        $data_blog = blog::all();
        return view('blog.index',compact('data_kategori','data_blog'));
    }

    public function tambah_blog(Request $request){
        $request->validate([
            'id_kategori' => 'required',
            'nama_blog' => 'required',
            'tanggal_blog' => 'required',
            'keterangan' => 'required',
            'status' => 'required',
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

    public function findidblog($id_blog){
        $data_blog = blog::find($id_blog);
        $data = [
            'title' => 'blog',
            'data_blog' => $data_blog
        ];
        return view ('', $data);
    }
 
    public function delete_kategori($id_blog){
        $data_blog =  kategori::find($id_blog);
        $data_blog->delete();
        return redirect()->back();
    }

    public function cari_kategori(Request $request){
        $pagination = 5;
        $kategori = kategori::when($request->keyword, function($query) use ($request){
            $query->where('nama_kategori','like', "%{request->keyword}%");
        })->orderBy('created_at', 'desc')->pagination($pagination);
        return view('kategori.pengelompokan',['nama_kategori' => 'kategori','kategori'=>$kategori]);
    }
}
