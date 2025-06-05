<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use Illuminate\Http\Request;
use App\Models\Client;

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
}
