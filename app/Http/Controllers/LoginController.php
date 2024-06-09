<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required|min:3'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            if(Auth::user()->username == 'admin'){
                return redirect()->intended('/dashboardadmin');
            }elseif((Auth::user()->username != 'admin')){

                return redirect()->intended('/dashboard');
            }
        }

        return back()->with('LoginError', 'Login Gagal');
    }

    public function logout()
    {
        Auth::logout();
 
        request()->session()->invalidate();
    
        request()->session()->regenerateToken();
    
        return redirect('/');
    }
}
