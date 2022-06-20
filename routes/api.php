<?php

use Illuminate\Http\Request;
use App\Mahasiswa;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/mahasiswa/show','MahasiswaControllerAPI@show');

Route::post('/mahasiswa/create','MahasiswaControllerAPI@create');

Route::post('/mahasiswa/update/{id}', 'MahasiswaControllerAPI@update');

Route::delete('mahasiswa/delete/{id}', 'MahasiswaControllerAPI@delete');