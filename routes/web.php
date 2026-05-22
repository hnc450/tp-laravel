<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::prefix('/')->controller(HomeController::class)->group(function(){
   Route::get('/', 'index')->name('home');
   Route::get('/about','about')->name('about');
   Route::get('/artciles','articles')->name('articles.index');
   Route::get('/articles/{slug}','article')->name('articles.show');
   Route::get('/catgories','categoties')->name('categories.index');
});

Route::prefix('dashboard')->controller(AdminController::class)->name('admin.')->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/articles','articles')->name('articles');
    Route::get('/categories','categories')->name('categories');
    Route::get('/settings','settings')->name('settings');
    Route::get('/users','users')->name('users');
});