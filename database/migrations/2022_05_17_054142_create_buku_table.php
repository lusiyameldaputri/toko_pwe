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
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_penulis')->constrained('penulis')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_penerbit')->constrained('penerbit')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_kategori')->constrained('kategori')->onDelete('cascade')->onUpdate('cascade');
            $table->string('judul_buku');
            $table->string('ISBN');
            $table->integer('tahun');
            $table->integer('harga');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku');
    }
};
