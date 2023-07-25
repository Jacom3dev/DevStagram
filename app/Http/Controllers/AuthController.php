<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function store(Request $request){
        $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);


        if (!auth()->attempt($request->only('email','password'), $request->remember)) {
            return back()->with('message','credenciales incorrectas') ;
        }

        return redirect()->route('post.index',auth()->user()->username);
    }
    
    public function destroy(){
       auth()->logout();
       return redirect()->route('login');
    }
}
