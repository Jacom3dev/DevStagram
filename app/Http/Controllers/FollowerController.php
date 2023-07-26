<?php

namespace App\Http\Controllers;

use App\Models\Follower;
use App\Models\User;
use Illuminate\Http\Request;

class FollowerController extends Controller
{

    public function store(User $user){
       /*  Follower::create([
            'follower_id' => auth()->user()->id,
            'user_id' => $user->id,
        ]); */

        $user->followers()->attach(auth()->user()->id);
        return back();
    }

    public function destroy(User $user){
        $user->followers()->detach(auth()->user()->id);
        return back();
    }
}
