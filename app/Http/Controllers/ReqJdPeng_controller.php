<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail_user;
use App\Models\User;
use Auth;

class ReqJdPeng_controller extends Controller
{
    public function LihatReq(Type $var = null)
    {
        $data_req = Detail_user::where('acc','0')->get();
        //return $data_kategori;
        return view('ReqJdPengajar.accReq',compact('data_req'));
    }
    public function ApproveReq($id)
    {
        if(Auth::guard('admin')->check()){
            Detail_user::where('user_id', $id)
            ->update(['acc' => 1]);
            User::where('id', $id)
            ->update(['role_id' => 3]);
        }
        return redirect()->back();
    }
}
