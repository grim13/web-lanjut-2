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
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->biginteger('matkul_id');
            $table->char('kode_kelas',15);
            $table->char('hari',20);
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->timestamps();
            $table->foreign('matkul_id')->references('id')->on('matkul');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
