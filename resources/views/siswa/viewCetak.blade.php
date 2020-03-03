@extends('layouts.index')
@section('title')
    
@endsection

@section('style')
    <!-- DataTables -->
    <link href="{{ asset("assets/vendor/datatables/dataTables.bootstrap4.min.css")}}" rel="stylesheet">
@endsection

@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Daftar Siswa</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Daftar Siswa</h6>
              <form action="{{ url("/siswa/cetak") }}" method="get">
                  <input class="btn btn-info" type="submit" value="Cetak">
              </form>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nomor</th>
                      <th>NISN</th>
                      <th>Nama</th>
                      <th>Jenis Kelamin</th>
                      <th>Tempat lahir</th>
                      <th>tanggal lahir</th>
                      <th>Alamat</th>
                      <th>Orang tua</th>
                      <th>Program</th>
                      <th>Satuan Pendidikan</th>
                      <th>Mapel Pilihan</th>
                      <th>Option</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nomor</th>
                      <th>NISN</th>
                      <th>Nama</th>
                      <th>Jenis Kelamin</th>
                      <th>Tempat lahir</th>
                      <th>tanggal lahir</th>
                      <th>Alamat</th>
                      <th>Orang tua</th>
                      <th>Program</th>
                      <th>Satuan Pendidikan</th>
                      <th>Mapel Pilihan</th>
                      <th>Option</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($siswas as $siswa)
                    <tr>
                      <td>{{ $loop->index }}</td>
                      <td>{{ $siswa->nisn }}</td>
                      <td>{{ $siswa->nama }}</td>
                      <td>{{ $siswa->jenis_kelamin }}</td>
                      <td>{{ $siswa->tempat_lahir }}</td>
                      <td>{{ $siswa->alamat }}</td>
                      <td>{{ date("d-M-Y", strtotime($siswa->tanggal_lahir)) }}</td>
                      <td>{{ $siswa->nama_ortu}}</td>
                      <td>{{ $siswa->program }}</td>
                      <td>{{ $siswa->satuan_pendidikan }}</td>
                      <td>{{ $siswa->mapel_pilihan }}</td>
                      <td>
                        <a href="{{ url("/siswa/$siswa->id/edit") }}" class="btn btn-sm btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                        <form action="{{ url("siswa/$siswa->id")}}" method="post" style="display: inline">
                          <button type="submit" class="btn btn-sm btn-danger btn-action" >
                            <i class="fas fa-trash"></i>
                          </button>
                          @method("DELETE")
                          @csrf
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

    
@endsection

@section('script')
  <!-- DataTables -->
  <script src="{{ asset("assets/vendor/datatables/jquery.dataTables.js")}}"></script>
  <script src="{{ asset("assets/js/demo/datatables-demo.js")}}"></script>
@endsection