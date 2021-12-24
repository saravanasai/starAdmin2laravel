<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function signup()
    {
        return view('Frontend.pages.Auth.signup');
    }

    public function login()
    {
        return "login";
    }
}
