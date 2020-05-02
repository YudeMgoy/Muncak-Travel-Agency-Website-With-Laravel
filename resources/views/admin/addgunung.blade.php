@extends('components.masteradmin')

@section('title')
    Tambah Gunung
@stop

@section('content')
    <div class="mini-header-container header-container" >
        <img src="">  

        <div class="jumbotron-box">            
            <div class="text">
                <h3>Tambah Gunung</h3>                
            </div>                     
        </div>      
    </div>

    <div class="body">
        <div class="container">
            @include('admin.message')
            <div class="pesanan-box">
                <h3>Tambah Gunung</h3>
                <form action = "{{url("admin/storegunung")}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama">
                        </div>
                    </div>     
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Propinsi</label>
                        <div class="col-sm-9">
                            <select name="wilayah_id" id="" class="form-control">
                                @foreach ($wilayahs as $wilayah)
                                    <option value="{{$wilayah->id}}">{{$wilayah->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>    
                    
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Kota</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="lokasi">
                        </div>
                    </div>     

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Harga</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="harga">
                        </div>
                    </div>     

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Keterangan</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan"></textarea>
                        </div>
                    </div>     

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Foto</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input name="image" type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                    </div>     

                    <div class="form-group">
                        <button>Submit</button>     
                    </div>                   
                  </form>
            </div>
        </div>
    </div>   
@stop