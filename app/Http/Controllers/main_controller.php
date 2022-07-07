<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\main;

class main_controller extends Controller
{
        public function mainPage(){
        return view('main');
    }
}
