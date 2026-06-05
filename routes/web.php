<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\IsAuth;
use Illuminate\Support\Facades\Route;


Route::prefix('/')
->controller(HomeController::class)
->group(function(){
   Route::get('/', 'index')->name('home');
   Route::get('about','about')->name('about');
   Route::get('articles','articles')->name('articles.index');
   Route::get('article/{slug}','article')->name('articles.show');
   Route::get('categories','categories')->name('categories.index');
   Route::get('login','login')->middleware('guest')->name('connexion');
});

Route::prefix('dashboard')
->middleware(IsAuth::class)
->controller(AdminController::class)
->name('dashboard.')->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/articles','articles')->name('articles');
    Route::get('/categories','categories')->name('categories');
    Route::get('/settings','settings')->name('settings');
    Route::get('/comments','comments')->name('comments');
    Route::get('/users','users')->name('users');
    Route::post('/store/user','storeUser')->name('store.user');
});

Route::fallback(function(){
    return view('layouts.404');
});
 
Route::post('sign',[AuthController::class,'login'])->name('login.post');