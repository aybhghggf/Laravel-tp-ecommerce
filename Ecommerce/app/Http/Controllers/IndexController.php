<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function ShowHome(){
        return view('Home');
    }
    public function ShowAbout(){
        return view('About');
    }
    public function ShowPerfumes(){
        return view('Perfumes');
    }
}
