@extends('template.app')
@section('content')
<div class="section-header">
  <h1>Edit Customer</h1>
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
                <h3 class="text-center my-4">Edit Data Customer</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                <form action="{{ route('admin.Customer.update', $customers->customer_id) }}" method="POST" >
                      @csrf
                      @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Customer</label>
                            <input type="text" name="nama_customer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama" value="{{ old('nama_customer', $customers->nama_customer) }}">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
                            @error('nama_customer')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                          </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Alamat</label>
                          <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan alamat" value="{{ old('alamat', $customers->alamat) }}">
                          <small id="emailHelp" class="form-text text-muted">We'll never share your address with anyone else.</small>
                          @error('alamat')
                          <div class="alert alert-danger mt-2">
                              {{ $message }}
                          </div>
                          @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" id="exampleFormControlSelect1">
                                <option value="{{ old('jenis_kelamin', $customers->jenis_kelamin) }}">{{ old('jenis_kelamin', $customers->jenis_kelamin) }}</option>
                                <option value="L">Laki-laki</option>
                                 <option value="P">Perempuan</option>
                             </select>
                             @error('jenis_kelamin')
                             <div class="alert alert-danger mt-2">
                                 {{ $message }}
                             </div>
                             @enderror
                          </div>
                          <br/>
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                          </div>
                      </form>
       
                    
                    {{-- {{ $user->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
