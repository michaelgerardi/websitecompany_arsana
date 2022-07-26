<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slider;

class slider_controller extends Controller
{
    public function slider_index()
    {
        $data_slider = slider:: all();
        return view('slider.index',compact('data_slider'));
    }

    public function tambah_slider(Request $request)
    {
        $request->validate([
            'nama_slider'=>'required',
            'tanggal_slider'=>'required',
            'gambar'=>'required|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $input = $request->all();
        if ($image = $request->file('gambar')) {
            $destinationPath = 'slider/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }

        slider::create($input);
        return $input;
    }

    public function delete_slider($id)
    {
        $data_slider = slider::find($id);
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
        if($request->hasFile('gambar')){
            $request->validate([
              'gambar' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('gambar')->store('public/slider');
            $imgname = date('YmdHis') . "_" ."slider".".". $request->file('gambar')->getClientOriginalExtension();
            $post->gambar = $imgname;
        }
        $post->nama_slider = $request->nama_slider;
        $post->tanggal_slider = $request->tanggal_slider;
        $post->save();
        return $post;
        // return redirect()->route('slider.index')->with('success','Post updated successfully');
    }
}
