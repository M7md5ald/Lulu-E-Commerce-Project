<?php

namespace App\Models;

use App\Models\Wishlist_Item;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $fillable = ['user_id'];

    public function user(){
        return $this->belongsto(User::class);
    }

    public function wishlist_item(){
        return $this->hasMany(Wishlist_Item::class);
    }
}
