<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Http\Requests\CommandeRequestValidation;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Commande;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    Public function showSignIn(){
        return view('SignIn');
    }
    Public function showLogin(){
        return view('Login');
    }
    public function Store(Request $request,ClientRequest $validation){
        $reqdata= $request->post();
        $data= [
            'Nom'=>$reqdata['nom'],
            'Prenom'=>$reqdata['prenom'],
            'Email'=>$reqdata['email'],
            'Password'=> bcrypt($reqdata['password'])
        ];
        Client::create( $data);
        return to_route('login.show')->with('success','Client created successfully');
    }
    public function AuthenficationUser( Request $request){
            $data = $request->post();
            $creentials = [
                'email' => $data['email'],
                'password' => $data['password'],
            ];
            if(Auth::attempt($creentials)){
                return to_route('Home.show')->with('success','Welcome');
            }else{
                return to_route('login.show')->with('error','Invalid Informations');
            }
    }
    public function StoreCommande( Request $request, CommandeRequestValidation $RequestValidation){
        $validation= $RequestValidation->validated();
       $auth= Auth::check();
       if(! Auth::check()){
        return to_route('login.show')->with('error','Please login first');
       }else{
            $user = Auth::user();
            $prix = $request->prix;
            $quantity = $request->quantity;
            $total = $prix * $quantity;
            $commande= [
                'user_id'=>$user->id,
                'full_name'=> $request->full_name,
                'email'=> $request->email,
                'phone'=> $request->phone,
                'adresse'=> $request->address,
                'Produit'=> $request->produit ,
                'quantity'=> $request->quantity,
                'total' => $total,
                'confirmed'=> 0,
                
            ];
            Commande::create( $commande);
            return to_route('Home.show')->with('success','Commande created successfully');
       }
    }
    public function Logout( Request $request){
        Auth::logout();
        return to_route('Home.show')->with('success','Logout successfully');
    }
}
