<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function create(){
        return view('admin.product.create_product_review');
    }
    
    public function manage(){
        return view('admin.product.manage');
    }
    
}
 