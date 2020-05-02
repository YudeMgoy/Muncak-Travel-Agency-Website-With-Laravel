<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $fillable = [
        'gunung_id', 'total_harga', 'jml_peserta', 'kontak', 'nik', 'tanggal', 'pembayaran',
    ];

    public function gunung(){
        return $this->belongsTo('App\Gunung', 'gunung_id');
    }

    public function pelanggan(){
        return $this->hasMany('App\Pelanggan');
    }
}
