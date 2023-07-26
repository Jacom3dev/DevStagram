<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
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
            'username' => ['required',Rule::unique('users')->ignore(auth()->user()->id),'min:3','max:20'], 
        ]);

        if($request->image){
            $image = $request->file('image');
            $nameImage = Str::uuid().".".$image->extension();
            $imageServer = Image::make($image)->resize(1000,1000);
            $imageServer->fit(1000,1000);
            $path = public_path('profiles').'/'.$nameImage;
            $imageServer->save($path);
        }
 
        $user = User::find(auth()->user()->id);
        $user->username = $request->username;
        $user->image = $nameImage??auth()->user()->image??null;
        $user->save();

        return redirect()->route('post.index',$user->username);

    }
}
