@extends('dashboard.layout.main')

@section('container')
<div class="col-md-12">
   <table class="table table-bordered table-striped verticle-middle">
      <thead>
          <tr>
              <th scope="col">No</th>
              <th scope="col">Nim</th>
              <th scope="col">Nama</th>
              <th scope="col">Kelas</th>
              <th scope="col">Jurusan</th>
              <th scope="col">Action</th>
          </tr>
      </thead>
      <tbody>
              
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
              <td>
                  <span class="text-center">
                      <a class="btn bg-info my-1" href="/" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye color-white"></i></a>
                      <a class="btn bg-success my-1" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-white m-r-5"></i></a>
                      <form action="/ method="post" class="d-inline">
                          @method('delete')
                          @csrf
                          <button class="btn bg-danger border-0 my-1" href="" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Are you sure?')">
                              <i class="fa fa-close color-danger"></i>
                          </button>
                      </form>
                  </span>
              </td>
          </tr>
      </tbody>
   </table>

</div>
<div class="col-lg-5">
<form action="/dashboard/post" method="post" enctype="multipart/form-data">
   @csrf
   <div class="mb-3">
      <label for="nim" class="form-label">Nim</label>
      <input type="text" class="form-control @error('nim') is-invalid @enderror" value="{{ old('nim') }}"  name="nim" id="nim">
      @error('nim')
      <div class="invalid-feedback">
      {{ $message }}
      </div>
      @enderror
   </div>
   <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}"  name="nama" id="nama">
      @error('nama')
      <div class="invalid-feedback">
      {{ $message }}
      </div>
      @enderror
   </div>
   <div class="mb-3">
      <label for="jurusan" class="form-label">Jurusan</label>
      <input type="text" class="form-control @error('jurusan') is-invalid @enderror" value="{{ old('jurusan') }}"  name="jurusan" id="jurusan">
      @error('jurusan')
      <div class="invalid-feedback">
      {{ $message }}
      </div>
      @enderror
   </div>
</form>
<button type="submit" class="btn btn-primary">Kirim</button>
</div>
@endsection