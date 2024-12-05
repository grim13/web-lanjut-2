<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatkulKelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('matkul')->insert([
            [ 'kode_mk' => 'MK01', 'nama_mk' => 'Pemrograman Dasar', 'sks' => 3 ],
            [ 'kode_mk' => 'MK02', 'nama_mk' => 'Pemrograman Web', 'sks' => 4 ],
            [ 'kode_mk' => 'MK03', 'nama_mk' => 'Pemorgraman Web Lanjut', 'sks' => 4 ],
        ]);

        DB::table('kelas')->insert([
            [ 'matkul_id' => 1, 'kode_kelas' => 'MK01-SI1', 'hari' => 'Senin', 'jam_mulai' => '08:00', 'jam_selesai' =>  '09:00'],
            [ 'matkul_id' => 1, 'kode_kelas' => 'MK01-SI2', 'hari' => 'Selasa', 'jam_mulai' => '08:00', 'jam_selesai' =>  '09:00'],
            [ 'matkul_id' => 2, 'kode_kelas' => 'MK02-SI1', 'hari' => 'Senin', 'jam_mulai' => '08:00', 'jam_selesai' =>  '09:00'],
            [ 'matkul_id' => 2, 'kode_kelas' => 'MK02-SI2', 'hari' => 'Selasa', 'jam_mulai' => '08:00', 'jam_selesai' =>  '09:00'],
            [ 'matkul_id' => 3, 'kode_kelas' => 'MK00-SI1', 'hari' => 'Senin', 'jam_mulai' => '08:00', 'jam_selesai' =>  '09:00'],
            [ 'matkul_id' => 3, 'kode_kelas' => 'MK00-SI2', 'hari' => 'Selasa', 'jam_mulai' => '08:00', 'jam_selesai' =>  '09:00'],
        ]);
    }
}
