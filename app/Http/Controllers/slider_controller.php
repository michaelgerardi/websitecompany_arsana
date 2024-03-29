<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slider;
use File;

class slider_controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function slider_index()
    {
        $data_slider = slider::paginate(4);
        return view('slider.index',compact('data_slider'));
    }

    public function tambah_slider(Request $request)
    {
        $request->validate([
            'nama_slider'=>'required',
            'tanggal_slider'=>'required',
            'gambar'=>'required|mimes:jpeg,png,jpg,gif,svg||dimensions:min_width=1920,min_height=1080,max_width=1920,max_height=1080'
        ]);
        $input = $request->all();
        $image = $request->file('gambar');
        $destinationPath = 'slider/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $input['gambar'] = "$profileImage";
        $data=slider::create($input);
        $nama =$data->id . "_" ."slider". "." . $image->getClientOriginalExtension();
        slider::where('id', $data->id)->update(['gambar' => $nama]);
        $image->move($destinationPath, $nama);
        // return $input;
        return redirect()->back();
    }

    public function delete_slider($id)
    {
        $data_slider = slider::find($id);
        $destinationPath = 'slider';
        File::delete($destinationPath.'/'.$data_slider->gambar);
        $data_slider->delete();
        return redirect()->back();
    }

    public function findidslider($id){
        $data_slider = slider::find($id);
        $data = [
            'title' => 'slider',
            'data_slider' => $data_slider
        ];
        return view ('slider.edit', compact('data','id'));
    }

    public function update_slider(Request $request)
    {
        $request->validate([
            'nama_slider'=>'required',
            'tanggal_slider'=>'required',
        ]);
        
        $post = slider::find($request->id);
        if($image = $request->file('gambar')){
            $request->validate([
              'gambar' => 'required|mimes:jpg,png,jpeg,gif,svg||dimensions:min_width=1920,min_height=1080,max_width=1920,max_height=1080',
            ]);
            $imgname = $request->id . "_" ."slider".".". $request->file('gambar')->getClientOriginalExtension();
            $destinationPath = 'slider/';
            $image->move($destinationPath, $imgname);
            $post->gambar = $imgname;
        }
        $post->nama_slider = $request->nama_slider;
        $post->tanggal_slider = $request->tanggal_slider;
        $post->save();
        return redirect()->back();
    
        // return redirect()->route('slider.index')->with('success','Post updated successfully');
    }
}
