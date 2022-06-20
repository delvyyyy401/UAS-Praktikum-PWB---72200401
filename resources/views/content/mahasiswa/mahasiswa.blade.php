@extends('layout.main')
@section('title', 'Mahasiswa')
@section('content')
<div class="row align-items-md-stretch">
  <div class="col-md-12">
    <div class="h-100 p-3 text-white bg-success rounded-3">
      <h2>Daftar Mahasiswa</h2>
    </div>
  </div>
</div>
<br>
<div class='card-header'>
  <a name="" id="" class="btn btn-success mr-sm-2 col-md-2" href="/mahasiswa/formMahasiswa" role="button"><i class="bi bi-plus-square"></i> <b>ADD</b></a>
  <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/mahasiswa/search">
    <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</div>
<br>
<div class='card-body'>
  @if(session('alertCreate'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{session('alertCreate')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif

  @if(session('alertUpdate'))
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>{{session('alertUpdate')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif

  @if(session('alertDelete'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{session('alertDelete')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif

  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">NIM</th>
        <th scope="col">Nama Mahasiswa</th>
        <th scope="col">Gender</th>
        <th scope="col">Prodi</th>
        <th scope="col">Fakultas</th>
        <th scope="col">Prodi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($mahasiswa as $no => $mhs)
      <tr>
        <th scope="row">{{$mahasiswa->firstItem() + $no}}</th>
        <td>{{$mhs -> nim}}</td>
        <td>{{$mhs -> nama}}</td>
        <td>{{$mhs -> gender}}</td>
        <td>{{$mhs -> fakultas}}</td>
        <td>{{$mhs -> prodi}}</td>
        <td><a href="/mahasiswa/updateMahasiswa/{{$mhs->id}}" class="btn btn-outline-success"><i class="bi bi-pencil-square"></i></a>
          <button onclick="handleDelete({{$mhs->id}})" class="btn btn-outline-danger"><i class="bi bi-x-square"></i></button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  Halaman Ke- {{$mahasiswa->currentPage()}} <br>
  Total Data : {{$mahasiswa->count()}} <br>
  Total Seluruh Data : {{$mahasiswa->total()}}
  <span class="float-right">{{$mahasiswa->links()}}</span>
</div>

<div class="modal fade" id="deleteMahasiswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Penghapusan</h5>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin menghapus data?
      </div>
      <div class="modal-footer">
        <a id="deleteLink" type="button" class="btn btn-danger">Ya</a>
        <button type="button" onclick="handleDeleteClose()" class="btn btn-success" data-dismiss="modal">Tidak</button>
      </div>
    </div>
  </div>
</div>

<script>
  function handleDelete(id) {
    var link = document.getElementById('deleteLink')
    link.href = "{{URL::to('/mahasiswa/deleteMahasiswa/ ')}}" + id
    $('#deleteMahasiswa').modal('show')
  }

  function handleDeleteClose() {
    $('#deleteMahasiswa').modal('hide')
  }
</script>
@endsection