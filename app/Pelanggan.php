<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    public function pesanan(){
        return $this->belongsTo('App\Pesanan', 'nik');
    }
}
