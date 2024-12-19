<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaKRSTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            [ 
                'nim' => '22141123',
                'nama' => 'Mahasiswa 1',
                'prodi' => 'Sistem Informasi',
                'jk' => 'L',
                'alamat' => 'Plaju',
                'tahun_masuk' => 2022,
            ],
            [ 
                'nim' => '22141124',
                'nama' => 'Mahasiswa 2',
                'prodi' => 'Sistem Informasi',
                'jk' => 'P',
                'alamat' => 'Ilir barat',
                'tahun_masuk' => 2022,
            ]
        ]);

        DB::table('krs')->insert([
            [ 
                'kelas_id' => 1,
                'mahasiswa_id' => 1,
                'nilai_huruf' => 90,
                'nilai_angka' => 'A',
                'bobot' => 4,
            ],
            [ 
                'kelas_id' => 3,
                'mahasiswa_id' => 1,
                'nilai_huruf' => 85,
                'nilai_angka' => 'B',
                'bobot' => 3,
            ],
            [ 
                'kelas_id' => 5,
                'mahasiswa_id' => 1,
                'nilai_huruf' => 96,
                'nilai_angka' => 'A',
                'bobot' => 4,
            ],
            [ 
                'kelas_id' => 2,
                'mahasiswa_id' => 2,
                'nilai_huruf' => 65,
                'nilai_angka' => 'C',
                'bobot' => 2,
            ],
            [ 
                'kelas_id' => 4,
                'mahasiswa_id' => 2,
                'nilai_huruf' => 85,
                'nilai_angka' => 'B',
                'bobot' => 3,
            ],
        ]);
    }
}
