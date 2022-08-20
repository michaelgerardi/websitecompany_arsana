<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class data_user_controller extends Controller
{
   public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function viewdatauser()
    {
       $user1=User::where('role_id','1')->with('details')->get();
       $user = $user1->sortByDesc('details.created_at')->values()->all();
       return view('data_user.user',compact('user'));
       //return $user;
    }
    public function viewdatapengajar()
    {
       $user=User::where('role_id','3')->get();
       return view('data_user.pengajar',compact('user'));
    }
}
