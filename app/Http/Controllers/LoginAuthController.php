<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class LoginAuthController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('');
        } else {
            return view();
        }
        if (Auth::guard('user')->check()) {
            return redirect()->route('');
        } else {
            return view();
        }
        if (Auth::guard('pengajar')->check()) {
            return redirect()->route('');
        } else {
            return view();
        }
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user=User::where('email',$request->email)->first();
        $role=Role::where('user_id',$user->id)->value('role');
        //return $role;
        switch ($role) {
            case '0':
                $guard="web";
                break;
            case '1':
                $guard="admin";
                break;
            case '2':
                $guard="pengajar";
                break;
        }
        if(auth()->guard($guard)->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            $user = auth()->user();

            return redirect()->intended(url('/home'));
        } else {
            return redirect()->back()->withError('Credentials doesn\'t match.');
        }
    }

    public function logout(Request $request)
    {
        switch ($request->roleattempt) {
            case '0':
                $guard="admin";
                break;
            case '1':
                $guard="pengajar";
                break;
            case '2':
                $guard="user";
                break;
        }
        Auth::guard($guard)->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function cek_login(){
        return view('layouts.login');
    }

}
