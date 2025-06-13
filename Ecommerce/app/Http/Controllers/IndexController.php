<?php

namespace App\Http\Controllers;
use App\Models\Produit;
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
        $produits= Produit::all();
        return view('Perfumes' , compact('produits'));  
    }
}
