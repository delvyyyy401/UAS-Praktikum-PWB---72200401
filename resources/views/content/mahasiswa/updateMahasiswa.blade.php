@extends('layout.main')
@section('title', 'Update Mahasiswa')
@section('content')

<div class="col-lg-12 vh-100">
  <div class='card mt-4'>
    <div class='card-header'>
      <b>Silahkan Melakukan Perubahan Data</b>
    </div>
    <div class='card-body'>
      <div class="container-fluid mt-2 rounded background-color-$green-200">
        <form action="/mahasiswa/updateMahasiswa/{{$mahasiswa->id}}" method="POST" class="pt-2 pb-2 row g-3 was-validated">
          @csrf
          @method('PUT')
          <div class="form-group col-md-3">
            <label><b>NIM</b></label>
            <input type="number" name="nim" class="form-control is-valid" value="{{$mahasiswa->nim}}" readonly>
          </div>

          <div class="form-group col-md-9">
            <label><b>Nama</b></label>
            <input type="text" name="nama" class="form-control" value="{{$mahasiswa->nama}}" required>
            <div class="invalid-feedback">Silahkan masukkan Nama terlebih dahulu.</div>
          </div>

          <div class="form-group col-md-3">
            <label><b>Gender</b></label>
            <div class="form-check">
                <input type="radio" name="gender" value="Pria" {{$mahasiswa->gender == 'Pria' ? 'checked':''}} class="form-check-input" required>  
                <label class="form-check-label">Pria</label>
            </div>
            <div class="form-check mb-3">
                <input type="radio" name="gender" value="Wanita" {{$mahasiswa->gender == 'Wanita' ? 'checked':''}} class="form-check-input" required>
              <label class="form-check-label">Wanita</label>
              <div class="invalid-feedback">Silahkan memilih Gender terlebih dahulu.</div>
            </div><br>
          </div>

          <div class="form-group col-md-3">
            <label><b>Fakultas</b></label>
            <select name="fakultas" class="form-control" required aria-label="select example">
                <option selected disabled value="">---Silahkan Pilih Fakultas--</option>
                <option value="Teknologi Informasi" {{$mahasiswa->fakultas == 'Teknologi Informasi' ? 'selected':''}}>Teknologi Informasi</option>
                <option value="Teologi" {{$mahasiswa->fakultas == 'Teologi' ? 'selected':''}}>Teologi</option>
                <option value="Arsitektur dan Desain" {{$mahasiswa->fakultas == 'Arsitektur dan Desain' ? 'selected':''}}>Arsitektur dan Desain</option>
                <option value="Bisnis" {{$mahasiswa->fakultas == 'Bisnis' ? 'selected':''}}>Bisnis</option>
                <option value="Kedokteran" {{$mahasiswa->fakultas == 'Kedokteran' ? 'selected':''}}>Kedokteran</option>
                <option value="Bioteknologi" {{$mahasiswa->fakultas == 'Bioteknologi' ? 'selected':''}}>Bioteknologi</option>
                <option value="Bahasa Inggris" {{$mahasiswa->fakultas == 'Bahasa Inggris' ? 'selected':''}}>Bahasa Inggris</option>
            </select>
            <div class="invalid-feedback">Silahkan memilih Fakultas terlebih dahulu.</div>
          </div>

            @php
                $prodi = explode(', ',$mahasiswa->prodi);
            @endphp
          <div class="form-group col-md-10">
            <label><b>Prodi</b></label>
            <div class="form-check">
                <input type="checkbox" name="prodi[]" value="Teologi" {{in_array('Teologi', $prodi) ? 'checked':'' }} class="form-check-input">Teologi<br>
                <input type="checkbox" name="prodi[]" value="Sistem Informasi" {{in_array('Sistem Informasi', $prodi) ? 'checked':'' }} class="form-check-input">Sistem Informasi<br>
                <input type="checkbox" name="prodi[]" value="Teknik Informatika" {{in_array('Teknik Informatika', $prodi) ? 'checked':'' }} class="form-check-input">Teknik Informatika<br>
                <input type="checkbox" name="prodi[]" value="Arsitektur" {{in_array('Arsitektur', $prodi) ? 'checked':'' }} class="form-check-input">Arsitektur<br>
                <input type="checkbox" name="prodi[]" value="Desain Produk" {{in_array('Desain Produk', $prodi) ? 'checked':'' }} class="form-check-input">Desain produk<br>
                <input type="checkbox" name="prodi[]" value="Manajemen" {{in_array('Manajemen', $prodi) ? 'checked':'' }} class="form-check-input">Manajemen<br>
                <input type="checkbox" name="prodi[]" value="Akuntansi" {{in_array('Akuntansi', $prodi) ? 'checked':'' }} class="form-check-input">Akuntansi<br>
                <input type="checkbox" name="prodi[]" value="Bioteknologi" {{in_array('Bioteknologi', $prodi) ? 'checked':'' }} class="form-check-input">Bioteknologi<br>
                <input type="checkbox" name="prodi[]" value="Kedokteran" {{in_array('Kedokteran', $prodi) ? 'checked':'' }} class="form-check-input">Kedokteran<br>
                <input type="checkbox" name="prodi[]" value="Bahasa Inggris" {{in_array('Bahasa Inggris', $prodi) ? 'checked':'' }} class="form-check-input">Bahasa Inggris
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
          
          <div class="form-group pt-4">
            <input type="submit" value="Submit" class="btn btn-outline-success">
            <a type="button" href="/showMahasiswa" class="btn btn-outline-danger">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection