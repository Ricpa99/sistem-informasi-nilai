<?php

namespace App\Http\Controllers;

use App\Models\Sks;
use App\Models\User;
use App\Models\Nilai;
use App\Models\Matkul;
use App\Models\Semester;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\Payment;
use App\Models\xample;
use Illuminate\Support\Facades\Auth;

class indexController extends Controller
{
    public function index(){
        return view('dashboard.home',[
            'title' => 'Home',
            'Dosen' => Dosen::latest()->paginate(9)
        ]);
    }

    public function storeSks(Request $request, User $user){
        $a = '.' . $request->semester;
        $id_sks = $request->tahun . $a;
        $validated = $request->validate([
            'sks' => 'required|max:2'
        ]);
        $validated['id_sks'] = $id_sks;
        $validated['indeks'] = $user->id;
        if (Auth::check($validated)) {
            Sks::create($validated);
            return back()->with('success', "Beban sks has been addeted");    
        }
        return back()->with('error', "Beban sks has been failed addeted");    
    }

    public function storePayment(Request $request, User $user){
        $a = '.' . $request->semester;
        $id_sks = $request->tahun . $a;
        $validated = $request->validate([
            'pembayaran' => 'required|max:13'
        ]);
        $validated['id_semester'] = $id_sks;
        $validated['indeks'] = $user->id;
        if (Auth::check($validated)) {
            Payment::create($validated);
            return back()->with('success', "Payment has been addeted");    
        }
        return back()->with('error', "Beban sks has been failed addeted");
    }

    public function proFile(){
        return view('dashboard.profile',[
            'title' => 'Profile',
        ]);
    }

    public function delSks(Sks $sks){
        Sks::destroy($sks->id);
        return back()->with('success', 'Sks has been deleted');
    }

    public function updatePayment(Request $request){
        if ($request->update) {
            Payment::find($request->update)->update(['pembayaran' => $request->pembayaran]);
            return back()->with('success', 'Payment has been updated');  
        }elseif ($request->delete) {
            Payment::destroy($request->delete);
            return back()->with('success', 'Payment has been deleted');
        }
        
    }

    public function storeMahsiswa(){
        return view('dashboard.admin.storeMahasiswa',[
            'title' => 'Dashboard',
            'user' => User::where('id', auth()->user()->id)->get(),
        ]);
    }
    public function daftarMahasiswa(){
        return view('dashboard.admin.daftarMahasiswa',[
            'title' => 'Daftar Mahasiswa',
            'user' => User::latest()->paginate(5)
        ]);
    }

    public function semester(xample $thn){
        return view('dashboard.admin.allsemester',[
            'title' => 'Tahun Ajaran',
            'tahun' => xample::all()
        ]);
    }

    public function listNilai(Request $request, User $user){
        $matkul_id = $request->tahun . '.' .  $request->semester;
        return view('dashboard.admin.show',[
            'user' => $user,
            'title' => 'Info Mahasiswa',
            'nilai' => Nilai::latest()->filterNilai($matkul_id)->get(),
            'tahun' => xample::all(),
            'semester' => Semester::all(),
            'Sks' => Sks::filterSks($user->id)->get(),
            'mahasiswa' => $user->angkatan,
            // 'id' => $matkul_id,
            'Payment' => Payment::filterPayment($user->id)->get()
        ]);
        
    }

    public function nilaiUser(User $user){
        return view('dashboard.admin.show',[
            'title' => 'Info Mahasiswa',
            'user' => $user,
            'nilai' => Nilai::latest()->filter(request(['nilai']))->get(),
            'tahun' => xample::all(),
        ]);
    }


    public function sks(Request $request, Matkul $matkul){
        $no = 1;
        if ($request->plus) {
            $no = $request->plus;
            $no += 1;
        }
        if ($request->min) {
            $no = $request->min;
            if ($no == 1) {
                return back();
            }else{
                $no -= 1;
            }
        }
        if ($request->id) {
            $id = $request->id;
        }else{
            $id = $request->tahun .  '.' .$request->semester;
        }
            return view('dashboard.isikrs',[
            'title' => 'Input Krs', 
            'matkul' => $matkul::latest()->get(),
            'tahun' => xample::all(),
            'semester' => Semester::all(),
            'bebanSks' => Sks::latest()->filter($id)->get(),
            'id' => $id,
            'no' => $no
        ]);
    }

    public function createKrs(Matkul $matkul, User $user){
        return view('dashboard.isikrs',[
            'title' => 'Input Krs', 
            'matkul' => $matkul::latest()->get(),
            'tahun' => xample::all(),
            'semester' => Semester::all(),
            'no' => 1,
            'id' => ''
        ]);
    }

    public function payment(){
        return view('dashboard.payment',[
            'title' => 'Status Pembayaran',
            'Payment' => Payment::filterPayment(Auth::user()->id)->get(),
        ]);
    }

    public function lihatNilai(Request $request){
       
        if ($request->tahun) {
            $id = $request->tahun . $request->semester;
            return view('dashboard.lihatnilai',[
    
                'title' => 'Nilai Mata Kuliah',
                'nilai' => Nilai::filterNilai($id)->get(),
                'tahun' => xample::all(),
                'semester' => Semester::all(),
                'bebanSks' => Sks::latest()->filter($id)->get()
            ]);
        }else{
            $id = Auth::user()->id . '.'.Auth::user()->angkatan . '.' . 'Ganjil';
            return view('dashboard.lihatnilai',[
                'title' => 'Nilai Mata Kuliah',
                'nilai' => Nilai::filterNilai($id)->get(),
                'tahun' => xample::all(),
                'semester' => Semester::all(),
                'bebanSks' => Sks::filter($id)->get(),
            ]);
        }
    }
}
