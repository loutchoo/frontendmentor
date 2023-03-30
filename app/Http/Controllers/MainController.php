<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('home');
    }

    public function redirect(){
        return redirect()->route('home');
    }

    public function challenge1(){
        return view('challenge1');
    }
}
