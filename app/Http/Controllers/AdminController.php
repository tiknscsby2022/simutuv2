<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function beranda_show() {
        $data = [
            'title'         => 'Dashboard | Simutu',
            'link'          => 'https://adminlte.io/themes/v3',
            'name'          => auth()->user()->name,     
        ];                
        return view('admin.beranda', $data);
    }

    public function pengguna_departemen_show() {
        $data = [
            'title'         => 'Pengguna | Simutu',
            'link'          => 'https://adminlte.io/themes/v3',
            'name'          => auth()->user()->name,                 
        ];                
        return view('admin.departemen', $data);
    }
}
