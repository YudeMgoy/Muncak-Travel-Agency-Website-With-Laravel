<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gunung;
use App\Ulasan;
use App\Wilayah;
use App\Perlengkapan;

class IndexController extends Controller
{
    public function index(){
        $gunungs = Gunung::orderBy('jml_pesanan', 'DESC')->limit(4)->with('wilayah')->get();

        $ulasans = Ulasan::all();
        $slideUlasan = floor(count($ulasans)/3);        
        $c = 3;
        //dd(count($ulasans));
        return view('welcome', compact('gunungs', 'ulasans', 'slideUlasan','c'));
    }

    public function destinasi($id){
        if($id == 0){
            $wilayah = Wilayah::with('perlengkapan')->with('gunung')->first();
        }else{
            $wilayah = Wilayah::with('perlengkapan')->with('gunung')->where('id',$id)->first();
        }
        $datas = $wilayah;
        //dd($datas);
        $wilayahs = Wilayah::all();
        $lokasi = $wilayah->nama;
          
        return view('pages.destinasi', compact('datas', 'lokasi', 'wilayahs'));
    }

    public function search(Request $req){        
        $gunungs = Gunung::where("nama", 'LIKE', '%'.$req->keyword."%")->get();
        $perlengkapans = Perlengkapan::where('nama', 'LIKE', '%'.$req->keyword."%")->get();

        $keyword = $req->keyword;        
        $wilayahs = Wilayah::all();
        //dd($req->all());
        return view('pages.destinasisearch', compact('keyword','gunungs', 'perlengkapans', 'wilayahs'));
    }

    public function detail(Gunung $gunung){
        $gunungs = Gunung::orderBy('jml_pesanan')->limit(4)->get();

        return view('pages.detail', compact('gunungs', 'gunung'));
    }

    public function detailPerlengkapan(Perlengkapan $perlengkapan){
        $gunungs = Gunung::orderBy('jml_pesanan')->limit(4)->get();
        
        return view('pages.detailperlengkapan', compact('gunungs', 'perlengkapan'));
    }
}
