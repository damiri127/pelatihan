<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    protected $table = 'pengajuan';
    protected $primaryKey = 'id_dokumen';
    protected $fillable = [
        'id_users',
        'nama_ormawa',
        'nama_kegiatan',
        'tanggal_pelaksanaan',
        'keterangan',
        'dokumen',
        'status' => 'pending'
    ];

}
