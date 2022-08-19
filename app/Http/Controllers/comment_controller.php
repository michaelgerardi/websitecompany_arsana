<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class comment_controller extends Controller
{
    public function savecomment(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'email'=>'required',
            'comment'=>'required'
        ]);
        //return $request;
        $Comment= Comment::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'comment' => $request->comment,
        ]);
        return redirect()->back();
    }
}
