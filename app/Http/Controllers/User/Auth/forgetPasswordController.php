<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class forgetPasswordController extends Controller
{
    //
    public function index()
    {
        return view('user.auth.reset_password.email');
    }

    public function token()
    {
        return view('user.auth.reset_password.token');
    }
    public function changepassword()
    {
        return view('user.auth.reset_password.update_password');
    }
}
