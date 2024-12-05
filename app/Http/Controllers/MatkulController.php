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

    public function add() {
        return view('matkul.add');
    }

    public function addAction(Request $request){
        $addMatkul = new Matkul();
        $addMatkul->kode_mk = $request->kode_matkul;
        $addMatkul->nama_mk = $request->nama_matkul;
        $addMatkul->sks= $request->sks;
        if (!$addMatkul->save()) {
            //kirim pesan simpan gagal
            return redirect()->route('matkul')->with('message', 'Data gagal disimpan!');
        }
        //kirim pesan simpan berhasil
        return redirect()->route('matkul')->with('message', 'Data berhasil di simpan!');
    }
}
