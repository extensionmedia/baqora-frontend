<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    function annonces(){
        return $this->hasMany(Annonce::class, 'client_id', 'id');
    }
}
