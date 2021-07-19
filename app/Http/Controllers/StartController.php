<?php

namespace App\Http\Controllers;

use App\Models\AnnonceCategory;
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

        return view('start')->with([
            'categories'    =>  $annonce_categories
        ]);
    }

    public function slug(){
        $categories = AnnonceCategory::all();
        foreach($categories as $c){
            $c->slug = str::slug($c->annonce_category_name);
            echo $c->save();
        }
    }
}
