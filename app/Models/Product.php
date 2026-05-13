<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //$table is database table name
    //connect to products table
    protected $table = 'products';

    //Mass assignment protection
    protected $fillable = [
        'name',
        'description',
        'qty',
        'price',
        'photo',
    ];
    
    
}
