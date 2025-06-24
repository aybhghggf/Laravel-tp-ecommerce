<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Produit;
use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();
        $produits = Produit::query();
        if ($request->filled('min_price')) {
            $produits = $produits->where('prix', '>=', $request->min_price);
        }

        if ($request->filled('max_price')) {
            $produits = $produits->where('prix', '<=', $request->max_price);
        }

        $produits = $produits->get();


        return view('Perfumes', compact('produits', 'user'));
    }

    public function ShowParfum($id)
    {
        $comments = Comments::all();

        $produit = Produit::find($id);
        return view('Parfum', compact('produit' , 'comments'));
    }
    public function ShowCommandes()
    {
        $user = Auth::user();

        // Récupère toutes les commandes liées à l'utilisateur connecté
        $commandes = Commande::where('user_id', $user->id)->get();

        return view('Commandes', compact('commandes'));
    }
}
