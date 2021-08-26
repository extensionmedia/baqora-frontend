<?php

use App\Models\AnnonceCategory;
use App\Models\City;

if(!function_exists('search')){
    function search(){

        $categories = AnnonceCategory::where('category_status', 1)
                                        ->where('annonce_category_id',-1)
                                        ->orderBy('level')
                                        ->get();
        $cities = cache()->remember('cities', 60*60*24, function(){
            return City::where('city_status', 1)
                        ->where('is_principal', 1)
                        ->orderBy('city_name')
                        ->get();
        });
        return view('search.form')->with([
            'categories'        =>  $categories,
            'cities'           =>  $cities
        ]);
    }
}
