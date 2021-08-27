<?php

use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\StartController;
use App\Models\Annonce;
use App\Models\AnnonceCategory;
use App\Models\Client;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

// Static Pages Routes

Route::get('/contact',function(){
    return view('pages.contact-us');
})->name('pages.contact');

Route::get('/about',function(){
    return view('pages.about-us');
})->name('pages.about');

Route::get('/conditions-general-d-utilisation',function(){
    return view('pages.conditions-general');
})->name('pages.conditions');

Route::get('/reglement-de-publication',function(){
    return view('pages.vie-prive');
})->name('pages.vie-prive');

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
Route::get('/search', [AnnonceController::class, 'search'])->name('search');

Route::get('session/cookie/save', function(){
    return session(['cookie_accepted'=>true]);
})->name('cookie.accepted');


Route::get('/favorites', [AnnonceController::class, 'favorite'])->name('favorite');
Route::get('/favorites/add/{annonce_id}', [AnnonceController::class, 'add_to_favorites'])->name('favorite.add');

Route::get('/dropbox', function(){

    // $url = Storage::disk('dropbox')->url('annonces/image.jpg');
    // echo "<img class='h-16 w-16' src='".Storage::url($f)."'>";
    // dd($url);
    $files = Storage::disk('dropbox')->allFiles('annonces');
    // Storage::disk('dropbox')->put('test.txt', 'Hello World');

    //$path = Storage::disk('dropbox')->getAdapter()->getPathPrefix();
    // dd(Storage::disk('dropbox'));
    foreach($files as $f){
        echo "<img style='width:64px' src='".Storage::disk('dropbox')->url($f)."'>";
    }
});