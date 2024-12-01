<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class color extends Model
{


    protected $fillable = ['name'];
    
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_colors');
    }
}
