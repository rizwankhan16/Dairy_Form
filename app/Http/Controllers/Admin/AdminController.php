<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.admin');
    }
    public function setting(){
        return view('admin.setting');
    }
//     public funtion setting(){
//         return view('admin.setting');    
// }
    public function manage_user(){
    return view('admin.manage.user');
}
public function manage_store(){
    return view('admin.manage.manage_store');
}
public function cart_history(){
    return view('admin.history.cart_history');
}
public function order_history(){
    return view('admin.history.order_history');
}

}
