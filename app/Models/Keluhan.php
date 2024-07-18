<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_keluhan';
    protected $table = 'keluhan';
    protected $fillable = [
        'nama_keluhan',
        'ongkos',
        'id_komputer',
        'customer_id',
        'id_pegawai',
    ];

    public $timestamp = false;

    public function komputer(){
        return $this->belongsTo(Komputer::class, 'id_komputer');
    }

    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function pegawai(){
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }

}
