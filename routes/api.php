<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/logout', function (Request $request) {
    $request->user()->currentAccessToken()->delete();
});

Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email'=> 'required|email',
        'password'=> 'required'
    ]);

    if(auth()->once($credentials)){
        $token = auth()->user()->createToken($request->email);
 
        return ['token' => $token->plainTextToken];
    }else{
        return ['message' => "Not logged in."];
    }

});

Route::post('/register', function (Request $request) {
    $data = $request->validate([
        'name'=> 'required|min:4',
        'email'=> 'required|email|unique:users,email',
        'password'=> 'required|min:4|max:12'
    ]);
    $data['password'] = bcrypt($data['password']);

    $user = new User;
    $user->fill($data);
    $user->save();

    $token = $user()->createToken($request->email);
    return ['token' => $token->plainTextToken];

});
