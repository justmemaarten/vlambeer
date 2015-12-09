<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'tbl_products';
    protected $fillable = ['product_id', 'price'];
}
