<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productDiscountController extends Controller
{
    public function create(){
        return view('admin.Discount.create_discount');
    }
    public function manage(){
        return view('admin.Discount.manage_discount');
    }
}


 