<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['status', 'user_id'];

    public function user(){
        return $this->belongsto(User::class);
    }

    public function cart_item(){
        return $this->hasMany(Cart_Item::class);
    }
}
