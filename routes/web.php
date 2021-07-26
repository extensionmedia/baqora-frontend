<?php

use App\Http\Controllers\StartController;
use Illuminate\Support\Facades\Route;


Route::get('/', [StartController::class, 'index'])->name('start');
Route::get('/slug', [StartController::class, 'slug']);


Route::get('/search/annonce_category/{id}', [StartController::class, 'getSubAnnonceCategorie']);
Route::get('/annonce/{slug}-{uid}', function(){
    return view('annonce.show.index');
});
