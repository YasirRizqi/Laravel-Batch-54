<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function welcome(Request $request){
        $input = $request->all();
        return view('welcome',['bio'=> $input]);
    }
}
