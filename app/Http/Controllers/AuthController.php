<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login_show() {
        $data = [
            'title' => 'Login | Simutu',
            'link'  => 'https://adminlte.io/themes/v3'
        ];
        return view('login', $data);
    }

    public function authenticate (Request $request) {
        $credentials = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]);
        
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();   
            $is_admin = auth()->user()->is_admin;

            if($is_admin == true) {
                return redirect()->route('admin_beranda_show');
            }
            else {
                return redirect()->route('user_dashboard_show');
            }
        }   
        return redirect()->back()->withErrors(
            ['msg' => 'Nama atau password salah !']
        );             
    }  

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
