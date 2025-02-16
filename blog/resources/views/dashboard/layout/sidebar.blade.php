<div class="nk-nav-scroll">
   <ul class="metismenu" id="menu">
       @can('byAdmin')
       <span class="nav-label font-weight-bold">Dashboard</span>
       <a class="nav-label font-weight-bold text-capitalize {{ Request::is('user*') ? 'active' : '' }}" href="/storeMahasiswa">Input data baru</a>
       <a class="nav-label font-weight-bold text-capitalize {{ Request::is('daftarMahasiswa*') ? 'active' : '' }}" href="/daftarMahasiswa">Daftar mahasiswa</a>        
       <a class="nav-label font-weight-bold text-capitalize" href="/semester">Tahun Ajaran</a>        
       @endcan
       @if( Auth::user()->is_admin != 1)
       <span class="nav-label font-weight-bold">Create Krs</span>
       <a class="nav-label font-weight-bold text-capitalize" href="/createKrs">isi krs</a>
       <a class="nav-label font-weight-bold text-capitalize" href="/lihatNilai">lihat nilai</a>
       <a class="nav-label font-weight-bold text-capitalize" href="/pembayaran">status pembayaran</a>
       @endif
   </ul>
</div>