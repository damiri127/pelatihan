<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BuatLaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Laporan::where('id_users', auth()->user()->id_users)->get();
        return view('ormawa.buat-laporan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Auth::User();
        $temp = $data->id_users;

        $nama = DB::table('ormawa')
            ->leftJoin('users', 'ormawa.id_users', '=', 'users.id_users')
            ->where('users.id_users', '=', $temp)
            ->first();

        return view('ormawa.buat-laporan.create', compact('nama'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Auth::User();
        $temp = $data->id_users;

        $nama = DB::table('ormawa')
            ->leftJoin('users', 'ormawa.id_users', '=', 'users.id_users')
            ->where('users.id_users', '=', $temp)
            ->first();

        $this->validate($request, [
            'nama_kegiatan' => 'required',
            'tanggal_pelaksanaan' => 'required',
            'keterangan' => 'required',
            'dokumen' => 'file|mimes:pdf,doc,docx'
        ]);

        $dokumen = $request->file('dokumen');
        $nama_dokumen = 'Laporan '.$request->nama_kegiatan.'.'.$request->file('dokumen')->getClientOriginalExtension();
        $dokumen->move('file/', $nama_dokumen);

        $data = new Laporan();
        $data->id_users = $nama->id_users;
        $data->nama_ormawa = $nama->nama_ormawa;
        $data->nama_kegiatan = $request->nama_kegiatan;
        $data->tanggal_pelaksanaan = $request->tanggal_pelaksanaan;
        $data->keterangan = $request->keterangan;
        $data->dokumen = $nama_dokumen;
        $data->save();

        return redirect('/dashboard-ormawa/buat-laporan')->with('success', 'Berhasil Menambahkan data');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $laporan, $id_laporan)
    {
        $data = Auth::User();
        $temp = $data->id_users;

        $nama = DB::table('ormawa')
            ->leftJoin('users', 'ormawa.id_users', '=', 'users.id_users')
            ->where('users.id_users', '=', $temp)
            ->first();

        $data = Laporan::find($id_laporan);
        return view('ormawa.buat-laporan.edit', compact('data', 'id_laporan', 'nama'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_laporan)
    {
        $this->validate($request, [
            'nama_kegiatan' => 'required',
            'tanggal_pelaksanaan' => 'required',
            'keterangan' => 'required',
            'dokumen' => 'file|mimes:pdf,doc,docx'
        ]);

        $dokumen = $request->file('dokumen');
        $nama_dokumen = 'Pengajuan '.$request->nama_kegiatan.'.'.$request->file('dokumen')->getClientOriginalExtension();
        $dokumen->move('file/', $nama_dokumen);

        $data = Laporan::find($id_laporan);
        $data->nama_kegiatan = $request->nama_kegiatan;
        $data->tanggal_pelaksanaan = $request->tanggal_pelaksanaan;
        $data->keterangan = $request->keterangan;
        $data->dokumen = $nama_dokumen;
        $data->save();

        return redirect('/dashboard-ormawa/buat-laporan')->withSuccess('Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_laporan)
    {
        $data = Laporan::find($id_laporan);
        $data->delete();
        return redirect('/dashboard-ormawa/buat-laporan')->with('success', 'Data berhasil dihapus');
    }
}
