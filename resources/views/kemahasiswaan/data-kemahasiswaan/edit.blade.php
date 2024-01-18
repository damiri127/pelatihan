@extends('kemahasiswaan.dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 ml-3 mb-3 border-bottom">
  <h3>Ubah data kemahasiswaan</h3>
</div>
<a href="/dashboard-kemahasiswaan/data-pengguna/data-kemahasiswaan" type="button" class="btn btn-warning mb-3 ml-3">Kembali</a>
<div class="card card-primary mr-5 ml-3">
  <div class="card-header">
    <h3 class="card-title"></h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form method="POST" action="{{ url('/dashboard-kemahasiswaan/data-pengguna/data-kemahasiswaan/'.$id_kemahasiswaan) }}">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="nip">NIP</label>
        <input type="text" class="form-control"  name="nip" value="{{ $data->nip }}" required>
      </div>
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" value="{{ $data->nama }}" required>
      </div>
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" name="alamat" value="{{ $data->alamat }}" required>
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        @method('PUT')
      <button type="submit" class="btn btn-primary">Ubah</button>
    </div>
  </form>
</div>
@endsection