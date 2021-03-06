<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\Role;

class LoginAuthController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('home');
        } else if (Auth::guard('web')->check()) {
            return redirect()->route('home');
        } else if (Auth::guard('pengajar')->check()) {
            return redirect()->route('home');
        } else {
            if(Cookie::get('email') !== null){
                $email=Cookie::get('email');
                $pass=Cookie::get('pass');
                //return $pass;
                return view('layouts.login',compact('email','pass'));
            }else{
                return view('layouts.login');
            }
        }
    }

    public function login(Request $request)
    {
        $minutes=1200;
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user=User::where('email',$request->email)->first();
        switch ($user->role_id) {
            case '1':
                $guard="web";
                break;
            case '2':
                $guard="admin";
                break;
            case '3':
                $guard="pengajar";
                break;
        }
        if(auth()->guard($guard)->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            $user = auth()->guard($guard)->user();
            if($request->rememberme=='on'){
                $cookie1 = Cookie::make('email', $request->email, $minutes);
                $cookie2 = Cookie::make('pass', $request->password, $minutes);
                return redirect()->intended(url('/home'))->withCookie($cookie1)->withCookie($cookie2);
            }else{
                $cookie1 = Cookie::forget('email');
                $cookie2 = Cookie::forget('pass');
                return redirect()->intended(url('/home'))->withCookie($cookie1)->withCookie($cookie2);
            }
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

    //////////google/////////////

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->id)->first();
            if($finduser){
                Auth::login($finduser);
                return redirect()->intended(url('/home'));
            }else{
                $newUser = User::updateOrCreate(['email' => $user->email],[
                        'name' => $user->name,
                        'google_id'=> $user->id,
                        'password' => Hash::make('123456dummy')
                    ]);
                Auth::login($newUser);
                return redirect()->intended(url('/home'));
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}