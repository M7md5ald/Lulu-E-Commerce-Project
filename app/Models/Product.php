<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'image', 'category_id'];

    public function category(){
        return $this->belongsto(Category::class);
    }

    public function stock(){
        return $this->hasOne(Stock::class);
    }

    public function order_items(){
        return $this->hasMany(Order_item::class);
    }

    public function cart_items(){
        return $this->hasMany(Cart_item::class);
    }

    public function wishlist_items(){
        return $this->hasMany(Wishlist_item::class);
    }
}
