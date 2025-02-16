@extends('dashboard.layout.main')

@section('container')
<div class="container my-4">
   <h3>Daftar nama Dosen</h3>
   <div class="row">
       @foreach ($Dosen as $dosen) 
       <div class="col-md-4 mb-3">
           <div class="card">
               <div class="card-body">
                   <h5 class="card-title"><a class="text-decoration-none text-dark" href="">{{ $dosen->nama }}</a></h5>
                   <p>
                       <small class="text-muted">
                           No HP: {{ $dosen->phone }}
                       </small>
                   </p>
                   <p class="card-text">
                       
                   </p>
                   <a href="" class="btn btn-primary">read more</a>
               </div>
           </div>
       </div>
       @endforeach
    </div>
    {{ $Dosen->links() }}
</div>

@endsection