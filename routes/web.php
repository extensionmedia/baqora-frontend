<?php

use App\Models\Annonce;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\StartController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


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
Route::get('/annonce/create', [AnnonceController::class, 'create'])->name('annonce.create');
Route::get('/annonce/{annonce}', [AnnonceController::class, 'show'])->name('annonce.show');

Route::get('annonces/category/{category}', [AnnonceController::class, 'getByCategory'])->name('category.annonces');
Route::get('annonces/city/{city}', [AnnonceController::class, 'getByCity'])->name('city.annonces');
Route::get('annonces/client/{client}', [AnnonceController::class, 'getByClient'])->name('client.annonces');

Route::get('/annonce_slug', [AnnonceController::class, 'create_slug']);
Route::get('/category_slug', [AnnonceController::class, 'create_category_slug']);




Route::get('/images', [AnnonceController::class, 'images']);
Route::get('/correct_images', [AnnonceController::class, 'correct_images']);
Route::get('/imagesToJson', [AnnonceController::class, 'imagesToJson'])->name('imagesToJson');
Route::get('/total_images', [AnnonceController::class, 'total_images'])->name('total_images');


Route::get('/search', [AnnonceController::class, 'search'])->name('search');
Route::get('/search/annonce_category/{annonce_category}', [StartController::class, 'getSubAnnonceCategorie']);
Route::get('/search/city_sector/{id}', [StartController::class, 'getCitySectors']);

Route::get('session/cookie/save', function(){
    return session(['cookie_accepted'=>true]);
})->name('cookie.accepted');


Route::get('/favorites', [AnnonceController::class, 'favorite'])->name('favorite');
Route::get('/favorites/add/{annonce_id}/{action}', [AnnonceController::class, 'add_to_favorites'])->name('favorite.add');
Route::get('/featured', [AnnonceController::class, 'featured'])->name('featured');

Route::get('/client/create', [ClientController::class, 'create'])->name('client.create');
Route::post('/client/store', [ClientController::class, 'store'])->name('client.store');
Route::get('/client/phone/{client}', [ClientController::class, 'get_phone'])->name('client.get_phone');

// Route::get('/years', function(){
//     foreach (Annonce::whereYear('created_at', '<', '2021')->get() as $a) {
//         // echo $a->created_at . "<br>";
//         $dates = explode(" ", $a->created_at);
//         $years = explode("-", $dates[0]);

//         $date = "2021-".$years[1]."-".$years[2]." ".$dates[1];

//         $a->created_at = $date;
//         echo $a->save() . "<br>";
//     }
//     echo 'finiched';
// });
