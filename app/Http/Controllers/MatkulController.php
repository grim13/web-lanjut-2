<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use App\Models\Kelas;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    public function index() {
        $matkul = Matkul::with('kelas')->get();
        $kelas = Kelas::with('matkul')->get();
        return view('matkul.index', [
            'matkul' => $matkul,
            'kelas' => $kelas,
        ]);
    }
}
