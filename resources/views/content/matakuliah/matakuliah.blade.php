@extends('layout.main')
@section('title', 'Matakuliah')
@section('content')
<div class="row align-items-md-stretch">
  <div class="col-md-12">
    <div class="h-100 p-3 text-white bg-success rounded-3">
      <h2>Daftar Matakuliah</h2>
    </div>
  </div>
</div>
<br>
<div class='card-header'>
  <a name="" id="" class="btn btn-success col-md-2" href="/matakuliah/formMatakuliah" role="button"><i class="bi bi-plus-square"></i> <b>ADD</b></a>
  <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/matakuliah/search">
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
        <th scope="col">Kode</th>
        <th scope="col">Nama Matakuliah</th>
        <th scope="col">SKS</th>
        <th scope="col">Harga</th>
        <th scope="col">Nama Dosen</th>
        <th scope="col">Modifikasi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($matakuliah as $no => $mk)
      <tr>
        <th scope="row">{{$matakuliah->firstItem() + $no}}</th>
        <td>{{$mk -> kode}}</td>
        <td>{{$mk -> namaMk}}</td>
        <td>{{$mk -> sks}}</td>
        <td>{{$mk -> harga}}</td>
        <td>{{$mk -> namaDosen}}</td>
        <td><a href="/matakuliah/updateMatakuliah/{{$mk->id}}" class="btn btn-outline-success"><i class="bi bi-pencil-square"></i></a>
          <button onclick="handleDelete({{$mk->id}})" class="btn btn-outline-danger"><i class="bi bi-x-square"></i></button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  Halaman Ke- {{$matakuliah->currentPage()}} <br>
  Total Data : {{$matakuliah->count()}} <br>
  Total Seluruh Data : {{$matakuliah->total()}}
  <span class="float-right">{{$matakuliah->links()}}</span>
</div>

<div class="modal fade" id="deleteMatakuliah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    link.href = "{{URL::to('/matakuliah/deleteMatakuliah/ ')}}" + id
    $('#deleteMatakuliah').modal('show')
  }

  function handleDeleteClose() {
    $('#deleteMatakuliah').modal('hide')
  }
</script>
@endsection