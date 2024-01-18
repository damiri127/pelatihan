<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

    public function authentication(Request $request){

        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            //dd(Auth::user());
            if(auth()->user()->level === "kemahasiswaan"){
                return redirect()->intended('dashboard-kemahasiswaan');
            }else{
                return redirect()->intended('dashboard-ormawa');
            }
            
        }
        //dd(Auth::user());
        return back()->withErrors('Gagal login!');
    }
}
