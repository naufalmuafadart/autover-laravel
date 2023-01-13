<?php

namespace App\Http\Controllers\View\NoLogin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginSignUpController extends Controller
{
    public function signup()
    {
        return view('page.no_login.signup');
    }

    public function login()
    {
        return view('page.no_login.login');
    }
}
