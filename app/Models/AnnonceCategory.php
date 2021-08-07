<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnonceCategory extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    function subCategories(){
        return $this->hasMany(AnnonceCategory::class, 'annonce_category_id', 'id');
    }

    function annonces(){
        return $this->hasMany(Annonce::class, 'annonce_category_id', 'id');
    }
}
