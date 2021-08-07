<?php

use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\StartController;
use Illuminate\Support\Facades\Route;


Route::get('/', [StartController::class, 'index'])->name('start');
Route::get('/annonce/{annonce}', [AnnonceController::class, 'show'])->name('annonce.show');

Route::get('client/phone/{client}', [ClientController::class, 'get_phone'])->name('client.get_phone');

Route::get('/annonce_slug', [AnnonceController::class, 'create_slug']);
Route::get('/images', [AnnonceController::class, 'images']);
Route::get('/correct_images', [AnnonceController::class, 'correct_images']);
Route::get('/imagesToJson', [AnnonceController::class, 'imagesToJson'])->name('imagesToJson');
Route::get('/total_images', [AnnonceController::class, 'total_images'])->name('total_images');


Route::get('/search/annonce_category/{id}', [StartController::class, 'getSubAnnonceCategorie']);
Route::get('/search/city_sector/{id}', [StartController::class, 'getCitySectors']);

// Route::get('/annonce/{slug}-{uid}', function(){
//     return view('annonce.show.index');
// });
