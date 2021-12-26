<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\User\UserRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;
use Nette\Utils\Random;

class AuthController extends Controller
{

    public function signup()
    {
        return view('Frontend.pages.Auth.signup');
    }




    public function register(UserRegisterRequest $request)
    {
        $remember=($request->remember=='on')?true:false;
        $token=($remember)?Random::generate(60) : null;

        $user=User::create([
            "name"=>$request->username,
            "email"=>$request->email,
            "phone_number"=>$request->phonenumber,
            "password"=>Hash::make($request->password),
            "is_admin"=>0,
            "remember_token"=>$token
        ]);

        if(Auth::attempt(['email' => $user->email, 'password' => $request->password],$remember))
        {

             return redirect()->intended();
        }

    }

    public function login()
    {
        return view('Frontend.pages.Auth.login');
    }

    public function userlogin(Request $request)
    {
        $remember=($request->remember=='on')?true:false;

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password],$remember))
        {
                return redirect()->intended();

        }

    }

     public function logout()
     {
         Auth::logout();
         return redirect()->route('home');
     }
}
