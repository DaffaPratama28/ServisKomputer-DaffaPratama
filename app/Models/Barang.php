<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_barang';
    protected $table = 'barang';
    protected $fillable = [
        'nama_barang',
        'merek',
        'harga',
        'stok',
        'satuan',
    ];

    public $timestamp = false;

    public function dataTambahanSupplier(){
        return $this->hasMany(Supplier::class,'id_barang');
    }
}
