<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Vistas extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function secretaria(){
        return view('home.index_secretaria');
    }


    public function consejal(){
        return view('home.index');
    }
}
