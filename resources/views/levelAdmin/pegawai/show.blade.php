@extends('template.app')
@section('content')
<div class="section-header">
  <h1>Halaman Pegawai</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Layout</a></div>
    <div class="breadcrumb-item">Default Layout</div>
  </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Detail Data Pegawai</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <div class="card-body">
                        <h3>{{ $pegawai->nama_pegawai }}</h3>
                        <p>{{ $pegawai->alamat }}</p>
                        <p>{{ $pegawai->jenis_kelamin }}</p>
                        <p>{{ $pegawai->jabatan }}</p>
                        <p>{{ $pegawai->status }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
