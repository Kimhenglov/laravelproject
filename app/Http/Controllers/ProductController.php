<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Storage;



use App\Models\Brand;
use App\Models\Category;
use App\Models\color;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductImage;
use App\Models\ProductSize;
use App\Models\size;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //


    public function index(){

        return view('Admin.Product.index');
}


public function table(){
      $Product = Product::all();

        $TotalProduct = 0;


        if($Product){
             $TotalProduct = $Product->count();

        }
    return view('Admin.Product.table')->with([
      'Product' => $Product,

      'TotalProduct' => $TotalProduct,
    ]);
}

public function create()
{
    $Brand = Brand::all(); 
    $Parent = Category::all(); 
    $SubCategories = Category::whereNotNull('parent_id')->get();
    $allColor = color::all();
    $allSize = size::all();

    return view('Admin.Product.create', compact([
      'Brand', 
      'SubCategories' ,
      'allColor',
      'allSize'
    ]
     
    ));
}

  public function store(Request $request){
    $request->validate([
      'ProductName' => 'required|string|max:255',
      'price' => 'nullable|numeric|min:0',
      'description' => 'required|string',
      'slug'=> 'required|string',
      'category_id' => 'required|exists:categories,id',
      'brand_id' => 'required|exists:brands,id',
      'product_images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
      'product_sizes' => 'required|array|min:1|max:10',
      'product_sizes.*' => 'required|string|max:255',
      'product_colors' => 'required|array|min:1|max:10',
      'product_colors.*' => 'required|string|max:255',
  ]);

        

  
      $product = Product::create([
          'name' => $request->ProductName,
          'price' => $request->price,
          'description' => $request->description,
          'category_id' => $request->category_id,
          'brand_id' => $request->brand_id,
          'slug' => $request->slug,
      ]);

      
      if ($request->hasFile('product_images')) {
          foreach ($request->file('product_images') as $image) {
              $path = $image->store('images', 'public');
              ProductImage::create([
                  'product_id' => $product->id,
                  'image_path' => $path,
              ]);
          }
      }

      // Store sizes
      foreach ($request->product_sizes as $size) {
          ProductSize::create([
              'product_id' => $product->id,
              'size_id' => $size,
          ]);
      }

      // Store colors
      foreach ($request->product_colors as $color) {
          ProductColor::create([
              'product_id' => $product->id,
              'color_id' => $color,
          ]);
      }

      return redirect()->route('backends.table');
  }


public function edit($id){
      if($id){
          $allproduct = Product::find($id);
      }
      $allBrand = Brand::all();
      $allColor  = color::all();
      $allSize = size::all();

      $allCategories = Category::whereNotNull('parent_id')->get();



  return view('Admin.Product.edit',compact(
    [
      'allproduct',
      'allBrand',
      'allCategories',
      'allColor',
      'allSize'
    ]
  ));
}

public function update(Request $request, $id)
{
    $ProductId = Product::find($id);

    if (!$ProductId) {
        return redirect()->route('backends.table')->with('error', 'Product not found.');
    }

    $request->validate([
        'ProductName' => 'required|string|max:255',
        'price' => 'nullable|numeric|min:0',
        'description' => 'required|string',
        'slug' => 'required|string',
        'category_id' => 'required|exists:categories,id',
        'brand_id' => 'required|exists:brands,id',
        'product_images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'product_sizes' => 'required|array|min:1|max:10',
        'product_sizes.*' => 'required|string|max:255',
        'product_colors' => 'required|array|min:1|max:10',
        'product_colors.*' => 'required|string|max:255',
    ]);

    $ProductId->update([
        'name' => $request->ProductName,
        'price' => $request->price,
        'description' => $request->description,
        'category_id' => $request->category_id,
        'brand_id' => $request->brand_id,
        'slug' => $request->slug,
    ]);

    
    if ($request->hasFile('product_images')) {
        foreach ($ProductId->productimage as $image) {
            Storage::disk('public')->delete($image->image_path);
        }
        $ProductId->productimage()->delete();

        foreach ($request->file('product_images') as $image) {
            $filepath = $image->store('images', 'public');
            $ProductId->productimage()->create([
                'image_path' => $filepath,
            ]);
        }
    }




    if ($request->has('product_sizes')) {
      $ProductId->sizes()->sync($request->product_sizes);
  }

  
  if ($request->has('product_colors')) {
      $ProductId->colors()->sync($request->product_colors);
  }

    return redirect()->route('backends.table')->with('success', 'Product updated successfully.');
}




   public function details($id){
    if($id){
      $allproduct = Product::find($id);
  }

    return view('Admin.Product.details',compact('allproduct'));
   }


       public function destroy($id){

          if($id){
              $ProductId = Product::find($id);
          }

            $ProductId->delete();

              return redirect()->route('backends.table');
            
       }

}
