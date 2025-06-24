<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = [
        'username',
        'user_id',
        'product_id',
        'content',
    ];
}
