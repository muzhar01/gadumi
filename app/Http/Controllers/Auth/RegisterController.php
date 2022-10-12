<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:4|max:12',
        ]);
        
        $data['password'] = bcrypt($data['password']);

        $user = new User;
        $user->fill($data);
        $user->save();

        $token = $user->createToken($request->email);
        return ['token' => $token->plainTextToken];
    }
}
