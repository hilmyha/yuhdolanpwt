<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DestinasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('admin');
        // show all destinasi
        return view('destinasi.index', [
            'destinasis' => Destinasi::with('user')->latest()->paginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // show create form
        return view('destinasi.create',[
            'categories' => \App\Models\Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // route
        $destinasi = $request->validate([
            'nama' => 'required|string',
            'category_id' => 'required',
            'slug' => 'required|string|unique:destinasis',
            'lokasi' => 'required|string',
            'harga' => 'required|integer',
            'excerpt' => 'required|string',
            'deskripsi' => 'required|string',
            'lat' => 'required|string',
            'lng' => 'required|string',
        ]);

        $destinasi['user_id'] = auth()->user()->id;

        Destinasi::create($destinasi);

        return redirect('/dashboard/destinasi')->with('success', 'Destinasi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Destinasi $destinasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destinasi $destinasi)
    {
        return view('destinasi.edit', [
            'destinasi' => $destinasi,
            'user' => \App\Models\User::all(),
            'categories' => \App\Models\Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Destinasi $destinasi)
    {
        $rules = [
            'nama' => 'required|string',
            'category_id' => 'required',
            'lokasi' => 'required|string',
            'harga' => 'required|integer',
            'excerpt' => 'required|string',
            'deskripsi' => 'required|string',
            'lat' => 'required|string',
            'lng' => 'required|string',
        ];

        if ($request->slug != $destinasi->slug) {
            $rules['slug'] = 'required|string|unique:destinasis';
        }

        $updateDestinasi = $request->validate($rules);

        $updateDestinasi['user_id'] = auth()->user()->id;

        $destinasi->update($updateDestinasi);

        return redirect('/dashboard/destinasi')->with('success', 'Destinasi berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destinasi $destinasi)
    {
        Destinasi::destroy($destinasi->id);

        return redirect('/dashboard/destinasi')->with('success', 'Destinasi berhasil dihapus');
    }

    // check slug with slugable package
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Destinasi::class, 'slug', $request->nama);

        return response()->json(['slug' => $slug]);
    }
}
