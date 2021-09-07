<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\AnnonceCategory;
use App\Models\City;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function getSubAnnonceCategorie($id_annonce_category){
        $annonce_category = AnnonceCategory::where('slug', '=', $id_annonce_category)->firstOrFail();
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
