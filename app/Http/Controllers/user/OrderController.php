<?php

namespace App\Http\Controllers\user;

use App\Models\Cart;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function order(){
        
        return view('user.order');
    }
}
