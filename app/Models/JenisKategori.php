<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKategori extends Model
{
    use HasFactory;
    protected $table = 'jenis_kategori';
    protected $fillable = [
        'id',
        'nama_jenis',
    ];
    public function kategori()
    {
        return $this->hasOne(Kategori::'id_jenis');

    }
}
