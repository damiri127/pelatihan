<?php

namespace App\Http\Controllers;

use App\Models\pengajuan;
use Illuminate\Http\Request;

class DataPengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pengajuan::all();
        return view('kemahasiswaan.data-pengajuan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pengajuan  $pengajuan
     * @return \Illuminate\Http\Response
     */
    public function show(pengajuan $pengajuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pengajuan  $pengajuan
     * @return \Illuminate\Http\Response
     */
    public function edit(pengajuan $pengajuan, $id_dokumen)
    {
        $data = Pengajuan::find($id_dokumen);
        return view('kemahasiswaan.data-pengajuan.edit', compact('data', 'id_dokumen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pengajuan  $pengajuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_dokumen)
    {
        $data = Pengajuan::find($id_dokumen);
        // $data->update([
        //     'nama_kegiatan' => $request->nama_kegiatan,
        //     'tanggal_pelaksanaan' => $request->tanggal_pelaksanaan,
        //     'keterangan' => $request->keterangan,
        //     'status' => $request->status
        // ]);
        $data->nama_kegiatan;
        $data->tanggal_pelaksanaan;
        $data->keterangan;
        $data->status = $request->status;
        $data->update();

        return redirect('/dashboard-kemahasiswaan/data-pengajuan')->with('success', 'Status Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengajuan  $pengajuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pengajuan $pengajuan)
    {
        //
    }
}
