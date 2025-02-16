<?php

namespace App\Http\Controllers;

use App\Models\BebanSks;
use App\Models\Nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $result = Nilai::latest()->filterNilai($request->id)->get();
        $num    = 0;
        $num2   = 0;
        //cek jumlah sks di databsae
        for ($i=0; $i < count($result); $i++) { 
            $num += $result[$i]->sks;
        }
        // return $num;
        //cek jumlah sks yang di input
        for ($i=1; $i <= count($request->sks) ; $i++) { 
            $num2 += $request->sks[$i];
        }
        
        if ($request->id == null) {
            return back()->with('error', 'Silahkan pilih tahun semester terlebih dahulu');
        }
        if ($num2 > $request->bebanSks) {
            return back()->with('error', 'Maksimal beban sks ' . $request->bebanSks);
        }if ($num == $request->bebanSks) {
            return back()->with('error', 'Anda sudah Memasukkan krs');
        }else{
            for ($i = 1; $i <= count($request->sks); $i++) {
                if ($request->kode[$i] == null or $request->matkul[$i] == null or $request->sks[$i] == null or $request->kelas[$i] == null) {
                    return back()->with('error', 'Failed addeted krs, required colums!!');
                }
            }
            for ($i = 1; $i <= count($request->sks); $i++) {
                Nilai::create([
                    'matkul_id' => $request->id,
                    'indeks' => $request->indeks,
                    'kode' => $request->kode[$i],
                    'slug' => $request->slug,
                    'matkul' => $request->matkul[$i],
                    'sks' => $request->sks[$i],
                    'kelas' => $request->kelas[$i],
                ]);
            }

            return back()->with('success', 'Krs has been addeted!');
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Nilai $nilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nilai $nilai)
    {
        return view('dashboard.admin.edit',[
            'title' => 'Edit Data Mahasiwa',
            'user' => $nilai,
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nilai $nilai)
    {
        $validated = $request->validate([
            'nilai' => 'max:15',
        ]);
        $nilai::where('id', $nilai->id)->update($validated);
        return redirect('/dashboard/user/'. $nilai->slug)->with('success', 'Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nilai $nilai)
    {
        //
    }
}
