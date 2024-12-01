<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductcolorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsizeController;
use App\Http\Controllers\SubCategoriesController;

// Public Routes
Route::get('/', function () {
    return view('Auth.login');
});

Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get(
    '/Backend/table',
    [App\Http\Controllers\AdminController::class, 'index']
)->name('Backend.table');

// Route::get('/backens/create',[App\Http\Controllers\AdminController::class,'create'])->name('backends.create');

Route::group([
    'prefix' => 'backends',
    'middleware' => ['auth',] 
], function () {
    Route::get(
        '/myadmin',
        [App\Http\Controllers\AdminController::class, 'index']
    )->name('ds');


      


    // Product
    Route::get('/create',[ProductController::class,'create'])->name('backends.create');
    Route::get('/table',[ProductController::class,'table'])->name('backends.table');
    Route::get('Product/edit/{id}',[ProductController::class,'edit'])->name('backends.edit');
    Route::get('Product/details/{id}',[ProductController::class,'details'])->name('backends.Product.details');
    Route::post('Product/Store/',[ProductController::class,'store'])->name('backends.Product.store');
    Route::put('Product/update/{id}',[ProductController::class,'update'])->name('backends.Product.update');
    Route::delete('/Product/delete/{id}',[ProductController::class,'destroy'])->name('backends.Product.destroy');
    Route::get('/Prductcolor',[ProductcolorController::class,'index'])->name('backends.Productcolor');
    Route::post('/Product/store',[ProductcolorController::class,'store'])->name('backends.Store.color');
    Route::get('/Prductsize',[ProductsizeController::class,'index'])->name('backends.Productsize');
    Route::post('/ProductSize/store,',[ProductsizeController::class,'store'])->name('backend.productsize.store');

    // Brand
    Route::get('/Brand/create',[App\Http\Controllers\BrandController::class,'create'])->name('backends.Brand.create');
    Route::post('Brand/Store',[BrandController::class,'store'])->name('backends.Brand.store');
    Route::get('Brand/edit/{id}',[BrandController::class,'edit'])->name('backends.Brand.edit');
    
    Route::get('Brand/detaisl/{id}',[BrandController::class,'details'])->name('backends.Brand.details');
    
    //  Route::get('/Brand/List',[App\Http\Controllers\BrandController::class, ''])->name('');
      Route::get('/Brand/list',[App\Http\Controllers\BrandController::class,'index'])->name('backends.Brand.index');
      Route::put('/Brand/update/{id}',[BrandController::class,'update'])->name('backends.Brand.update');
      Route::delete('Brand/delete/{id}',[BrandController::class,'destroy'])->name('backends.Brand.delete');


        // Categories
        Route::get('/Categories/create',[App\Http\Controllers\CategoriesController::class,'create'])->name('backends.Categories.create');
        Route::post('/Categories/store',[CategoriesController::class,'store'])->name('backends.Categories.store');
         Route::get('/Categories/list',[App\Http\Controllers\CategoriesController::class,'index'])->name('backends.Categories.index');
         Route::get('/Categories/edit/{Categories_id}',[App\Http\Controllers\CategoriesController::class,'edit'])->name('backends.Categories.edit');
            	
    //   SubCategories
        
         Route::get('/SubCategories/index/{Categories_id}',[SubCategoriesController::class,'index'])->name('backends.SubCategories.index');
         Route::get('/SubCategories/Create',[SubCategoriesController::class,'Create'])->name('backends.SubCategories.Create');
         Route::post('/SubCategories/Store',[SubCategoriesController::class,'Store'])->name('backends.SubCategories.Store');
         Route::get('/SubCategories/edit/{SubCategories_id}', [SubCategoriesController::class, 'edit'])->name('backends.SubCategories.edit');
         Route::put('/SubCategories/update/{SubCategories_id}',[SubCategoriesController::class,'update'])->name('backends.SubCategories.update');
        Route::delete('/SubCategories/delete/{SubCategories_id}',[SubCategoriesController::class,'destroy'])->name('backends.SubCategories.Delete');
});


Route::group([
    'prefix' => 'frontend',
    'middleware' => ['auth', ] 
], function () {
    Route::get('/myuser', function () {
        return view('User.index');
    })->name('user'); 
});













?>
