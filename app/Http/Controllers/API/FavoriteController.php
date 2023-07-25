<?php

namespace App\Http\Controllers\API;

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
        return response()->json([
            'status' => 'success',
            'data' => Favorite::with('user', 'destinasi')->latest()->get(),
        ]);
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

                return response()->json([
                    'status' => 'success',
                    'message' => 'Favorite berhasil ditambahkan'
                ]);
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Favorite gagal ditambahkan'
                ]);
            }
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Favorite gagal ditambahkan'
            ]);
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

                return response()->json([
                    'status' => 'success',
                    'message' => 'Favorite berhasil dihapus'
                ]);
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Favorite gagal dihapus'
                ]);
            }
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Favorite gagal dihapus'
            ]);
        }
    }
}
