<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $fillable = [
        'id',
        'id_kategori',
        'nama_barang',
        'merk',
        'ukuran',
        'bahan',
        'tahun',
        'asal_barang',
        'kondisi_barang',
        'jumlah_barang',
        'harga_barang',
        'foto_barang',
        'id_user',

    ];
    public function kategori()
    {
        return $this->belongsTo(Kategori::class,'id_kategori','id');

    }
}
