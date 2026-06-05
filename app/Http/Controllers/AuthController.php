<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller

{
    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();
        if(Auth::attempt($credentials)) {
           return redirect()->intended('/dashboard');
        }
    
       return redirect()->back()->withErrors(['error' => 'Email ou Mot de passe incorrect']);
    } 
}
