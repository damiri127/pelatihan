@extends('ormawa.dashboard.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 ml-3 mb-3 border-bottom">
  <h3>Buat Laporan</h3>
</div>
<a href="/dashboard-ormawa/buat-laporan" type="button" class="btn btn-warning mb-3 ml-3">Kembali</a>
<div class="card card-primary mr-5 ml-3">
  <div class="card-header">
    <h3 class="card-title"></h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="/dashboard-ormawa/buat-laporan" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="nama-ormawa">Nama Ormawa</label>
        <input type="text" class="form-control" name="nama_ormawa" value="{{ $nama->nama_ormawa }}" disabled>
      </div>
      <div class="form-group">
        <label for="kegiatan">Nama Kegiatan</label>
        <input type="text" class="form-control" name="nama_kegiatan" placeholder="nama kegiatan...">
      </div>
      <div class="form-group">
        <label for="tanggal">Tanggal Pelaksanaan</label>
        <input type="date" class="form-control" name="tanggal_pelaksanaan" placeholder="Tanggal pelaksanaan...">
      </div>
      <div class="form-group">
        <label for="kegiatan">Keterangan</label>
        <input type="textarea" class="form-control" name="keterangan" placeholder="Jelaskan secara ringkas kegiatan...">
      </div>
      <div class="form-group">
        <label for="formFile" class="form-label">Masukan Proposal</label>
        <input class="form-control" name="dokumen" type="file" id="formFile">
      <p class="text-danger">* Unggah file dalam bentuk pdf</p>
    </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Kirim</button>
    </div>
  </form>
</div>
@endsection