@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row pt-5">
        <div class="col-md-7">
            <h2>Edit Mahasiswa</h2>
            <form action="{{ route('mhs.update', $student->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input class="form-control" type="text" name="name" id="formFile" value="{{ old('name') ?? $student->name }}">
                </div>
                <div class="mb-3">
                    <label for="nim" class="form-label">Nim</label>
                    <input class="form-control" type="number" name="nim" id="formFile" value="{{ old('nim') ?? $student->nim }}">
                </div>
                <div class="mb-3">
                    <img src="{{ $student->takeImage }}" style="width:100px; object-fit: cover;object-position:center;">
                    <input class="form-control" type="file" name="image" id="formFile" value="{{ old('image') ?? $student->photo }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">email</label>
                    <input class="form-control" type="email" name="email" id="formFile" value="{{ old('email') ?? $student->email }}">
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input class="form-control" type="text" name="jurusan" id="formFile" value="{{ old('jurusan') ?? $student->jurusan }}">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary fw-bold">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection