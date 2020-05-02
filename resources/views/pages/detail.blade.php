@extends('components.master')

@section('title')
    {{$gunung->nama}}
@stop

@section('content')
    <div class="mini-header-container header-container" >
        <img src="{{asset($gunung->image)}}" alt="First slide">                    

        <div class="jumbotron-box">            
            <div class="text">
                <h3>{{$gunung->nama}}</h3>
                <p><i class="fa fa-map-marker-alt"></i> {{$gunung->wilayah->nama}}, {{$gunung->lokasi}}</p>
            </div>           
        </div>        
    </div>

    <div class="body">
        <div class="detail-box">
            <div class="left">
                <div class="keterangan">
                    <h3>Keterangan</h3>
                    <p>{{$gunung->keterangan}}</p>
                     
                </div>
                <div class="keterangan">
                    <h3>Syarat&Ketentuan</h3>
                    <p> - Booking tiket sudah termasuk jasa guide dan perlengkapan (carrier dan barang pribadi tidak termasuk).<br>
                        - Persediaan logistik meliputi 3x makan/hari 1 botol air minum/orang.<br>
                        - Waktu Pelaksanaan Pendakian 2 Hari 1 Malam.<br>
                        - Pemesan akan dijemput sesuai dengan terminal atau stasiun terdekat menggunakan minivan/minibus.<br>
                        - Biaya Transportasi pemesan ke titik bertemu TIDAK termasuk Booking tiket.<br>
                        - Pelaksanaan Pendakian dinyatakan selesai saat pemesan sampai di titik bertemu awal.<br>
                        - Pemesan dapat membayarkan DP terlebih dahulu *minimal 50% dan dilunasi saat bertemu di terminal/stasiun terdekat.<br>
                        - Jika pemesan tidak membayarkan uang sesuai jumlah ke nomor rekening ataupun melalui QR yang disediakan akan dianggap hangus *7 hari setelah pemesanan.<br>
                        - Syarat dan Ketentuan bisa berubah atas kesepakatan pihak MTaners dan Pemesan.<br>
                    </p>
                    <h4>Harga Tiket Rp.{{$gunung->harga}}.000/pax</h4>

                </div>                
                <div class="pesanan-box">
                    <h3>Pesan</h3>
                    <form action = "{{url("pesanan/add")}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Jumlah Peserta</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="jml_peserta">
                            </div>
                        </div>
                        <div class="form-group row">
                          <label for="staticEmail" class="col-sm-3 col-form-label">Kontak</label>
                          <div class="col-sm-9">
                            <input name="kontak" type="number" class="form-control" id="staticEmail">
                          </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">NIK</label>
                            <div class="col-sm-9">
                              <input name="nik" type="number" class="form-control" id="staticEmail">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Tanggal</label>
                            <div class="col-sm-9">
                              <input name="tanggal" type="date" class="form-control" id="staticEmail">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Pembayaran Rekening</label>
                            <div class="col-sm-9">
                              <input value="1629-01-006396-509" disabled type="varchar" class="form-control" id="staticEmail">
                              <input value="1629-01-006396-509" name="pembayaran" hidden type="varchar" class="form-control" id="staticEmail">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Pembayaran Dana & OVO</label>

                            <div class="col-sm-12">
                                <div class="qr-container">
                                    <div class="qr">
                                        <img src="{{asset('img/qr-dana.jpeg')}}" alt="">
                                    </div>
                                    <div class="qr">
                                        <img src="{{asset('img/qr-ovo.jpeg')}}" alt="">
                                    </div>
                                </div>
                            </div>                            
                        </div> 
                        <input type="number" value= "{{$gunung->id}}" hidden name="gunung_id">
                        <div class="form-group">
                            <button>Pesan</button>     
                        </div>                   
                      </form>
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

{{-- @section('additionaljs')
    <script>
        $(document).ready(function(){
            $(".cek").on('change', function postInput(){            
                var id = $(this).attr('id');
                $.ajax({ 
                    url: 'https://admin.smeatech.com/api/check',
                    data: {id:  id},
                    type: 'post'
                }).done(function(responseData) {
                    console.log('Done: ', responseData);
                }).fail(function() {
                    console.log('Failed');
                });
            });
        }); 
  </script>  
@stop --}}