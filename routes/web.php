<?php

use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\StartController;
use Illuminate\Support\Facades\Route;


Route::get('/', [StartController::class, 'index'])->name('start');
// Route::get('/annonce_slug', [AnnonceController::class, 'create_slug']);
Route::get('/images', [AnnonceController::class, 'images']);


Route::get('/search/annonce_category/{id}', [StartController::class, 'getSubAnnonceCategorie']);
Route::get('/search/city_sector/{id}', [StartController::class, 'getCitySectors']);

Route::get('/annonce/{slug}-{uid}', function(){
    return view('annonce.show.index');
});
