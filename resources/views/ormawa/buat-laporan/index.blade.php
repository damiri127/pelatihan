@extends('ormawa.dashboard.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 ml-3 mb-3">
  <h2>Data Laporan</h2>
</div>
<a href="/dashboard-ormawa/buat-laporan/create" class="btn btn-success mb-3 ml-3"><i class="nav-icon fas fa-plus"></i> Tambah data</a>
  <br>
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
              <td class="px-3">
                <div class="row">
                  <div class="col-auto">
                    <a href="/dashboard-ormawa/buat-laporan/{{ $row->id_laporan}}/edit" class="btn btn-sm btn-warning"><i class="nav-icon fas fa-pen"></i></a>
                  </div>
                  <div class="col-auto">
                    <form action="/dashboard-ormawa/buat-laporan/{{ $row->id_laporan}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Kamu yakin mau hapus?')"><i class="nav-icon fas fa-trash"></i></button>
                    </form>
                  </div>
                </div>
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