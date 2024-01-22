<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index', [
            'title' => 'Selamat datang'
        ]);
    }

    public function utama(){
        return view('pages.utama', [
            'title' => 'Selamat datang'
        ]);
    }

    public function jenisPelayanan(){
        return view('pages.jenis_pelayanan', [
            'title' => 'Jenis Pelayanan'
        ]);
    }

    public function jamPelayanan(){
        return view('pages.jam_pelayanan', [
            'title' => 'Jam Pelayanan'
        ]);
    }

    public function pengajuan(){
        return view('pages.pengajuan', [
            'title' => 'Pengajuan'
        ]);
    }

    public function formPengajuan(){
        return view('pages.form_pengajuan', [
            'title' => 'Form Pengajuan'
        ]);
    }

    public function teknisPengajuan(){
        return view('pages.teknis_pengajuan', [
            'title' => 'Teknis Pengajuan'
        ]);
    }

    public function cekPengajuan(){
        return view('pages.cek_pengajuan', [
            'title' => 'Cek Pengajuan'
        ]);
    }
}
