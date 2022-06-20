@extends('layout.main')
@section('title', 'User')
@section('content')
<div class="row align-items-md-stretch">
  <div class="col-md-12">
    <div class="h-100 p-3 text-white bg-success rounded-3">
      <h2>Daftar User</h2>
    </div>
  </div>
</div>
<br>
<div class='card-header'>
  <a name="" id="" class="btn btn-success col-md-2" href="/user/formUser" role="button"><i class="bi bi-plus-square"></i> <b>ADD</b></a>
  <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/user/search">
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
        <th scope="col">Username</th>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">Email</th>
        <th scope="col">Modifikasi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($user as $no => $us)
      <tr>
        <th scope="row">{{$user->firstItem() + $no}}</th>
        <td>{{$us -> username}}</td>
        <td>{{$us -> name}}</td>
        <td>{{$us -> email}}</td>
        <td><a href="/user/updateUser/{{$us->id}}" class="btn btn-outline-success"><i class="bi bi-pencil-square"></i></a>
          <button onclick="handleDelete({{$us->id}})" class="btn btn-outline-danger"><i class="bi bi-x-square"></i></button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  Halaman Ke- {{$user->currentPage()}} <br>
  Total Data : {{$user->count()}} <br>
  Total Seluruh Data : {{$user->total()}}
  <span class="float-right">{{$user->links()}}</span>
</div>

<div class="modal fade" id="deleteUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    link.href = "{{URL::to('/user/deleteUser/ ')}}" + id
    $('#deleteUser').modal('show')
  }

  function handleDeleteClose() {
    $('#deleteUser').modal('hide')
  }
</script>
@endsection