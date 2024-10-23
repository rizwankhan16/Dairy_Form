<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellerConroller extends Controller
{
    public   function index(){
        return view('seller.dashboard');
    }
    public   function order_history(){
        return view('seller.order.history');
    }
}
