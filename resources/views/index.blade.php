@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row mt-5">
    <h2 class="fw-bold">DAPTAR MAHASISWA</h2>
    
    
    <div class="col">
      <a href="{{ route('mhs.create') }}" class="btn btn-primary fw-bold mb-2" >
        Tambah mahasiswa <i class="fas fa-address-book"></i>
      </a>
      @foreach ($students as $key => $item)
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{ $item->takeImage }}" class="img-fluid rounded-start"  style="height: object-fit: cover; object-position: cover;">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <table class="table table-borderless">
                  <tbody>
                    <tr>
                      <td>Name</td>
                      <td>:</td>
                      <td>{{ $item->name }}</td>
                    </tr>
                    <tr>
                      <td>Nim</td>
                      <td>:</td>
                      <td>{{ $item->nim }}</td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td>:</td>
                      <td>{{ $item->email }}</td>
                    </tr>
                    <tr>
                      <td>Jurusan</td>
                      <td>:</td>
                      <td>{{ $item->jurusan }}</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td>
                        <a href="{{ route('mhs.edit', $item->id ) }}" class="badge bg-success">edit</a>
                        <form action="{{ route('mhs.delete', $item->id ) }}" method="post" class="d-inline">
                          @csrf
                          @method('delete')
                            <button type="submit" class="badge bg-danger">hapus</button>
                        </form>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      @endforeach
      </div>
    </div>
  </div>
</div>


    
@endsection