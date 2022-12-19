<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kategori')->constrained('kategori')->cascadeOnDelete()->cascadeOnUpdate();

            $table->string('nama_barang');
            $table->string('merk');
            $table->string('ukuran')->nullable();
            $table->string('bahan')->nullable();
            $table->string('tahun');
            $table->string('asal_barang');
            $table->string('kondisi_barang');
            $table->string('jumlah_barang');
            $table->string('harga_barang');
            $table->string('foto_barang');
            $table->foreignId('id_user')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
};
