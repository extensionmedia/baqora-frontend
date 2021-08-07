<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnonceImage extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
       'annonce_id',
       'annonce_UID',
       'is_default',
       'image_path'
    ];
}
