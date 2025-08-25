<?php

namespace App\Models;

use App\Models\Stock;
use App\Models\Category;
use App\Models\Wishlist_Item;
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
        return $this->hasMany(Order_Item::class);
    }

    public function cart_items(){
        return $this->hasMany(cart_Item::class);
    }

    public function wishlist_items(){
        return $this->hasMany(Wishlist_Item::class);
    }
}
