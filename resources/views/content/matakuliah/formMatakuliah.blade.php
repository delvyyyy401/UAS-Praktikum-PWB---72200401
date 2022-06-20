@extends('layout.main')
@section('title', 'Create Matakuliah')
@section('content')

<div class="col-lg-12 vh-100">
  <div class='card mt-4'>
    <div class='card-header'>
      <b>Silahkan Menambahkan Data Baru</b>
    </div>
    <div class='card-body'>
      <div class="container-fluid mt-2 rounded background-color-$green-200">
        <form action="/matakuliah/saveMatakuliah" method="POST" class="pt-2 pb-2 row g-3 was-validated">
          @csrf
          <div class="form-group col-md-3">
            <label><b>Kode</b></label>
            <input type="text" name="kode" class="form-control" placeholder="Masukkan Kode Matakuliah" required>
            <div class="invalid-feedback">
              Silahkan masukkan Kode terlebih dahulu.
            </div>
          </div>

          <div class="form-group col-md-9">
            <label><b>Nama Matakuliah</b></label>
            <input type="text" name="namaMk" class="form-control" placeholder="Masukkan Nama Matakuliah" required>
            <div class="invalid-feedback">Silahkan masukkan Nama terlebih dahulu.</div>
          </div>

          <div class="form-group col-md-3">
            <label><b>Jumlah SKS</b></label>
            <div class="form-check">
                <input type="radio" name="sks" value="0" class="form-check-input" required>
              <label class="form-check-label">0 SKS</label>
            </div>
            <div class="form-check mb-2">
                <input type="radio" name="sks" value="3" class="form-check-input" required>
              <label class="form-check-label">3 SKS</label>
              <div class="invalid-feedback">Silahkan memilih SKS terlebih dahulu.</div>
            </div><br>
          </div>

          <div class="form-group col-md-2">
            <label><b>Harga</b></label>
            <input type="text" name="harga" class="form-control" placeholder="Masukkan Harga" required>
            <div class="invalid-feedback">Silahkan masukkan Harga terlebih dahulu.</div>
          </div>

          <div class="form-group col-md-7">
            <label><b>Nama Dosen Pengampuh</b></label>
            <input type="text" name="namaDosen" class="form-control" placeholder="Masukkan Nama Dosen" required>
            <div class="invalid-feedback">Silahkan masukkan Nama Dosen terlebih dahulu.</div>
          </div>
         
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" required>
              <label class="form-check-label">
                You must agree before submitting.
              </label>
            </div>
          </div>
          <div class="form-group pt-4">
            <input type="submit" value="Submit" class="btn btn-outline-success">
            <a type="button" href="/showMatakuliah" class="btn btn-outline-danger">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection