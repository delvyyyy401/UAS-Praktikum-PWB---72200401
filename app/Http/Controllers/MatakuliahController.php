<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matakuliah;

class MatakuliahController extends Controller
{
    public function matakuliah(){
        $matakuliah = Matakuliah::query()
                ->orderBy('id', 'desc')
                ->paginate(7);
        return view('/content/matakuliah/matakuliah',['matakuliah' => $matakuliah]);
    }
    
    public function search(Request $request){
        $cari = $request->cari;
        $matakuliah = Matakuliah::query()
            ->where('kode','like', '%'.$cari.'%')
            ->orWhere('namaMk', 'like', '%'.$cari.'%')
            ->orWhere('namaDosen', 'like', '%'.$cari.'%')
            ->paginate();
        return view('/content/matakuliah/matakuliah', ['matakuliah' => $matakuliah]);
    }

    public function formMatakuliah(){
        return view('/content/matakuliah/formMatakuliah');
    }

    public function saveMatakuliah(Request $request){
        Matakuliah::create([
            'kode'=>$request->kode,
            'namaMk'=>$request->namaMk,
            'sks'=>$request->sks,
            'harga'=>$request->harga,
            'namaDosen'=>$request->namaDosen
        ]);
        return redirect('/showMatakuliah')->with('alertCreate', 'Data Added  Successfully');
    }

    public function deleteMatakuliah($id){
        $matakuliah = Matakuliah::find($id);
        $matakuliah->delete();
        
        return redirect('/showMatakuliah')->with('alertDelete', 'Data Deleted Successfully');
    }

    public function formupdateMatakuliah($id){
        $matakuliah = Matakuliah::find($id);
        return view('/content/matakuliah/updateMatakuliah', ['matakuliah' => $matakuliah]);
    }

    public function updateMatakuliah($id, Request $request){
        $matakuliah = Matakuliah::find($id);
        $matakuliah->kode = $request->kode;
        $matakuliah->namaMk = $request->namaMk;
        $matakuliah->sks = $request->sks;
        $matakuliah->harga = $request->harga;
        $matakuliah->namaDosen = $request->namaDosen;
        $matakuliah->save();

        return redirect('/showMatakuliah')->with('alertUpdate', 'Data Changed Successfully');
    }
}
