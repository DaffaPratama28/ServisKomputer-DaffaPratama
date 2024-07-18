@extends('template.app')
@section('content')
<div class="section-header">
  <h1>Halaman Komputer</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Layout</a></div>
    <div class="breadcrumb-item">Default Layout</div>
  </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Detail Data Komputer</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <div class="card-body">
                        <h3>{{ $komputer->id_komputer }}</h3>
                        <p>{{ $komputer->merek }}</p>
                        <p>{{ $komputer->kelengkapan }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
