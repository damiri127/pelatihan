@extends('kemahasiswaan.dashboard.layouts.main')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 ml-3 mb-3 border-bottom">
    <h2>Data Kemahasiswaan</h2>
</div>
<a href="/dashboard-kemahasiswaan/data-pengguna/data-kemahasiswaan/create" class="btn btn-success mb-3 ml-3">
  <i class="nav-icon fas fa-plus"></i> Tambah data</a>
<div class="card ml-3 mr-5">
    <!-- /.card-header -->
    <div class="card-body p-0">
      <table class="table table-striped">
        <thead>
          <tr>
            <th style="width: 20px">No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Alamat</th>
            {{-- <th>Email</th>
            <th>Password</th> --}}
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          {{-- Isi Table --}}
          @foreach ($data as $rows)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $rows->nip }}</td>
                <td>{{ $rows->nama }}</td>
                <td>{{ $rows->alamat }}</td>
                {{-- <td>{{ $rows->email }}</td>
                <td>{{ $rows->password }}</td> --}}
                <td class="px-3">
                  <div class="row">
                    <div class="col-auto">
                      <a href="/dashboard-kemahasiswaan/data-pengguna/data-kemahasiswaan/{{ $rows->id_kemahasiswaan }}/edit" class="btn btn-sm btn-warning"><i class="fa fa-pen"></i></a>
                    </div>
                    <div class="col-auto">
                      <form action="{{ url('/dashboard-kemahasiswaan/data-pengguna/data-kemahasiswaan/'.$rows->id_kemahasiswaan) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="confirm('Kamu yakin mau hapus?')" class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i></button>
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