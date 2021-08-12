<?php

use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\StartController;
use App\Models\AnnonceCategory;
use Illuminate\Support\Facades\Route;

// Static Pages Routes

Route::get('/contact',function(){
    return view('pages.contact-us')->with(['categories'=>AnnonceCategory::where('category_status', 1)
    ->where('annonce_category_id',-1)
    ->orderBy('level')
    ->get()]);
})->name('pages.contact');

Route::get('/', [StartController::class, 'index'])->name('start');
Route::get('/annonce/{annonce}', [AnnonceController::class, 'show'])->name('annonce.show');

Route::get('client/phone/{client}', [ClientController::class, 'get_phone'])->name('client.get_phone');

Route::get('annonces/category/{category}', [AnnonceController::class, 'getByCategory'])->name('category.annonces');
Route::get('annonces/city/{city}', [AnnonceController::class, 'getByCity'])->name('city.annonces');
Route::get('annonces/client/{client}', [AnnonceController::class, 'getByClient'])->name('client.annonces');

Route::get('/annonce_slug', [AnnonceController::class, 'create_slug']);
Route::get('/category_slug', [AnnonceController::class, 'create_category_slug']);




Route::get('/images', [AnnonceController::class, 'images']);
Route::get('/correct_images', [AnnonceController::class, 'correct_images']);
Route::get('/imagesToJson', [AnnonceController::class, 'imagesToJson'])->name('imagesToJson');
Route::get('/total_images', [AnnonceController::class, 'total_images'])->name('total_images');


Route::get('/search/annonce_category/{id}', [StartController::class, 'getSubAnnonceCategorie']);
Route::get('/search/city_sector/{id}', [StartController::class, 'getCitySectors']);

Route::get('session/cookie/save', function(){
    return session(['cookie_accepted'=>true]);
})->name('cookie.accepted');

