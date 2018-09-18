@extends('master.master')
@section('title')
Fantasy league | Login Page | Mini Fantasy
@endsection

@section('container')
<div class="container">
  <div class="gamerprofile1">
  <div class="gamerprofile">
  <h3 style="color:lightgreen;"><b>Gamer Profile Form</b></h3>
  <form method="post" action="{{route('storeuserprofile')}}" enctype="multipart/form-data">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="First Name:" name="fname" aria-describedby="basic-addon1">
        </div>
    </br>
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Last Name:" name="lname" aria-describedby="basic-addon1">
        </div>
          </br>
    <div class="input-group"
      <h6>Image : </h6>
      <input type="file" name="profile_image">
    </div>
        </br>
       <div class="input-group">
         <input type="date"  class="form-control" placeholder="DOB:" name="dob" aria-describedby="basic-addon1">
       </div>
         </br>
       <div class="input-group">
         <input type="radio" name="gender" value="1"> Male
         <input type="radio" name="gender" value="0"> Female
       </div>
         </br>
         <div class="input-group">
           <input type="text" class="form-control" placeholder="Team Name:" name="team_name" aria-describedby="basic-addon1">
         </div>
           </br>
       <div class="input-group">
         <input type="text" class="form-control" placeholder="Address:" name="address" aria-describedby="basic-addon1">
       </div>
         </br>
       <div class="input-group">
         <input type="text" class="form-control" placeholder="Contact:" name="contact" aria-describedby="basic-addon1">
     </div>
         </br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Zone:" name="zone" aria-describedby="basic-addon1">
      </div>
        </br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Club you Follow:" name="club_you_follow" aria-describedby="basic-addon1">
      </div>
    </br>
  {{csrf_field()}}
  <button type="submit" name="save" class="btn btn-primary">Save Changes</button>
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
