@extends('layouts.index')
@section('title')
    
@endsection

@section('css')
    <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset("plugins/datatables-bs4/css/dataTables.bootstrap4.css")}}">
@endsection

@section('content')

<div class="section-header">
  </div>

  <div class="section-body">

    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
          <div class="card-body">
            <div class="row center">
              <div class="col">
                <form action="{{ url("/siswa/import") }}" method="post" enctype="multipart/form-data">
                  <input type="file" name="file" id="">
                  <button type="submit">Import</button>
                  @csrf
                </form>
              </div>
              <div class="col">
                <a href="{{ url('siswa/cetak') }}" class="btn btn-secondary" >Download</a>  
              </div>
              <div class="col">
                <a href="{{url('siswa/create')}}" class="btn btn-info">Tambah</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">


        <div class="card">
          <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th class="text-center">
                  #
                </th>
                <th>NISN</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat lahir</th>
                <th>tanggal lahir</th>
                <th>Orang tua</th>
                <th>Program</th>
                <th>Mapel Pilihan</th>
                <th>Option</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($siswas as $siswa)
                <tr>
                  <td>{{ $loop->index }}</td>
                  <td>{{ $siswa->nisn }}</td>
                  <td>{{ $siswa->nama }}</td>
                  <td>{{ $siswa->jenis_kelamin }}</td>
                  <td>{{ $siswa->tempat_lahir }}</td>
                  <td>{{ date("d-M-Y", strtotime($siswa->tanggal_lahir)) }}</td>
                  <td>{{ $siswa->nama_ortu}}</td>
                  <td>{{ $siswa->program }}</td>
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
              <tfoot>
              <tr>
                <th class="text-center">
                  #
                </th>
                <th>NISN</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat lahir</th>
                <th>tanggal lahir</th>
                <th>Orang tua</th>
                <th>Program</th>
                <th>Mapel Pilihan</th>
                <th>Option</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </div>
  </div>

@endsection

@section('script')
  <!-- DataTables -->
  <script src="{{ asset("plugins/datatables/jquery.dataTables.js")}}"></script>
  <script src="{{ asset("plugins/datatables-bs4/js/dataTables.bootstrap4.js")}}"></script>

  <script>
    $(function () {
    $('#example1').DataTable();
  });
  </script>
@endsection