<?php

namespace App\Http\Controllers\View\NoLogin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResetPassword extends Controller
{
    public function beginResetPassword()
    {
        return view('page.no_login.begin_reset_password');
    }
    
    public function resetPassword()
    {
        return view('page.no_login.reset_password');
    }
}
