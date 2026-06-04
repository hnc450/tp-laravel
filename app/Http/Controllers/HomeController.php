<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $articles = Post::limit(3)->orderByDesc('id')->get();
        $comments = Comment::all();
        $categories = Category::limit(5)->get();
        
        $counts = [
            'articles' => $articles->count(),
            'comments' => $comments->count(),
            'categories' => $categories->count()
        ];

       return view('posts.index',[
        'articles' => $articles,
        'comments' => $comments,
        'categories' => $categories,
        'counts' => $counts
       ]);

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
        $categories = Category::select('id','name')->get();
        // dd($categories);
        return view('posts.categories', ['categories' => $categories]);
    }
  

}
