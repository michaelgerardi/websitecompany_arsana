<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\layout;

class layout_controller extends Controller
{
    public function indexlayout(){
        return view('layout.index');
    }
}
