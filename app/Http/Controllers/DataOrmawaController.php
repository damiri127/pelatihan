<?php

namespace App\Http\Controllers;

use App\Models\Ormawa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataOrmawaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Ormawa::all();
        return view('kemahasiswaan.data-ormawa.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kemahasiswaan.data-ormawa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = new User;
        $data ->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->level = 'ormawa';
        $data->save();

        $temp = DB::table('users')
            ->select('id_users')->where('email', $request->email)
            ->first();

        $data = new Ormawa;
        $data ->id_users = $temp->id_users;
        $data->nama_ormawa = $request->nama_ormawa;
        $data->nama_pembina = $request->nama_pembina;
        $data ->nama_ketua = $request->nama_ketua;
        $data->save();
        
        return redirect('/dashboard-kemahasiswaan/data-pengguna/data-ormawa')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ormawa  $ormawa
     * @return \Illuminate\Http\Response
     */
    public function show(Ormawa $ormawa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ormawa  $ormawa
     * @return \Illuminate\Http\Response
     */
    public function edit(Ormawa $ormawa, $id_ormawa)
    {
        $data = Ormawa::find($id_ormawa);
        return view('kemahasiswaan.data-ormawa.edit', compact('data', 'id_ormawa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ormawa  $ormawa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_ormawa)
    {
        $update = Ormawa::find($id_ormawa);
        $update->nama_ormawa = $request->nama_ormawa;
        $update->nama_pembina = $request->nama_pembina;
        $update->nama_ketua = $request->nama_ketua;
        $update->save();

        return redirect('/dashboard-kemahasiswaan/data-pengguna/data-ormawa')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ormawa  $ormawa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_ormawa)
    {
        $ormawa = Ormawa::find($id_ormawa);
        $ormawa->delete();

        return redirect('/dashboard-kemahasiswaan/data-pengguna/data-ormawa')->with('success','Data berhasil dihapus');

    }
}
