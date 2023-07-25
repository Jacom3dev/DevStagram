<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(){
        return view('profile.update');
    }

    public function update(Request $request){
        $request->request->add(['username'=> Str::slug($request->username)]);
        $request->validate([
            'username' => ['required','unique:users,username,'.auth()->user()->username,'min:3','max:20'], 
        ]);
    }
}
