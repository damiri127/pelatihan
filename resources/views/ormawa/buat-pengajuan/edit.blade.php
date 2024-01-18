@extends('ormawa.dashboard.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 ml-3 mb-3 border-bottom">
  <h3>Edit data Pengajuan</h3>
</div>
<a href="/dashboard-ormawa/buat-pengajuan" type="button" class="btn btn-warning mb-3 ml-3"><i class="nav-icon fas fa-arrows-left"></i> Kembali</a>
<div class="card card-primary mr-5 ml-3">
  <div class="card-header">
    <h3 class="card-title"></h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="{{ url('/dashboard-ormawa/buat-pengajuan/'.$id_dokumen) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="nama-ormawa">Nama Ormawa</label>
        <input type="text" class="form-control" id="nama" name="nama_ormawa" value="{{ $nama->nama_ormawa }}" disabled>
      </div>
      <div class="form-group">
        <label for="kegiatan">Nama Kegiatan</label>
        <input type="text" class="form-control" id="kegiatan" name="nama_kegiatan" value="{{ $data->nama_kegiatan }}" required>
      </div>
      <div class="form-group">
        <label for="tanggal">Tanggal Pelaksanaan</label>
        <input type="date" class="form-control" id="tanggal" name="tanggal_pelaksanaan" value="{{ $data->tanggal_pelaksanaan }}" required>
      </div>
      <div class="form-group">
        <label for="kegiatan">Keterangan</label>
        <input type="textarea" class="form-control" id="keterangan" name="keterangan" value="{{ $data->keterangan}}" @required(true)>
      </div>
      <div class="form-group">
          <label for="formFile" class="form-label">Masukan Proposal</label>
          <input class="form-control" name="dokumen" value="{{ $data->dokumen}}" type="file" id="formFile" required>
        <p class="text-danger">* Unggah file dalam bentuk pdf</p>
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