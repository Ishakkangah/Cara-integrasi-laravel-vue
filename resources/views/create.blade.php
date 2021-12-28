@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row pt-5">
        <div class="col-md-7">
            <h2>Tambah Mahasiswa</h2>
            <form action="{{ route('mhs.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input class="form-control" type="text" name="name" id="formFile" value="{{ old('name') }}">
                    @error('name')
                        <div class="alert bg-danger"><i class="fas fa-camera"></i> </i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nim" class="form-label">Nim</label>
                    <input class="form-control" type="number" name="nim" id="formFile" value="{{ old('nim') }}">
                    @error('nim')
                        <div class="alert bg-danger"><i class="fas fa-camera"></i> </i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input class="form-control" type="file" name="image" id="formFile">
                    @error('image')
                        <div class="alert bg-danger"><i class="fas fa-camera"></i> </i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">email</label>
                    <input class="form-control" type="email" name="email" id="formFile" value="{{ old('email') }}">
                    @error('email')
                        <div class="alert bg-danger"><i class="fas fa-camera"></i> </i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input class="form-control" type="text" name="jurusan" id="formFile" value="{{ old('jurusan') }}">
                    @error('jurusan')
                        <div class="alert bg-danger"><i class="fas fa-camera"></i> </i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary fw-bold">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection