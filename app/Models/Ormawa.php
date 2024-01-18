<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ormawa extends Model
{
    protected $table = 'Ormawa';
    protected $primaryKey = 'id_ormawa';
    protected $fillable = ['id_users', 'nama_ormawa', 'nama_pembina', 'nama_ketua'];
    
}
