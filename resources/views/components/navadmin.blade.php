<div class="sidebar" id="sidebar">
    <a href="{{url('/admin/lihatpesanan')}}">Pesanan</a>
    <a href="{{url('/admin/addgunung')}}">Tambah Gunung</a>
    <a href="{{url('/admin/addperlengkapan')}}">Tambah Perlengkapan</a>    
    <a href="{{url('/admin/addwilayah')}}">Tambah Wilayah</a>    
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