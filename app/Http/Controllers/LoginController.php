<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use Illuminate\Http\Request;
use App\Models\Login;


class LoginController extends Controller
{
    public function postlogin (Request $request){
        //dd($request->all());
        if (Auth::attempt($request->only('email','password'))){
            return redirect ('/awal');
        }
        return redirect ('login');
    
       }
}
