<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{


public function index(){
             return view('Admin.Product.index');
}


  public function table(){
         return view('Admin.Product.table');
  }

  public function create(){
         return view('Admin.Product.create');
  }

  public function edit(){
       return view('Admin.Product.edit');
  }


















     public function dashbord(){
          return view('admin.dasbord');
     }
}
