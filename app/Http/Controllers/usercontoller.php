<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class usercontoller extends Controller
{
    public function register(Request $request)
    {
        $user=$request->all();

        User::create($user);

        return response()->json(['register'=>'success to register']);
        
    }
}
