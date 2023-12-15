<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Handle user login and issue a token.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('authToken')->plainTextToken;

            return response()->json([
                'token' => $token,
                'token_type' => 'Bearer',
                'expires_in' => config('sanctum.expiration'),
            ]);
        }

        return response()->json(['error' => 'Invalid credentials'], 401);
    }

    public function getUserId()
{
    // Check if a user is authenticated
    if (Auth::check()) {
        // Retrieve the authenticated user's ID
        $userId = Auth::user()->id;
        $username=Auth::user()->name;
        $useremail=Auth::user()->email;
        $userpassword=Auth::user()->password;


        // Return the user ID as JSON
        return response()->json(['user_name' => $username]);
    } else {
        // Return an error response if no user is authenticated
        return response()->json(['error' => 'Unauthenticated'], 401);
    }
}
}
