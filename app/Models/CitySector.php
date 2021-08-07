<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CitySector extends Model
{
    use HasFactory;

    public function annonces(){
        return $this->hasMany(Annonce::class, 'city_sector_id', 'id');
    }
}
