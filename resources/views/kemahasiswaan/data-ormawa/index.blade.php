@extends('kemahasiswaan.dashboard.layouts.main')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ml-3 border-bottom">
    <h2>Data Ormawa</h2>
</div>
<a href="/dashboard-kemahasiswaan/data-pengguna/data-ormawa/create" class="btn btn-success mb-3 ml-3"><i class="nav-icon fas fa-plus"></i> Tambah data</a>
<div class="card ml-3 mr-5">
    <!-- /.card-header -->
    <div class="card-body p-0">
      <table class="table table-striped">
        <thead>
          <tr>
            <th style="width: 20px">No</th>
            <th>Nama Ormawa</th>
            <th>Nama Pembina</th>
            <th>Nama Ketua</th>
            {{-- <th>Email</th> --}}
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          {{-- Isi Table --}}
          @foreach ($data as $item)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $item->nama_ormawa }}</td>
              <td>{{ $item->nama_pembina }}</td>
              <td>{{ $item->nama_ketua }}</td>
              <td class="px-3">
                <div class="row">
                  <div class="col-auto">
                    <a href="{{ url('/dashboard-kemahasiswaan/data-pengguna/data-ormawa/'.$item->id_ormawa) }}/edit" class="btn btn-sm btn-warning"><i class="fa fa-pen"></i></a>
                  </div>
                  <div class="col-auto">
                    <form action="{{ url('/dashboard-kemahasiswaan/data-pengguna/data-ormawa/'.$item->id_ormawa) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button onclick="confirm ('kamu yakin mau hapus?')" type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
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