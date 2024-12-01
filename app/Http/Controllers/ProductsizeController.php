<?php

namespace App\Http\Controllers;

use App\Models\ProductSize;
use App\Models\size;
use Illuminate\Http\Request;

class ProductsizeController extends Controller
{
    //

      public function index(){
          return view('Admin.Product.createsize');
      }


        public function store(Request $request){


            $request->validate([
                'size' => 'required|string|max:255',
             ]);

               $Productsize = size::create([
                   'name' => $request->size,
                 ]);

                    dd($Productsize);


        }
}
