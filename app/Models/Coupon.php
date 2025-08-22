<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable = ['code', 'order_id','discount_type', 'is_active'];

     public function order(){
        return $this->belongsTo(Order::class);
    }
}
