@extends('master.master')
@section('title')
Fantasy league | Login Page | Mini Fantasy
@endsection

@section('container')
<div class="container">
  <div class="row" id="login">
    <div class="col-md-5 ">
        <a href="#" ><img src="images/b.png" style="width:730px;height:364px;"></a>
  </div>
<div class="col-md-4 ">
  <h3 style="color:lightgreen;"><b>Login Form</b></h3>
  <form action="{{route('login')}}"  method="post">
    <div class="form-group">
      <input type="email" class="form-control" placeholder="Email" name="email" id="email">
    </div>

    <div class="form-group">
      <input type="password" class="form-control" placeholder="Password" name="password" id="password1">
    </div>

{{ csrf_field() }}
    <button type="submit" name="submit" class="btn btn-success">Log In</button>
  </form>
  @if(count($errors)>0)
  <div class="alert alert-danger">
    @foreach($errors->all() as $er)
    {{$er}}
    @endforeach
  </div>
  @endif
</div>
</div>
</div>
@endsection
