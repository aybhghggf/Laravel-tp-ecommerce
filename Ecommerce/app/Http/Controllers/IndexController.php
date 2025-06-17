<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function ShowHome()
    {
        return view('Home');
    }
    public function ShowAbout()
    {
        return view('About');
    }
    public function ShowPerfumes(Request $request)
    {
        $produits = Produit::query();

        if ($request->filled('min_price')) {
            $produits = $produits->where('prix', '>=', $request->min_price);
        }

        if ($request->filled('max_price')) {
            $produits = $produits->where('prix', '<=', $request->max_price);
        }

        $produits = $produits->get();


        return view('Perfumes', compact('produits'));
    }

    public function ShowParfum($id)
    {
        $produit = Produit::find($id);
        return view('Parfum', compact('produit'));
    }
}
