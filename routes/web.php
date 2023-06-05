<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'destinasi' => \App\Models\Destinasi::latest()->get()
    ]);
})->name('home');

// destinasi
Route::get('/destinasi', [App\Http\Controllers\DestinasiController::class, 'index'])->name('destinasi');
Route::get('/destinasi/{destinasi:slug}', [App\Http\Controllers\DestinasiController::class, 'show'])->name('destinasi-show');

// dashboard
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // check slug
    Route::get('/dashboard/destinasi/checkSlug', [App\Http\Controllers\Admin\DestinasiController::class, 'checkSlug']);
    Route::resource('/dashboard/destinasi', App\Http\Controllers\Admin\DestinasiController::class);

    
});

