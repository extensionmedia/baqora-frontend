<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\AnnonceCategory;
use App\Models\City;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index()
    {
        $annonce_categories = cache()->remember('annonce_categories', 60*60*24, function(){
            return AnnonceCategory::where('category_status', 1)
                            ->where('annonce_category_id',-1)
                            ->orderBy('level')
                            ->get();
        });

        $cities = cache()->remember('cities', 60*60*24, function(){
            return City::where('city_status', 1)
                        ->orderBy('city_name')
                        ->get();
        });

        return view('start')->with([
            'categories'    =>  $annonce_categories,
            'cities'        =>  $cities,
            'annonces'      =>  Annonce::inRandomOrder()->limit(10)->get()
        ]);
    }

    public function slug(){
        $categories = AnnonceCategory::all();
        foreach($categories as $c){
            $c->slug = str::slug($c->annonce_category_name);
            echo $c->save();
        }
    }

    public function getSubAnnonceCategorie($id_annonce_category){
        $annonce_category = AnnonceCategory::findOrFail($id_annonce_category);
        if($annonce_category){
            return $annonce_category->subCategories()->get();
        }
        return [];
    }

    public function getCitySectors($id_city){
        $city = City::findOrFail($id_city);
        if($id_city){
            return $city->citySectors()->get();
        }
        return [];
    }

}
