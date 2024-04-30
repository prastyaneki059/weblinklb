<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('corp_d_closing', function (Blueprint $table) {
            $table->id();
            $table->string('nama',20);
            $table->unsignedBigInteger('kode_store');
            $table->foreign('kode_store')->references('id')->on('master_toko');
            $table->unsignedBigInteger('shift');
            $table->foreign('shift')->references('id')->on('master_shift');
            $table->date('tanggal');
            $table->integer('setor_tunai');
            $table->string('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('corp_d_closing');
    }
};
