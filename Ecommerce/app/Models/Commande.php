<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected  $fillable = [
        'user_id','full_name','email','phone','adresse','Produit','quantity','total','confirmed'
    ];
}
