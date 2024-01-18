<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class BuatPengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pengajuan::where('id_users', auth()->user()->id_users)->get();
        return view('ormawa.buat-pengajuan.index', compact('data'));
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

        return view('ormawa.buat-pengajuan.create', compact('nama'));
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

        // DB::table('pengajuan')->insert([
        //     'id_users' => $nama->id_users,
        //     'nama_ormawa' => $nama->nama_ormawa,
        //     'nama_kegiatan' => $request->nama_kegiatan,
        //     'tanggal_pelaksanaan' => $request->tanggal_pelaksanaan,
        //     'keterangan' => $request->keterangan,
        //     'dokumen' => $request->file('dokumen')
        // ]);

        $this->validate($request, [
            'nama_kegiatan' => 'required',
            'tanggal_pelaksanaan' => 'required',
            'keterangan' => 'required',
            'dokumen' => 'file|mimes:pdf,doc,docx'
        ]);

        $dokumen = $request->file('dokumen');
        $nama_dokumen = 'Pengajuan '.$request->nama_kegiatan.'.'.$request->file('dokumen')->getClientOriginalExtension();
        $dokumen->move('file/', $nama_dokumen);

        $data = new Pengajuan();
        $data->id_users = $nama->id_users;
        $data->nama_ormawa = $nama->nama_ormawa;
        $data->nama_kegiatan = $request->nama_kegiatan;
        $data->tanggal_pelaksanaan = $request->tanggal_pelaksanaan;
        $data->keterangan = $request->keterangan;
        $data->dokumen = $nama_dokumen;
        $data->save();
        //Pengajuan::create($request->all());

        return redirect('/dashboard-ormawa/buat-pengajuan')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengajuan  $pengajuan
     * @return \Illuminate\Http\Response
     */
    public function show(Pengajuan $pengajuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengajuan  $pengajuan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengajuan $pengajuan, $id_dokumen)
    {
        $data = Auth::User();
        $temp = $data->id_users;

        $nama = DB::table('ormawa')
            ->leftJoin('users', 'ormawa.id_users', '=', 'users.id_users')
            ->where('users.id_users', '=', $temp)
            ->first();

        $data = Pengajuan::find($id_dokumen);
        return view('ormawa.buat-pengajuan.edit', compact('data', 'id_dokumen', 'nama'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengajuan  $pengajuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_dokumen)
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

        $data = Pengajuan::find($id_dokumen);
        $data->nama_kegiatan = $request->nama_kegiatan;
        $data->tanggal_pelaksanaan = $request->tanggal_pelaksanaan;
        $data->keterangan = $request->keterangan;
        $data->dokumen = $nama_dokumen;
        $data->save();

        return redirect('/dashboard-ormawa/buat-pengajuan')->withSuccess('Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengajuan  $pengajuan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_dokumen)
    {
        $data = Pengajuan::find($id_dokumen);
        $data->delete();
        return redirect('/dashboard-ormawa/buat-pengajuan')->with('success', 'Data berhasil dihapus');
    }
}
