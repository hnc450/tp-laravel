<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
      return view('posts.index');
    }
    public function about(){
        return view('posts.about');
    }
    public function articles(){
        return view('posts.articles');
    }

    public function article(string $slug){
        return view('posts.show', ['slug' => $slug]);
    }
    public function categories(){
        return view('posts.categories');
    }
  

}
