<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gunung extends Model
{
    protected $fillable = [
        'nama', 'harga', 'jml_pesanan', 'wilayah_id', 'lokasi', 'keterangan', 'image'
    ];

    public function wilayah(){
        return $this->belongsTo('App\Wilayah');
    }
}
