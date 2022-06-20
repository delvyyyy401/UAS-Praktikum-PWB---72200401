@extends('layout.main')
@section('title', 'Create Mahasiswa')
@section('content')

<div class="col-lg-12 vh-100">
  <div class='card mt-4'>
    <div class='card-header'>
      <b>Silahkan Menambahkan Data Baru</b>
    </div>
    <div class='card-body'>
      <div class="container-fluid mt-2 rounded background-color-$green-200">
        <form action="/mahasiswa/saveMahasiswa" method="POST" class="pt-2 pb-2 row g-3 was-validated">
          @csrf
          <div class="form-group col-md-3">
            <label><b>NIM</b></label>
            <input type="number" name="nim" class="form-control" placeholder="Masukkan NIM" required>
            <div class="invalid-feedback">
              Silahkan masukkan NIM terlebih dahulu.
            </div>
          </div>

          <div class="form-group col-md-9">
            <label><b>Nama</b></label>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
            <div class="invalid-feedback">Silahkan masukkan Nama terlebih dahulu.</div>
          </div>

          <div class="form-group col-md-4">
            <label><b>Gender</b></label>
            <div class="form-check">
              <input type="radio" name="gender" value="Pria" class="form-check-input" required>
              <label class="form-check-label">Pria</label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" name="gender" value="Wanita" class="form-check-input" required>
              <label class="form-check-label">Wanita</label>
              <div class="invalid-feedback">Silahkan memilih Gender terlebih dahulu.</div>
            </div><br>
          </div>

          <div class="form-group col-md-3">
            <label><b>Fakultas</b></label>
            <select name="fakultas" class="form-control" required aria-label="select example">
              <option selected disabled value="">---Silahkan Pilih Fakultas--</option>
              <option value="Teknologi Informasi">Teknologi Informasi</option>
              <option value="Teologi">Teologi</option>
              <option value="Arsitektur dan Desain">Arsitektur dan Desain</option>
              <option value="Bisnis">Bisnis</option>
              <option value="Kedokteran">Kedokteran</option>
              <option value="Bioteknologi">Bioteknologi</option>
              <option value="Bahasa Inggris">Bahasa Inggris</option>
            </select>
            <div class="invalid-feedback">Silahkan memilih Fakultas terlebih dahulu.</div>
          </div>

          <div class="form-group col-md-7">
            <label><b>Prodi</b></label>
            <div class="form-check">
              <input type="checkbox" name="prodi[]" value="Teologi" class="form-check-input">Teologi<br>
              <input type="checkbox" name="prodi[]" value="Sistem Informasi" class="form-check-input">Sistem Informasi<br>
              <input type="checkbox" name="prodi[]" value="Teknik Informatika" class="form-check-input">Teknik Informatika<br>
              <input type="checkbox" name="prodi[]" value="Arsitektur" class="form-check-input">Arsitektur<br>
              <input type="checkbox" name="prodi[]" value="Desain produk" class="form-check-input">Desain produk<br>
              <input type="checkbox" name="prodi[]" value="Manajemen" class="form-check-input">Manajemen<br>
              <input type="checkbox" name="prodi[]" value="Akuntansi" class="form-check-input">Akuntansi<br>
              <input type="checkbox" name="prodi[]" value="Bioteknologi" class="form-check-input">Bioteknologi<br>
              <input type="checkbox" name="prodi[]" value="Kedokteran" class="form-check-input">Kedokteran<br>
              <input type="checkbox" name="prodi[]" value="Bahasa Inggris" class="form-check-input">Bahasa Inggris
              <div class="invalid-feedback">Silahkan memilih Prodi terlebih dahulu.</div>
            </div>
          </div>
        
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" required>
              <label class="form-check-label">
                You must agree before submitting.
              </label>
            </div>
          </div>

          <div class="col-md-4">
            <input type="submit" value="Submit" class="btn btn-outline-success">
            <a type="button" href="/showMahasiswa" class="btn btn-outline-danger">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection