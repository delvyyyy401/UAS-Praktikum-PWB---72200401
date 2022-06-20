<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Home</title>

    <!-- Bootstrap CSS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/sweetalert2/0.4.5/sweetalert2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn/jsdelivr.net/sweetalert2/0.4.5/sweetalert2.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" id="bootstrap-css">
  

</head>
  
  <style>
    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 1;
      width: 1.5rem;
      height: 100vh;
    }
  </style>

<body>
  <main class="d-flex flex-nowrap">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-success" style="width: 240px;">
      <img src="{{ ('img/LOGO UKDW.png') }}">

      <hr>
      <ul class="nav nav-pills flex-column mb-auto" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <li class="nav-item">
          <a href="/showDashboard" class="nav-link text-white" aria-selected="true">
            <use class="bi bi-house-door-fill"/> Dashboard
          </a>
        </li>
        <li>
          <a href="/showMahasiswa" class="nav-link text-white" aria-selected="false">
            <use class="bi bi-people-fill"/> Mahasiswa
          </a>
        </li>
        <li>
          <a href="/showDosen" class="nav-link text-white" aria-selected="false">
            <use class="bi bi-person-workspace"/> Dosen
          </a>
        </li>
        <li>
          <a href="/showMatakuliah" class="nav-link text-white" aria-selected="false">
            <use class="bi bi-list-ul"/> Matakuliah
          </a>
        </li>
      </ul>
      </hr>

      <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://avatars.githubusercontent.com/u/98681?v=4" alt="" width="32" height="32" class="rounded-circle me-2">
          <strong>{{Auth::user()->username ?? ''}}</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
          <li><button onclick="handleProfile()" class="dropdown-item">Profile</button></li>
          <li><a class="dropdown-item" href="/showUser">Data User</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="/logout">Sign out</a></li>
        </ul>
      </div>
    </div>
    
    <div class="b-example-divider b-example-vr"></div>
    <div class="col-lg-10 text flex-column container-md">
      @yield('content')
    </div>
  </main>

  <div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data User Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Username</label>
            <input type="text" value="{{Auth::user()->username ?? ''}}" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Lengkap</label>
            <input type="text" value="{{Auth::user()->name ?? ''}}" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Email</label>
            <input type="email" value="{{Auth::user()->email ?? ''}}" class="form-control" readonly>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" onclick="handleProfileClose()" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
  function handleProfile() {
    $('#profile').modal('show')
  }
  function handleProfileClose() {
    $('#profile').modal('hide')
  }
</script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
  <script src="https://cdn.jsdelivr.net/sweetalert2/0.4.5/sweetalert2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <div class="modal fade" id="deleteKonfirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>