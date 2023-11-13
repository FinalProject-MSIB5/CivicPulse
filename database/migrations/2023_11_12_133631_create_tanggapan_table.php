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
        Schema::create('tanggapan', function (Blueprint $table) {
          $table->unsignedBigInteger('id')->primary();
          $table->date('tgl_tanggapan');
          $table->text('keterangan');
          $table->integer('users_id')->unsigned();
          $table->foreign('users_id')->references('id')->on('users');
          $table->integer('pengaduan_fasilitas_id')->unsigned();
          $table->foreign('pengaduan_fasilitas_id')->references('id')->on('pengaduan_fasilitas');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanggapan');
    }
};
