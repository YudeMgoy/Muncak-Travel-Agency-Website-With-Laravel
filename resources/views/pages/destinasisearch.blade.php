@extends('components.master')

@section('title')
    Cari Destinasi
@stop

@section('content')
    <div class="mini-header-container header-container" >
        <img src="https://2.bp.blogspot.com/-VyS3lol564s/WlqYmFc2C4I/AAAAAAAAA4g/fujKiAleqHscoL22DcLPjW1-0bGAvqHOACEwYBhgL/s1600/sindoro%2B%25281%2529.jpg" alt="First slide">                    

        <div class="jumbotron-box">            
            <div class="text">
                <h3>CARI DESTINASI SEKITAR</h3>                
            </div>
            <form action="{{url("destinasi/search")}}" method="POST">
                @csrf
                <input type="text" name="keyword">
                <button class="btn-succes">CARI</button>
            </form>                        
        </div>      
    </div>

    <div class="body">
        <div class="lokasi-box">
            @foreach ($wilayahs as $wilayah)
                <a href="{{url("destinasi/$wilayah->id")}}" class="{{$wilayah->warna}}">{{$wilayah->nama}}</a>    
            @endforeach
            {{--             
            <a href="" class="bg_blue">Jawa Barat</a>
            <a href="" class="bg_green">Jawa Timur</a>
            <a href="" class="bg_yellow">Jawa Tengah</a> --}}
        </div>

        <div class="destinasi-box">
            <h3 class="title">MENCARI "{{$keyword}}"</h3>   
            <div class="top-list list">
                @foreach ($gunungs as $data)                    
                    <div class="list-box">
                        <a href="{{url("/detail/$data->id")}}">
                            <div class="inner-box">
                                <div class="img-box">                                
                                    <img src="{{asset($data->image)}}" alt="">                
                                </div>
                                <h3>{{$data->nama}}</h3>
                                <p><i class="fa fa-map-marker-alt"></i> {{$data->wilayah->nama}}, {{$data->lokasi}}</p>
                            </div>                    
                        </a>                    
                    </div>                                                           
                @endforeach  
                @foreach ($perlengkapans as $data)                        
                    <div class="list-box">
                        <a href="{{url("/detailperlengkapan/$data->id")}}">
                            <div class="inner-box">
                                <div class="img-box">                                
                                    <img src="{{asset($data->image)}}" alt="">                
                                </div>
                                <h3>{{$data->nama}}</h3>
                                <p><i class="fa fa-map-marker-alt"></i> {{$data->wilayah->nama}}, {{$data->lokasi}}</p>
                            </div>                    
                        </a>                    
                    </div>
                @endforeach                 
            </div>
        </div>
    </div>    
@stop