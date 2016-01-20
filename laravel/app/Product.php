<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'tbl_products';
    protected $fillable = ['product_id', 'category_id', 'name', 'price', 'img', 'description', 'stock', 'is_sale'];
    protected $primaryKey = 'product_id';


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
