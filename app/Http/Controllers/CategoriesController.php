<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{

     
    public function create(){
          return view('Admin.Categories.Create');
    }


  




    public function store(Request $request){

      $request->validate([
       'nameCategories' => 'required|string|max:255',
      ]);
        Category::create([
           'name' => $request->nameCategories,
        ]);
          return redirect()->route('backends.Categories.index');
}


     public function index(){

              $Categories = Category::whereNull('parent_id')->get();;
          return view('Admin.Categories.index',compact('Categories'));
     }


      public function edit($Categories_id){
                  
            if($Categories_id){
                   $updateCategories = Category::find($Categories_id);
            }
           return view('Admin.Categories.edit',compact('updateCategories'));
     }
    


}
