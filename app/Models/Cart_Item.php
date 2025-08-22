<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart_Item extends Model
{
    protected $fillable = ['price', 'quantity', 'product_id', 'cart_id'];

    public function product(){
        return $this->belongsto(Product::class);
    }

    public function cart(){
        return $this->belongsto(Cart::class);
    }
}
