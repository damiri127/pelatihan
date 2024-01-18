<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporan';
    protected $primaryKey = 'id_laporan';
    protected $fillable = [
        'nama_ormawa',
        'nama_kegiatan',
        'tanggal_pelaksanaan',
        'keterangan',
        'dokumen'
    ];
}
