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
        Schema::create('peminjaman_bukus', function (Blueprint $table) {
            $table->id();
            $table->string('judul_buku');
            $table->string('nama');
            $table->date('tanggal_peminjaman');
            $table->date('tanggal_pengembalian');
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
        Schema::dropIfExists('peminjaman_bukus');
    }
};