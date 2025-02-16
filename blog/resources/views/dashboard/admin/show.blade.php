@extends('dashboard.layout.main')

@section('container')
<div class="card">
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible col-lg-5 fade show" role="alert">
            {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if(session()->has('error'))  
        <div class="alert alert-danger alert-dismissible fade show col-4" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> 
    @endif
   <div class="card-body">
       <h5 class="card-title">{{ $user->name }}</h5>
       <h7 class="h6">Angkatan: {{ $mahasiswa }}</h7> 
       <form action="/nilaiMahasiswa/{{ $user->slug }}" method="post">
        @csrf
        <label for="tahun" class="form-label">Tahun</label>
            <select class="col-2" name="tahun" id="tahun" class="form-select" value="{{ old('tahun') }}">
                @for ($i = 0; $i < count($tahun); $i++)
                    <option value="{{ $user->id }}.{{ $tahun[$i]->years }}" @selected($user->angkatan == $tahun[$i]->years )>{{ $tahun[$i]->years }}</option>
                @endfor
            </select>
            <label for="semester">Semester</label>
            <select class="col-2" name="semester" id="semester" class="form-select" value="{{ old('semester') }}">
                @foreach ($semester as $sm)
                <option value="{{ $sm->semester }}">{{ $sm->semester}}</option>
                @endforeach
            </select>
       <button type="submit" class="btn btn-primary my-3">Kirim</button>
        </form>
        <div class="table-responsive"> 
            <table class="table table-bordered table-striped verticle-middle">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Mata Kuliah</th>
                        <th scope="col">Sks</th>
                        <th scope="col">Nilai</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nilai as $nilais)
                    <form action="/dashboard/nilai/{{ $nilais->id }}" method="post">
                        @method('put')
                        @csrf
                    <tr>
                        <td>
                            {{ $loop->iteration }}
                        </td>
                        <td>
                            {{ $nilais->kode }}
                        </td>
                        <td>
                            {{ $nilais->matkul }}
                        </td>
                        <td>
                            {{ $nilais->sks }}
                        </td>
                        <td>
                            <input type="text" name="nilai" size="1" value="{{ $nilais->nilai }}">
                        </td>
                        <td>
                            <span class="text-center">
                                <button type="submit" class="btn bg-success my-1"
                                 data-toggle="tooltip" 
                                 data-placement="top" 
                                 title="Update nilai">
                                <i class="fa fa-pencil color-white m-r-5"></i></button>
                            </span>
                        </td>
                   </tr>
                </form>
                   @endforeach
               </tbody>
            </table>
            <h5>Input Beban Sks </h5>
            <form class="form-valide" action="/storeSks/{{ $user->id }}" method="post">
                    @csrf
                    <label for="tahun">Tahun</label>
                <select class="col-2" name="tahun" id="tahun" class="form-select" value="{{ old('tahun') }}">
                    @for ($i = 0; $i < count($tahun); $i++)
                        <option value="{{ $user->id . '.'}}{{ $tahun[$i]->years }}" @selected($user->angkatan == $tahun[$i]->years )>{{ $tahun[$i]->years }}</option>
                    @endfor
                    </select>
                    <label for="semester">Semester</label>
                    <select class="col-2" name="semester" id="semester" class="form-select" value="{{ old('semester') }}">
                        @foreach ($semester as $sm)
                        <option value="{{ $sm->semester }}">{{ $sm->semester}}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary my-3">Kirim</button>
                    <input type="text" class="mb-1 form-control col-2 @error('sks') is-invalid @enderror" value="{{ old('sks',) }}"  name="sks" id="sks" placeholder="{{ old('sks') }}" required>
                    @error('sks')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
            </form>
            <h5>Sks {{ $user->name }} </h5>
            <div class="table-responsive"> 
            <table class="table table-bordered table-striped verticle-middle">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Semester</th>
                        <th scope="col">SKs</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Sks as $sks)
                    @php
                        $sk = explode('.',$sks->id_sks);
                        $result = $sk[1].' '.$sk[2];
                    @endphp
                    <tr>
                        <td> {{ $loop->iteration }}</td>
                        <td> {{ $result }}</td>
                        <td>{{ $sks->sks }}</td>
                        <td>
                            <span class="text-center">
                               <a class="btn bg-danger border-0 my-1" href="/sks/{{ $sks->id }}" 
                                data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Are you sure?')"><i class="fa fa-close color-danger"></i></a>
                         </span>
                     </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <h5>Input pembayaran Semester </h5>
            <form class="form-valide" action="/storePayment/{{ $user->id }}" method="post">
                    @csrf
                    <label for="tahun">Tahun</label>
                <select class="col-2" name="tahun" id="tahun" class="form-select" value="{{ old('tahun') }}">
                    @for ($i = 0; $i < count($tahun); $i++)
                        <option value="{{ $user->id . '.'}}{{ $tahun[$i]->years }}" @selected($user->angkatan == $tahun[$i]->years )>{{ $tahun[$i]->years }}</option>
                    @endfor
                    </select>
                    <label for="semester">Semester</label>
                    <select class="col-2" name="semester" id="semester" class="form-select" value="{{ old('semester') }}">
                        @foreach ($semester as $sm)
                        <option value="{{ $sm->semester }}">{{ $sm->semester}}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary my-3">Kirim</button>
                    <select class="form-select col-lg-2 @error('pembayaran') is-invalid @enderror" value="{{ old('pembayaran',) }}" name="pembayaran" required>
                        <option >Sudah Lunas</option>
                        <option >Belum Lunas</option>
                    </select>
                    @error('pembayaran')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
            </form>
            <h5>Pembayaran {{ $user->name }} </h5>
            <div class="table-responsive"> 
            <table class="table table-bordered table-striped verticle-middle">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Payment as $payment)
                    <form action="/payment" method="post">
                        @csrf
                        @php
                        $sk = explode('.', $payment->id_semester );
                        $result = $sk[1].' '.$sk[2];
                        @endphp
                        <tr>
                            <td> {{ $loop->iteration }}</td>
                            <td> {{ $result }}</td>
                            <td>
                                <select class="form-select col-lg-6" name="pembayaran">
                                    <option  selected>{{ $payment->pembayaran }}</option>
                                    <option >Sudah Lunas</option>
                                    <option >Belum Lunas</option>
                                </select>
                            </td>
                            <td>
                                <span class="text-center">
                                    <button type="submit" name="update" value="{{ $payment->id }}" class="btn bg-success my-1"
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title="Update nilai">
                                    <i class="fa fa-pencil color-white m-r-5"></i></button>
                                    <button class="btn bg-danger border-0 my-1" name="delete" value="{{ $payment->id }}" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Are you sure?')">
                                        <i class="fa fa-close color-danger"></i>
                                    </button>
                                </span>
                            </td>
                        </tr>
                    </form>
                    @endforeach
                </tbody>
            </table>
        </div>
       </div>
   </div>
</div>
@endsection