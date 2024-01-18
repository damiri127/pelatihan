<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardKemahasiswaanController extends Controller
{
    public function menu(){

        $pengajuan = DB::table('pengajuan')->count();
        $laporan = DB::table('laporan')->count();
        $kemahasiswaan = DB::table('kemahasiswaan')->count();
        $ormawa = DB::table('ormawa')->count();
        
        return view('kemahasiswaan.index', [
            'name' => 'dashboard-kemahasiswaan',
            'pengajuan' => $pengajuan,
            'laporan' => $laporan,
            'kemahasiswaan' => $kemahasiswaan,
            'ormawa' => $ormawa
        ]);
    }
}
