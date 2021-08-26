<?php

use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\StartController;
use App\Models\Annonce;
use App\Models\AnnonceCategory;
use App\Models\Client;
use Illuminate\Support\Facades\Route;

// Static Pages Routes

Route::get('/contact',function(){
    return view('pages.contact-us')->with(['categories'=>AnnonceCategory::where('category_status', 1)
    ->where('annonce_category_id',-1)
    ->orderBy('level')
    ->get()]);
})->name('pages.contact');

Route::get('/about',function(){
    return view('pages.about-us')->with(['categories'=>AnnonceCategory::where('category_status', 1)
    ->where('annonce_category_id',-1)
    ->orderBy('level')
    ->get()]);
})->name('pages.about');

Route::get('/conditions-general-d-utilisation',function(){
    return view('pages.conditions-general')->with(['categories'=>AnnonceCategory::where('category_status', 1)
    ->where('annonce_category_id',-1)
    ->orderBy('level')
    ->get()]);
})->name('pages.conditions');

Route::get('/reglement-de-publication',function(){
    return view('pages.vie-prive')->with(['categories'=>AnnonceCategory::where('category_status', 1)
    ->where('annonce_category_id',-1)
    ->orderBy('level')
    ->get()]);
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
Route::get('/check_if_each_annonce_has_a_client', function(){
    $annonces = [];
    foreach(Annonce::all() as $a){
        if( !$a->client()->count() ){
            $annonces[] = $a->id;
        }
    }
    echo "total found : " . count($annonces) . "<br>";
    $clients = [];
    $index = 0;
    foreach(Client::all() as $a){
        if($a->annonces()->count() === 2){
            if(isset($annonces[$index])){
                $annonce = Annonce::find($annonces[$index]);
                echo $annonce->client_id . " : ";
                $annonce->client_id = $a->id;
                echo $annonce->client_id."<br>";
                //$annonce->save();
                $index++;
                //$clients[] = $a->id;
            }

        }
    }

    //dump($annonces);
    // foreach(Client::all() as $c){
    //     if(!$c->annonces()->count()){
    //         echo $c->nom . " - " . $c->annonces()->count()."<br>";
    //     }
    // }

});


Route::get('/search/annonce_category/{id}', [StartController::class, 'getSubAnnonceCategorie']);
Route::get('/search/city_sector/{id}', [StartController::class, 'getCitySectors']);
Route::get('/search', [AnnonceController::class, 'search'])->name('search');

Route::get('session/cookie/save', function(){
    return session(['cookie_accepted'=>true]);
})->name('cookie.accepted');

Route::get('/test', function(){
    return foo();
});

