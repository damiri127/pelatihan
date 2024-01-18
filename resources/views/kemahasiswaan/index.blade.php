@extends('kemahasiswaan.dashboard.layouts.main')

@section('content')
<div class="container-fluid ">
  <!-- Info boxes -->
  <div class="row">
    <div class="col-lg-3 col-6 mt-4">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{ $pengajuan }}</h3>
          <p>Data Pengajuan</p>
        </div>
        <div class="icon">
          <i class="fa fa-file"></i>
        </div>
        <a href="/dashboard-kemahasiswaan/data-pengajuan" class="small-box-footer"
          >More info <i class="fas fa-arrow-circle-right"></i
        ></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6 mt-4">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{ $laporan }}</h3>
          <p>Data Laporan</p>
        </div>
        <div class="icon">
          <i class="fa fa-file"></i>
        </div>
        <a href="/dashboard-kemahasiswaan/data-laporan" class="small-box-footer"
          >More info <i class="fas fa-arrow-circle-right"></i
        ></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6 mt-4">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{ $kemahasiswaan }}</h3>

          <p>Data Kemahasiswaan</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="/dashboard-kemahasiswaan/data-pengguna/data-kemahasiswaan" class="small-box-footer"
          >More info <i class="fas fa-arrow-circle-right"></i
        ></a>
      </div>
    </div>
    <div class="col-lg-3 col-6 mt-4">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>{{ $ormawa }}</h3>

          <p>Data Ormawa</p>
        </div>
        <div class="icon">
          <i class="fa fa-users"></i>
        </div>
        <a href="/dashboard-kemahasiswaan/data-pengguna/data-ormawa" class="small-box-footer"
          >More info <i class="fas fa-arrow-circle-right"></i
        ></a>
      </div>
    </div>
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->
  <!-- Main row -->
  <!-- /.row -->
</div>
@endsection