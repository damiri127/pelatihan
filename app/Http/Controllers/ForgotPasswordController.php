<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function lupapassword(){
        return view('login.lupapass');
    }
}
