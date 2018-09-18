@extends('master.master')
@section('title')
Fantasy league | SignUp Page | Mini Fantasy
@endsection

@section('container')
<div class="container">
  <div class="register">
<div class="col-md-6 col-md-offset-4">
  
  <h3 style="color:lightgreen;"><b>Get Started</b></h3>
  <form  action="{{route('userregister')}}" method="post">
    <div class="form-group">
      <input type="email" class="form-control" placeholder="Email" name="email" id="email">
    </div>

    <div class="form-group">
      <input type="password" class="form-control" placeholder="Password" name="password" id="password1">
    </div>

{{ csrf_field() }}

    <div class="form-group">
      <input type="password" class="form-control" placeholder="Password Confirmation" name="password2" id="password2">
    </div>

    <div class="form-group">
      <label >Who are you?</label>
      <input type="radio" value="1" name="isgamer">I am Gamer
      <input type="radio" value="0" name="isgamer">I am Admin
    </div>

    <button type="submit" name="submit" class="btn btn-success">Sign In</button>
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
