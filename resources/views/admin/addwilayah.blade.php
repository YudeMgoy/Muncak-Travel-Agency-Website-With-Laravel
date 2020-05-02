@extends('components.masteradmin')

@section('title')
    Tambah Wilayah
@stop

@section('content')
    <div class="mini-header-container header-container" >
        <img src="">  

        <div class="jumbotron-box">            
            <div class="text">
                <h3>Tambah Wilayah</h3>                
            </div>                     
        </div>      
    </div>

    <div class="body">
        <div class="container">
            @include('admin.message')
            <div class="pesanan-box">
                <h3>Tambah Wilayah</h3>
                <form action = "{{url("admin/storewilayah")}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama">
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