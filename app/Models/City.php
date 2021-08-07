<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    public $timestamps = false;

    function citySectors(){
        return $this->hasMany(CitySector::class, 'city_id', 'id')->orderBy('city_sector_name');
    }

    public function annonces(){
        return $this->hasMany(Annonce::class, 'city_id', 'id');
    }
}
