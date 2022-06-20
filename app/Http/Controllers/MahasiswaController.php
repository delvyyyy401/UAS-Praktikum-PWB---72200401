<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function mahasiswa(){
        $mahasiswa = Mahasiswa::query()
                ->orderBy('id', 'desc')
                ->paginate(7);
        return view('/content/mahasiswa/mahasiswa',['mahasiswa' => $mahasiswa]);
    }

    public function search(Request $request){
        $cari = $request->cari;
        $mahasiswa = Mahasiswa::query()
            ->where('nim','like', '%'.$cari.'%')
            ->orWhere('nama', 'like', '%'.$cari.'%')
            ->paginate();
        return view('/content/mahasiswa/mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function formMahasiswa(){
        return view('/content/mahasiswa/formMahasiswa');
    }

    public function saveMahasiswa(Request $request){
        $prodi = implode(", ", $request->get('prodi'));
        Mahasiswa::create([
            'nim'=>$request->nim,
            'nama'=>$request->nama,
            'gender'=>$request->gender,
            'fakultas'=>$request->fakultas,
            'prodi'=>$prodi
        ]);
        return redirect('/showMahasiswa')->with('alertCreate', 'Data Added  Successfully');
    }

    public function deleteMahasiswa($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        
        return redirect('/showMahasiswa')->with('alertDelete', 'Data Deleted Successfully');
    }

    public function formupdateMahasiswa($id){
        $mahasiswa = Mahasiswa::find($id);
        return view('/content/mahasiswa/updateMahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function updateMahasiswa($id, Request $request){
        $prodi = implode(', ', $request->prodi);
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->gender = $request->gender;
        $mahasiswa->fakultas = $request->fakultas;
        $mahasiswa->prodi = $prodi;
        $mahasiswa->save();

        return redirect('/showMahasiswa')->with('alertUpdate', 'Data Changed Successfully');
    }
}
