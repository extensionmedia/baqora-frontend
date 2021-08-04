<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

    protected $casts = [
        'images_path'    =>  'array'
    ];

    public function client(){
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }

    public function category(){
        return $this->belongsTo(AnnonceCategory::class, 'annonce_category_id', 'id');
    }

    public function sous_category(){
        return $this->belongsTo(AnnonceCategory::class, 'annonce_sous_category_id', 'id');
    }
}
