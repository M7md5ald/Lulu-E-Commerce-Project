<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Order_Item extends Model
{
    protected $fillable = ['order_id', 'product_id', 'quantity', 'price_at_time', 'subtotal'];

    public function product(){
        return $this->belongsto(Product::class);
    }

    public function order(){
    return $this->belongsTo(Order::class);
    }

}
