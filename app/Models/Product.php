<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

     use HasFactory;

        protected $fillable = ['name','category_id','brand_id','price','description','size','color','image','slug'];

           public function category(){
               return $this->belongsTo(Category::class);
           }

          public function brand(){
              return $this->belongsTo(Brand::class);
          }


          public function colors()
          {
              return $this->belongsToMany(Color::class, 'product_colors');
          }

         public function sizes()
    {
        return $this->belongsToMany(Size::class, 'product_size');
    }

           public function productimage(){
                   return $this->hasMany(ProductImage::class);
           }

}
