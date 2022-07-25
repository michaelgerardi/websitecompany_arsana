<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\portofolio;

class portofolio_controller extends Controller
{
    public function index_portofolio()
    {
        $data_portofolio = portofolio:: all();
        return view('portofolio.index',compact('data_portofolio'));
    }

    public function tambah_portofolio(Request $request)
    {
        $request->validate([
            'nama_perusahaan'=>'required',
            'tanggal_input'=>'required',
            'gambar'=>'required|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $input = $request->all();
        if ($image = $request->file('gambar')) {
            $destinationPath = 'portofolio/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }

        slider::create($input);
        return $input;
    }

    public function delete_portofolio($id)
    {
        $data_portofolio = portofolio::find($id);
        $data_portofolio->delete();
        return redirect()->back();
    }


    public function update_portofolio(Request $request, $id)
    {
        $request->validate([
            'nama_perusahaan'=>'required',
            'tanggal_input'=>'required',
        ]);
        
        $post = Post::find($id);
        if($request->hasFile('gambar')){
            $request->validate([
              'gambar' => 'required|gambar|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('gambar')->store('public/portofolio');
            $post->image = $path;
        }
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
    
        return redirect()->route('portofolio.index')
                        ->with('success','Post updated successfully');
    }

    public function findidportofolio($id){
        $data_portofolio = portofolio::find($id);
        $data = [
            'title' => 'portofolio',
            'data_portofolio' => $data_portofolio
        ];
        return view ('portofolio.edit', compact('data'));
    }

}
