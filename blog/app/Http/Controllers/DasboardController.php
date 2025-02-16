<?php

namespace App\Http\Controllers;

use App\Models\Sks;
use App\Models\User;
use App\Models\Nilai;
use App\Models\xample;
use App\Models\Payment;
use App\Models\Semester;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DasboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return User::all();
        return view('dashboard.home',[
            'title' => 'dashboard',
            'user' => User::where('id', auth()->user()->id)->get()
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return request()->all();
        $validated = $request->validate([
                'nim' => 'required|max:9',
                'name' => 'required|max:30',
                'jurusan' => 'required|max:35',
                'password' => 'required|max:35',
                'angkatan' => 'required|max:35',
        ]);
        $validated['password'] = Hash::make($validated['password']);
        $validated['slug'] = $request->slug;
        if (Auth::check($validated)) {
            User::create($validated);
            return back()->with('success', 'Mahasiswa has been addeted');
        }
        return back();
        
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
       $matkul_id = $user->id . '.' . $user->angkatan . '.' . 'Ganjil';
       return view('dashboard.admin.show',[
        'title' => "Info Mahasiswa",
        'user' => $user,
        'tahun' => xample::all(),
        'semester' => Semester::all(),
        'nilai' => Nilai::latest()->filterNilai($matkul_id)->get(),
        'Sks' => Sks::filterSks($user->id)->get(),
        'Payment' => Payment::filterPayment($user->id)->get(),
        'mahasiswa' => $user->angkatan,
       ]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('dashboard.admin.editUser', [
            'title' => 'Update Data Mahasiswa',
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
    
      if($request->file('image')){
        if ($request->oldImg == null) {
            $validated = $request->validate([
                'image' => 'image|max:1024',
            ]);
            $validated['image'] = $request->file('image')->store('IMG');
            User::where('id', $user->id)->update($validated);
            return back()->with('success', 'image has been update');
        }elseif($request->oldImg == true){
            $validated = $request->validate([
                'image' => 'image|max:1024',
            ]);
            Storage::delete($request->oldImg);
            $validated['image'] = $request->file('image')->store('IMG');
            User::where('id', $user->id)->update($validated);
            return back()->with('success', 'image has been update');
        }
        
      };
        $validated = $request->validate([
            'nim' => 'max:15|required',
            'name' => 'max:25|required',
            'jurusan' => 'max:25|required',
            'angkatan' => 'max:25|required'
        ]);
        User::where('id', $user->id)->update($validated);
        return redirect('/daftarMahasiswa')->with('success', 'Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
            User::destroy($user->id);
       return back()->with('success', 'Data has been deleted!');
    }
}
