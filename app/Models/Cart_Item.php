<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart_Item extends Model
{
    protected $fillable = ['price', 'quantity', 'product_id', 'cart_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
