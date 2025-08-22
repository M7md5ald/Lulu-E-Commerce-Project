<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'total_price', 'status', 'payment_id', 'coupon_id'];

    public function user(){
        return $this->belongsto(User::class);
    }

    public function payment(){
        return $this->hasOne(Payment::class);
    }

    public function coupon(){
        return $this->hasOne(Coupon::class);
    }

    public function order_items(){
        return $this->hasMany(Order_item::class);
    }
}
