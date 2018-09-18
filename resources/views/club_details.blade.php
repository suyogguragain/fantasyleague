@extends('master.master')
@section('title')
 Fantasy | club_info page
@endsection

@section('container')
@include('partials.header')

<div class="row">
  <div class="col-sm-6 col-md-2">
    <div class="thumbnail">
      <img src="images/chelsea.png" alt="Chelsea" style="width:150px;height:150px;">
      <div class="caption">
        <h3>Chelsea</h3>
        <p><a href="#" class="btn btn-primary" role="button">Club Website<i class="fas fa-arrow-circle-right"></i></a> </p>
      </div>
    </div>
  </div>
</div>

@endsection
