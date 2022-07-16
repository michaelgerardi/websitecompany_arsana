<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;
use App\Models\kategori;
use Validator;

class blog_controller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index_blog(Request $request){
        $data_blog = Blog::select('blog.id','nama_blog','nama_kategori','tanggal_blog','keterangan','gambar','status')
        ->join('kategori','blog.id_kategori','=','kategori.id')->get();
        if(strlen($request->kat)!=0){
            $data_blog = Blog::where('id_kategori',$request->kat)->select('blog.id','nama_blog','nama_kategori','tanggal_blog','keterangan','gambar','status')
            ->join('kategori','blog.id_kategori','=','kategori.id')->get();
        }
        $data_kategori = Kategori::all();
        return view('blog.index',compact('data_kategori','data_blog'));
        //return $data_blog;
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
        $data_kategori = Kategori::all();
        $data_blog = blog::find($id);
        $data = [
            'title' => 'blog',
            'data_blog' => $data_blog
        ];
        return view ('blog.edit', compact('data','data_kategori','data_blog'));
    }
 
    public function delete_blog($id){
        $data_blog =  blog::find($id);
        $data_blog->delete();
        return redirect()->back();
    }


    public function Edit_blog(Request $request,$id)
    {
        $request->validate([
            'id_kategori' => 'required',
            'nama_blog' => 'required',
            'tanggal_blog' => 'required',
            'keterangan' => 'required',
            'status' => 'required'
        ]);
        
        $post = Post::find($id);
        if($request->hasFile('gambar')){
            $request->validate([
              'gambar' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $path = $request->file('gambar')->store('images/');
            $post->image = $path;
        }
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
    
        return redirect()->route('blog')->with('success','Post updated successfully');
    }

    public function history()
    {
        $data_blog = blog::onlyTrashed()->get();
        //$data_blog = blog::select('blog.id','nama_blog','nama_kategori','tanggal_blog','keterangan','gambar','status')
        //->join('kategori','blog.id_kategori','=','kategori.id')->get();
        return view('blog.History', compact('data_blog'));
        //return $data_blog;
    }

    public function Destroy($id){
        $data_blog = blog::onlyTrashed()->find($id);
        $data_blog->ForceDelete();
        return $data_blog;
        //return redirect()->back();
    }

    public function Restore($id)
    {
        $data_blog = blog::onlyTrashed()->where('id',$id);
        // $data_kategori = Kategori::all();
        $data_blog->restore();
    	return view('blog.history', compact('data_blog'));
    }

    public function dashboard_admin(){
        $data_setuju = blog::selectraw("count(*) as total_setuju,DATE_FORMAT(tanggal_blog,'%M')as month ")
        ->where('status','setuju')->groupby('month')->orderBy('month','desc')->get();
        $data_tidaksetuju = blog::selectraw("count(*) as total_tidaksetuju,DATE_FORMAT(tanggal_blog,'%M')as month ")
        ->where('status','tidak setuju')->groupby('month')->orderBy('month','desc')->get();
        $bulan = blog::selectraw("DATE_FORMAT(tanggal_blog,'%M')as month")->distinct()->orderBy('tanggal_blog','asc')->get();
        $data_konten = blog::selectraw("count(*) AS total_data, DATE_FORMAT(tanggal_blog,'%M')as month" )
        ->groupby('month')->orderBy('tanggal_blog','asc')->get();
        $data_grafikpie = blog::selectraw("nama_kategori, count(id_kategori) as jumlah")
        ->join('kategori','blog.id_kategori','=','kategori.id')->groupBy('nama_kategori')->get();
       //return $data_grafikpie;        
        return view('dashboard.index',
        compact('bulan','data_setuju','data_tidaksetuju','data_konten','data_grafikpie'));
    }


}
