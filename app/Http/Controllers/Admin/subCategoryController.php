<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class subCategoryController extends Controller
{
      public function create(){
        return view('admin.sub_category.create');
    }
    public function manage(){
        return view('admin.sub_category.manage');
    }
}
