<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormUserRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;

class AdminController extends Controller
{
    public function index(){

        $datas = [
            'categories' =>  Category::count(),
            'posts' => Post::count(),
            'users' =>  User::count() ,
            'comments' => Comment::count(),
            'articles' => Post::limit(7)->orderByDesc('created_at')->get()
        ];

        return view('dashboard.index',$datas);
    }

    public function articles(){
        $articles = Post::with('category')->get();
        return view('dashboard.articles', compact('articles'));
    }

    public function categories(){
        $categories = Category::all();
        return view('dashboard.categories', compact('categories'));
    }

    public function settings(){
        return view('dashboard.settings');
    }

    public function users(){
        $users = User::all();
        return view('dashboard.users', compact('users'));
    }

    public function comments(){
        $comments = Comment::with('post')->get();
        return view('dashboard.comments', compact('comments'));
    }
   

    public function storeUser(FormUserRequest $request){
        User::create($request->all());
        return to_route('dashboard.users')->with('success', 'Utilisateur créé avec succès');
    }
    
}
