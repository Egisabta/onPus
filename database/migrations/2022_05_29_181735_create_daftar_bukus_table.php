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
        Schema::create('daftar_bukus', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('daftar_buku_saya_id');
            $table->string('judul_buku');
            $table->string('no_buku');
            $table->string('link');
            $table->boolean('dipinjam')->default(false);
            $table->timestamps();
            // $table->foreign('daftar_buku_saya_id')->references('id')->on('daftar_buku_sayas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftar_bukus');
    }
};