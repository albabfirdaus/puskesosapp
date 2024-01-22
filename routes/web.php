<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::get('/', [PagesController::class, 'index']);
route::get('/utama', [PagesController::class, 'utama'])->name('utama');
route::get('/jenis-pelayanan', [PagesController::class, 'jenisPelayanan'])->name('jenis-pelayanan');
route::get('/jam-pelayanan', [PagesController::class, 'jamPelayanan'])->name('jam-pelayanan');
route::get('/pengajuan', [PagesController::class, 'pengajuan'])->name('pengajuan');
route::get('/form-pengajuan', [PagesController::class, 'formPengajuan'])->name('form-pengajuan');
route::get('/teknis-pengajuan', [PagesController::class, 'teknisPengajuan'])->name('teknis-pengajuan');
route::get('/cek-pengajuan', [PagesController::class, 'cekPengajuan'])->name('cek-pengajuan');

route::get('/login', [AuthController::class, 'login'])->name('login');
route::get('/register', [AuthController::class, 'register']);
route::post('/auth', [AuthController::class, 'authenticate'])->name('auth');
route::get('/logout', [AuthController::class, 'logout']);

route::get('/home', [HomeController::class, 'index'])->name('home');
route::get('/daftar-pengajuan', [HomeController::class, 'daftarPengajuan']);
