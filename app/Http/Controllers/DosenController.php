<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;

class DosenController extends Controller
{
    public function dosen(){
        $dosen = Dosen::query()
                ->orderBy('id', 'desc')
                ->paginate(7);
        return view('/content/dosen/dosen',['dosen' => $dosen]);
    }
    
    public function search(Request $request){
        $cari = $request->cari;
        $dosen = Dosen::query()
            ->where('nip','like', '%'.$cari.'%')
            ->orWhere('nama', 'like', '%'.$cari.'%')
            ->paginate();
        return view('/content/dosen/dosen', ['dosen' => $dosen]);
    }
    
    public function formDosen(){
        return view('/content/dosen/formDosen');
    }

    public function saveDosen(Request $request){
        Dosen::create([
            'nip'=>$request->nip,
            'nama'=>$request->nama,
            'gender'=>$request->gender,
            'no_hp'=>$request->no_hp,
            'email'=>$request->email
        ]);
        return redirect('/showDosen')->with('alertCreate', 'Data Added  Successfully');
    }

    public function deleteDosen($id){
        $dosen = Dosen::find($id);
        $dosen->delete();
        
        return redirect('/showDosen')->with('alertDelete', 'Data Deleted Successfully');
    }

    public function formupdateDosen($id){
        $dosen = Dosen::find($id);
        return view('/content/dosen/updateDosen', ['dosen' => $dosen]);
    }

    public function updateDosen($id, Request $request){
        $dosen = Dosen::find($id);
        $dosen->nip = $request->nip;
        $dosen->nama = $request->nama;
        $dosen->gender = $request->gender;
        $dosen->no_hp = $request->no_hp;
        $dosen->email = $request->email;
        $dosen->save();

        return redirect('/showDosen')->with('alertUpdate', 'Data Changed Successfully');
    }
}
