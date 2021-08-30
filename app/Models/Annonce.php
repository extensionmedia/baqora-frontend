<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function client(){
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }

    public function category(){
        return $this->belongsTo(AnnonceCategory::class, 'annonce_category_id', 'id');
    }

    public function sous_category(){
        return $this->belongsTo(AnnonceCategory::class, 'annonce_sous_category_id', 'id');
    }

    public function city(){
        return $this->belongsTo( City::class, 'city_id', 'id');
    }

    public function sector(){
        return $this->belongsTo( CitySector::class, 'city_sector_id', 'id');
    }

    public function images(){
        return $this->hasMany(AnnonceImage::class, 'annonce_id', 'id');
    }

    public function default_image($annonce_UID){
        $annonce_images = AnnonceImage::where('annonce_UID', $annonce_UID);
        foreach($annonce_images as $ai){
            if($ai->is_default){
                return $ai->image_path;
            }
        }
        if($annonce_images->count())
            return 'storage/'.$annonce_images->first()->image_path;
        else
            return "https://keeleandfinchdentaloffice.com/wp-content/uploads/2016/10/orionthemes-placeholder-image-750x750.jpg";
    }

    public function favorites(){
        return $this->hasMany(AnnonceFavorite::class, 'annonce_id', 'id');
    }
}
