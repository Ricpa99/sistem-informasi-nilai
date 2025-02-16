@extends('dashboard.layout.main')

@section('container')
   <div class="card">
       <div class="card-body">
           <h4 class="card-title">Nilai Mata Kuliah</h4>
           <div class="table-responsive">
           <div class="basic-dropdown mb-4">
            <form action="/lihatNilai" method="post">
                @csrf
                <label for="tahun" class="form-label">Tahun </label>
                <select class="col-2" name="tahun" id="tahun" class="form-select" value="{{ old('tahun') }}">
                    <option value="{{ Auth::user()->angkatan }}">{{ Auth::user()->angkatan }}</option>
                    @for ($i = 0; $i < count($tahun); $i++)
                        <option value="{{ Auth::user()->id . '.' }}{{ $tahun[$i]->years }}." @selected(Auth::user()->angkatan == $tahun[$i]->years )>{{ $tahun[$i]->years }}</option>
                    @endfor
                </select>
                <label for="semester">Semester</label>
                <select class="col-2" name="semester" id="semester" class="form-select" value="{{ old('semester') }}">
                    @foreach ($semester as $sm)
                    <option value="{{ $sm->semester }}">{{ $sm->semester}}</option>
                    @endforeach
                </select>
               <button type="submit" class="btn btn-primary mt-2">Kirim</button>
            </form>
           </div>
           <table class="table table-bordered table-striped verticle-middle">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Mata kuliah</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Sks</th>
                    <th scope="col">Nilai</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nilai as $nilais)
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
                        {{ $nilais->kelas }}
                        </td>
                        <td>
                        {{ $nilais->sks }}
                        </td>
                        <td>
                        {{ $nilais->nilai }}
                        </td>
                    </tr>
                @endforeach
                    </tbody>
                </table>
                <p>Beban sks: @if(Request::is('lihatNilai'))
                    @empty($bebanSks[0])
                    Beban Sks Tidak ditemukan
                    @else
                    {{ $bebanSks[0]->sks }}
                    @endempty
                @endif</p>
            </div>
       </div>
   </div>
@endsection