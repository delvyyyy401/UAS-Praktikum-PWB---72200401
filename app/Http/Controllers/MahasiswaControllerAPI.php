<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaControllerAPI extends Controller
{
    public function show(){
        $mahasiswa = Mahasiswa::all();
        return response()->json([
            'success'   => true,
            'message'   => 'Data Displayed Successfully',
            'data'      => $mahasiswa
        ],200);    
    }

    public function create(Request $request){
        $mahasiswa = Mahasiswa::create([
            'nim'       => $request->nim,
            'nama'      => $request->nama,
            'gender'    => $request->gender,
            'fakultas'   => $request->fakultas,
            'prodi' => $request->prodi,
        ]);

        if($mahasiswa){
            return response()->json([
                'success'   => true,
                'message'   => 'Data Added Successfully',
            ],200);
        }else{
            return response()->json([
                'success'   => false,
                'message'   => 'Data Cannot be Added'
            ],401);
        }
    }
    
    public function update($id, Request $request){
        $mahasiswa = Mahasiswa::whereId($id)->update([
            'nim'       => $request->nim,
            'nama'      => $request->nama,
            'gender'    => $request->gender,
            'fakultas'   => $request->fakultas,
            'prodi' => $request->prodi
        ]);
        
        if($mahasiswa){
            return response()->json([
                'success'   => true,
                'message'   => 'Data Changed Successfully',
            ],200);
        }else{
            return response()->json([
                'success'   => false,
                'message'   => 'Data Cannot be Changed',
            ],400);
        }
    }

    public function delete($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();

        if($mahasiswa){
            return response()->json([
                'success'   => true,
                'message'   => 'Data Deleted Successfully',
            ],200);
        }else{
            return response()->json([
                'success'   => false,
                'message'   => 'Data Cannot be Deleted',
            ],400);
        }
    }
}
