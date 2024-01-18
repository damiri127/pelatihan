<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kemahasiswaan extends Model
{
    protected $table = 'Kemahasiswaan';
    protected $primaryKey = 'id_kemahasiswaan';
    protected $fillable = ['id_users', 'nip', 'nama', 'alamat'];
}
