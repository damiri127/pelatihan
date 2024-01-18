@extends('kemahasiswaan.dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 ml-3 mb-3 border-bottom">
  <h3>Tambah data kemahasiswaan</h3>
</div>
<a href="/dashboard-kemahasiswaan/data-pengguna/data-kemahasiswaan" type="button" class="btn btn-warning mb-3 ml-3">Kembali</a>
<div class="card card-primary mr-5 ml-3">
  <div class="card-header">
    <h3 class="card-title"></h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form method="POST" action="/dashboard-kemahasiswaan/data-pengguna/data-kemahasiswaan">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="nip">NIP</label>
        <input type="text" class="form-control" name="NIP" placeholder="NIP..." required>
      </div>
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap..." required>
      </div>
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" name="alamat" placeholder="Alamat Rumah..." required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" placeholder="Email..." required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password..." required>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Kirim</button>
    </div>
  </form>
</div>
@endsection