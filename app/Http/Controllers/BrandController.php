<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    //


        public function create(){
             return view('Admin.Brand.create');
        }
        public function Store(Request $request)
{
    $request->validate([
        'namebrand' => 'required|string|max:255',
        'BrandImage' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $filepath = null; 
    if ($request->hasFile('BrandImage')) {
        $Brandimage = $request->file('BrandImage');
        $filepath = $Brandimage->store('image', 'public');
    }

    // Save the brand to the database
    Brand::create([
        'name' => $request->namebrand,
        'image' => $filepath, 
    ]);

    // Redirect to a specific route
    return redirect()->route('backends.Brand.index')->with('success', 'Brand created successfully!');
}



           public function index(){
                $Brand = Brand::all();
                return view('Admin.Brand.index',compact('Brand'));
           }

        public function edit($id){
 
                       if($id){
                          $Brand = Brand::find($id);
                       }
                  return view('Admin.Brand.edit',compact('Brand'));
             }
             public function update(Request $request,$id){

                   $request->validate([
                    'namebrand' => 'required|string|max:255',
                    'BrandImage' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                   ]);

                    if($id){
                        $BrandId = Brand::find($id);
                    }
                  

                     $fileinput = null;
                      if($request->hasFile('BrandImage')){
                          $Brandimage = $request->file('BrandImage');
                          $fileinput = $Brandimage->store('image','public');
                      }
                      $BrandId->update([
                        'name' => $request->input('namebrand'),
                        'image' => $fileinput,
                      ]);
                        return redirect()->route('backends.Brand.index');
             }

               public function destroy($id){
                   if($id){
                        $Brand = Brand::find($id);
                   }

                     $Brand->delete();
                       return redirect('backends.Brand.index');
               }

                 public function details($id){



                          


                       $Brand = Brand::find($id);
                        $TotalProduct = 0;


                          if($Brand){
                            $TotalProduct = $Brand->products->count();
                          }
                        return view('Admin.Brand.details')->with([
                            'Brand'=> $Brand,
                            'TotalProduct' => $TotalProduct
                        ]);

                 }
}
