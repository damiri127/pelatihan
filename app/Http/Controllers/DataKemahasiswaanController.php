<?php

namespace App\Http\Controllers;

use App\Models\Kemahasiswaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DataKemahasiswaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = DB::table('users')
        //     ->join('kemahasiswaan', 'email', '=', 'kemahasiswaan.id_users')
        //     ->join('kemahasiswaan', 'password', '=', 'kemahasiswaan.id_users')
        //     ->first();

        $data = Kemahasiswaan::all();

        return view('kemahasiswaan.data-kemahasiswaan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kemahasiswaan.data-kemahasiswaan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('users')->insert([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => 'kemahasiswaan'
        ]);

        $temp = DB::table('users')
            ->select('id_users')->where('email', $request->email)
            ->first();

        DB::table('kemahasiswaan')->insert([
            'id_users' => $temp->id_users,
            'NIP' => $request->NIP,
            'nama'=>$request->nama,
            'alamat'=>$request->alamat
        ]);

        return redirect('/dashboard-kemahasiswaan/data-pengguna/data-kemahasiswaan')->withSuccess('Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kemahasiswaan  $kemahasiswaan
     * @return \Illuminate\Http\Response
     */
    public function show(Kemahasiswaan $kemahasiswaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kemahasiswaan  $kemahasiswaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kemahasiswaan $kemahasiswaan, $id_kemahasiswaan)
    {
        $data = Kemahasiswaan::find($id_kemahasiswaan);
        return view('kemahasiswaan.data-kemahasiswaan.edit', compact('data', 'id_kemahasiswaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kemahasiswaan  $kemahasiswaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kemahasiswaan)
    {
        // DB::table('kemahasiswaan')
        //     ->where('id_kemahasiswaan', $kemahasiswaan->id_kemahasiswaan)
        //     ->update([
        //         'nip' => $request->nip,
        //         'nama' => $request->nama,
        //         'alamat' => $request->alamat
        //     ]);
        $this->validate($request, [
            'nip' => 'required',
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        $update = Kemahasiswaan::find($id_kemahasiswaan);
        $update->nip = $request->nip;
        $update->nama = $request->nama;
        $update->alamat = $request->alamat;
        $update->save();

        return redirect('/dashboard-kemahasiswaan/data-pengguna/data-kemahasiswaan')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kemahasiswaan  $kemahasiswaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kemahasiswaan)
    {
        $delete = Kemahasiswaan::find($id_kemahasiswaan);
        $delete->delete();
        return redirect('/dashboard-kemahasiswaan/data-pengguna/data-kemahasiswaan')->withSuccess('Data berhasil dihapus');
    }
}
