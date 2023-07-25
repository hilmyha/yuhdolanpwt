<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('admin');

        return view('favorite.index', [
            // relations with user and destinasi
            'favorites' => Favorite::with('user', 'destinasi')->latest()->get(),
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

        if (auth()->check()) {
            $exist = Favorite::where('destinasi_id', $destinasi->id)->where('user_id', auth()->user()->id)->first();

            if (!$exist) {
                Favorite::create([
                    'destinasi_id' => $destinasi->id,
                    'user_id' => auth()->user()->id,
                ]);

                return redirect()->back()->with('success', 'Favorite berhasil ditambahkan');
            } else {
                return redirect()->back()->with('error', 'Favorite gagal ditambahkan');
            }
        } else {
            return redirect()->back()->with('error', 'Favorite gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Favorite $favorite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Favorite $favorite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Favorite $favorite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Favorite $favorite, $id)
    {
        $destinasi = \App\Models\Destinasi::find($id);

        if (auth()->check()) {
            $exist = Favorite::where('destinasi_id', $destinasi->id)->where('user_id', auth()->user()->id)->first();

            if ($exist) {
                $exist->delete();

                return redirect()->back()->with('success', 'Favorite berhasil dihapus');
            } else {
                return redirect()->back()->with('error', 'Favorite gagal dihapus');
            }
        } else {
            return redirect()->back()->with('error', 'Favorite gagal dihapus');
        }
    }
}
