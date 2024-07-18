@extends('template.app')
@section('content')
<div class="section-header">
  <h1>Tambah Pegawai</h1>
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
                  <form action="{{ route('admin.Pegawai.store') }}" method="POST" >
                    @csrf
                    <div class="form-group py-2">
                      <label for="exampleInputEmail1">Nama Pegawai</label>
                      <input type="text" name="nama_pegawai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama">
                      @error('nama_pegawai')
                      <div class="alert alert-danger mt-2">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                      <div class="form-group py-2">
                          <label for="exampleInputEmail1">Alamat</label>
                          <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan alamat">
                          @error('alamat')
                          <div class="alert alert-danger mt-2">
                              {{ $message }}
                          </div>
                          @enderror
                        </div>
                        <div class="form-group py-2">
                          <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                          <select class="form-control" name="jenis_kelamin" id="exampleFormControlSelect1">
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                           </select>
                           @error('jenis_kelamin')
                           <div class="alert alert-danger mt-2">
                               {{ $message }}
                           </div>
                           @enderror
                        </div>
                        <div class="form-group py-2">
                          <label for="exampleFormControlSelect1">Jabatan</label>
                          <select class="form-control" name="jabatan" id="exampleFormControlSelect1">
                            <option value="Teknisi">Teknisi</option>
                            <option value="Admin">Admin</option>
                            <option value="SPG">SPG</option>
                           </select>
                           @error('jabatan')
                           <div class="alert alert-danger mt-2">
                               {{ $message }}
                           </div>
                           @enderror
                        </div>
                        <div class="form-group py-2">
                          <label for="exampleFormControlSelect1">Status</label>
                          <select class="form-control" name="status" id="exampleFormControlSelect1">
                            <option value="aktif">Aktif</option>
                            <option value="tidak_aktif">Tidak aktif</option>
                           </select>
                           @error('status')
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
