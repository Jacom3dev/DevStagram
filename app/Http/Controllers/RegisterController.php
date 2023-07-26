<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index () {
        return view('auth.register');
    }

    public function store (Request $request) {
    
       /*  $this->validate($request,[
            'name'=> ['required','max:30'],
            'username' => ['required','unique:users','min:3','max:20'],
            'email' => ['required','unique:users','email','max:50'],
            'password' => ['required','confirmed','min:6'],
        ]); */
        $request->request->add(['username'=> Str::slug($request->username)]);
        $request->validate([
            'name'=> ['required','max:30'],
            'username' => ['required','unique:users','min:3','max:20'],
            'email' => ['required','unique:users','email','max:50'],
            'password' => ['required','confirmed','min:6']
        ]);

        $user = User::create([
            "name"      =>   $request->name,
            "username"      =>  $request->username,
            "email"      =>   $request->email,
            "password"      => Hash::make($request->password)
        ]);
       
        /* authenticate user */
        /* auth()->attempt([
            "email" => $request->email,
            "password" => $request->password
        ]); */

        auth()->attempt($request->only('email','password'));

        return redirect()->route('post.index',$user);
    }
}
