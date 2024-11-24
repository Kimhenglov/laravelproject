<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',function (){
    return view('pages.home');
})->name('pages.home');

Route::get('/shop',function (){
    return view('pages.shop');
})->name('pages.shop');

Route::get('/shop2',function (){
    return view('pages.shop2');
})->name('pages.shop2');

Route::get('/about',function (){
    return view('pages.about');
})->name('pages.about');

Route::get('/blog',function (){
    return view('pages.blog');
})->name('pages.blog');

Route::get('/blogdt',function (){
    return view('pages.blogdt');
})->name('pages.blogdt');

Route::get('/contact',function (){
    return view('pages.contact');
})->name('pages.contact');

Route::get('/shop-detail',function (){
    return view('pages.shop-detail');
})->name('pages.shop-detail');

Route::get('/shopcart',function (){
    return view('pages.shopping-cart');
})->name('pages.shopping-cart');





// Route::get('/shop',function (){
//     return view('pages.shop');
// })->name('pages.shop');

Auth::routes();


Route::get('/dashboard',function (){
    return view('backends.dashboard');
})->name('backends.dashboard');

// Route::group([
//     'prefix' => 'backends'
//     //'middleware' => ['auth']
// ], function(){
//     Route::get(

//     )

// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');