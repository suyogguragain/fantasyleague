<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clubcontroller extends Controller
{
  public function club_details(){

      return view ('club_details');
    }

}
