@extends('layout.main')
@section('title', 'Update Dosen')
@section('content')

<div class="col-lg-12 vh-100">
  <div class='card mt-4'>
    <div class='card-header'>
      <b>Silahkan Menambahkan Data Baru</b>
    </div>
    <div class='card-body'>
      <div class="container-fluid mt-2 rounded background-color-$green-200">
        <form action="/dosen/updateDosen/{{$dosen->id}}" method="POST" class="pt-2 pb-2 row g-3 was-validated">
          @csrf
          @method('PUT')
          <div class="form-group col-md-3">
            <label><b>NIP</b></label>
            <input type="number" name="nip" class="form-control is-valid" value="{{$dosen->nip}}" readonly>
          </div>

          <div class="form-group col-md-9">
            <label><b>Nama</b></label>
            <input type="text" name="nama" class="form-control" value="{{$dosen->nama}}" required>
            <div class="invalid-feedback">Silahkan masukkan Nama terlebih dahulu.</div>
          </div>

          <div class="form-group col-md-3">
            <label><b>Gender</b></label>
            <div class="form-check">
                <input type="radio" name="gender" value="Pria" {{$dosen->gender == 'Pria' ? 'checked':''}} class="form-check-input" required>  
                <label class="form-check-label">Pria</label>
            </div>
            <div class="form-check mb-3">
                <input type="radio" name="gender" value="Wanita" {{$dosen->gender == 'Wanita' ? 'checked':''}} class="form-check-input" required>
              <label class="form-check-label">Wanita</label>
              <div class="invalid-feedback">Silahkan memilih Gender terlebih dahulu.</div>
            </div><br>
          </div>

          <div class="form-group col-md-3">
            <label><b>No Kontak</b></label>
            <input type="text" name="no_hp" class="form-control" value="{{$dosen->no_hp}}"  required>
            <div class="invalid-feedback">
              Silahkan masukkan No Kontak terlebih dahulu.
            </div>
          </div>

          <div class="form-group col-md-3">
            <label><b>Email</b></label>
            <input type="email" name="email" class="form-control" value="{{$dosen->email}}" required>
            <div class="invalid-feedback">
              Silahkan masukkan Email terlebih dahulu.
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
          <div class="form-group pt-4">
            <input type="submit" value="Submit" class="btn btn-outline-success">
            <a type="button" href="/showDosen" class="btn btn-outline-danger">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection