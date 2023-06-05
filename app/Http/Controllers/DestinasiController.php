<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('destinasi', [
            'destinasi' => Destinasi::latest()->get(),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Destinasi $destinasi)
    {
        return view('destinasi-show', [
            'title' => 'Detail Destinasi',
            'destinasi' => $destinasi
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
