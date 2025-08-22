<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlist_Item extends Model
{
    protected $fillable = ['wishlist_id', 'product_id'];

    public function product(){
        return $this->belongsto(Product::class);
    }

    public function cart(){
        return $this->belongsto(Cart::class);
    }
}
