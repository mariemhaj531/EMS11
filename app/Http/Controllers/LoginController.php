<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    
    public function showLoginForm()
{
    return view('layouts.connexion');
}
public function login(Request $request)

{
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ]);

    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 422);
    }

    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        return response()->json(['redirect' => route('dashboard')]);
    } else {
        return response()->json(['error' => 'Identifiants invalides.'], 401);
    }
  
}


}
