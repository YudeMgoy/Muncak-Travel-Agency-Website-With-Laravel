<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    protected $fillable = [
        'name', 'image', 'ulasan',  'rating'         
    ];
}
