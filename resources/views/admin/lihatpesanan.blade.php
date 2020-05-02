@extends('components.masteradmin')

@section('title')
    Lihat Pesanan
@stop

@section('content')
    <div class="mini-header-container header-container" >
        <img src="">

        <div class="jumbotron-box">            
            <div class="text">
                <h3>LIHAT PESANAN</h3>                
            </div>                     
        </div>      
    </div>

    <div class="body">
        <div class="container">
            @foreach ($pesanans as $pes => $pesanan)
            <div class="card" style="width: 100%; margin: 10px 0;">
                <div class="card-body">
                <h5 class="card-title">{{$pelanggans[$pes]->nama}}</h5>
                <p style="font-size: 0.8em;color: #888;">NIK {{$pesanan->nik}}</p>
                <h6 class="card-subtitle mb-2 text-muted">Tanggal {{$pesanan->tanggal}}</h6>
                <p class="card-text">Jumlah Peserta {{$pesanan->jml_peserta}} dengan total harga {{$pesanan->total_harga}}</p>                
                </div>
            </div>
            @endforeach
        </div>        
    </div>    
@stop