<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\AnnonceCategory;
use App\Models\AnnonceFavorite;
use App\Models\AnnonceImage;
use App\Models\City;
use App\Models\CitySector;
use App\Models\Client;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AnnonceController extends Controller
{
    public function create(){
        return view('annonce.create')->with([
            'categories'    =>  AnnonceCategory::where('category_status', 1)
                                                ->where('annonce_category_id',-1)
                                                ->orderBy('level')
                                                ->get(),
            'cities'        =>  City::where('city_status', 1)
                                                ->where('is_principal', 1)
                                                ->orderBy('city_name')
                                                ->get()
        ]);
    }

    public function search(Request $r){


        $query_string  = explode('&', $_SERVER['QUERY_STRING']);
        $params = array();

        foreach($query_string as $param){
            list($name, $value) = explode('=', $param);
            $params[urldecode($name)][] = urldecode($value);
        }


        $query = Annonce::query();
        $bread = [];

        if($r->has('text')){
            $query->where('titre', 'like', "%{$r->text}%");
        }

        if($r->has('type')){
            $query->where('annonce_type_id', '=', $r->type);
        }

        if($r->has('cat')){
            if($r->cat > 0){
                $category = AnnonceCategory::where('slug', '=', $r->cat)->firstOrFail();
                $query->where('annonce_category_id', '=', $category->id);
                $bread['cat'] = [$category->slug, $category->annonce_category_name];
            }
        }

        if($r->has('sous_category_slug')){
            foreach($params["sous_category_slug"] as $k=>$sc){
                $category = AnnonceCategory::where('slug', '=', $sc)->firstOrFail();
                $query->where('annonce_sous_category_id', '=', $category->id);
            }
        }

        if($r->has('city')){
            if($r->city > 0){
                $city = City::findOrFail($r->city);
                $query->where('city_id', '=', $city->id);
                $bread['city'] = [$city->id, $city->city_name];
            }else{
                $query->where('city_id', '=', -1);
                $bread['city'] = [-1, "Tous le Maroc"];
            }
        }

        if($r->has('city_sector_id')){
            foreach($params["city_sector_id"] as $k=>$s){
                $sector = CitySector::findOrFail($s);
                $query->where('city_sector_id', '=', $sector->id);
            }
        }

        if($r->has('client')){
            if($r->client > 0){
                $client = Client::where('id', '=', $r->client)->firstOrFail();
                $query->where('client_id', '=', $client->id);
                $bread['user'] = [$client->id, $client->nom];
            }
        }

        if($query->count()){
            return view('search.result')->with([
                'annonces'      =>  $query->whereDate('created_at', '<=', Carbon::today())->orderBy('created_at', 'DESC')->paginate(25)->appends(request()->query()),
                'categories'    =>  AnnonceCategory::where('category_status', 1)
                                    ->where('annonce_category_id',-1)
                                    ->orderBy('level')
                                    ->get(),
                'bread'         =>  $bread
                ]);
        }else{
            abort(404);
        }

    }

    public function add_to_favorites($annonce_id, $action=1){
        //session()->forget('annonces.favorite');
        if(!session()->has('annonces.favorite')){
            session()->put('annonces.favorite', []);
            session()->push('annonces.favorite', $annonce_id);
        }else{
            $favs = session()->get('annonces.favorite');
            session()->forget('annonces.favorite');
            session()->put('annonces.favorite', []);
            foreach($favs as $f){
                if($f !== $annonce_id){
                    session()->push('annonces.favorite', $f);
                }
            }
            session()->push('annonces.favorite', $annonce_id);
        }
        if($action){
            AnnonceFavorite::create([
                "created_at"    =>  Carbon::now(),
                "user_id"    =>  0,
                "annonce_id"    =>  $annonce_id
            ]);
        }else{
            AnnonceFavorite::orderBy('id', 'desc')->limit(1)->delete();
        }
        $annonce = Annonce::find($annonce_id);
        return $annonce->favorites->count();
    }

    public function favorite(){

        $my_favorites = session()->get('annonces.favorite');
        if(!$my_favorites) abort(404);
        $annonces = Annonce::whereIn('id', $my_favorites);

        if($annonces->count()){
            return view('search.result')->with([
                'annonces'      =>  $annonces->orderBy('created_at', 'DESC')->paginate(25),
                'bread'         =>  []
                ]);
        }else{
            abort(404);
        }

    }

    public function featured(){
        $annonces = Annonce::whereDate('created_at', '<=', Carbon::today())->inRandomOrder()->limit(10)->get();
        $html = '';
        foreach($annonces as $a){
            $html .= view('annonce.item')->with(['annonce'=>$a]);
        }
        return $html;
    }

    public function show(Annonce $annonce){
        $categories = AnnonceCategory::where('category_status', 1)
                                        ->where('annonce_category_id',-1)
                                        ->orderBy('level')
                                        ->get();
        $annonce->visited += 1;
        $annonce->save();
        return view('annonce.show.index', ['annonce'=>$annonce, 'categories'=>$categories]);
    }

    public function getByCategory(AnnonceCategory $category){
        dd($category->annonces()->count());
    }

    public function getByCity(City $city){
        dd($city->annonces()->count());
    }

    public function getByClient(Client $client){
        dd($client->annonces()->count());
    }

    public function slug($string, $separator = '-') {
        if (is_null($string)) {
            return "";
        }

        $string = trim($string);

        $string = mb_strtolower($string, "UTF-8");;

        $string = preg_replace("/[^a-z0-9_\sءاأإآؤئبتثجحخدذرزسشصضطظعغفقكلمنهويةى]#u/", "", $string);

        $string = preg_replace("/[\s-]+/", " ", $string);

        $string = preg_replace("/[\s_]/", $separator, $string);

        return $string;
    }

    public function create_category_slug(){
        $category = AnnonceCategory::all();
        foreach($category as $a){

                echo $a->annonce_category_name . ' : ' . $this->slug($a->annonce_category_name) . '<br>';
                $a->slug = $this->slug($a->annonce_category_name)."-".$a->id;
                $a->save();

        }
    }
    public function create_slug(){
        $annonces = Annonce::all();
        foreach($annonces as $a){
            if(is_null($a->slug)){
                echo $a->titre . ' : ' . $this->slug($a->titre) . '<br>';
                $a->slug = $this->slug($a->titre)."-".$a->id;
                $a->save();
            }
        }
    }

    public function images(Request $r){
        $images = [];
        foreach(Storage::disk('public')->listContents('temp/annonces/'.$r->uid) as $path){
            if($path["type"] == "file"){
                $images[] = $path["basename"];
                Storage::copy('public/temp/annonces/' . $r->uid . '/' . $path["basename"], 'public/annonces/' . $r->uid . '/' .$path["basename"]);
            }
        }
        dd($images);
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

    public function imagesToJson2(Request $r){
        $index = 0;
        if($r->uid){
            foreach( Storage::disk('public')->listContents('temp/annonces/'.$r->uid) as $d ){
                $index++;
            }
        }
        if($index == 0){
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

    public function imagesToJson(Request $r){

        // foreach(Annonce::all() as $a){
        //     if($a->images->count()){
        //         $test = $a->images->where('is_default', true);
        //         if(!$test){
        //             echo $a->annonce_UID . 'has no default <br>';
        //         }
        //     }else{
        //         echo $a->annonce_UID . 'has no image at all <br>';
        //     }

        // }


        // $i = 0;
        // foreach(Annonce::all() as $a){

            // if(!$a->images()->count()){

            //     echo $a->annonce_UID . ' has no images <br>';
            // }

            // if(!$a->images->where('is_default', '1')->count()){

            //     $ai = AnnonceImage::where('annonce_id', $a->id)->first();
            //     if($ai){
            //         $ai->is_default = true;
            //         $ai->save();
            //         $i++;
            //     }else{
            //          foreach(Annonce::where('annonce_UID', $a->annonce_UID) as $t){
            //             echo $a->annonce_UID . ' : ' . AnnonceImage::where('annonce_id', $t->id)->count() . '<br>';
            //         //     if(!AnnonceImage::where('annonce_id', $t->id)->count()){
            //         //         $t->delete();
            //         //     }
            //          }
            //         //echo $a->annonce_UID . ' has no images <br>';
            //     }

            // }
        // }


        // foreach(Storage::disk('public')->listContents('annonces') as $path){
        //     if($path['type'] == 'dir')
        //         $a = Annonce::where('annonce_UID', $path['filename']);
        //         if(!$a){
        //             echo $path['filename'] . 'not exists <br>';
        //         }
        // }



        // $index = 0;
        // if($r->uid){
        //     foreach( Storage::disk('public')->listContents('temp/annonces/'.$r->uid) as $d ){
        //         $index++;
        //     }
        // }
        // if($index == 0){
        //     Annonce::where('annonce_UID', $r->uid)->delete();
        //     return -1;
        // }
        // return $index;
        // return $r->uid;




        // if($r->uid){
        //     $annonce = Annonce::where('annonce_UID', $r->uid)->first();
        //     if($annonce)
        //         foreach(Storage::disk('public')->listContents('temp/annonces/'.$r->uid) as $path){
        //             if($path["type"] == "file"){
        //                 if( !Storage::exists('public/annonces/' . $r->uid . '/' .$path["basename"] ) ){
        //                     Storage::copy('public/temp/annonces/' . $r->uid . '/' . $path["basename"], 'public/annonces/' . $r->uid . '/' .$path["basename"]);
        //                     AnnonceImage::create([
        //                         'annonce_id'    =>  $annonce->id,
        //                         'annonce_UID'   =>  $annonce->annonce_UID,
        //                         'is_default'    =>  Str::contains($path["basename"], '(default)')? true: false,
        //                         'image_path'    =>  'annonces/' . $r->uid . '/' . $path["basename"]
        //                     ]);
        //                 }
        //             }
        //         }
        // }


        // if($r->uid){
        //     $annonce = Annonce::where('annonce_UID', $r->uid)->first();
        //     if($annonce)
        //         foreach(Storage::disk('public')->listContents('annonces/'.$r->uid) as $path){
        //             if($path["type"] == "file"){
        //                 AnnonceImage::create([
        //                     'annonce_id'    =>  $annonce->id,
        //                     'annonce_UID'   =>  $annonce->annonce_UID,
        //                     'is_default'    =>  Str::contains($path["basename"], '(default)')? true: false,
        //                     'image_path'    =>  'annonces/' . $r->uid . '/' . $path["basename"]
        //                 ]);
        //                 echo 'saved';
        //             }
        //         }
        // }
    }
}
