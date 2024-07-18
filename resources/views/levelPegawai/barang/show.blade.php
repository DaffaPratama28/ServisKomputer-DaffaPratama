@extends('template.app')
@section('content')
<div class="section-header">
  <h1>Halaman Barang</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Layout</a></div>
    <div class="breadcrumb-item">Default Layout</div>
  </div>
</div>


<div class="row">
    <div class="col-12">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <div class="card-body">
                        <h3>{{ $barang->nama_barang }}</h3>
                        <p>{{ $barang->merek }}</p>
                        <p>{{ $barang->harga }}</p>
                        <p>{{ $barang->stok }}</p>
                        <p>{{ $barang->satuan}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection