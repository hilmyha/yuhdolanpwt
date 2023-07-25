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

// category
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category');
Route::get('/category/{category:id}', [App\Http\Controllers\CategoryController::class, 'show'])->name('category-show');

// dashboard
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    // check slug
    Route::get('/dashboard/destinasi/checkSlug', [App\Http\Controllers\Admin\DestinasiController::class, 'checkSlug']);
    Route::resource('/dashboard/destinasi', App\Http\Controllers\Admin\DestinasiController::class)->middleware('admin');
    
    // category
    Route::resource('/dashboard/category', App\Http\Controllers\Admin\CategoryController::class)->middleware('admin');

    // ulasan
    Route::get('/dashboard/ulasan', [App\Http\Controllers\Admin\UlasanController::class, 'index'])->middleware('admin')->name('ulasan.index');
    Route::post('/tambah-ulasan/{destinasi:id}', [App\Http\Controllers\Admin\UlasanController::class, 'store']);
    Route::delete('/tambah-ulasan/{ulasan:id}', [App\Http\Controllers\Admin\UlasanController::class, 'destroy']);

    // favorite
    Route::get('/dashboard/favorite', [App\Http\Controllers\Admin\FavoriteController::class, 'index'])->middleware('admin')->name('favorite.index');
    Route::post('/destinasi/{destinasi:id}/favorite', [App\Http\Controllers\Admin\FavoriteController::class, 'store']);
    Route::delete('/destinasi/{destinasi:id}/unfavorite', [App\Http\Controllers\Admin\FavoriteController::class, 'destroy']);
});

