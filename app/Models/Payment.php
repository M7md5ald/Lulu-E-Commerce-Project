<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['payment_method', 'payment_status', 'total_amount', 'user_id', 'order_id'];

    public function order(){
    return $this->belongsTo(Order::class);
    }
}
