@extends('kemahasiswaan.dashboard.layouts.main')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 ml-3 mb-3 border-bottom">
  <h2>Data laporan</h2>
</div>
<div class="card">
  <!-- /.card-header -->
  <div class="card-body p-0">
    <table class="table table-striped">
      <thead>
        <tr>
          <th style="width: 10px">No</th>
          <th>Nama UKM</th>
          <th>Nama Kegiatan</th>
          <th>Tanggal Pelaksanaan</th>
          <th>Keterangan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        {{-- Isi Table --}}
        @foreach ($data as $row)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $row->nama_ormawa }}</td>
              <td>{{ $row->nama_kegiatan }}</td>
              <td>{{ $row->tanggal_pelaksanaan }}</td>
              <td>{{ $row->keterangan }}</td>
              <td>
                  <a href="/file/{{$row->dokumen}}" class="btn btn-sm btn-info" target="_blank"><i class="nav-icon fas fa-download"></i> Unduh</a>
              </td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
  @include('sweetalert::alert')
</div>
@endsection