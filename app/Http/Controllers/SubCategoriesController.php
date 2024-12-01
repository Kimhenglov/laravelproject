<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class SubCategoriesController extends Controller
{
    //

      public function index($Categories_id){
        $SubCategories = [];
        $Parent = null;
    
        // Check if the category exists
        if ($Categories_id) {
            $Parent = Category::find($Categories_id);
            // Ensure $Parent is not null before accessing children
            if ($Parent) {
                $SubCategories = $Parent->children;
            }
        }
          return view('Admin.Categories.SubCategories.index',compact('SubCategories','Parent'));
      }

         public function Create(){
               $Categories = Category::whereNull('parent_id')->get();
              return view('Admin.Categories.SubCategories.Create',compact('Categories'));
         }

           public function Store(Request $request){

            $request->validate([
                'SubCategories' => 'required|string|max:255',
                'Categories_id' =>  'required|exists:categories,id',
               ]);
                  Category::create([
                      'name' =>  $request->SubCategories,
                      'parent_id' => $request->Categories_id,
                  ]);
                    return redirect()->route('backends.Categories.index');  
           }

           public function edit($SubCategories_id)
           {
            $Parent = null;
            $CategoriesUP = null;
        
            if ($SubCategories_id) {
                $CategoriesUP = Category::find($SubCategories_id);
                if ($CategoriesUP) {
                    $Parent = $CategoriesUP->parent;
                }
            }
        
            $Categories = Category::whereNull('parent_id')->get();
        
            return view('Admin.Categories.SubCategories.edit', compact(
                'CategoriesUP',
                'Parent',
                'Categories'
            ));
               
           }
             public function update(Request $request,$SubCategories_id){
                    
              $Parent = null;
              $request->validate([
                'SubCategories' => 'required|string|max:255',
                'Categories_id' =>  'required|exists:categories,id',
               ]);
                 if($SubCategories_id){
                      $CategoriesUpdate = Category::find($SubCategories_id);
                 }
                   if( $CategoriesUpdate){
                      $Parent = $CategoriesUpdate->parent;

                   }
                $CategoriesUpdate->update([
                   'name'=>$request->input('SubCategories'),
                   'parent_id'=> $request->input('Categories_id')
                ]);
                return redirect(route('backends.SubCategories.index',$Parent));   
             }
              public function destroy($SubCategories_id){
                  if($SubCategories_id){
                      $SubCate = Category::find($SubCategories_id);
                  }
                    $SubCate->delete();

              }
           
}
