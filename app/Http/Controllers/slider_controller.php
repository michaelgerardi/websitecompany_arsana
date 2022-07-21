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
}
