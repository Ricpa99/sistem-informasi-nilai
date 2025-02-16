@extends('dashboard.layout.main')

@section('container')
    <div class="card">
        @if (session()->has('success'))  
        <div class="alert alert-success alert-dismissible fade show col-4" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> 
        @endif
        @if (session()->has('error'))  
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @error('error')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        @endif
      <div class="card-body d-flex">
        @if ( Auth::user()->image == null )
        <p class="alert alert-danger">image not found max 1024Mb</p>
        @else
        <img class="img-preview img-fluid mb-3 col-sm-5" src="{{asset('storage/' . Auth::user()->image)}}">
        @endif
          <div class="col-5">
              <form class="d-block" action="/dashboard/user/{{ Auth::user()->slug }}" method="post" enctype="multipart/form-data">
            @method('put')
              @csrf
              <input type="hidden" name="oldImg" value="{{ Auth::user()->image }}">
              <input class="mt-2 @error('image') is-invalid @enderror" type="file" name="image" id="image" style="cursor: pointer;" 
              data-toogle="tooltip" title="select image" onchange="previewImg()">
              @error('image')
               <div class="invalid-feedback">
               {{ $message }}
               </div>
               @enderror
              <button type="submit" class="btn btn-primary mt-4">Ubah foto</button>
           </form>
          </div>
      </div>
      <div class="mt-6">
         <div class="card-body">
             <div class="card-title">
                 <h4>Data Mahasiswa </h4>
             </div>
             <div class="table-responsive">
                 <table class="table table-hover">
                     <tbody>
                         <tr>
                            <td>Nim</td>
                            <td>{{ Auth::user()->nim }}</td>
                         </tr>
                         <tr>
                            <td>Nama</td>
                            <td>{{ Auth::user()->name }}</td>
                         </tr>
                         <tr>
                            <td>Jurusan</td>
                            <td>{{ Auth::user()->jurusan }}</td>
                         </tr>
                         <tr>
                            <td>Angkatan</td>
                            <td>{{ Auth::user()->angkatan }}</td>
                         </tr>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>    
      </div>
    </div>
   </div>
@endsection