@extends('dashboard.layout.main')

@section('container')
<div class="card">
   @if (session()->has('success'))  
       <div class="alert alert-success alert-dismissible fade show col-4" role="alert">
           {{ session('success') }}
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div> 
   @endif
  <div class="card-body">
      <h4 class="card-title ">All Semester </h4>
      <div class="table-responsive"> 
          <table class="table table-bordered table-striped verticle-middle">
              <thead>
                  <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($tahun as $mhs)
                  <tr>
                      <td> {{ $loop->iteration }}</td>
                      <td>{{ $mhs->years }}</td>
                      <td>
                          <span class="text-center">
                              <form action="/dashboard/xample/{{ $mhs->id }}" method="post" class="d-inline">
                               @method('delete')
                               @csrf
                               <button class="btn bg-danger border-0 my-1" href="" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Are you sure?')">
                                   <i class="fa fa-close color-danger"></i>
                               </button>
                           </form>
                       </span>
                   </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
          <form class="form-valide" action="/dashboard/xample" method="post">
            @csrf
            <label for="tahun">Input semester</label>
            <input type="text" class="form-control col-2 @error('years') is-invalid @enderror" value="{{ old('years') }}"  name="years" id="years" required>
            @error('years')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            <button type="submit" class="btn btn-primary mt-2">Kirim</button>
        </form>
      </div>
  </div>
</div>

@endsection