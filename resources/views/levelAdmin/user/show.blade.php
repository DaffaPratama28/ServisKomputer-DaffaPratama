@extends('template.app')
@section('content')
<div class="section-header">
  <h1>Halaman Pengguna</h1>
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
              <h3 class="text-center my-4">Data Pengguna</h3>
              <hr>
          </div>
          <div class="card border-0 shadow-sm rounded">
              <div class="card-body">
                  <div class="card-body">
                      <h3>{{ $pengguna->username }}</h3>
                      <p>{{ $pengguna->email }}</p>
                      <p>{{ $pengguna->level }}</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection



