<?php

namespace App\Http\Controllers\Admin;

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
        $this->authorize('admin');
        // show all ulasan
        return view('ulasan.index', [
            'ulasans' => Ulasan::with('user')->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('destinasi-show');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $destinasi = \App\Models\Destinasi::find($id);

        if ($destinasi) {
            $ulasan = $request->validate([
                'judul' => 'required|string',
                'isi' => 'required|string',
                'tanggal_berkunjung' => 'required|string',
            ]);

            // tanggal_berkunjung to date
            $ulasan['tanggal_berkunjung'] = date('Y-m-d', strtotime($ulasan['tanggal_berkunjung']));

            $ulasan['destinasi_id'] = $destinasi->id;

            $ulasan['user_id'] = auth()->user()->id;


            Ulasan::create($ulasan);
            
            return redirect()->back()->with('success', 'Ulasan berhasil ditambahkan');
        }

        return redirect()->back()->with('error', 'Destinasi tidak ditemukan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ulasan $ulasan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ulasan $ulasan)
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
        Ulasan::destroy($ulasan->id);

        return redirect()->back()->with('success', 'Ulasan berhasil dihapus');
    }
}
