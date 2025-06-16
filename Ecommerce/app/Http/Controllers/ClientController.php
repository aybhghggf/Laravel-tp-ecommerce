<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use Illuminate\Http\Request;
use App\Models\Client;
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
    public function StoreCommande(){
       $auth= Auth::check();
       if(! Auth::check()){
        return to_route('login.show')->with('error','Please login first');
       }else{
            $user = Auth::user();
            dd( $user);
       }
    }
}
