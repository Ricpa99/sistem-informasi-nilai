@extends('dashboard.layout.main')

@section('container')

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            @if (session()->has('success'))  
                <div class="alert alert-success alert-dismissible fade show col-4" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @elseif (session()->has('error'))  
            <div class="alert alert-danger alert-dismissible fade show col-4" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> 
            @endif
            <h4 class="card-title">Masukkan Matakuliah </h4>
            <p>Beban sks: 
                @if(Request::is('createKrs'))
                    @empty($bebanSks[0])
                    Beban sks tidak ditemukan
                    @else
                    <input class="border-0" type="text" name="sks" value="{{ $bebanSks[0]->sks }}">
                    @endempty
                @endif
            </p>
            <form action="/createKrs" method="post">
                @csrf
                <div class="mb-3">
                <input type="hidden" name="no" value="{{ $no }}">
                <label for="tahun" class="form-label">Tahun </label>
                <select class="col-2" id="tahun" class="form-select" value="{{ old('tahun') }}" name="tahun">
                    @for ($i = 0; $i < count($tahun); $i++)
                        <option value="{{ Auth::user()->id . '.' }}{{ $tahun[$i]->years }}" @selected(Auth::user()->angkatan == $tahun[$i]->years )>{{ $tahun[$i]->years }}</option>
                    @endfor
                </select>
                <label for="semester">Semester</label>
                <select class="col-2" id="semester" class="form-select" value="{{ old('semester') }}" name="semester">
                    @foreach ($semester as $sm)
                    <option value="{{ $sm->semester }}">{{ $sm->semester}}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
                </div>
        </form>
        <form action="/createKrs" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $id }}">
            <button name="plus" value="{{ $no }}" type="submit" class="btn btn-primary my-3">Add row</button>
            <button name="min" value="{{ $no }}" type="submit" class="btn btn-primary my-3">Del row</button>
        </form>
        <form action="/dashboard/nilai" method="post">
            <input type="hidden" name="slug" value="{{ Auth::user()->slug }}">
            <input type="hidden" name="indeks" value="{{ Auth::user()->id }}">
            @csrf
            @if(Request::is('createKrs'))
                    @empty($bebanSks[0])
                    
                    @else
                    <input type="hidden" name="bebanSks" value="{{ $bebanSks[0]->sks }}">
                    <input type="hidden" name="id" value="{{ $id }}" >
                    @endempty
                @endif
            <table class="table table-bordered table-striped verticle-middle">
                <thead>
                    <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Mata kuliah</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Sks</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 1; $i <= $no; $i++)
                        <tr>
                            <td>
                                <select name="kode[{{ $i }}]" required>
                                    <option value=""></option>
                                    @foreach ($matkul as $kode)
                                    <option value="{{ $kode->kode }}">{{ $kode->kode }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <select name="matkul[{{ $i }}]" required>
                                    <option value=""></option>
                                    @foreach ($matkul as $Matkul)
                                    <option value="{{ $Matkul->matkul }}">{{ $Matkul->matkul }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <select name="kelas[{{ $i }}]" required>
                                    <option value=""></option>
                                    <option value="kelas 1-1">kelas 1-1</option>
                                    <option value="kelas 1-2">kelas 1-2</option>
                                    <option value="kelas 2-1">kelas 2-1</option>
                                    <option value="kelas 3-1">kelas 3-1</option>
                                    <option value="kelas 3-2">kelas 3-2</option>
                                    <option value="kelas 4-1">kelas 4-1</option>
                                    <option value="kelas 4-2">kelas 4-2</option>
                                </select>
                            </td>
                            <td>
                                <select name="sks[{{ $i }}]" required>
                                    <option value=""></option>
                                    @foreach ($matkul as $sks)
                                    <option value="{{ $sks->sks }}">{{ $sks->sks }}</option>
                                    @endforeach
                                </select>
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary mt-2">Add Krs</button>
            </form>
        </div>
    </div>
</div>
@endsection