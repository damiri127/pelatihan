<?php


use App\Http\Controllers\PusherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataOrmawaController;
use App\Http\Controllers\BuatLaporanController;
use App\Http\Controllers\DataLaporanController;
use App\Http\Controllers\BuatPengajuanController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DataPengajuanController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\DataKemahasiswaanController;
use App\Http\Controllers\DashboardKemahasiswaanController;

//login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authentication']);

//logout
Route::get('/logout', [LogoutController::class, 'logoutAction'])->name('logout');

//lupa password
Route::get('/lupapass', [ForgotPasswordController::class, 'lupapassword']);

Route::group(['middleware' => ['auth', 'ceklevel:kemahasiswaan']], function(){
    //dashboard
    Route::get('/dashboard-kemahasiswaan', [DashboardKemahasiswaanController::class, 'menu'])->middleware('auth');
    
});

Route::group(['middleware' => ['auth', 'ceklevel:ormawa']], function(){
    //dashboard
    Route::get('/dashboard-ormawa', [DashboardController::class, 'index'])->middleware('auth');
    
});

// Kemahasiswaan
Route::resource('/dashboard-kemahasiswaan/user', DashboardUserController::class)->middleware('auth');

Route::resource('/dashboard-kemahasiswaan/data-pengajuan', DataPengajuanController::class)->middleware('auth');

Route::resource('/dashboard-kemahasiswaan/data-laporan', DataLaporanController::class)->middleware('auth');

Route::resource('/dashboard-kemahasiswaan/data-pengguna/data-kemahasiswaan', DataKemahasiswaanController::class)->middleware('auth');

Route::resource('/dashboard-kemahasiswaan/data-pengguna/data-ormawa', DataOrmawaController::class)->middleware('auth');


// ormawa
Route::resource('/dashboard-ormawa/buat-pengajuan', BuatPengajuanController::class)->middleware('auth');

Route::resource('/dashboard-ormawa/buat-laporan', BuatLaporanController::class)->middleware('auth');


// route pesan
Route::get('/dashboard-kemahasiswaan/messages', [PusherController::class, 'index']);
Route::post('/dashboard-kemahasiswaan/broadcast', [PusherController::class, 'broadcast']);
Route::post('/dashboard-kemahasiswaan/receive', [PusherController::class, 'receive']);
