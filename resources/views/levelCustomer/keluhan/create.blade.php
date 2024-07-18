@extends('template.app')
@section('content')
<div class="section-header">
  <h1>Tambah Keluhan</h1>
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
                    <form action="{{ route('admin.Keluhan.store') }}" method="POST"  >
                      @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Keluhan</label>
                            <input type="text" name="nama_keluhan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nama keluhan">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            @error('nama_keluhan')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                          </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Ongkos</label>
                          <input type="text" name="ongkos" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ongkos">
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          @error('ongkos')
                          <div class="alert alert-danger mt-2">
                              {{ $message }}
                          </div>
                          @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">ID Komputer</label>
                            <select class="form-control" name="id_komputer" id="exampleFormControlSelect1">
                                @foreach ($komputer as $dataKomputer)
                                <option value="{{ $dataKomputer->id_komputer }}">{{ $dataKomputer->id_komputer }}</option>
                                @endforeach
                             </select>
                             @error('id_komputer')
                             <div class="alert alert-danger mt-2">
                                 {{ $message }}
                             </div>
                             @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Customer ID</label>
                            <select class="form-control" name="customer_id" id="exampleFormControlSelect1">
                                @foreach ($customer as $dataCustomer)
                                <option value="{{ $dataCustomer->customer_id }}">{{ $dataCustomer->customer_id }}</option>
                                @endforeach
                             </select>
                             @error('customer_id')
                             <div class="alert alert-danger mt-2">
                                 {{ $message }}
                             </div>
                             @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">ID Pegawai</label>
                            <select class="form-control" name="id_pegawai" id="exampleFormControlSelect1">
                                @foreach ($pegawai as $dataPegawai)
                                <option value="{{ $dataPegawai->id_pegawai }}">{{ $dataPegawai->id_pegawai }}</option>
                                @endforeach
                             </select>
                             @error('id_pegawai')
                             <div class="alert alert-danger mt-2">
                                 {{ $message }}
                             </div>
                             @enderror
                          </div>
                          <br/>
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                      </form>
                    {{-- {{ $user->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
