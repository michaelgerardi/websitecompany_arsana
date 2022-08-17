<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;
use App\Models\kategori;
use Validator;
use Auth;
use File;

class blog_controller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin,pengajar,web');
    }

    public function index_blog(Request $request){
        if(Auth::guard('admin')->check()){
            $data_blog = Blog::select('blog.id','nama_blog','nama_kategori','tanggal_blog','keterangan','gambar','status')
            ->join('kategori','blog.id_kategori','=','kategori.id')->paginate(5);
            if(strlen($request->kat)!=0){
                $data_blog = Blog::where([
                    ['id_kategori',$request->kat],
                    
                ])->select('blog.id','nama_blog','nama_kategori','tanggal_blog','keterangan','gambar','status')
                ->join('kategori','blog.id_kategori','=','kategori.id')->paginate(5);
            }
            $view='blog.index';
        }else{
            if (Auth::guard('web')->check()) {
                $id = Auth::user()->id;
            }elseif (Auth::guard('pengajar')->check()) {
                $id = Auth::guard('pengajar')->user()->id;
            }
            $data_blog = Blog::where('user_id',$id)->select('blog.id','nama_blog','nama_kategori','tanggal_blog','keterangan','gambar','status')
            ->join('kategori','blog.id_kategori','=','kategori.id')->paginate(5);
            if(strlen($request->kat)!=0){
                $data_blog = Blog::where([
                    ['id_kategori',$request->kat],
                    ['user_id',$id]
                ])->select('blog.id','nama_blog','nama_kategori','tanggal_blog','keterangan','gambar','status')
                ->join('kategori','blog.id_kategori','=','kategori.id')->paginate(5);
            }
            $view='blog.userindex';
        }
        $data_kategori = Kategori::all();
        return view($view,compact('data_kategori','data_blog'));
        //return $data_blog;
    }

    public function tambah_blog(Request $request){
        $request->validate([
            'id_kategori' => 'required',
            'nama_blog' => 'required',
            'tanggal_blog' => 'required',
            'keterangan' => 'required',
            'gambar' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();
        $input['status'] = "0";
        if (Auth::guard('web')->check()) {
            $input['user_id'] = Auth::user()->id;
        } elseif(Auth::guard('admin')->check()) {
            $input['user_id'] = Auth::guard('admin')->user()->id;
        }elseif (Auth::guard('pengajar')->check()) {
            $input['user_id'] = Auth::guard('pengajar')->user()->id;
        }  
        $image = $request->file('gambar');
        $destinationPath = 'images/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $input['gambar'] = "$profileImage";
        $data=blog::create($input);
        $nama =$data->id . "_" ."blog". "." . $image->getClientOriginalExtension();
        blog::where('id', $data->id)->update(['gambar' => $nama]);
        $image->move($destinationPath, $nama);
        return $input;
        //return redirect()->with('success','Product created successfully.');
    }

    public function findidblog($id){
        $data_kategori = Kategori::all();
        $data_blog = blog::find($id);
        return view ('blog.edit', compact('data_kategori','data_blog'));
    }
 
    public function delete_blog($id){
        $data_blog =  blog::find($id);
        $destinationPath = 'images';
        File::delete($destinationPath.'/'.$data_blog->gambar);
        $data_blog->delete();
        return redirect()->back();
    }


    public function Edit_blog(Request $request)
    {
        $request->validate([
            'id_kategori' => 'required',
            'nama_blog' => 'required',
            'tanggal_blog' => 'required',
            'keterangan' => 'required',
        ]);
        
        $post = blog::find($request->id);
        if($image = $request->file('gambar')){
            $request->validate([
              'gambar' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $imgname = $request->id . "_" ."blog".".". $request->file('gambar')->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image->move($destinationPath, $imgname);
            $post->gambar = $imgname;
        }
        $post->nama_blog = $request->nama_blog;
        $post->id_kategori = $request->id_kategori;
        $post->tanggal_blog = $request->tanggal_blog;
        $post->keterangan = $request->keterangan;
        $post->status = $request->status;
        $post->save();
        return redirect()->back();
    
        //return redirect()->route('blog')->with('success','Post updated successfully');
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
        ->where('status','1')->groupby('month')->orderBy('month','desc')->get();
        $data_tidaksetuju = blog::selectraw("count(*) as total_tidaksetuju,DATE_FORMAT(tanggal_blog,'%M')as month ")
        ->where('status','0')->groupby('month')->orderBy('month','desc')->get();
        $bulan = blog::selectraw("DATE_FORMAT(tanggal_blog,'%M')as month")->distinct()->orderBy('tanggal_blog','asc')->get();
        $data_konten = blog::selectraw("count(*) AS total_data, DATE_FORMAT(tanggal_blog,'%M')as month" )
        ->groupby('month')->orderBy('tanggal_blog','asc')->get();
        $data_grafikpie = blog::selectraw("nama_kategori, count(id_kategori) as jumlah")
        ->join('kategori','blog.id_kategori','=','kategori.id')->groupBy('nama_kategori')->get();
       //return $data_setuju;        
        return view('dashboard.index',compact('bulan','data_setuju','data_tidaksetuju','data_konten','data_grafikpie'));
    }


}
