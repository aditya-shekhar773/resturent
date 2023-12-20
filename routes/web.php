<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;


Route::controller(HomeController::class)->group(function(){
    Route::get('/','home')->name('home');
    Route::match(["get","post"],'/login','login')->name('home.login');
    Route::match(["get","post"],'/register','register')->name('home.register');
    Route::match(["get","post"],'/logout','logout')->name('home.logout');
});



Route::prefix("admin")->group(function(){

    Route::match(['get','post'],'login',[Admincontroller::class,'login'])->name('adminLogin');
    Route::get('/logout',[Admincontroller::class,'logout'])->name('adminLogout');

    Route::middleware("auth:admin")->group(function(){
    
        Route::get('/',[AdminController::class,'dashboard'])->name('dashboard');
    
        Route::controller(CategoryController::class)->group(function(){
            Route::match(["get","post"],'/category','categoryinsert')->name('admin.category.create');
            Route::delete('/category/delete','categorydelete')->name('admin.category.delete');    
        });
    
        Route::controller(ProductController::class)->group(function(){
            Route::get('/product', 'product')->name('admin.product');
            Route::get('/product/insert','insert')->name('admin.product.insert');
            Route::post('/product/insert','productinsert')->name('admin.product.create');
            Route::delete('/product/delete','productdelete')->name('admin.product.delete'); 
        });
        
    });
});
