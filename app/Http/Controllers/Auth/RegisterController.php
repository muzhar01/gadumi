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
            'current_password' => 'required|min:4',
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
