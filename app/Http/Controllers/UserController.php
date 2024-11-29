<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function storeUserInfo(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string',
            'userName' => 'required|string',
        ]);

        // Store the user info in the session or handle it as needed
        session(['user_name' => $request->name, 'user_userName' => $request->userName]);

        return response()->json(['message' => 'User info stored successfully']);
    }

    public function logout(Request $request)
    {
        // Clear the session data
        $request->session()->flush();
    
        // Redirect to the login page
        return redirect()->route('login');
    }
    

}
