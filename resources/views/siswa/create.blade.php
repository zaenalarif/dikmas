@extends('layouts.index')

@section('title')
    
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset("plugins/datatables-bs4/css/dataTables.bootstrap4.css")}}">
@endsection

@section('content')

  <div class="content">
    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4>Data peserta</h4>
          </div>
          @if ($errors->any())
              @foreach( $errors->all() as $error)
                {{ $error }}
              @endforeach
          @endif
          <form class="card-body" method="POST" action="{{ url('/siswa/create') }}">
            <div class="form-group">
              <label>NISN</label>
              <input type="text" class="form-control {{ $errors->has("nisn") ? 'is-invalid' : NULL }}" name="nisn" value="{{ old("nisn") }}">
              @if ($errors->has("nisn"))
                <div class="invalid-feedback">
                  Nisn harus di isi dan tidak boleh sama
                </div>
              @endif
            </div>
            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control {{ $errors->has('nama') ? 'is-invalid' : NULL }}" name="nama" value="{{ old("nama") }}">
              @if ($errors->has("nama"))
                <div class="invalid-feedback">
                  Nama harus di isi
                </div>
              @endif
            </div>
            
            <div class="form-group">
              <label class="form-label">Jenis Kelamin</label>
              <div class="selectgroup w-100">
                <label class="selectgroup-item">
                  <input type="radio" name="jenis_kelamin" value="laki-laki" class="selectgroup-input" checked="">
                  <span class="selectgroup-button">Laki - laki</span>
                </label>
                <label class="selectgroup-item">
                  <input type="radio" name="jenis_kelamin" value="perempuan" class="selectgroup-input">
                  <span class="selectgroup-button">Perempuan</span>
                </label>
              </div>
            </div>
            
            <div class="form-group">
              <label>Tempat lahir</label>
              <input type="text" class="form-control {{ $errors->has('tempat_lahir') ? 'is-invalid' : NULL }}" name="tempat_lahir" value="{{ old("tempat_lahir") }}">
              @if ($errors->has("tempat_lahir"))
                <div class="invalid-feedback">
                  Tempat lahir harus di isi
                </div>
              @endif
            </div>

            <div class="form-group">
              <label>Tanggal lahir</label>
              <input type="date" class="form-control {{ $errors->has("tanggal_lahir") ? 'is-invalid' : NULL }}" name="tanggal_lahir" value="{{ old("tanggal_lahir") }}">
              @if ($errors->has("tanggal_lahir"))
                <div class="invalid-feedback">
                  Tanggal lahir harus di isi
                </div>
              @endif
            </div>

            <div class="form-group">
              <label>Nama orang tua</label>
              <input type="text" class="form-control {{ $errors->has("nama_ortu") ? 'is-invalid' : NULL }} " name="nama_ortu" value="{{ old('nama_ortu') }}">
              @if ($errors->has("nama_ortu"))
                <div class="invalid-feedback">
                  Nama Orang tua harus di isi
                </div>
              @endif
            </div>

            <div class="form-group">
              <label>Program</label>
              <input type="text" class="form-control" name="program" value="{{ old('program') ? old('program') : 'IPS' }}" >
            </div>

            <div class="form-group">
              <label>Mapel pilihan</label>
              <input type="text" class="form-control" name="mapel_pilihan" value="{{ old('mapel_pilihan') ? old('mapel_pilihan') : 'Sosiologi'}}">
            </div>

            <div class="d-flex justify-content-between">
              <button type="reset" class="btn btn-info btn-lg ">Reset</button>
              <button type="submit" class="btn btn-success btn-lg">Tambah</button>
            </div>
            @csrf
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
    
@endsection

@section('script')
    <!-- DataTables -->
    <script src="{{ asset("plugins/datatables/jquery.dataTables.js")}}"></script>
    <script src="{{ asset("plugins/datatables-bs4/js/dataTables.bootstrap4.js")}}"></script>
@endsection