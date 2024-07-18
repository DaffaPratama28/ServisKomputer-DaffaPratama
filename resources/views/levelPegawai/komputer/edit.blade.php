@extends('template.app')
@section('content')
<div class="section-header">
  <h1>Edit Komputer</h1>
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
                    <form action="{{ route('admin.Komputer.update', $komputer->id_komputer) }}" method="POST" >
                      @csrf
                      @method('PUT')
                      <div class="form-group py-2">
                        <label for="exampleInputEmail1">ID Komputer</label>
                        <input type="text" name="id_komputer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="komIDxxxxx" value="{{ old('id_komputer', $komputer->id_komputer) }}">
                        @error('id_komputer')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                      <div class="form-group py-2">
                        <label for="exampleFormControlSelect1">Merek</label>
                        <select class="form-control" name="merek" id="exampleFormControlSelect1">
                            <option value="{{ old('merek', $komputer->merek) }}">{{ old('merek', $komputer->merek) }} </option>
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
                            <input type="text" name="kelengkapan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan kelengkapan" value="{{ old('kelengkapan', $komputer->kelengkapan) }}">
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


@endsection
