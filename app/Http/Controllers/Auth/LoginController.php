<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->once($credentials)) {
            $token = auth()->user()->createToken($request->email);

            return ['token' => $token->plainTextToken];
        } else {
            return ['status' => false, 'message' => "Invalide Credentials"];
        }
    }
}
