<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('admin.index', [
            'title' => 'Home',
        ]);
    }

    public function daftarPengajuan(){
        return view('admin.daftar_pengajuan', [
            'title' => 'Daftar Pengajuan',
        ]);
    }
}   
