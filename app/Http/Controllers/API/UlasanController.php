<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Ulasan;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'status' => 'success',
            'data' => Ulasan::with('user')->latest()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ulasan = $request->validate([
            'judul' => 'required|string',
            'isi' => 'required|string',
            'tanggal_berkunjung' => 'required|string',
            'destinasi_id' => 'required|integer',
        ]);

        // tanggal_berkunjung to date
        $ulasan['tanggal_berkunjung'] = date('Y-m-d', strtotime($ulasan['tanggal_berkunjung']));

        $ulasan['user_id'] = auth()->user()->id;

        Ulasan::create($ulasan);

        return response()->json([
            'status' => 'success',
            'data' => $ulasan
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ulasan $ulasan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ulasan $ulasan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ulasan $ulasan)
    {
        //
    }
}
