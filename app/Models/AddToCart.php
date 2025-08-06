<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddToCart extends Model
{
    protected $fillable =[
        'name','quantity','price','description'
    ];
}
