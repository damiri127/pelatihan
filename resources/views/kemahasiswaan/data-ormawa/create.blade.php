@extends('kemahasiswaan.dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 ml-3 mb-3 border-bottom">
  <h3>Tambah data Ormawa</h3>
</div>
<a href="/dashboard-kemahasiswaan/data-pengguna/data-ormawa" type="button" class="btn btn-warning mb-3 ml-3">Kembali</a>
<div class="card card-primary mr-5 ml-3">
  <div class="card-header">
    <h3 class="card-title"></h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form method="post" action="/dashboard-kemahasiswaan/data-pengguna/data-ormawa">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="nama-ormawa">Nama Ormawa</label>
        <input type="text" class="form-control" name="nama_ormawa" required placeholder="Nama Ormawa...">
      </div>
      <div class="form-group">
        <label for="nama-ormawa">Nama Pembina</label>
        <input type="text" class="form-control" name="nama_pembina" required placeholder="Nama Pembina...">
      </div>
      <div class="form-group">
        <label for="kegiatan">Nama Ketua Umum</label>
        <input type="text" class="form-control" name="nama_ketua" required placeholder="Nama ketua umum...">
      </div>
      <div class="form-group">
        <label for="kegiatan">Email</label>
        <input type="text" class="form-control" required name="email" placeholder="Email...">
      </div>
      <div class="form-group">
        <label for="kegiatan">Password</label>
        <input type="password" class="form-control" required name="password" placeholder="Password...">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Kirim</button>
    </div>
  </form>
</div>
@endsection