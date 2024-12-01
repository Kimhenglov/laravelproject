<?php

namespace App\Http\Controllers;

use App\Models\color;
use App\Models\ProductColor;
use Illuminate\Http\Request;

class ProductcolorController extends Controller
{
    //

       public function index(){
           return view('Admin.Product.createcolor');
       }


         public function store(Request $request){
            $request->validate([

                'color' => 'required|string|max:255',
             ]);

               $Productcolor = color::create([
                   'name' => $request->color,
                 ]);

                    dd($Productcolor);

                       return redirect()->route('backends.table');

              
         }
}
