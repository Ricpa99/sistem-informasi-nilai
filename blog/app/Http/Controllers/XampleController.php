<?php

namespace App\Http\Controllers;

use App\Models\Xample;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class XampleController extends Controller
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
        $validated = $request->validate([
            'years' => 'required|max:4|unique:xamples'
        ]);

        if (Auth::check($validated)) {
            Xample::create($validated);
            
            return back()->with('success', 'Data has been addeted');
        }
        return back()->with('error', 'Data failed addeted');
    }

    /**
     * Display the specified resource.
     */
    public function show(Xample $xample)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Xample $xample)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Xample $xample)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Xample $xample)
    {
        Xample::destroy($xample->id);
        return back()->with('success', 'Data has been deleted');
    }
}
