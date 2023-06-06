<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class DestinasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // show all destinasi
        return response()->json([
            'message' => 'Destinasi berhasil ditampilkan',
            'data' => Destinasi::all(),
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // route via api route
        $destinasi = $request->validate([
            'nama' => 'required|string',
            'lokasi' => 'required|string',
            'harga' => 'required|integer',
            'excerpt' => 'required|string',
            'deskripsi' => 'required|string',
        ]);

        $destinasi['slug'] = SlugService::createSlug(Destinasi::class, 'slug', $request->nama);

        $destinasi['user_id'] = auth()->user()->id;

        Destinasi::create($destinasi);

        return response()->json([
            'message' => 'Destinasi berhasil ditambahkan',
            'data' => $destinasi,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Destinasi $destinasi)
    {
        // show destinasi by slug
        return response()->json([
            'message' => 'Destinasi berhasil ditampilkan',
            'data' => $destinasi,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Destinasi $destinasi)
    {
        $validatedData = $request->validate([
            'nama' => 'string',
            'lokasi' => 'string',
            'harga' => 'integer',
            'excerpt' => 'string',
            'deskripsi' => 'string',
        ]);

        $validatedData['slug'] = SlugService::createSlug(Destinasi::class, 'slug', $request->nama);

        $validatedData['user_id'] = auth()->user()->id;

        $destinasi->update($validatedData);

        return response()->json([
            'message' => 'Destinasi berhasil diupdate',
            'data' => $destinasi,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destinasi $destinasi)
    {
        $destinasi->delete();

        return response()->json([
            'message' => 'Destinasi berhasil dihapus',
        ], 200);
    }
}
