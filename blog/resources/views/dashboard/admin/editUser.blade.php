@extends('dashboard.layout.main')

@section('container')
<div class="container-fluid mt4">
   <div class="col-lg-12">
      @if (session()->has('success'))  
        <div class="alert alert-success alert-dismissible fade show col-4" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> 
      @endif
      <div class="col-lg-8">
         <form action="/dashboard/user/{{ $user->slug }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="nim" class="form-label">Nim</label>
                <input type="text" class="form-control @error('nim') is-invalid @enderror" value="{{ $user->nim }}"  name="nim" id="title">
                @error('nim')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
             </div>
            <div class="mb-3">
               <label for="name" class="form-label">Nama</label>
               <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user->name) }}"  name="name" id="title">
               @error('name')
               <div class="invalid-feedback">
               {{ $message }}
               </div>
               @enderror
            </div>
            <div class="mb-3">
               <label for="jurusan" class="form-label">Jurusan</label>
               <input type="text" class="form-control @error('jurusan') is-invalid @enderror" value="{{$user->jurusan }}"  name="jurusan" id="title">
               @error('jurusan')
               <div class="invalid-feedback">
               {{ $message }}
               </div>
               @enderror
            </div>
            <div class="mb-3">
               <label for="angkatan" class="form-label">angkatan</label>
               <input type="text" class="form-control @error('angkatan') is-invalid @enderror" value="{{ $user->angkatan }}"  name="angkatan" id="title">
               @error('angkatan')
               <div class="invalid-feedback">
               {{ $message }}
               </div>
               @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
         </form>
      </div>
   </div>
 </div> 
@endsection