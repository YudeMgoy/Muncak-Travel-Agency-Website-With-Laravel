@extends('components.master')

@section('title')
    {{$perlengkapan->nama}}
@stop

@section('content')
    <div class="mini-header-container header-container" >
        <img src="{{asset($perlengkapan->image)}}" alt="First slide">                    

        <div class="jumbotron-box">            
            <div class="text">
                <h3>{{$perlengkapan->nama}}</h3>
                <p><i class="fa fa-map-marker-alt"></i> {{$perlengkapan->wilayah->nama}}, {{$perlengkapan->lokasi}}</p>
            </div>           
        </div>        
    </div>

    <div class="body">
        <div class="detail-box">
            <div class="left">
                <div class="keterangan">
                    <h3>Keterangan</h3>
                    <p>{{$perlengkapan->keterangan}}</p>
                </div>   
            </div>
            <div class="right">
                <h3>Rekomendasi</h3>
                <div class="list">
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
                </div>
            </div>
        </div>
    </div>
@stop