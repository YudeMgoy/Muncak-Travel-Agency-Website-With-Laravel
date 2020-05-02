<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    protected $fillable = [
        'warna', 'nama'
    ];

    public function gunung(){
        return $this->hasMany('App\Gunung', 'wilayah_id');
    }

    public function perlengkapan(){
        return $this->hasMany('App\Perlengkapan');
    }
}
