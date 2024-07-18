<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komputer extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_komputer';
    protected $table = 'komputer';
    public $incrementing = false;
    protected $fillable = [
        'id_komputer',
        'merek',
        'kelengkapan',
    ];

    public $timestamp = false;

    public function dataTambahanKeluhan(){
        return $this->hasMany(Keluhan::class,'id_komputer');
    }

}


