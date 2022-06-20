@extends('layout.main')
@section('title', 'Update User')
@section('content')

<div class="col-lg-12 vh-100">
  <div class='card mt-4'>
    <div class='card-header'>
      <b>Silahkan Menambahkan Data Baru</b>
    </div>
    <div class='card-body'>
      <div class="container-fluid mt-2 rounded background-color-$green-200">
        <form action="/user/updateUser/{{$user->id}}" method="POST" class="pt-2 pb-2 row g-3 was-validated">
          @csrf
          @method('PUT')
            <div class="col-md-3 position-relative">
                <label class="form-label">Username</label>
                <div class="input-group has-validation">
                    <span class="input-group-text">@</span>
                    <input type="text" name="username" class="form-control" value="{{$user->username}}" required>
                    <div class="invalid-feedback">
                        Please choose a unique and valid username.
                    </div>
                </div>
            </div>

          <div class="form-group col-md-9">
            <label><b>Nama User</b></label>
            <input type="text" name="name" class="form-control"  value="{{$user->name}}"  required>
            <div class="invalid-feedback">Silahkan masukkan Nama User terlebih dahulu.</div>
          </div>

          <div class="form-group col-md-5">
            <label><b>Email</b></label>
            <input type="email" name="email" class="form-control"  value="{{$user->email}}"  required>
            <div class="invalid-feedback">Silahkan masukkan Email terlebih dahulu.</div>
          </div>

          <div class="form-group col-md-3">
            <label><b>Password</b></label>
            <input type="text" name="password" class="form-control"  value="{{$user->password}}"  required>
            <div class="invalid-feedback">Silahkan masukkan Passoword terlebih dahulu.</div>
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
            <a type="button" href="/showUser" class="btn btn-outline-danger">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection