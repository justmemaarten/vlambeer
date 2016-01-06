<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'tbl_products';
    protected $fillable = ['product_id', 'price', 'is_sale'];
    protected $primaryKey = 'product_id';
    protected $secondaryKey = 'is_sale';


    public function users() {
        return $this->belongsToMany('App\Product', 'tbl_cart', 'product_id', 'id',  'is_sale');
    }

    public function getPriceInclusive() {
        return $this->price *= 1.21;
    }

    public function getNonPaidCart() {
        return $this::where('price', '>', '60')->get();
    }
}
