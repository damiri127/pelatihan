<?php

namespace App\Http\Controllers;

use App\Models\Kemahasiswaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //redirect

    public function index(){

        $all = Kemahasiswaan::all();
        $data = Auth::User();
        $temp = $data->id_users;

        $nama = DB::table('ormawa')
            ->leftJoin('users', 'ormawa.id_users', '=', 'users.id_users')
            ->where('users.id_users', '=', $temp)
            ->first();

        return view('ormawa.index', compact('nama'),[
            'name' => 'dashboard-ormawa'
        ]);
    }
}
