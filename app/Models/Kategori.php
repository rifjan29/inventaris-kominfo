<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    protected $fillable =[
        'id',
        'id_jenis',
        'nama',
        'status',
        'created_at',
        'updated_at',
    ];
    public function jenis()
    {
        return $this->belongsTo(JenisKategori::class,'id_jenis','id');

    }
}
