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

// Route::get('/shop',function (){
//     return view('pages.shop');
// })->name('pages.shop');

Auth::routes();

// Route::group([
//     'prefix' => 'backends'
//     //'middleware' => ['auth']
// ], function(){
//     Route::get(

//     )

// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');