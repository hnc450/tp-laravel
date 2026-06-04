<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        
        $datas = [
            'articles' => Post::limit(3)->orderByDesc('id')->get(),
            'comments' => Comment::all(),
            'categories' => Category::limit(5)->get(),
            'counts' => [
                'articles' => Post::count(),
                'comments' => Comment::count(),
                'categories' => Category::count()
            ]
        ];

       return view('posts.index', $datas);

    }
    public function about(){
        $datas = [
            'counts' => [
                'articles' => Post::count(),
                'commentaires' => Comment::count(),
                'lecteurs' => User::count(),
             
            ],
            'users' => User::all()
        ];
        return view('posts.about', $datas);
    }
    public function articles(){

        $articles = Post::limit(10)->orderByDesc('id')->get();
        $categories = Category::limit(5)->get();
        $totalPost = Post::count();
        $totalCategories = Category::count();

        return view('posts.articles',[
            'articles' => $articles, 
            'categories' => $categories, 
            'posts' => $totalPost,
            'category' => $totalCategories
        ]);
    }

    public function article(string $slug){
        $article = Post::where('slug', $slug)->first();
        
        return view('posts.show', ['article' => $article]);
    }
    public function categories(){

        $categories = Category::all();
     
        return view('posts.categories', ['categories' => $categories]);
    }

    public function login(){
        return view('posts.login');
    }
  

}
