<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

    public function images(){
        $index = 0;
        foreach( Storage::disk('public')->listContents('temp/annonces') as $d ){
            if($index > 10){
                return;
            }
            dump( $d );
            $index++;
        }
    }

    public function correct_images(){
        // $annonces = cache()->remember('annonces', 60*60*24, function(){
        //     return Annonce::all();
        // });
        $annonces = Annonce::all();
        return view('annonce.corrections.images.list', [
            'annonces'  =>  $annonces
        ]);
    }

    public function imagesToJson(Request $r){
        $index = 0;
        if($r->uid){
            foreach( Storage::disk('public')->listContents('temp/annonces/'.$r->uid) as $d ){
                $index++;
            }
        }
        if($index === 0){
            Annonce::where('annonce_UID', $r->uid)->delete();
            return -1;
        }
        return $index;
        return $r->uid;
    }

    public function total_images(Request $r){
        if($r->uid){
            $annonce = Annonce::where('annonce_UID', $r->uid)->first();
            if($annonce)
                if($annonce->images_path)
                    return count($annonce->images_path);
        }
        return 0;
    }
}
