<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class data_user_controller extends Controller
{
    public function viewdatauser()
    {
       $user=User::where('role_id','1')->get();
       return view('data_user.user',compact('user'));
    }
    public function viewdatapengajar()
    {
       $user=User::where('role_id','3')->get();
       return view('data_user.pengajar',compact('user'));
    }
}
