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
        Schema::create('master_transaksi', function (Blueprint $table) {
            $table->foreignId('id_anggota')->constrained('anggota')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_trans')->constrained('detail_transaksi')->onDelete('cascade')->onUpdate('cascade');
            $table->date('tgl_transaksi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_transaksi');
    }
};
