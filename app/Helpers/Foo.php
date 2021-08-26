<?php

use App\Models\AnnonceCategory;

if(!function_exists('foo')){
    function foo(){

        $categories = AnnonceCategory::where('category_status', 1)
                                        ->where('annonce_category_id',-1)
                                        ->orderBy('level')
                                        ->get();

        return view('container.foobar')->with([
            'categories'        =>  $categories
        ]);
    }
}