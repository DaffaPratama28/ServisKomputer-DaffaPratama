@extends('template.app')
@section('content')
<div class="section-header">
  <h1>Edit Barang</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Layout</a></div>
    <div class="breadcrumb-item">Default Layout</div>
  </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card-body">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('admin.Barang.update', $barang->id_barang) }}" method="POST" >
                      @csrf
                      @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Barang</label>
                            <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nama barang" value="{{ old('nama_barang', $barang->nama_barang) }}">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            @error('nama_barang')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                          </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Merek</label>
                          <input type="text" name="merek" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter merek" value="{{ old('merek', $barang->merek) }}">
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          @error('merek')
                          <div class="alert alert-danger mt-2">
                              {{ $message }}
                          </div>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Harga</label>
                          <input type="number" name="harga" class="form-control" id="exampleInputPassword1" placeholder="0" value="{{ old('harga', $barang->harga) }}">
                          @error('harga')
                          <div class="alert alert-danger mt-2">
                              {{ $message }}
                          </div>
                          @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Stok</label>
                            <input type="number" name="stok" class="form-control" id="exampleInputPassword1" placeholder="0" value="{{ old('stok', $barang->stok) }}">
                            @error('stok')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Satuan</label>
                            <input type="text" name="satuan" class="form-control" id="exampleInputPassword1" placeholder="Enter satuan" value="{{ old('satuan', $barang->satuan) }}">
                            @error('satuan')
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