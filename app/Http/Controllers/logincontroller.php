<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logincontroller extends Controller
{
  public function getloginpage(){
    return view('login');
  }

    public function login(Request $request){
      $credentails=$request->only('email','password');
      if(Auth::attempt($credentails)){
        return redirect()->route('dashboard');
      }else{
        return redirect()->intended('login');
      }
    }
}
