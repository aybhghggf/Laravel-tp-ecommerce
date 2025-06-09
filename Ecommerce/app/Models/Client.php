<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Client extends Authenticatable 
{

    protected $fillable = [
        'Nom','Prenom','Email','Password'
    ];
}
