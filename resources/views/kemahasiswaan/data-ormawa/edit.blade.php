@extends('kemahasiswaan.dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 ml-3 mb-3 border-bottom">
  <h3>Ubah data Ormawa</h3>
</div>
<a href="/dashboard-kemahasiswaan/data-pengguna/data-ormawa" type="button" class="btn btn-warning mb-3 ml-3">Kembali</a>
<div class="card card-primary mr-5 ml-3">
  <div class="card-header">
    <h3 class="card-title"></h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form method="post" action="{{ url('/dashboard-kemahasiswaan/data-pengguna/data-ormawa/'.$id_ormawa) }}">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="nama-ormawa">Nama Ormawa</label>
        <input type="text" class="form-control" name="nama_ormawa" value="{{ $data->nama_ormawa }}" required>
      </div>
      <div class="form-group">
        <label for="nama-ormawa">Nama Pembina</label>
        <input type="text" class="form-control" name="nama_pembina" required value="{{ $data->nama_pembina }}">
      </div>
      <div class="form-group">
        <label for="kegiatan">Nama Ketua Umum</label>
        <input type="text" class="form-control" name="nama_ketua" required value="{{ $data->nama_ketua }}">
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