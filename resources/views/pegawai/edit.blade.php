<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Masukan Data Pegawai</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('Pegawai.update', $pegawai->id_pegawai) }}" method="POST" >
                          @csrf
                          @method('PUT')
                          <div class="form-group py-2">
                            <label for="exampleInputEmail1">Nama Pegawai</label>
                            <input type="text" name="nama_pegawai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama" value="{{ old('nama_pegawai', $pegawai->nama_pegawai) }}">
                            @error('nama_pegawai')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                          </div>
                            <div class="form-group py-2">
                                <label for="exampleInputEmail1">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan alamat" value="{{ old('alamat', $pegawai->alamat) }}">
                                @error('alamat')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                              </div>
                              <div class="form-group py-2">
                                <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin" id="exampleFormControlSelect1">
                                    <option value="{{ old('jenis_kelamin', $pegawai->jenis_kelamin) }}">{{ old('jenis_kelamin', $pegawai->jenis_kelamin) }} </option>
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
                                <select class="form-control" name="jabatan" id="exampleFormControlSelect1" value="{{ old('jabatan', $pegawai->jabatan) }}">
                                    <option value="{{ old('jabatan', $pegawai->jabatan) }}">{{ old('jabatan', $pegawai->jabatan) }} </option>
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
                                <select class="form-control" name="status" id="exampleFormControlSelect1" value="{{ old('status', $pegawai->status) }}">
                                    <option value="{{ old('status', $pegawai->status) }}">{{ old('status', $pegawai->status) }} </option>
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
</body>
</html>