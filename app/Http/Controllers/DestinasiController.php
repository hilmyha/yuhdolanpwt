<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Ulasan;
use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('destinasi', [
            'destinasis' => Destinasi::latest()->paginate(6),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Destinasi $destinasi)
    {
        return view('destinasi-show', [
            'title' => 'Detail Destinasi',
            'destinasi' => $destinasi,
            // show ulasan
            'ulasans' => Ulasan::with('user')->where('destinasi_id', $destinasi->id)->latest()->paginate(5)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destinasi $destinasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Destinasi $destinasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destinasi $destinasi)
    {
        //
    }
}
