<?php

Route::get('/koneksi', function () {
    return view('koneksi');
});

Route::get('/showDashboard','DashboardController@dashboard')->middleware('auth'); 

Route::get('/showMahasiswa','MahasiswaController@mahasiswa')->middleware('auth');
Route::get('/mahasiswa/search','MahasiswaController@search');
Route::get('/mahasiswa/formMahasiswa','MahasiswaController@formMahasiswa');
Route::post('/mahasiswa/saveMahasiswa','MahasiswaController@saveMahasiswa');
Route::get('/mahasiswa/deleteMahasiswa/{id}','MahasiswaController@deleteMahasiswa');
Route::get('/mahasiswa/updateMahasiswa/{id}','MahasiswaController@formupdateMahasiswa')->middleware('auth');
Route::put('/mahasiswa/updateMahasiswa/{id}','MahasiswaController@updateMahasiswa');

Route::get('/showDosen','DosenController@dosen')->middleware('auth');
Route::get('/dosen/search','DosenController@search');
Route::get('/dosen/formDosen','DosenController@formDosen')->middleware('auth');
Route::post('dosen/saveDosen','DosenController@saveDosen');
Route::get('/dosen/deleteDosen/{id}','DosenController@deleteDosen');
Route::get('/dosen/updateDosen/{id}','DosenController@formupdateDosen');
Route::put('/dosen/updateDosen/{id}','DosenController@updateDosen')->middleware('auth');

Route::get('/showMatakuliah','MatakuliahController@matakuliah')->middleware('auth');
Route::get('/matakuliah/search','MatakuliahController@search');
Route::get('/matakuliah/formMatakuliah','MatakuliahController@formMatakuliah')->middleware('auth');
Route::post('matakuliah/saveMatakuliah','MatakuliahController@saveMatakuliah');
Route::get('/matakuliah/deleteMatakuliah/{id}','MatakuliahController@deleteMatakuliah');
Route::get('/matakuliah/updateMatakuliah/{id}','MatakuliahController@formupdateMatakuliah')->middleware('auth');
Route::put('/matakuliah/updateMatakuliah/{id}','MatakuliahController@updateMatakuliah');

Route::get('/showUser','UserController@user')->middleware('auth');
Route::get('/user/search','UserController@search');
Route::get('/user/formUser','UserController@formUser')->middleware('auth');
Route::post('/user/saveUser','UserController@saveUser');
Route::get('/user/deleteUser/{id}','UserController@deleteUser');
Route::get('/user/updateUser/{id}','UserController@formupdateUser')->middleware('auth');
Route::put('/user/updateUser/{id}','UserController@updateUser');

Route::get('/login','UserController@login')->middleware('guest')->name('login');
Route::post('/user/checkLogin','UserController@checkLogin');
Route::get('/logout','UserController@logout')->middleware('auth');
