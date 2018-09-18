<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Gamer;

class dashcontroller extends Controller
{
  public function dashboard(){
    return view('gamer_dashboard');
  }

  public function store(Request $request){
    $this->validate($request,[
      'fname'=>'required|min:3|max:20',
      'lname'=>'required',
      'profile_image'=>'required|mimes:JPG,jpg,PNG,png,JPEG,jpeg,gif,GIF,SVG,svg',
      'dob'=>'required',
      'gender'=>'required',
      'team_name'=>'required',
      'address'=>'required',
      'contact'=>'required',
      'zone'=>'required',
      'club_you_follow'=>'required',
    ]);
    $fname =$request ->input('fname');
    $lname =$request ->input('lname');
    $profile_image_name =$request ->file('profile_image')->getClientOriginalName();
    $request->file('profile_image')->move(public_path('/profile_image'),$profile_image_name);
    $dob =$request ->input('dob');
    $gender =$request ->input('gender');
    $team_name =$request ->input('team_name');
    $address =$request ->input('address');
    $contact =$request ->input('contact');
    $zone =$request ->input('zone');
    $club_you_follow =$request ->input('club_you_follow');

    $gamer= new Gamer;
    $gamer->first_name=$fname;
    $gamer->last_name=$lname;
    $gamer->profile_image=$profile_image_name;
    $gamer->dob=$dob;
    $gamer->gender=$gender;
      $gamer->team_name=$team_name;
    $gamer->address=$address;
    $gamer->contact=$contact;
    $gamer->zone=$zone;
    $gamer->club_you_follow=$club_you_follow;
    $gamer->user_id=Auth::id();
    $gamer->save();
    return view('gamer_dashboard');

  }

}
