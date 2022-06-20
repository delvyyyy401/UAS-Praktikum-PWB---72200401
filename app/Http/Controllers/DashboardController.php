<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Dosen;
use App\Matakuliah;

class DashboardController extends Controller{
    public function dashboard(){
        $mahasiswa = Mahasiswa::orderBy('id', 'desc')->get();
        $dosen = Dosen::orderBy('id', 'desc')->get();
        $matakuliah = Matakuliah::orderBy('id', 'desc')->get();
        return view('dashboard', ['mahasiswa' => $mahasiswa], ['dosen' => $dosen], ['matakuliah' => $matakuliah]);
    }

}