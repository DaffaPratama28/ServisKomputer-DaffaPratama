<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pegawai';
    protected $table = 'pegawai';
    protected $fillable = [
        'nama_pegawai',
        'alamat',
        'jenis_kelamin',
        'jabatan',
        'status',
    ];

    public $timestamp = false;
}
