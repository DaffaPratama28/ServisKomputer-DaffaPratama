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
                    <h3 class="text-center my-4">Masukan Data Komputer</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('Komputer.store') }}" method="POST" >
                          @csrf
                          <div class="form-group py-2">
                            <label for="exampleInputEmail1">ID Komputer</label>
                            <input type="text" name="id_komputer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="komIDxxxxx">
                            @error('id_komputer')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                          </div>
                          <div class="form-group py-2">
                            <label for="exampleFormControlSelect1">Merek</label>
                            <select class="form-control" name="merek" id="exampleFormControlSelect1">
                              <option value="asus">Asus</option>
                              <option value="acer">Acer</option>
                              <option value="dell">Dell</option>
                              <option value="lain">Lain</option>
                             </select>
                             @error('merek')
                             <div class="alert alert-danger mt-2">
                                 {{ $message }}
                             </div>
                             @enderror
                          </div>
                            <div class="form-group py-2">
                                <label for="exampleInputEmail1">Kelengkapan</label>
                                <input type="text" name="kelengkapan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan kelengkapan">
                                @error('kelengkapan')
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