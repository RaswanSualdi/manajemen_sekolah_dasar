<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Models\JadwalMapel;
class JadwalMapelKelas extends Controller
{
    public function index(){
        $kelas = Kelas::with('jadwalkelas.jadwal.jadwalmapel.mapel')->get();
        return view('pages.indexjadwalmapel', compact('kelas'));
    }


    public function detail($id){
        $kelas = Kelas::with('jadwalkelas.jadwal.jadwalmapel.mapel')->find($id);
        // dd($kelas);
        return view('pages.indexjadwalmapeldetail', compact('kelas'));
    }

    public function detailmapel(){
        $kelas = Jadwal::with('jadwalmapel.mapel')->get();
        dd($kelas);
        return view('pages.indexjadwalmapelwaktu', compact('kelas'));
    }
}
