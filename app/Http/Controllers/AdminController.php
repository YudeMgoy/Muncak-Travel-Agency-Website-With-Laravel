<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gunung;
use App\Pesanan;
use App\Perlengkapan;
use App\Pelanggan;
use App\Wilayah;

class AdminController extends Controller
{
    public function lihatPesanan(){
        $pesanans = Pesanan::with('gunung')->get();

        $pelanggans = [];

        foreach($pesanans as $pes){
            $pelanggans[] = Pelanggan::where('nik', $pes->nik)->first();
        }

        return view("admin.lihatpesanan", compact('pesanans', 'pelanggans'));
    }

    public function addGunung(){
        $wilayahs = Wilayah::all();

        return view('admin.addgunung', compact('wilayahs'));
    }

    public function addPerlengkapan(){
        $wilayahs = Wilayah::all();

        return view('admin.addperlengkapan', compact('wilayahs'));
    }

    public function storeGunung(Request $req){
        $this->validate($req, [
            'wilayah_id' => 'required',
            'nama' => 'required',
            'keterangan' => 'required',
            'harga' => 'required',
            'image' => 'required',
            'lokasi' => 'required',            
        ]);
        
        $img = $req->file('image');
        $ext = $img->extension();
        $dir = 'upload/';
        $name = uniqid().'.'.$ext;
        $move = $img->move($dir, $name);        

        $input = $req->all();
        $input['jml_pesanan'] = 0;
        $input['image'] = $dir.$name;
        $gunung = new Gunung($input);
        $gunung->save();

        return back()->with('info', 'Gunung Ditambah');
    }

    public function storePerlengkapan(Request $req){
        $this->validate($req, [
            'wilayah_id' => 'required',
            'nama' => 'required',
            'keterangan' => 'required',            
            'image' => 'required',
            'lokasi' => 'required',            
        ]);
        
        $img = $req->file('image');
        $ext = $img->extension();
        $dir = 'upload/';
        $name = uniqid().'.'.$ext;
        $move = $img->move($dir, $name);        

        $input = $req->all();        
        $input['image'] = $dir.$name;
        $perlengkapan = new Perlengkapan($input);
        $perlengkapan->save();

        return back()->with('info', 'Perlengkapan Ditambah');
    }

    public function storeWilayah(Request $req){
        $this->validate($req, [
            'nama' => 'required',
        ]);

        $col = array(
            'bg_purple',
            'bg_yellow',
            'bg_green',
            'bg_blue',
        );

        $col = $col[array_rand($col)];
        
        $input = $req->all();        
        $input['warna'] = $col;
        $wilayah = new Wilayah($input);        
        $wilayah->save();

        return back()->with('info', 'Wilayah Ditambah');
    }
}
