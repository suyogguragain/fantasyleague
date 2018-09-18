<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class registercontroller extends Controller
{
  public function create(){
    return view('register');
  }

  public function store(){
      $this->validate(request(),[
      'email'=>'required|email|max:255|min:4',
      'password'=>'required|min:8',
      'password2'=>'required|min:8',
      'isgamer'=>'required']);
      $user=User::create(request(['email','password','isgamer']));
      return redirect()->route('getloginpage');
    }
}
