<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\kategori;
use Validator;

class blog_controller extends Controller
{
    public function index_blog(Request $request){
        $data_blog = Blog::select('nama_blog','nama_kategori','tanggal_blog','keterangan','gambar','status')
        ->join('kategori','blog.id_kategori','=','kategori.id')->get();
        if(strlen($request->kat)!=0){
            $data_blog = Blog::where('id_kategori',$request->kat)->select('nama_blog','nama_kategori','tanggal_blog','keterangan','gambar','status')
            ->join('kategori','blog.id_kategori','=','kategori.id')->get();
        }
        $data_kategori = Kategori::all();
        return view('blog.index',compact('data_kategori','data_blog'));
        //return $kat;
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

    public function findidblog($id){
        $data_blog = blog::find($id);
        $data = [
            'title' => 'blog',
            'data_blog' => $data_blog
        ];
        return view ('', $data);
    }
 
    public function delete_blog($id){
        $data_blog =  blog::find($id);
        $data_blog->delete();
        return redirect()->back();
    }
}
