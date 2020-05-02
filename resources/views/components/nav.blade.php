<div class="sidebar" id="sidebar">
    <a href="{{url('/')}}">Beranda</a>
    <a href="{{url('/destinasi/0')}}">Destinasi</a>
    <a href="{{url('/tentang')}}">Tentang Kami</a>    
    <div class="img-list">
        <img src="{{asset('img/1.png')}}" alt="">        
        <img src="{{asset('img/2.png')}}" alt="">
    </div>
</div>
<div class="nav-box" id="header">
  <div class="brand">
      <a href="{{url('/')}}">
          <img id="logo" src="{{asset("img/logo-mt.png")}}" alt="">
      </a>
  </div>
  <div class="nav">            
      <div class="btn-burger-container" onclick="showNav(this)">
          <div class="btn-burger"></div>
      </div>          
  </div>
</div>