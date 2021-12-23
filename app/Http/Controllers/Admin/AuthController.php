<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
          return view('Admin.Auth.Login');
    }

    public function Authenticate(Request $request)
    {
          $request->validate([
              "email"=>"required",
              "password"=>"required|max:4"
          ]);

          if(Auth::attempt(['email' => $request->email, 'password' => $request->password,'is_admin'=>1],$remember=true))
          {
            return redirect()->route('adminhome');
          }
          else
          {
            return redirect()->route('/');
          }
    }

    public function logout(Request $request)
    {
         Auth::logout();
         return redirect()->route('adminlogin');
    }
}
