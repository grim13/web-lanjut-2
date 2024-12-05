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
        Schema::create('krs', function (Blueprint $table) {
            $table->id();
            $table->biginteger('kelas_id');
            $table->bigInteger('mahasiswa_id');
            $table->char('nilai_huruf',1);
            $table->integer('nilai_angka');
            $table->integer('bobot');
            $table->timestamps();
            $table->foreign('kelas_id')->references('id')->on('kelas');
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('krs');
    }
};
