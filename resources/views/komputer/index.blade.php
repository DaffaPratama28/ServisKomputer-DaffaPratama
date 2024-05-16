<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Komputer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Komputer</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('Komputer.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 5%">No</th>
                                    <th scope="col" style="width: 20%%">Merek</th>
                                    <th scope="col">Kelengkapan</th>
                                    <th scope="col" style="width: 20%">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($komputer as $index => $dataKomputer)
                                    <tr>
                                        <td class="text-center">
                                            {{ ++$index }}
                                        </td>
                                        <td>{{ $dataKomputer->merek }}</td>
                                        <td>{{ $dataKomputer->kelengkapan }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('Komputer.destroy', $dataKomputer->id_komputer) }}" method="POST">
                                                <a href="{{ route('Komputer.show', $dataKomputer->id_komputer) }}" class="btn btn-sm btn-success">SHOW</a>
                                                <a href="{{ route('Komputer.edit', $dataKomputer->id_komputer) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data Komputer Belum Ada.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{-- {{ $user->links() }} --}}
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-sm-around py-3">
                    <a href="{{ route('Customer.index') }}" class="btn btn-primary">Data Customer</a>
                    <a href="{{ route('Pegawai.index') }}" class="btn btn-primary">Data Pegawai</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>