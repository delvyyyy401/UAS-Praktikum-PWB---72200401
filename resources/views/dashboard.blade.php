@extends('layout.main')
@section('title', 'Dashboard')
@section('content')
  <div class="row align-items-md-stretch">
    <div class="col-md-12">
      <div class="h-100 p-3 text-white bg-success rounded-3">
        <h2>Welcome {{Auth::user()->name ?? ''}} !!</h2>
        <p>Anda login sebagai, {{Auth::user()->username ?? ''}}</p>
      </div>
    </div>
    <div class="content-wrapper">
    <div class="container-fluid"><br>
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/sweetalert2/0.4.5/sweetalert2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn/jsdelivr.net/sweetalert2/0.4.5/sweetalert2.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" id="bootstrap-css">
  
<style type="text/css">
  .circle-tile {
      margin-bottom: 15px;
      text-align: center;
  }
  .circle-tile-heading {
      border: 3px solid rgba(255, 255, 255, 0.3);
      border-radius: 100%;
      color: #FFFFFF;
      height: 80px;
      margin: 0 auto -40px;
      position: relative;
      transition: all 0.3s ease-in-out 0s;
      width: 80px;
  }
  .circle-tile-heading .fa {
      line-height: 80px;
  }
  .circle-tile-content {
      padding-top: 50px;
  }
  .circle-tile-number {
      font-size: 26px;
      font-weight: 700;
      line-height: 1;
      padding: 5px 0 15px;
  }
  .circle-tile-description {
      text-transform: uppercase;
  }
  .circle-tile-footer {
      background-color: rgba(0, 0, 0, 0.1);
      color: rgba(255, 255, 255, 0.5);
      display: block;
      padding: 5px;
      transition: all 0.3s ease-in-out 0s;
  }
  .circle-tile-footer:hover {
      background-color: rgba(0, 0, 0, 0.2);
      color: rgba(255, 255, 255, 0.5);
      text-decoration: none;
  }
  .circle-tile-heading.dark-blue:hover {
      background-color: #2E4154;
  }
  .circle-tile-heading.green:hover {
      background-color: #138F77;
  }
  .circle-tile-heading.orange:hover {
      background-color: #DA8C10;
  }
  .circle-tile-heading.blue:hover {
      background-color: #2473A6;
  }
  .circle-tile-heading.red:hover {
      background-color: #CF4435;
  }
  .circle-tile-heading.purple:hover {
      background-color: #7F3D9B;
  }
  .tile-img {
      text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.9);
  }

  .dark-blue {
      background-color: #34495E;
  }
  .green {
      background-color: #16A085;
  }
  .blue {
      background-color: #2980B9;
  }
  .orange {
      background-color: #F39C12;
  }
  .red {
      background-color: #E74C3C;
  }
  .purple {
      background-color: #8E44AD;
  }
  .dark-gray {
      background-color: #7F8C8D;
  }
  .gray {
      background-color: #95A5A6;
  }
  .light-gray {
      background-color: #BDC3C7;
  }
  .yellow {
      background-color: #F1C40F;
  }
  .text-dark-blue {
      color: #34495E;
  }
  .text-green {
      color: #16A085;
  }
  .text-blue {
      color: #2980B9;
  }
  .text-orange {
      color: #F39C12;
  }
  .text-red {
      color: #E74C3C;
  }
  .text-purple {
      color: #8E44AD;
  }
  .text-faded {
      color: rgba(255, 255, 255, 0.7);
  }
   </style>

<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<div class="container justify-content-center">
  <div class="row">
    <div class="col-lg-2 col-sm-6">
      <div class="circle-tile ">
        <div class="circle-tile-heading dark-blue"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
        <div class="circle-tile-content dark-blue">
          <div class="circle-tile-description text-faded"> Mahasiswa </div>
          
          <div class="circle-tile-number text-faded ">{{$mahasiswa->count()}}</div>
          <a class="circle-tile-footer" href="/showMahasiswa">More Info <i class="fa fa-chevron-circle-right"></i></a>
        </div>
      </div>
    </div>
     
    <div class="col-lg-2 col-sm-6">
      <div class="circle-tile ">
        <div class="circle-tile-heading red"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
        <div class="circle-tile-content red">
          <div class="circle-tile-description text-faded"> Dosen </div>
          <div class="circle-tile-number text-faded ">{{$dosen->count()}}</div>
          <a class="circle-tile-footer" href="/showDosen">More Info <i class="fa fa-chevron-circle-right"></i></a>
        </div>
      </div>
    </div> 

    <div class="col-lg-2 col-sm-6">
      <div class="circle-tile ">
        <div class="circle-tile-heading green"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
        <div class="circle-tile-content green">
          <div class="circle-tile-description text-faded"> Matakuliah </div>
          <div class="circle-tile-number text-faded ">{{$dosen->count()}}</div>
          <a class="circle-tile-footer" href="/showMatakuliah">More Info <i class="fa fa-chevron-circle-right"></i></a>
        </div>
      </div>
    </div> 
  </div> 
</div>  
  
</div>
</div>
    </div>
  </div>
  <br>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
  <script src="https://cdn.jsdelivr.net/sweetalert2/0.4.5/sweetalert2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <div class="modal fade" id="deleteKonfirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

@endsection