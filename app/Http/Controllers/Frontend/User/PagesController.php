<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contact()
    {
        return view('Frontend.pages.contact.contact');
    }
}
