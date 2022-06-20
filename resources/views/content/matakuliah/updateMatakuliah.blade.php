@extends('layout.main')
@section('title', 'Update Matakuliah')
@section('content')

<div class="col-lg-12 vh-100">
  <div class='card mt-4'>
    <div class='card-header'>
      <b>Silahkan Melakukan Perubahan Data</b>
    </div>
    <div class='card-body'>
      <div class="container-fluid mt-2 rounded background-color-$green-200">
        <form action="/matakuliah/updateMatakuliah/{{$matakuliah->id}}" method="POST" class="pt-2 pb-2 row g-3 was-validated">
          @csrf
          @method('PUT')
          <div class="form-group col-md-3">
            <label><b>Kode</b></label>
            <input type="text" name="kode" class="form-control" value="{{$matakuliah->kode}}" readonly>
          </div>

          <div class="form-group col-md-9">
            <label><b>Nama Matakuliah</b></label>
            <input type="text" name="namaMk" class="form-control" value="{{$matakuliah->namaMk}}" required>
            <div class="invalid-feedback">Silahkan masukkan Nama terlebih dahulu.</div>
          </div>

          <div class="form-group col-md-3">
            <label><b>Jumlah SKS</b></label>
            <div class="form-check">
                <input type="radio" name="sks" value="0" {{$matakuliah->sks == '0' ? 'checked':''}} class="form-check-input" required>  
              <label class="form-check-label">0 SKS</label>
            </div>
            <div class="form-check mb-2">
                <input type="radio" name="sks" value="3" {{$matakuliah->sks == '3' ? 'checked':''}} class="form-check-input" required>  
              <label class="form-check-label">3 SKS</label>
              <div class="invalid-feedback">Silahkan memilih SKS terlebih dahulu.</div>
            </div><br>
          </div>

          <div class="form-group col-md-2">
            <label><b>Harga</b></label>
            <input type="text" name="harga" class="form-control" value="{{$matakuliah->harga}}" required>
            <div class="invalid-feedback">Silahkan masukkan Harga terlebih dahulu.</div>
          </div>

          <div class="form-group col-md-7">
            <label><b>Nama Dosen Pengampuh</b></label>
            <input type="text" name="namaDosen" class="form-control" value="{{$matakuliah->namaDosen}}" required>
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