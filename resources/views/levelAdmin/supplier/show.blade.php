@extends('template.app')
@section('content')
<div class="section-header">
  <h1>Halaman Supplier</h1>
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
                <h3 class="text-center my-4">Detail Data Barang</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <div class="card-body">
                        <h3>{{ $supplier->nama_supplier }}</h3>
                        <p>{{ $supplier->alamat }}</p>
                        <p>{{ $supplier->no_hp }}</p>
                        <p>{{ $supplier->id_barang }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
