<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function menu(){
        if(Auth::check()){
            return view('menu');
        }else{
            return view('login');
        }

    }
}
