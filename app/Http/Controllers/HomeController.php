<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
        $articles = Post::all();
        return view('posts.articles',['articles' => $articles]);
    }

    public function article(string $slug){
        $article = Post::where('slug', $slug)->first();
        
        return view('posts.show', ['article' => $article]);
    }
    public function categories(){
        return view('posts.categories');
    }
  

}
