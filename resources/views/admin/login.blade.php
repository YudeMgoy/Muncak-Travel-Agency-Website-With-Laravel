@extends('components.master')

@section('title')
    Login
@stop

@section('content')
    <div class="container">
        <div class="pesanan-box">
            <h3>Login</h3>
            <form action = "{{url("auth/login")}}" method="POST">
                @csrf
                <div class="form-group row" style="margin-top: 100px;">
                    <label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" name="email">
                    </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-3 col-form-label">Password</label>
                  <div class="col-sm-9">
                    <input name="password" type="password" class="form-control" id="staticEmail">
                  </div>
                </div>                
                <div class="form-group">
                    <button>Login</button>     
                </div>                   
              </form>
        </div>
    </div>
@stop