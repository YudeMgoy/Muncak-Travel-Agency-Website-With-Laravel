@extends('components.master')  

@section('title')
    Beranda
@stop

@section('content')
    <div class="header-container" >
        <img src="{{asset("img/login.jpg")}}" alt="First slide">                    

        <div class="jumbotron-box">            
            <div class="text">
                <h3>MTANERS</h3>
                <p>"The Cheapest Booking and Mountain Tour you can get"</p>                
            </div>
            <form action="{{url("destinasi/search")}}" method="POST">
                @csrf
                <input type="text" name="keyword">
                <button class="btn-succes">CARI</button>
            </form>            
        </div>
    </div>

    <div class="body" style="padding-bottom: 0;">
        <div class="top-chart">
            {{-- <img src="{{asset('img/hiker.png')}}" alt="" class="flow-img"> --}}
            <h3 class="title">DESTINASI TERATAS</h3>             
            <div class="top-list list">
                @foreach ($gunungs as $gunung)
                    <div class="list-box">
                        <a href="{{url("/detail/$gunung->id")}}">
                            <div class="inner-box">
                                <div class="img-box">                                
                                    <img src="{{asset($gunung->image)}}" alt="">                
                                </div>
                                <h3>{{$gunung->nama}}</h3>
                                <p><i class="fa fa-map-marker-alt"></i> {{$gunung->wilayah->nama}}, {{$gunung->lokasi}}</p>
                            </div>                    
                        </a>                    
                    </div>
                @endforeach        
            </div>
            <div class="lihat-semua">
                <a href="{{url('destinasi/0')}}">Lihat Semua</a>    
            </div>            
        </div>    
    
        <div class="ulasan-container">
            <h3 class="title">Ulasan Customer</h3>
            <div id="carouselExampleControls" class="list-container carousel slide" data-ride="carousel">
                <div class="carousel-inner">                                       
                    @for($i=0;$i<$slideUlasan;$i++)       
                        @if($i==0)                 
                            <div class="carousel-item active">                                                        
                        @else
                            <div class="carousel-item">  
                        @endif
                            <div class="list">       
                                @php $d = $c-3;if($d<=0){$d=0;} @endphp 
                                @if(count($ulasans) >= $c)                                     
                                    @for($a=$d;$a<$c;$a++) 
                                        <div class="list-box">
                                            <div class="img-box">
                                                <img src="{{asset($ulasans[$a]->image)}}" alt="">
                                            </div>
                        
                                            <h3 class="name">{{$ulasans[$a]->name}}</h3>
                                            <p class="comment">{{$ulasans[$a]->ulasan}}</p>
                                            <div class="star-box">
                                                @for($b = 0; $b<$ulasans[$a]->rating;$b++)
                                                    <i class="fa fa-star star"></i>                                            
                                                @endfor
                                            </div> 
                                        </div>
                                    @endfor   
                                    @php $c+=3; @endphp      
                                @endif                                              
                            </div>                        
                        </div>
                    @endfor
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <form action="" class="ulasan-form">                                
            </form>            
            <button class="btn-circle btn-succes" onclick="addUlasan()"><i class="fa fa-plus"></i></button> 
        </div>        
    </div> 

    <div class="add-ulasan" id="addUlasan">
        <button class="x" onclick="addUlasan()">X</button>
        <form action="{{url("ulasan/add")}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-group">
                <label for="">Nama</label>
                <input type="text" name="name">
            </div>            
            <div class="input-group">
                <label for="">Foto</label>
                <input type="file" name="image">
            </div>            
            <div class="input-group">
                <label for="">Ulasan</label>
                <textarea name="ulasan" id="">Tulis ulasan</textarea>
            </div>            
            <div class="input-group">
                <label for="">Rating</label>
                <div class="input">
                <input type="radio" name="rating" value="1" ><i class="fa fa-star" style="color: yellow"></i></option><br>
                <input type="radio" name="rating" value="2"><i style="color: yellow" class="fa fa-star"></i><i class="fa fa-star" style="color: yellow"></i><br>
                <input type="radio" name="rating" value="3"><i style="color: yellow" class="fa fa-star"></i><i class="fa fa-star" style="color: yellow"></i><i class="fa fa-star" style="color: yellow"></i><br>
                <input type="radio" name="rating" value="4"><i style="color: yellow" class="fa fa-star"></i><i class="fa fa-star" style="color: yellow"></i><i class="fa fa-star" style="color: yellow"></i><i style="color: yellow" class="fa fa-star"></i><br>
                <input type="radio" name="rating" value="5"><i style="color: yellow" class="fa fa-star"></i><i class="fa fa-star" style="color: yellow"></i><i class="fa fa-star" style="color: yellow"></i><i style="color: yellow" class="fa fa-star"></i><i style="color: yellow" class="fa fa-star"></i><br>
                </div>                                
            </div>
            <button>Submit</button>
        </form>
    </div>
@stop


@section('additionaljs')
    <script>
        function addUlasan(){
            document.getElementById('addUlasan').classList.toggle('active');
        }
    </script>
@stop