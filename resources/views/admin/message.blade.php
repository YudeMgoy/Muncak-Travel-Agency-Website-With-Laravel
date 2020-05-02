@if(session('info'))
    <div class="alert alert-success" role="alert">
    <strong>Sukses!</strong> {{session('info')}}
  </div>
@endif

@if(count($errors))
  @foreach ($errors->all() as $error)
  <div class="alert alert-danger" role="alert">
    <strong>Gagal!</strong> {{$error}}
  </div>
  @endforeach
@endif