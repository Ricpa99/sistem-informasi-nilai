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
    <a class="btn btn-primary mb-3" href="/storeMahasiswa">Create new mahasiswa</a>
       <h4 class="card-title">Nama</h4>
       <div class="table-responsive"> 
           <table class="table table-bordered table-striped verticle-middle">
               <thead>
                   <tr>
                       <th scope="col">No</th>
                       <th scope="col">Nim</th>
                       <th scope="col">Nama</th>
                       <th scope="col">Jurusan</th>
                       <th scope="col">Angkatan</th>
                       <th scope="col">Action</th>
                   </tr>
               </thead>
               <tbody>
                   @foreach ($user as $mhs)
                   <tr>
                       <td> {{ $loop->iteration }}</td>
                       <td>{{ $mhs->nim }}</td>
                       <td>{{ $mhs->name }}</td>
                       <td>{{ $mhs->jurusan }}</td>
                       <td>{{ $mhs->angkatan }}</td>
                       <td>
                           <span class="text-center">
                               <a class="btn bg-info my-1" href="/dashboard/user/{{ $mhs->slug }}" data-toggle="tooltip" data-placement="top" title="Lihat Nilai"><i class="fa fa-eye color-white"></i></a>
                               <a class="btn bg-success my-1" href="/dashboard/user/{{ $mhs->slug }}/edit" data-toggle="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil color-white m-r-5"></i></a>
                               <form action="/dashboard/user/{{ $mhs->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn bg-danger border-0 my-1" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Are you sure?')">
                                    <i class="fa fa-close color-danger"></i>
                                </button>
                            </form>
                        </span>
                        
                    </td>
                   </tr>
                   @endforeach
               </tbody>
           </table>
       </div>
       {{ $user->links() }}
   </div>
</div>
@endsection