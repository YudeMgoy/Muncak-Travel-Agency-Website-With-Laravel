<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perlengkapan extends Model
{
    protected $fillable = [
        'nama', 'wilayah_id', 'lokasi', 'keterangan', 'image'
    ];

    public function wilayah(){
        return $this->belongsTo('App\Wilayah');
    }
}
