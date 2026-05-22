<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('dashboard.index');
    }

    public function articles(){
        return view('dashboard.articles');
    }

    public function categories(){
        return view('dashboard.categories');
    }

    public function settings(){
        return view('dashboard.settings');
    }

    public function users(){
        return view('dashboard.users');
    }
}
