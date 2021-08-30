<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnonceFavorite extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
       'created_at',
       'user_id',
       'annonce_id'
    ];
}
