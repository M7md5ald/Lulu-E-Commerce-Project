<?php

namespace App\Models;

use App\Models\Coupon;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'current_name', 'current_email', 'current_phone_number','total_amount', 'status', 'payment_id', 'coupon_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class,'payment_id');
    }

    public function coupon()
    {
        return $this->belongsTo(Coupon::class, 'coupon_id');
    }

    public function order_items(){
        return $this->hasMany(Order_item::class);
    }
}
