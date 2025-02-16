@extends('dashboard.layout.main')

@section('container')
<h4 class="font-weight-bold">Masukkan data mahasiswa</h4>
<div class="card">
    <div class="card-body">
        @if (session()->has('success'))  
        <div class="alert alert-success alert-dismissible fade show col-4" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> 
        @endif
        <div class="form-validation">
            <form class="form-valide" action="/dashboard/user" method="post">
                @csrf
                @php
                $slug = fake()->slug(mt_rand(1,2)) 
                @endphp
                <input type="hidden" name="slug" value="{{ $slug }}">
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="val-username">Nim <span class="text-danger"></span>
                    </label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" placeholder="masukkan nim mahasiswa" value="{{ old('nim') }}" autofocus >
                        @error('nim')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="name">Nama <span class="text-danger"></span>
                    </label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="nama">
                        @error('name')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="password">Password <span class="text-danger"></span>
                    </label>
                    <div class="col-lg-6">
                        <input type="password" class="form-control" id="password" name="password" name="password" value="" placeholder="Create password">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="jurusan">Jurusan <span class="text-danger"></span>
                    </label>
                    <div class="col-lg-6">
                        <select class="form-select @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" @error('jurusan') is-invalid @enderror required>
                            <option value="Jurusan" selected disabled>Jurusan</option>
                            <option value="TI">TI</option>
                            <option value="SI">SI</option>
                            <option value="Ilmu Komputer">Ilmu Komputer</option>
                        </select>
                        @error('jurusan')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="angkatan">Angkatan <span class="text-danger"></span>
                    </label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control @error('angkatan') is-invalid @enderror" id="angkatan" name="angkatan" value="{{ old('angkatan') }}" placeholder="tahun masuk">
                        @error('angkatan')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-8 ml-auto">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection