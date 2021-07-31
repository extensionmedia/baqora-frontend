<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AnnonceController extends Controller
{
    public function create_slug(){
        $annonces = Annonce::all();
        foreach($annonces as $a){
            $a->slug = Str::slug($a->titre)."-".$a->id;
            echo $a->save();
        }
    }


}
